<?php
$file = fopen("listeTexte.txt", "a+");
if (isset($_POST['listeObjets'])) {
    $objListe = $_POST['listeObjets'];
    fwrite($file, $objListe.".");
}
fclose($file);
$fileContent= file_get_contents('listeTexte.txt');
$fileListItem = explode (".", $fileContent);
array_pop($fileListItem);
var_dump($fileListItem);

?>