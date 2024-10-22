<?php
include '../auth/koneksi.php';
$id=$_GET['id'];
$query = mysqli_query($mysqli,"SELECT * from form_peminjaman WHERE id = '$id'");
$result = mysqli_fetch_array($query)
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<center>
<h2> FORM EDIT RUANGAN</h2>
<br>
<br>
</center>
<form action="edit-data.php?id=<?php echo $_GET['id'];?>" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nama_Ruangan</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Nama_Ruangan" name="Nama_Ruangan" value="<?php echo $result['Nama_Ruangan'];?>" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputNPM">Lokasi</label>
      <input type="text" class="form-control" id="inputLokasi" placeholder="Lokasi" name="Lokasi" value="<?php echo $result['Lokasi'];?>" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Kapasitas</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Kapasitas" name="Kapasitas" value="<?php echo $result['Kapasitas'];?>" required>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="inputAddress">Fasilitas</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Fasilitas" name="Fasilitas" value="<?php echo $result['Fasilitas'];?>" required>
  </div>
  
    <div class="form-group col-md-2">
      <label for="inputZip">Keterangan</label>
      <input type="text" class="form-control" id="inputZip" placeholder="Keterangan" name="Keterangan" value="<?php echo $result['Keterangan'];?>" required>
    </div>
  </div>
  
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>


