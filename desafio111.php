<?php
    $numero1 = 5;
    $numero2 = 5;
    $numero3 = 10;
    $nome1 = "Renata";
    $nome2 = "renata";
    $nome3 = "Renata";
    echo nl2br ("\n\n");

    echo("Resolva o problema a seguir. Ultilize os Operadores de comparação que foram até aqui estudado.");
    echo nl2br("\n\nprimeiro número = 5 \n");
    echo ("segundo número = 5 ");
    echo nl2br("\nterceiro número = 10 ");
    echo nl2br("\nprimeiro nome = Renata ");
    echo nl2br("\nsegundo nome = renata ");
    echo nl2br("\nterceiro  nome = Renata ");
    echo nl2br("\n(O primeiro nome é diferente do segundo nome) e (o primeiro numero é igual ao segundo numero))  : " );
    var_dump(($nome1 != $nome2) && ($numero1 == $numero2));
    echo nl2br("\n((O primeiro numero é igual ao segundo numero) e (o primeiro nome é diferente do terceiro nome))  :  ");
    var_dump(($numero1 == $numero2) && ($nome1 != $nome3));
    echo nl2br("\n((O primeiro numero é igual ao segundo numero) e (primeiro nome é diferente do terceiro nome))  :  ");
    var_dump(($numero1 >= $numero2) && ($nome1 != $nome3));
    echo nl2br("\n((o segundo numero é igual ao terceiro numero) e (o terceiro numero é menor que o segundo numero))  :  ");
    var_dump(($numero2 >= $numero3) && ($numero3 <= $numero2));
    echo nl2br ("\n\n");
    echo nl2br("\n((o primeiro nome é diferente do segundo nome) ou ( o primeiro numero é igual aos segundo numero))  :  ");
    var_dump(($nome1 != $nome2) && ($numero1 == $numero2));
    echo nl2br("\n((o primeiro nome é diferente do segundo nome) ou ( o primeiro numero é igual aos segundo numero))  :  ");
    var_dump(($nome1 != $nome2) && ($numero1 == $numero2));
?>