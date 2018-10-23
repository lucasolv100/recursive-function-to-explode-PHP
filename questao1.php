<?php

function SubStrings($texto, $limitador, $subs = array())
{
    $numeroespaco = strpos($texto, $limitador);
    $limitador2 = substr_count($texto, $limitador);
    $n = strpos($texto, $limitador);
    $string = "";

    for($i =0; $i <= $numeroespaco; $i++)
    {
    	$string = $string . $texto[$i];
    }
    if($limitador2 > 0)
    {
    	$subs[] = $string;
    	$texto = str_replace($string,"",$texto);
    	$numeroespaco = strpos($texto, $limitador);
    	return SubStrings($texto, $limitador, $subs);
    }
    else
    {
        $subs[] = $texto;
        return $subs;
    }
}


$resultado = SubStrings("Lorem ipsum dolor sit amet, consectetur adipiscing elit", ','); 
print_r(array_values ($resultado));

?>