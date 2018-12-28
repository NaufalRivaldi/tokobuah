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

          <!-- table -->
          <div class="card">
            <div class="card-header">
              <a class="nav-link" href="<?= site_url('admin/product/add') ?>">
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
                      <th>PRICE</th>
                      <th>PHOTO</th>
                      <th>DESCRIPTION</th>
                      <th>ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; foreach ($product as $key => $value): ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= ucwords($value->name) ?></td>
                        <td><?= "Rp. ".number_format($value->price) ?></td>
                        <td><img src="<?= base_url('upload/product/'.$value->image) ?>" width="64"></td>
                        <td><?= substr($value->description, 0, 120) ?>...</td>
                        <td>
                          <a href="<?= site_url('admin/product/edit/'.$value->product_id) ?>" class="btn btn-success">Edit</a> 
                          <a href="<?= site_url('admin/product/delete/'.$value->product_id) ?>" class="btn btn-danger" onclick="return confirm('Hapus Data?');">Delete</a>
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
