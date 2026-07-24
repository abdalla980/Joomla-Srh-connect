<?php
defined('_JEXEC') or die;
/** @var SrhconnectViewAmbassadors $this */
?>
<table class="table table-striped">
  <thead>
    <tr>
      <th width="5%">ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Faculty</th>
      <th>Nationality</th>
      <th>Active</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($this->items as $item) : ?>
      <tr>
        <td><?php echo (int) $item->id; ?></td>
        <td><?php echo htmlspecialchars($item->name); ?></td>
        <td><?php echo htmlspecialchars($item->email); ?></td>
        <td><?php echo htmlspecialchars((string) $item->faculty); ?></td>
        <td><?php echo htmlspecialchars((string) $item->nationality); ?></td>
        <td><?php echo (int) $item->active ? 'Yes' : 'No'; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<p class="text-muted">Source table: <code>#__srh_ambassadors</code></p>
