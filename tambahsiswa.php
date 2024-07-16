<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

input[type=text]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #45a049;
  padding: 40px;
  width:100%;
 
 
}

.col-25 {
  float: left;
  width: 50%;
  margin-top: 6px;
  text-align: left;
}

.col-75 {
  float: left;
  width: 80%;
  margin-top: 6px;
  text-align: left;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
  }
 
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 80%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
<center>
<h2>INPUT DATA SISWA</h2>

<div class="container">
  <form action="tambah_aksi.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="NIS">NIS</label>
      </div>
      <div class="col-75">
        <input type="text" id="NIS" name="NIS" placeholder="NIS...">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="NAMA">Nama Siswa</label>
      </div>
      <div class="col-75">
        <input type="text" id="NAMA" name="NAMA" placeholder="Nama Siswa..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="KELAS">KELAS</label>
      </div>
      <div class="col-75">
        <input type="text" id="KELAS" name="KELAS" placeholder="Kelas..">
      </div>
    </div>
  
    <div class="row">
      <input type="submit" value="SIMPAN">
    </div>
  </form>
</div>
</center>
</body>
</html>
