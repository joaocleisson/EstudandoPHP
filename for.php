<?php
  // laços de repetição - For = para
  /*
    for (primeiro a declaração da variável; depois a condição; se verdadeiro, inicia as repetições até o resultado esperado)
      { aqui pode-se listar a execução com o echo}
  */
  // exemplo
  for ($i=0; $i <=2 ; $i++) {
    echo "lista ". $i."<br/>";
  }"<br/>"
?>

<h1> Repeat loop</h1>
<h3> Using for </h3>
<ul>
    <?php for ($i=0; $i < 3; $i++) { ?>
    <li> List <?php echo $i; ?></li>
  <?php } ?>
</ul>

<!-- forma mais clean de código -->
<h1> Repeat loop</h1>
<h3> Using for </h3>
<ul>
    <?php for ($i=1; $i < 6; $i++) : //substituir a { por : ?>
    <li> List <?= $i //trocar php por = e remover o ;?></li>
  <?php endfor // trocar a } por endfor?>
</ul>
