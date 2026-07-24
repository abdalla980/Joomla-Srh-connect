<?php
/**
 * Site entry — SRH Connect component
 */
defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\MVC\Controller\BaseController;

$controller = BaseController::getInstance('Srhconnect');
$controller->execute(Factory::getApplication()->input->get('task', 'display'));
$controller->redirect();
