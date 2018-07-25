<h2>Most Frequent Users</h2>

<table border="0" class="stats_table">
  <tr>
    <th>User</th>
    <th>Line Count</th>
  </tr>
<?php foreach ($stats->frequentUsers() as $username => $line_count): ?>
  <tr>
    <td><?= $username ?></td>
    <td><?= $line_count ?></td>
  </tr>
<?php endforeach; ?>
</table>

<h2>Most Frequently Used Words</h2>

<table border="0" class="stats_table">
  <tr>
    <th>User</th>
    <th>Word Count</th>
  </tr>
<?php foreach ($stats->frequentWords(50) as $username => $word_count): ?>
  <tr>
    <td><?= $username ?></td>
    <td><?= $word_count ?></td>
  </tr>
<?php endforeach; ?>
</table>

<h2>Line Count By Hour</h2>

<table border="0" class="stats_table">
  <tr>
    <th>Hour</th>
    <th>Line Count</th>
  </tr>
<?php foreach ($linecount->lineCount() as $hour => $line_count): ?>
  <tr>
    <td><?= $hour ?></td>
    <td><?= $line_count ?></td>
  </tr>
<?php endforeach; ?>
</table>


