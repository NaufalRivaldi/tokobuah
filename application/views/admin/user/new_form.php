<!DOCTYPE html>
<html lang="en">

  <head>

    <?php $this->load->view('admin/_page/head') ?>

  </head>

  <body id="page-top">

    <?php $this->load->view('admin/_page/navbar') ?>

    <div id="wrapper">

      <!-- Sidebar -->
      <?php $this->load->view('admin/_page/sidebar.php') ?>

      <div id="content-wrapper">

        <div class="container-fluid">
          <h3>Form Insert New User</h3>
          <form action="<?= site_url('admin/user/add') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>Username</label>
              <input type="text" name="username" class="form-control <?= form_error('usename') ? 'is-invalid' : '' ?>">
              <div class="invalid-feedback">
                <?= form_error('username') ?>
              </div>
            </div>

            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control <?= form_error('password') ? 'is-invalid' : '' ?>">
              <div class="invalid-feedback">
                <?= form_error('password') ?>
              </div>
            </div>

            <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" class="form-control <?= form_error('name') ? 'is-invalid' : '' ?>">
              <div class="invalid-feedback">
                <?= form_error('name') ?>
              </div>
            </div>

            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control <?= form_error('email') ? 'is-invalid' : '' ?>">
              <div class="invalid-feedback">
                <?= form_error('email') ?>
              </div>
            </div>

            <div class="form-group">
              <label>No Telepon</label>
              <input type="text" name="no_telp" class="form-control <?= form_error('no_telp') ? 'is-invalid' : '' ?>">
              <div class="invalid-feedback">
                <?= form_error('no_telp') ?>
              </div>
            </div>

            <div class="form-group">
              <label>Address</label>
              <textarea name="address" class="form-control <?= form_error('address') ? 'is-invalid' : '' ?>""></textarea>
              <div class="invalid-feedback">
                <?= form_error('address') ?>
              </div>
            </div>

            <input type="submit" name="btn" value="Save" class="btn btn-primary">
          </form>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <?php $this->load->view('admin/_page/footer') ?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php $this->load->view('admin/_page/modal') ?>

    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view('admin/_page/js') ?>

  </body>

</html>
