<?php
defined('_JEXEC') or die;
/** @var SrhconnectViewClubs $this */
?>
<table class="table table-striped">
  <thead>
    <tr>
      <th width="5%">ID</th>
      <th>Name</th>
      <th>Category</th>
      <th>Schedule</th>
      <th>Contact</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($this->items as $item) : ?>
      <tr>
        <td><?php echo (int) $item->id; ?></td>
        <td><?php echo htmlspecialchars($item->name); ?></td>
        <td><?php echo htmlspecialchars((string) $item->category); ?></td>
        <td><?php echo htmlspecialchars((string) $item->meeting_schedule); ?></td>
        <td><?php echo htmlspecialchars((string) $item->contact_email); ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<p class="text-muted">Source table: <code>#__srh_clubs</code></p>
