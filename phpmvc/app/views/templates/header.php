<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman <?= $data['judul'] ?></title>
    <link href="<?= BASEURL; ?>/css/bootstrap.css" rel="stylesheet">
    <link href="template/style.css" rel="stylesheet">
</head>

<body style="background-color: black;">



<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="<?= BASEURL; ?>/index">Hotel XYZ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link" href="<?= BASEURL; ?>/index">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= BASEURL; ?>/about">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= BASEURL; ?>/booking/index">Kamar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>