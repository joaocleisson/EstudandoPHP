<?php
  // laços de repetição - While = enquanto
  /*
    Primeiro declare uma variável
    While (informe apenas uma condição ex.: $i < 10)
      { aqui pode-se listar a execução com o echo}
  */
  // exemplo
  $i = 0;
  while ($i <= 10) {
    echo "Lista ". $i."<br/>";
    $i++;
  }
?>
<h1> Repeat loop</h1>
<h3> Using While </h3>
<ul>
    <?php
      $i = 0;
      while ($i <= 2) {
    ?>
    <li> List <?php echo $i; ?></li>
    <?php
        $i++;
      }
    ?>
</ul>

<h1> Repetição loop</h1>
<h3> Using While clean</h3>
<ul>
<!-- forma mais clean de código -->
    <?php
      $i = 10;
      while ($i <= 20) :
    ?>
    <li> List <?= $i ?></li>
<?php
    $i++;
  endwhile
?>
</ul>
