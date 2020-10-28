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
<body id="page-top">
    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?= $this->include('/layouts/navbar'); ?>
                <div class="container-fluid">
                    <?= $this->renderSection('content'); ?>
                </div>
            </div>
            <?= $this->include('/layouts/footer'); ?>
        </div>
    </div>
</body>
</html>