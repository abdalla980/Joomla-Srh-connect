<?php
defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;
use Joomla\CMS\Toolbar\ToolbarHelper;

class SrhconnectViewEvents extends BaseHtmlView
{
    public $items = [];

    public function display($tpl = null)
    {
        ToolbarHelper::title('Events', 'calendar');
        ToolbarHelper::preferences('com_srhconnect');
        $db = Factory::getDbo();
        $q = $db->getQuery(true)->select('*')->from($db->quoteName('#__srh_events'))->order('start_date ASC');
        $db->setQuery($q);
        $this->items = $db->loadObjectList() ?: [];
        return parent::display($tpl);
    }
}
