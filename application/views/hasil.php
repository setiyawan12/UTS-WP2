<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>Sr No</th>
    <th>Name</th>
    <th>Alamat</th>
    <th>Email</th>
    <th>nomer</th>
    <th>divisi</th>
  </tr>
  <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->name."</td>";
  echo "<td>".$row->alamat."</td>";
  echo "<td>".$row->email."</td>";
  echo "<td>".$row->nomer."</td>";
  echo "<td>".$row->divisi."</td>";

  echo "</tr>";
  $i++;
  }
   ?>
</table>
