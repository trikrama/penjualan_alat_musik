<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php
$session = session();
?>
<div class="container">
    <center>
        <h1 class="mt-5">Selamat Datang</h1>
        <h4><?php
            echo session()->get('username');
            ?></h4>
    </center>
</div>






<?= $this->endSection() ?>