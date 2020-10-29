<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sikamera | <?= $judul; ?></title>
    <link href="/theme/assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="/theme/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/theme/css/style.css" rel="stylesheet">
</head>
<body>
        <?= $this->include('/layouts/navbar'); ?>
        <?= $this->renderSection('content'); ?>
        <?= $this->include('/layouts/footer'); ?>
    <script src="/theme/assets/jquery/jquery.min.js"></script>
    <script src="/theme/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

     <!-- Core plugin JavaScript-->
    <script src="/theme/assets/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/theme/js/sb-admin-2.min.js"></script>
</body>
</html>