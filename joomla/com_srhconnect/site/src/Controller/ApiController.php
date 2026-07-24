<?php
defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\MVC\Controller\BaseController;

/**
 * JSON API for the React frontend.
 * URL examples:
 *   index.php?option=com_srhconnect&task=api.events
 *   index.php?option=com_srhconnect&task=api.ambassadors
 *   index.php?option=com_srhconnect&task=api.clubs
 */
class SrhconnectControllerApi extends BaseController
{
    protected function json(array $payload): void
    {
        $app = Factory::getApplication();
        $app->setHeader('Content-Type', 'application/json', true);
        $app->setHeader('Access-Control-Allow-Origin', '*', true);
        echo json_encode(['data' => $payload]);
        $app->close();
    }

    protected function rows(string $table): array
    {
        $db = Factory::getDbo();
        $query = $db->getQuery(true)
            ->select('*')
            ->from($db->quoteName($table))
            ->where($db->quoteName('state') . ' = 1')
            ->order($db->quoteName('id') . ' ASC');
        $db->setQuery($query);
        return $db->loadAssocList() ?: [];
    }

    public function events(): void
    {
        $this->json($this->rows('#__srh_events'));
    }

    public function ambassadors(): void
    {
        $this->json($this->rows('#__srh_ambassadors'));
    }

    public function clubs(): void
    {
        $this->json($this->rows('#__srh_clubs'));
    }
}
