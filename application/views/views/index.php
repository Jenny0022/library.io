<div class="container">
  <div class="row mt-5">
    <div class="col mt-4">

      <div class="row mt-3">
        <div class="col-md-10">
          <a href="<?= base_url(); ?> views/tambah" class="btn btn-primary">Add Views</a>
        </div> 
      </div>

      <!-- awal flashdata -->
      <?php if($this->session->flashdata('flash')) : ?>
        <div class="row mt-1">
          <div class="col-md-15">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Views Data<strong> Success!</strong><?= $this->session->flashdata('flash'); ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <!-- akhir flashdata -->

      <div class="row mt-4">
        <div class="col-md-6">
          <form action="" method="post">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Searching" name="keyword">
              <div class="input-group-append">
                <button class="btn-primary" type="submit">Search</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      
      <!-- Daftar nama Views -->
<div class="row mt-4">
    <div class="col-md-6">
        <h3>VIEWS NAME</h3>
        <ul class="list-group">
            <?php foreach($views as $vws): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?= $vws['Username']; ?>
                <a href="<?= base_url();?>views/hapus/<?= $vws['Id']; ?>" class="badge bg-danger" onclick="return confirm('Are you sure?');">Delete</a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
