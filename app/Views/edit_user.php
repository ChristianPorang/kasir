<div class="row">
 <div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Edit Data User</h4>
      <form class="forms-sample" action="/home/aksi_edit_user" method="POST">

          <input type="hidden" class="form-control" id="id" name="id" value="<?= $gas->id_user?>" required>

         <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" class="form-control" id="username" name="username" value="<?= $gas->username?>" placeholder="Username" required>
        </div>
        
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="text" class="form-control" id="password" name="password" value="<?= $gas->password?>" placeholder="Password" required>
        </div>

        <div class="form-group">
          <label for="level">Level:</label>
          <input type="text" class="form-control" id="level" name="level" value="<?= $gas->level?>" placeholder="Password" required>
        </div>


        <button type="submit" class="btn btn-primary">Input</button>
      </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="app.js"></script>
  </body>
  </html>