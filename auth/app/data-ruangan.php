
<?php
include '../auth/koneksi.php';

$query = mysqli_query($mysqli,"SELECT * from form_peminjaman ");

?>
<center>
    <h2>Data Ruangan</h2>
    <br>
<table class="table table-bordered table-responsive" width="100%">
    <thead class="bg-info">
        <tr>
            <th>No</th><th>Nama_Ruangan</th><th>Lokasi</th><th>Kapasitas</th><th>Fasilitas</th><th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no=0;
     while($result = mysqli_fetch_array($query)) {
     $no++;
        ?>
        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $result['Nama_Ruangan'];?></td>
            <td><?php echo $result['Lokasi'];?></td>
            <td><?php echo $result['Kapasitas'];?></td>
            <td><?php echo $result['Fasilitas'];?></td>
            <td><?php echo $result['Keterangan'];?></td>
           
        </tr>
        <?php }?>
</tbody>
</table>
</center>