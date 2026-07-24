<?php
defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Uri\Uri;
use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;

class SrhconnectViewClubs extends BaseHtmlView
{
    public $items = [];

    public function display($tpl = null)
    {
        Factory::getDocument()->addStyleSheet(Uri::root(true) . '/media/com_srhconnect/css/site.css');
        $db = Factory::getDbo();
        $q = $db->getQuery(true)
            ->select('*')
            ->from($db->quoteName('#__srh_clubs'))
            ->where($db->quoteName('state') . ' = 1')
            ->order('name ASC');
        $db->setQuery($q);
        $this->items = $db->loadObjectList() ?: [];

        return parent::display($tpl);
    }
}
