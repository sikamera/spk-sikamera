<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sikamera | <?= $judul; ?></title>
    <link href="/theme/sbootstrap/assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="/theme/sbootstrap/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/theme/sbootstrap/css/style.css" rel="stylesheet">
</head>
<body id="page-top"> 

    <div id="wrapper">

        <?= $this->include('admin/layout/sidebar'); ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <?= $this->include('admin/layout/navbar'); ?>

                <div class="container-fluid">

                    <?= $this->renderSection('content'); ?>
                
                </div>
            </div>
        </div>
    </div>
    <?= $this->include('layouts/footer'); ?>
   

    <!-- Bootstrap core JavaScript-->
  <script src="/theme/sbootstrap/assets/jquery/jquery.min.js"></script>
  <script src="/theme/sbootstrap/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/theme/sbootstrap/assets/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/theme/sbootstrap/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="theme/sbootstrap/assets/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="theme/sbootstrap/js/demo/chart-area-demo.js"></script>
  <script src="theme/sbootstrap/js/demo/chart-pie-demo.js"></script>

  <script>
      const preview = ()=>{
            const image = document.querySelector('#image')
            const label = document.querySelector('.custom-file-label')
            const imgPreview = document.querySelector('.img-preview')

            label.textContent = image.files[0].name;

            const fileImg = new FileReader();
            fileImg.readAsDataURL(image.files[0]);

            fileImg.onload = (e)=>{
                imgPreview.src = e.target.result;
            }
        }
     
  </script>
</body>
</html>