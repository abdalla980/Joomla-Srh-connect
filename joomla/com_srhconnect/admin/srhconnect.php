<?php
defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\MVC\Controller\BaseController;

$controller = BaseController::getInstance('Srhconnect', ['base_path' => JPATH_COMPONENT_ADMINISTRATOR]);
$controller->execute(Factory::getApplication()->input->get('task', 'display'));
$controller->redirect();
