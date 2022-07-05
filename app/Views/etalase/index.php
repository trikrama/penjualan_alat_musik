<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php
$keyword = [
    'name' => 'keyword',
    'aria-describedby' => 'cari',
    'value' => $keyword,
    'placeholder' => 'Keyword...',
    'class' => 'form-control',

];

$submit = [
    'name' => 'submit',
    'id' => 'cari',
    'value' => 'Cari',
    'type' => 'submit',
    'class' => 'btn btn-primary',

];
?>

<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4 ">
            <?= form_open('etalase/index', ['class' => 'form-inline']) ?>
            <div class="col-8 mb-3">
                <?= form_input($keyword) ?>
            </div>
            <div class="col-4 mb-3">
                <?= form_submit($submit) ?>
            </div>
            <?= form_close() ?>
        </div>
        <div class="col4">

        </div>

    </div>
    <div class="row">
        <?php foreach ($model as $m) : ?>
            <div class="col-md-4 col-sm-12 mb-4 ">
                <div class="card text-center border-success">
                    <div class="card-header">
                        <span class="text-success"><strong><?= $m->nama ?></strong></span>
                    </div>
                    <div class="card-body">
                        <img class="img-thumbnail" style="max-height: 200px" src="<?= base_url('uploads/' . $m->gambar) ?>" />
                        <h5 class="mt-3 text-success"><?= "Rp " . number_format($m->harga, 2, ',', '.') ?></h5>
                        <p class="text-info">Stok : <?= $m->stok ?></p>
                    </div>
                    <div class="card-footer">
                        <a href="<?= site_url('etalase/beli/' . $m->id) ?>" style="width:100%" class="btn btn-primary">Beli</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<?= $this->endSection() ?>