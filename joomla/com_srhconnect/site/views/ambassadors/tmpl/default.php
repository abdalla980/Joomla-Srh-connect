<?php
defined('_JEXEC') or die;

/** @var SrhconnectViewAmbassadors $this */
?>
<div class="srh-connect">
  <h1>Ambassadors</h1>
  <p class="srh-intro">Loaded from Joomla table <code>#__srh_ambassadors</code>.</p>
  <div class="srh-grid">
    <?php foreach ($this->items as $item) : ?>
      <article class="srh-card">
        <h2><?php echo htmlspecialchars($item->name); ?></h2>
        <p class="srh-meta"><?php echo htmlspecialchars((string) $item->faculty); ?> · <?php echo htmlspecialchars((string) $item->nationality); ?></p>
        <p><?php echo htmlspecialchars((string) $item->bio); ?></p>
        <p><a href="mailto:<?php echo htmlspecialchars($item->email); ?>"><?php echo htmlspecialchars($item->email); ?></a></p>
      </article>
    <?php endforeach; ?>
    <?php if (!$this->items) : ?><p>No ambassadors found.</p><?php endif; ?>
  </div>
</div>
