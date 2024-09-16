<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> <?= $title ?> </title>
  <?php include "layouts/header.php" ?>
</head>

<body class="overflow-x-hidden " style="background-image: url('<?= base_url('assets/img/bg.jpeg') ?>'); background-size: cover;">
  <?php include "layouts/nav.php" ?>
  <?= $content ?>
  <?php include "layouts/foot.php" ?>

</body>

</html>