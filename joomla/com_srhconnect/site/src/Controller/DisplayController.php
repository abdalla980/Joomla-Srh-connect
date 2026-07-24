<?php
defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\MVC\Controller\BaseController;

class SrhconnectControllerDisplay extends BaseController
{
    public function display($cachable = false, $urlparams = []): void
    {
        $view = Factory::getApplication()->input->getCmd('view', 'events');
        Factory::getApplication()->input->set('view', $view);
        parent::display($cachable, $urlparams);
    }
}
