<?php
defined('_JEXEC') or die;
/** @var SrhconnectViewEvents $this */
?>
<table class="table table-striped">
  <thead>
    <tr>
      <th width="5%">ID</th>
      <th>Title</th>
      <th>Category</th>
      <th>Start</th>
      <th>Venue</th>
      <th>Free</th>
      <th>State</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($this->items as $item) : ?>
      <tr>
        <td><?php echo (int) $item->id; ?></td>
        <td><?php echo htmlspecialchars($item->title); ?></td>
        <td><?php echo htmlspecialchars($item->event_category); ?></td>
        <td><?php echo htmlspecialchars((string) $item->start_date); ?></td>
        <td><?php echo htmlspecialchars((string) $item->venue); ?></td>
        <td><?php echo (int) $item->is_free ? 'Yes' : 'No'; ?></td>
        <td><?php echo (int) $item->state; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<p class="text-muted">Source table: <code>#__srh_events</code></p>
