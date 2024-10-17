<div class="container">
    <div class="row mt-5">
        <div class="col-md-5">
            <div class="card mt-4">
                <div class="card-header">
                    Change Views Data
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?=$views['Id']; ?>">
                        <div class="form-group">
                            <label for="collection">Collection</label>
                            <input type="text" class="form-control" value="<?=$views['Collection']; ?>" id="collection" name="collection">
                            <small class="form-text text-danger"><?= form_error('collection')?></small>
                        </div>
                        <div class="form-group mt-3">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" value="<?=$views['Username']; ?>" id="username" name="username">
                            <small class="form-text text-danger"><?= form_error('username')?></small>
                        </div>
                        <div class="mt-4">
                            <button type="submit" name="ubah" class="btn btn-custom float-end" style="background-color: #ee69b1; border: 1px solid #ffffff;">Change</button>
                            <button type="button" class="btn btn-custom float-end me-2" style="background-color: #ee69b1; border: 1px solid #ffffff;" onclick="window.history.back();">Back</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
