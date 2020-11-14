<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>

<?php
$age=188;

switch($age){

    case 15:
    case 16:
    case 17:
        echo 'Tu es mineur';  //si l'instruction est semblable pour les cas precedent, on peut tout simplement mettre un seul instruction
        break;
    case 18:
        echo 'Tu es majeur';
        break;

    default:
        echo 'Age inconnue';

}

?>



</body>
</html>