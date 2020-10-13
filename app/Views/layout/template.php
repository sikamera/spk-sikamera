<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>title</title>
    <link href="/theme/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="/theme/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top"> 

    <div id="wrapper">

        <?= $this->include('layout/sidebar'); ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <?= $this->include('layout/navbar'); ?>

                <div class="container-fluid">

                    <?= $this->renderSection('content'); ?>
                
                </div>
            </div>
            <?= $this->include('layout/footer'); ?>
        </div>
    </div>

    <?= $this->include('layout/buttonup'); ?>

    <?= $this->include('layout/modal'); ?>
   

    <!-- Bootstrap core JavaScript-->
  <script src="/theme/vendor/jquery/jquery.min.js"></script>
  <script src="/theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/theme/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/theme/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="theme/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="theme/js/demo/chart-area-demo.js"></script>
  <script src="theme/js/demo/chart-pie-demo.js"></script>
</body>
</html>