<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Penjualan Alat Musik</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
        body {
            padding-top: 5rem;
        }

        .starter-template {
            padding: 3rem 1.5rem;
            text-align: center;
        }
    </style>
</head>

<body>

    <?= $this->include('navbar'); ?>

    <main role="main" class="container">

        <?= $this->renderSection('content'); ?>

    </main><!-- /.container -->


    <script src="<?= base_url('bootstrap/dist/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('jquery.js') ?>"></script>
    <?= $this->renderSection('script') ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        <?php if (session()->getFlashdata('swal_icon')) : ?>
            Swal.fire({
                icon: '<?= session()->getFlashdata('swal_icon') ?>',
                title: '<?= session()->getFlashdata('swal_title') ?>',
                text: '<?= session()->getFlashdata('swal_text') ?>',

            });


        <?php endif ?>

        function konfirmasi(id) {
            Swal.fire({
                title: 'Anda Yakin?',
                text: "Anda Akan menghapus Barang ",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Iye, Hapus mi'
            }).then((result) => {
                if (result.isConfirmed) {

                    window.location.href = "<?= site_url('barang/delete/') ?> /" + id;
                    // 'Deleted!',
                    // 'Your file has been deleted.',
                    // 'success'

                }
            })
        }
    </script>
</body>

</html>