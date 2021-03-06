<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header text-white bg-success"><?= $subtitle ?></h5>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div>
                    <?php endif; ?>
                    <?php foreach ($category as $data) : ?>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="itemsgroupid">Category</label>
                                <input type="text" class="form-control" id="itemsgroupid" name="itemsgroupid" value="<?= $data['itemsgroupid']; ?>">
                            </div>
                            <div class=" form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?= $data['name']; ?>">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>

</div>