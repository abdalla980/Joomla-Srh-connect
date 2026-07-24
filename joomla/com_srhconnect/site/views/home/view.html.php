<?php
defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Uri\Uri;
use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;

class SrhconnectViewHome extends BaseHtmlView
{
    public $events = [];
    public $ambassadors = [];
    public $clubs = [];

    public function display($tpl = null)
    {
        Factory::getDocument()->addStyleSheet(Uri::root(true) . '/media/com_srhconnect/css/site.css');
        $db = Factory::getDbo();

        $q = $db->getQuery(true)->select('*')->from($db->quoteName('#__srh_events'))
            ->where($db->quoteName('state') . ' = 1')->order('start_date ASC');
        $db->setQuery($q, 0, 3);
        $this->events = $db->loadObjectList() ?: [];

        $q = $db->getQuery(true)->select('*')->from($db->quoteName('#__srh_ambassadors'))
            ->where($db->quoteName('state') . ' = 1')->order('name ASC');
        $db->setQuery($q, 0, 3);
        $this->ambassadors = $db->loadObjectList() ?: [];

        $q = $db->getQuery(true)->select('*')->from($db->quoteName('#__srh_clubs'))
            ->where($db->quoteName('state') . ' = 1')->order('name ASC');
        $db->setQuery($q, 0, 3);
        $this->clubs = $db->loadObjectList() ?: [];

        return parent::display($tpl);
    }
}
