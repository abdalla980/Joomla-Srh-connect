<?php
defined('_JEXEC') or die;

/** @var array $events */
$db = \Joomla\CMS\Factory::getDbo();
$query = $db->getQuery(true)->select('*')->from('#__srh_events')->where('state = 1')->order('start_date ASC');
$db->setQuery($query);
$events = $db->loadObjectList() ?: [];
?>
<div class="srh-events">
  <h1>Events</h1>
  <?php foreach ($events as $ev) : ?>
    <article class="srh-card">
      <h2><?php echo htmlspecialchars($ev->title); ?></h2>
      <p><?php echo htmlspecialchars($ev->description); ?></p>
      <p><strong>When:</strong> <?php echo htmlspecialchars($ev->start_date); ?></p>
      <p><strong>Where:</strong> <?php echo htmlspecialchars($ev->venue); ?></p>
    </article>
  <?php endforeach; ?>
</div>
