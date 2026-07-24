<?php
defined('_JEXEC') or die;

/** @var SrhconnectViewClubs $this */
?>
<div class="srh-connect">
  <h1>Clubs</h1>
  <p class="srh-intro">Loaded from Joomla table <code>#__srh_clubs</code>.</p>
  <div class="srh-grid">
    <?php foreach ($this->items as $item) : ?>
      <article class="srh-card">
        <span class="srh-badge"><?php echo htmlspecialchars((string) $item->category); ?></span>
        <h2><?php echo htmlspecialchars($item->name); ?></h2>
        <p><?php echo htmlspecialchars((string) $item->description); ?></p>
        <p class="srh-meta">🗓 <?php echo htmlspecialchars((string) $item->meeting_schedule); ?></p>
        <?php if ($item->contact_email) : ?>
          <p><a href="mailto:<?php echo htmlspecialchars($item->contact_email); ?>"><?php echo htmlspecialchars($item->contact_email); ?></a></p>
        <?php endif; ?>
      </article>
    <?php endforeach; ?>
    <?php if (!$this->items) : ?><p>No clubs found.</p><?php endif; ?>
  </div>
</div>
