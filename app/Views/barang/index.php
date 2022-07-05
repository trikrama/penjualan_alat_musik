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


<div class="row">
    <div class="col-4"></div>
    <div class="col-4 ">
        <?= form_open('barang/index', ['class' => 'form-inline']) ?>
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
<h1>Barang</h1>


<table class="table">
    <thead>
        <th>No</th>
        <th>Barang</th>
        <th>Gambar</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php foreach ($barangs as $index => $barang) : ?>
            <tr>
                <td><?= ($index + 1) ?></td>
                <td><?= $barang->nama ?></td>
                <td>
                    <img class="img-fluid" width="200px" alt="gambar" src="<?= base_url('uploads/' . $barang->gambar) ?>" />
                </td>
                <td><?= $barang->harga ?></td>
                <td><?= $barang->stok ?></td>
                <td>
                    <a href="<?= site_url('barang/view/' . $barang->id) ?>" class="btn btn-primary">View</a>
                    <a href="<?= site_url('barang/update/' . $barang->id) ?>" class="btn btn-success">Update</a>
                    <a href="#" onclick="konfirmasi($id)" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection() ?>