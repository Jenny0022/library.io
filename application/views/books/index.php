<div class="container">
  <div class="row mt-5">
    <div class="col mt-4">

      <!-- awal validasi error -->
      <?php if(validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          <?= validation_errors(); ?>
        </div>
      <?php endif; ?>
      <!-- akhir validasi error -->

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add Data
      </button>

      <div class="row mt-3">
        <div class="col-md-10">

      <!-- awal flashdata -->
      <?php if($this->session->flashdata('flash')) : ?>
        <div class="row mt-1">
          <div class="col-md-15">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Books Data<strong> Success!</strong><?= $this->session->flashdata('flash'); ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <!-- akhir flashdata -->

      <div class="row mt-1">
        <div class="col">
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
            
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Insert Data</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('books')?>" method="post">
              <div class="form group">
                <label for="code">Code</label>
                <input type="number" name="code" class="form-control" id="code" placeholder="Insert code">
              </div>
               <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Insert title">
              </div>
               <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" class="form-control" id="author" placeholder="Insert author">
              </div>
               <div class="form-group">
                <label for="year">Year</label>
                <input type="number" name="year" class="form-control" id="year" placeholder="Insert year">
              </div>
               <div class="form-group">
                <label for="publisher">Publisher</label>
                <input type="text" name="publisher" class="form-control" id="publisher" placeholder="Insert publisher">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
          </div>
        </div>
      </div>            

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Code</th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Year</th>
      <th scope="col">Publisher</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
   <?php foreach($books as $bks): ?>
    <tr>
      <th scope="row"><?= $bks['Code']; ?></th>
      <td><?= $bks['Title']; ?></td>
      <td><?= $bks['Author']; ?></td>
      <td><?= $bks['Year']; ?></td>
      <td><?= $bks['Publisher']; ?></td>
      <td>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal<?= $bks['Id']; ?>">Change</button>
        <a href="<?= base_url(); ?>books/delete/<?= $bks['Id']; ?>" class="btn btn-danger" onclick="return confirm('Are You Sure?');">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    </div>
  </div>
</div>

<!-- awal modal edit -->
 <?php $no = 0 ; foreach($books as $bks) : $no++; ?>
      <div class="modal fade" id="editModal<?= $bks['Id']; ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editModalLabel">Edit Books</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <?= form_open_multipart('books/change'); ?>
               <input type="hidden" name="id" value="<?= $bks['Id']; ?>">
              <div class="form-group">
                <label for="code">Code</label>
                <input type="numeric" name="code" class="form-control" value="<?= $bks['Code']; ?>" id="code" placeholder="Insert code" readonly>
              </div>
               <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="<?= $bks['Title']; ?>" id="title" placeholder="Insert title">
              </div>
               <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" class="form-control" value="<?= $bks['Author']; ?>" id="author" placeholder="Insert author">
              </div>
               <div class="form-group">
                <label for="year">Year</label>
                <input type="numeric" name="year" class="form-control" value="<?= $bks['Year']; ?>" id="year" placeholder="Insert year">
              </div>
               <div class="form-group">
                <label for="publisher">Publisher</label>
                <input type="text" name="publisher" class="form-control" value="<?= $bks['Publisher']; ?>" id="publisher" placeholder="Insert publisher">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
          </div>
        </div>
      </div>
<?php endforeach; ?>
<!-- akhir modal edit -->