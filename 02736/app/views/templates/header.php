<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>Halaman <?= $data['judul']; ?></title>
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
  <a class="navbar-brand" href="<?= BASEURL; ?>">02736</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?= BASEURL; ?>/sepatu">Products</a>
      <a class="nav-item nav-link" href="<?= BASEURL; ?>/koleksi">Koleksi</a>
	  <a class="nav-item nav-link" href="<?= BASEURL; ?>/about">About</a>
    <a class="nav-item nav-link" href="../logout.php">Logout</a>
    </div>
  </div>
  </div>
</nav>