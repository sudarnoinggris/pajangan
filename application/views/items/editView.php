<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header text-white bg-success"><?= $subtitle ?></h5>
                <div class="card-body">
                    <form action="" method="post">
                        <?php foreach ($items as $data) : ?>

                            <div class="form-group">
                                <label for="itemsid">ItemsID</label>
                                <input type="text" class="form-control" id="itemsid" name="itemsid" value="<?= $data['itemsid']; ?>">
                                <small class="form-text text-danger"> <?= form_error('itemsid') ?></small>
                            </div>

                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?= $data['name']; ?>">
                                <small class="form-text text-danger"> <?= form_error('name') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="uomid">Satuan</label>
                                <select class="form-control" id="uomid" name="uomid">
                                    <?php foreach ($uom as $u) : ?>
                                        <?php if ($data['uomid'] == $u['uomid']) : ?>
                                            <option value="<?= $u['uomid']; ?>" selected><?= $u['name']; ?>
                                            </option>
                                        <?php else : ?>
                                            <option value="<?= $u['uomid']; ?>"><?= $u['name']; ?>
                                            </option>
                                        <?php endif; ?>

                                    <?php endforeach; ?>
                                </select>

                                <small class="form-text text-danger"> <?= form_error('uomid') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="itemsgroupid">Category</label>
                                <select class="form-control" id="itemsgroupid" name="itemsgroupid">
                                    <?php foreach ($category as $u) : ?>
                                        <?php if ($data['itemsgroupid'] == $u['itemsgroupid']) : ?>
                                            <option value="<?= $u['itemsgroupid']; ?>" selected><?= $u['name']; ?>
                                            </option>
                                        <?php else : ?>
                                            <option value="<?= $u['itemsgroupid']; ?>"><?= $u['name']; ?>
                                            </option>
                                        <?php endif; ?>

                                    <?php endforeach; ?>
                                </select>
                                <small class="form-text text-danger"> <?= form_error('itemsgroupid') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="hargabeli">Harga Beli</label>
                                <input type="numeric" class="form-control" id="hargabeli" name="hargabeli" value="<?= $data['hargabeli']; ?>">
                                <small class="form-text text-danger"> <?= form_error('hargabeli') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="hargajual">Harga Jual</label>
                                <input type="numeric" class="form-control" id="hargajual" name="hargajual" value="<?= $data['hargajual']; ?>">
                                <small class="form-text text-danger"> <?= form_error('hargajual') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="hargabeliterakhir">Harga Beli Terakhir</label>
                                <input type="numeric" class="form-control" id="hargabeliterakhir" name="hargabeliterakhir" value="<?= $data['hargabeliterakhir']; ?>" readonly>
                                <small class="form-text text-danger"> <?= form_error('hargabeliterakhir') ?></small>
                            </div>

                        <?php endforeach; ?>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>