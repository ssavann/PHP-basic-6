<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>

<?php  
$genre = 'femme';


/*
if($genre == 'homme'){
    echo 'Bonjour Monsieur';
}else {
    echo 'Bonjour Madame';
}

*/

//    ($genre == 'homme') ? echo 'Bonjour Monsieur' : echo 'Bonjour Madame';  // Il faut mettre les "echo" dans une variable



($genre == 'homme') ? $salut = 'Bonjour Monsieur' : $salut = 'Bonjour Madame';

echo $salut;

?>



</body>
</html>