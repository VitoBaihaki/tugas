<?php
  include'database.php';
  $db= new database();
?>
<h1>DATA MAHASISWA POLITEKNIK CALTEX RIAU </h1>
<a href="input.php">Input Data</a>
<table border="1">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Program Pendidikan</th>
    <th>Email</th>
    <th>Opsi</th>
  </tr>
<?php
    $no=1;
    foreach($db->tampil_data() as $x){
?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $x['nama']; ?></td>
      <td><?php echo $x['prodi']; ?></td>
      <td><?php echo $x['email']; ?></td>
      <td>
        <a href="edit.php?id=<?php echo $x['id'];?>&aksi=edit"> Edit</a> <a>||</a>
        <a href="proses.php?id=<?php echo $x['id'];?>&aksi=hapus"> Hapus</a>
      </td>
    </tr>
    <?php
    }
    ?>
