<?php
    $title = "User";
    $name = "João";
    $last_name = "Pereira Almeida";
    $age =36;
    $email = "joao@gmail.com";
?>

    <h1><?php echo $title; ?></h1>
      <ul>
          <li>Name: <?php echo $name." ".$last_name; ?></li>
          <li>Age: <?php echo $age; ?></li>
          <li>E-mail: <?php echo $email; ?></li>
      </lu>
// forma de apresentação simplificada no PHP, é certo?
<h1><?= $title ?></h1>
  <ul>
      <li>Name: <?= $name." ".$last_name ?></li>
      <li>Age: <?= $age ?></li>
      <li>E-mail: <?= $email ?></li>
  </lu>
