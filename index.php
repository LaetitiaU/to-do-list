<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-08">
<title>Document</title>
</head>

<body>
    <?php 
$doc="doc.txt";
$ouverture=fopen("$doc", "a+");
if (isset($_POST['bouton'])) {
    fwrite($ouverture, "$_POST[ajout]\n");
}
    ?>

    <form method="post" action="">
        <input type="text" name='ajout'>
        <?php
        echo file_get_contents($doc);
        ?>
        <br/><input type="submit" name="bouton" value="ajouter">
    </form>
</body>
</html>