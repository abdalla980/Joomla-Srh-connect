<?php
defined('_JEXEC') or die;

/** @var SrhconnectViewEvents $this */
?>
<div class="srh-connect">
  <h1>Events</h1>
  <p class="srh-intro">Loaded from Joomla table <code>#__srh_events</code>.</p>
  <div class="srh-list">
    <?php foreach ($this->items as $item) : ?>
      <article class="srh-card srh-card-row">
        <div class="srh-badges">
          <span class="srh-badge"><?php echo htmlspecialchars($item->event_category); ?></span>
          <?php if ((int) $item->is_free) : ?>
            <span class="srh-badge free">Free</span>
          <?php else : ?>
            <span class="srh-badge paid">Paid</span>
          <?php endif; ?>
        </div>
        <h2><?php echo htmlspecialchars($item->title); ?></h2>
        <p><?php echo htmlspecialchars($item->description); ?></p>
        <p class="srh-meta">
          📅 <?php echo htmlspecialchars((string) $item->start_date); ?>
          <?php if ($item->venue) : ?> · 📍 <?php echo htmlspecialchars($item->venue); ?><?php endif; ?>
        </p>
      </article>
    <?php endforeach; ?>
    <?php if (!$this->items) : ?><p>No published events.</p><?php endif; ?>
  </div>
</div>
