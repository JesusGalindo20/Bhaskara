<?php

include("conexao.php");

//recebendo os dados
$a = $_POST['txta'];
$b = $_POST['txtb'];
$c = $_POST['txtc'];

echo "Exercicio <br>(".$a.")x<sup>2</sup> + (" .$b.")x + (" .$c. ") = 0<br><br>";


// function ecuacion($a, $b, $c)
// {


// }

//divisão 0
if($a == '0')
{
    echo "erro de divisão por zero";
}

//não deixar campos vazios
elseif(empty($a) || empty ($b) || empty($c))
{
    echo "Preencha os campos corretamente";
}

//executar
else
{
        //delta
        $delta = (pow($b,2)-(4 * $a * $c));

        //raiz não negativa
        if ($delta >= 0)
        {
            $x1 = ((-$b + sqrt($delta))/(2*$a));
            $x2 = ((-$b - sqrt($delta))/(2*$a));
    
            //x1 igual a x2
            if ($x1 == $x2)
            {
                echo "Solução unica x: ".$x1. "<br>";
            }
            //resultado de x1 e x2
            else
            {
                echo "Delta= ".round($delta,2)."<br>X1: ".round($x1,2). "<br>  X2: ".round($x2,2). "<br><br>";

                //insert no banco
                $sqlinsert = "insert into dados values (0, '$a', '$b', '$c', '$delta','$x1', '$x2')";

                //executando instrução SQL
                 $resultado = @mysqli_query($conexao, $sqlinsert);
                 if (!$resultado) 
                 {
                    die('query inválida: ' . @mysqli_error($conexao));
                 }
                 else 
                 {
                    echo "Obrigado!";
                 }
    
                 mysqli_close($conexao);

            } 
    
            
        }
    
        //raiz negativa
        else
        {
            echo "Delta é: ".$delta. "<br> Por tanto, a raiz é negativa.";
        }
}

?>
<br><br>
<input type='button' onclick="window.location='index.php';" value="voltar">