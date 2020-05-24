<?php
  // Aprendendo Operadores no PHP
  // Concatenar
    echo "Dados Pessoais:  ";
    $name = "João Cleisson";
    $last_name = "Pereira Almeida";
    echo $name." ".$last_name;
?>
<!-- No final de cada código php, coloquei uma quebra de linha no Html, que é o <br /> -->
<br />
<?php
  // soma
    $x=10;
    $y=9;
    $x++; // O ++ adiciona um ao valor da variável, que, nesse caso, ficará = 11
    $y+=3; // O + com o =3 aumenta três na variável
    echo $x + $y;
?>
<br />
<?php
  // Subtração
    $x=10;
    $y=8;
    $x--; // O -- subtrai um ao valor da variável, que, nesse caso, ficará = 9
    $y-=3; // O - com o =3 diminui três na variável
    echo $x - $y;
?>
<br />
<?php
  // Divisão
    $x=10;
    $y=9;
    echo $x / $y;
?>
<br />
<?php
  // Multiplicação
    $x=10;
    $y=9;
    echo $x * $y;
?>
<br />
<?php
  // Exponencial
    $x=2;
    $y=2;
    /* o ** determina o cálculo exponencial, no ex. abaixo o número do exponecial foi determinado pelo valor da variável, mas
    poderia ser um número digitado direto após os ** (ex. echo $x ** 4;).
    */
    echo $x ** $y;
?>
<br />
<?php
  // Módulo
    echo 4 % 3 // o % é o símbolo do módulo, que traz o resto de uma divisão, isso serve para testar divisões perfeitas.
?>
