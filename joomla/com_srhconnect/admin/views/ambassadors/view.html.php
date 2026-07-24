<?php
defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;
use Joomla\CMS\Toolbar\ToolbarHelper;

class SrhconnectViewAmbassadors extends BaseHtmlView
{
    public $items = [];

    public function display($tpl = null)
    {
        ToolbarHelper::title('Ambassadors', 'users');
        $db = Factory::getDbo();
        $q = $db->getQuery(true)->select('*')->from($db->quoteName('#__srh_ambassadors'))->order('name ASC');
        $db->setQuery($q);
        $this->items = $db->loadObjectList() ?: [];
        return parent::display($tpl);
    }
}
