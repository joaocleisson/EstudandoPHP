<?php
  // If - Condições de Se...
  /*
    if (aqui dentro vem a condição)
      {Aqui a execução se a condição for verdadeira}
    else - se o if não for verdadeiro vem pro else
    {Aqui executa-se a condição}
  */

  // Criando uma calculadora
  $value1 = 10;
  $value2 = 5;
  $operator = "#";

  //teste de operação
  // 1 sinal = atribui, 2 sinais de == compara
  if ($operator == "+") {
    echo "Soma = ".($value1 + $value2);
    }
  elseif ($operator == "-") {
    echo "Subtração = ".($value1 - $value2);
  }
  elseif ($operator == "/") {
    echo "Divisão = ".($value1 / $value2);
  }
  elseif ($operator == "*" ) {
    echo "Multiplicação = ". ($value1 * $value2);
  }
  else {
    echo "Operador não existe";
  }
?>
