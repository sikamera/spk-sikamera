<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sikamera | <?= $judul; ?></title>
    <link href="/theme/lumia/css/bootstrap.css" rel="stylesheet">
    <link href="/theme/lumia/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="/theme/lumia/css/prettyPhoto.css" rel="stylesheet">
    <link href="/theme/lumia/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="/theme/lumia/css/flexslider.css" rel="stylesheet">
    <link href="/theme/lumia/css/style.css" rel="stylesheet">
    <link href="/theme/lumia/color/default.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <header>
            <?= $this->include('layouts/navbar'); ?>
        </header>
        <?= $this->renderSection('content'); ?>
        <?= $this->include('layouts/footer'); ?>
    </div>
   
  
    



    <script src="/theme/lumia/js/jquery.js"></script>
    <script src="/theme/lumia/js/raphael-min.js"></script>
    <script src="/theme/lumia/js/jquery.easing.1.3.js"></script>
    <script src="/theme/lumia/js/bootstrap.js"></script>
    <script src="/theme/lumia/js/google-code-prettify/prettify.js"></script>
    <script src="/theme/lumia/js/jquery.elastislide.js"></script>
    <script src="/theme/lumia/js/jquery.prettyPhoto.js"></script>
    <script src="/theme/lumia/js/jquery.flexslider.js"></script>
    <script src="/theme/lumia/js/jquery-hover-effect.js"></script>
    <script src="/theme/lumia/js/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="/theme/lumia/js/custom.js"></script>
</body>
</html>