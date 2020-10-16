<div class="">
    <h1 class="center">Anggota Plugin</h1></div>


<div class="container">
<table class="striped">
        <thead>
          <tr>
              <th>No</th>
              <th>Name</th>
              <th>Alamat</th>
              <th>Email</th>
              <th>Nomer</th>
              <th>Divisi</th>
          </tr>
        </thead>
        <tbody class="table-dark">
          <?php
          $no = 1; 
          foreach($data as  $row): ?>
          <tr>
             <td><?php echo $no++; ?></td>
             <td><?php echo $row->name; ?></td>
             <td><?php echo $row->alamat; ?></td>
             <td><?php echo $row->email; ?></td>
            <td><?php echo $row->nomer; ?></td>
            <td><?php echo $row->divisi; ?></td>
          </tr>
         <?php endforeach; ?>
        </tbody>
      </table>
      </div>