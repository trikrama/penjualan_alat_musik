<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php
$username = [
    'name' => 'username',
    'id' => 'username',
    'value' => null,
    'class' => 'form-control'
];

$password = [
    'name' => 'password',
    'id' => 'password',
    'class' => 'form-control'
];

$session = session();
$errors = $session->getFlashdata('errors');

?>


<?php if ($errors != null) : ?>
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Terjadi Kesalahan</h4>
        <hr>
        <p class="mb-0">
            <?php
            foreach ($errors as $err) {
                echo $err . '<br>';
            }
            ?>
        </p>
    </div>
<?php endif ?>
<?= form_open('Auth/login') ?>
<?= csrf_field(); ?>
<div class="card justify-content-center ">
    <div class="card-header text-center">
        <h1>Login Form</h1>
    </div>
    <div class="card-body">
        <div class="form-group">
            <?= form_label("Username", "username") ?>
            <?= form_input($username) ?>
        </div>
        <div class="form-group">
            <?= form_label("Password", "password") ?>
            <?= form_password($password) ?>
        </div>
        <div class="text-center">
            <?= form_submit('submit', 'Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
</div>
<?= form_close() ?>



<?= $this->endSection() ?>