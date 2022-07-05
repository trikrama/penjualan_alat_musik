<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<?php $session = session(); ?>
<?php if ($session->get('isLoggedIn')) : ?>
    <h1>Barang</h1>
    <table class="table">
        <thead>
            <th>Id</th>
            <th>Username</th>
            <th>Created By</th>
            <th>Created Date</th>
        </thead>
        <tbody>
            <?php foreach ($data['users'] as $index => $user) : ?>
                <tr>
                    <td><?= $user->id ?></td>
                    <td><?= $user->username ?></td>
                    <td><?= $user->created_by ?></td>
                    <td><?= $user->created_date ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <div style="float:right">
        <?= $data['pager']->links('default', 'custom_pagination') ?>

    </div>
<?php else : ?>
    <?php return redirect()->to(site_url('auth/login')); ?>
<?php endif ?>
<?= $this->endSection() ?>