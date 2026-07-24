<?php
defined('_JEXEC') or die;

require_once __DIR__ . '/../controller.php';

use Joomla\CMS\Factory;

class SrhconnectControllerApi extends SrhconnectController
{
    protected function json(array $payload): void
    {
        $app = Factory::getApplication();
        $app->setHeader('Content-Type', 'application/json', true);
        $app->setHeader('Access-Control-Allow-Origin', '*', true);
        echo json_encode(['data' => $payload], JSON_UNESCAPED_UNICODE);
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

    public function events(): void { $this->json($this->rows('#__srh_events')); }
    public function ambassadors(): void { $this->json($this->rows('#__srh_ambassadors')); }
    public function clubs(): void { $this->json($this->rows('#__srh_clubs')); }
}
