<table border="0" id="frequent_words">
  <tr>
    <th>User</th>
    <th>Line Count</th>
  </tr>
<?php foreach ($stats->frequentWords(50) as $username => $line_count): ?>
  <tr>
    <td><?= $username ?></td>
    <td><?= $line_count ?></td>
  </tr>
<?php endforeach; ?>
</table>
