<?php
defined('_JEXEC') or die;

use Joomla\CMS\Router\Route;

/** @var SrhconnectViewSrhconnect $this */
?>
<div class="row">
  <div class="col-md-12">
    <h2>SRH Connect — 3 data types</h2>
    <p>These records live in real MySQL tables and are rendered on the Joomla site frontend.</p>
    <table class="table table-striped">
      <thead><tr><th>Data type</th><th>Table</th><th>Rows</th><th>Manage</th></tr></thead>
      <tbody>
        <tr>
          <td><strong>Event</strong></td>
          <td><code>#__srh_events</code></td>
          <td><?php echo (int) $this->counts['events']; ?></td>
          <td><a href="<?php echo Route::_('index.php?option=com_srhconnect&view=events'); ?>">Open list</a></td>
        </tr>
        <tr>
          <td><strong>Ambassador</strong></td>
          <td><code>#__srh_ambassadors</code></td>
          <td><?php echo (int) $this->counts['ambassadors']; ?></td>
          <td><a href="<?php echo Route::_('index.php?option=com_srhconnect&view=ambassadors'); ?>">Open list</a></td>
        </tr>
        <tr>
          <td><strong>Club</strong></td>
          <td><code>#__srh_clubs</code></td>
          <td><?php echo (int) $this->counts['clubs']; ?></td>
          <td><a href="<?php echo Route::_('index.php?option=com_srhconnect&view=clubs'); ?>">Open list</a></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
