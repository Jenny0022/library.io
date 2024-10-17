<div class="container">
  <div class="row mt-5">
    <div class="col mt-4">

      <div class="row mt-3">
        <div class="col-md-10">
          <a href="<?= base_url(); ?>views/add" class="btn btn-primary" style="background-color: #ff00ff; border: 1px solid #ffffff;">Add Views</a>
        </div> 
      </div>

      <!-- awal flashdata -->
      <?php if($this->session->flashdata('flash')) : ?>
        <div class="row mt-4">
          <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Views Data<strong> Success </strong><?= $this->session->flashdata('flash'); ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <!-- akhir flashdata -->

      <div class="row mt-3">
        <div class="col-md-6">
          <form action="" method="post">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Searching" name="keyword" style="background-color: #e0e0e0; border: 2px solid #ffffff;">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit" style="background-color: #ff00ff; border: 1px solid #ffffff;">Search</button>
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
            <li class="list-group-item" style="background-color: pink; border: 1px solid #ffffff;">
                <?= $vws['Username']; ?>
                <a href="<?= base_url();?>views/delete/<?= $vws['Id']; ?>" class="badge float-end" onclick="return confirm('Are you sure?');" style="background-color: #d598a3; border: 1px solid #ffffff;">Delete</a>
                <a href="<?= base_url();?>views/change/<?= $vws['Id']; ?>" class="badge float-end" style="background-color: #ff00ff; border: 1px solid #ffffff;">Change</a>
                <a href="<?= base_url();?>views/detail/<?= $vws['Id']; ?>" class="badge float-end" style="background-color: #ee69b1; border: 1px solid #ffffff;">Detail</a>
              
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
