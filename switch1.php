<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>

<?php

$ceinture = 'orange';
// blanche, jaune, orange, verte, blue, marron, noire

/*

if($ceinture == "blanche"){
    echo 'Tu es un debutant';
}elseif($ceinture == "jaune") {
    echo 'Tu es un debutant avance';
}elseif($ceinture == "orange"){
    echo 'Tu es un debutant confirme';
}elseif($ceinture == "verte"){
    echo 'Tu n\'est plus un debutant';
}elseif($ceinture == "bleue"){
    echo 'Tu as un niveau avance';
}elseif($ceinture == "marron"){
    echo 'Tu as un niveau confirme';
}elseif($ceinture == "noire"){
    echo 'Tu es un expert';
}else{
    echo 'Cette couleur n\'existe pas';
}

*/

switch($ceinture){
    case 'blanche':
        echo 'Tu es un debutant';
        break;
    case 'jaune':
        echo 'Tu es un debutant avance';
        break;
    case 'orange':
        echo 'Tu es un debutant confirme';
        break;
    case 'verte':
        echo 'Tu n\'est plus un debutant';
        break;
    case 'bleue':
        echo 'Tu as un niveau avance';
        break;
    case 'marron':
        echo 'Tu as un niveau confirme';
        break;
    case 'noire':
        echo 'Tu es un expert';
        break;

    default:
        echo 'Cette couleur n\'existe pas';
        





}
?>


</body>
</html>