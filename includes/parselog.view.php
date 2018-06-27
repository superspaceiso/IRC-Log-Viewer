<table border="0" id="log_table">
  <tr>
    <th>Timestamp</th>
    <th>User</th>
    <th>Message</th>
  </tr>
<?php foreach ($messages as $line): ?>
  <tr>
    <td><?= $line[0] ?></td>
    <td><?= $line[1] ?></td>
    <td><?= $line[2] ?></td>
  </tr>
<?php endforeach; ?>  
</table>