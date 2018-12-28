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
          <?php if ($this->session->flashdata('success')): ?>
          <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success'); ?>
          </div>
          <?php endif; ?>

          <h3>Form Insert Product</h3>
          <form action="<?= site_url('admin/product/edit/'.$product->product_id) ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $product->product_id ?>">

            <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" class="form-control" value="<?= $product->name ?>">
            </div>

            <div class="form-group">
              <label>Price</label>
              <input type="number" name="price" class="form-control" value="<?= $product->price ?>">
            </div>

            <div class="form-group">
              <label>Photo</label>
              <input type="file" name="image" class="form-control">
              <input type="hidden" name="old_image" value="<?= $product->image ?>">
            </div>

            <div class="form-group">
              <label>Description</label>
              <textarea name="description" class="form-control"><?= $product->description ?></textarea>
            </div>

            <input type="submit" name="btn" value="Update" class="btn btn-primary">
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
