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
        <?php if ($this->session->flashdata('success')): ?>
          <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
          </div>
        <?php endif; ?>

        <div class="container-fluid">
          <h3>Data User</h3>

          <!-- table -->
          <div class="card">
            <div class="card-header">
              <a class="nav-link" href="<?= site_url('admin/user/add') ?>">
                <i class="fas fa-fw fa-plus"></i> Insert Data
              </a>
            </div>
            <div class="card-body">
              <div class="table responsive">
                <table class="table table-hover" id="dataTable">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>NAME</th>
                      <th>EMAIL</th>
                      <th>NO TELP</th>
                      <th>ADDRESS</th>
                      <th>ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; foreach ($user as $key => $value): ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= ucwords($value->name) ?></td>
                        <td><?= $value->email ?></td>
                        <td><?= $value->no_telp ?></td>
                        <td width="200px"><?= $value->address ?></td>
                        <td>
                          <a href="<?= site_url('admin/user/view/'.$value->user_id) ?>" class="btn btn-primary">View</a> 
                          <a href="<?= site_url('admin/user/edit/'.$value->user_id) ?>" class="btn btn-success">Edit</a> 
                          <a href="<?= site_url('admin/user/delete/'.$value->user_id) ?>" class="btn btn-danger" onclick="return confirm('Hapus Data?');">Delete</a>
                        </td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

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
