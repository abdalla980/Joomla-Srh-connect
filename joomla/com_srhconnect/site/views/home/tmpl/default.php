<?php
defined('_JEXEC') or die;

use Joomla\CMS\Router\Route;
use Joomla\CMS\Language\Text;

/** @var SrhconnectViewHome $this */
?>
<div class="srh-connect srh-home">
  <section class="srh-hero">
    <h1>SRH Connect</h1>
    <p>Events, ambassadors, and student clubs — managed in Joomla and shown on this site.</p>
  </section>

  <section class="srh-section">
    <div class="srh-section-head">
      <h2>Upcoming Events</h2>
      <a href="<?php echo Route::_('index.php?option=com_srhconnect&view=events'); ?>">See all</a>
    </div>
    <div class="srh-grid">
      <?php foreach ($this->events as $item) : ?>
        <article class="srh-card">
          <span class="srh-badge"><?php echo htmlspecialchars($item->event_category); ?></span>
          <?php if ((int) $item->is_free) : ?><span class="srh-badge free">Free</span><?php endif; ?>
          <h3><?php echo htmlspecialchars($item->title); ?></h3>
          <p class="srh-meta"><?php echo htmlspecialchars($item->start_date); ?> · <?php echo htmlspecialchars((string) $item->venue); ?></p>
          <p><?php echo htmlspecialchars($item->description); ?></p>
        </article>
      <?php endforeach; ?>
      <?php if (!$this->events) : ?><p>No events yet.</p><?php endif; ?>
    </div>
  </section>

  <section class="srh-section">
    <div class="srh-section-head">
      <h2>Ambassadors</h2>
      <a href="<?php echo Route::_('index.php?option=com_srhconnect&view=ambassadors'); ?>">See all</a>
    </div>
    <div class="srh-grid">
      <?php foreach ($this->ambassadors as $item) : ?>
        <article class="srh-card">
          <h3><?php echo htmlspecialchars($item->name); ?></h3>
          <p class="srh-meta"><?php echo htmlspecialchars((string) $item->faculty); ?></p>
          <p><?php echo htmlspecialchars((string) $item->bio); ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="srh-section">
    <div class="srh-section-head">
      <h2>Clubs</h2>
      <a href="<?php echo Route::_('index.php?option=com_srhconnect&view=clubs'); ?>">See all</a>
    </div>
    <div class="srh-grid">
      <?php foreach ($this->clubs as $item) : ?>
        <article class="srh-card">
          <span class="srh-badge"><?php echo htmlspecialchars((string) $item->category); ?></span>
          <h3><?php echo htmlspecialchars($item->name); ?></h3>
          <p class="srh-meta"><?php echo htmlspecialchars((string) $item->meeting_schedule); ?></p>
          <p><?php echo htmlspecialchars((string) $item->description); ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </section>
</div>
