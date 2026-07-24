<?php
defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;
use Joomla\CMS\Toolbar\ToolbarHelper;
use Joomla\CMS\Language\Text;

class SrhconnectViewSrhconnect extends BaseHtmlView
{
    public $counts = [];

    public function display($tpl = null)
    {
        ToolbarHelper::title('SRH Connect', 'cube');
        $db = Factory::getDbo();
        foreach (['events' => '#__srh_events', 'ambassadors' => '#__srh_ambassadors', 'clubs' => '#__srh_clubs'] as $key => $table) {
            $db->setQuery('SELECT COUNT(*) FROM ' . $db->quoteName($table));
            $this->counts[$key] = (int) $db->loadResult();
        }
        return parent::display($tpl);
    }
}
