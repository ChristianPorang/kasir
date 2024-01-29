<div class="row">
 <div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Tambah Data User </h4>
      <form class="forms-sample" action="/home/aksi_u" method="POST">

         <div class="form-group">
          <label for="username">Nama :</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
        </div>

       <div class="form-group">
          <label for="password">Password :</label>
          <input type="text" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>

<!-- <div class="form-group">
          <label for="tgl">Tanggal Pemakaian :</label>
          <input type="text" class="form-control" id="tgl" name="tgl" placeholder="Tanggal Pemakaian" required>
        </div>
 -->
<div class="form-group">
          <label for="kondisi">Level :</label>
          <input type="text" class="form-control" id="level" name="level" placeholder="Level " required>
        </div>

        <!-- <div class="form-group">
          <label for="stok">Stok :</label>
          <input type="text" class="form-control" id="stok" name="stok" placeholder="Stok Barang" required>
        </div> -->
        <!-- <div class="form-group">
          <label for="tgl">Tanggal :</label>
          <input type="date" class="form-control" id="tgl" name="tgl" value="<?= $gas->tanggal?>" placeholder="Tanggal Pemakaian" required>
        </div> -->

        <button type="submit" class="btn btn-primary">Input</button>
      </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="app.js"></script>
  </body>
  </html>