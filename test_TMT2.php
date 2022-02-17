<?php
session_start();
if (isset($_SESSION['id_M']) and $_SESSION['chef'] == 1) {
    include('bandeauChef.php');
} else {
    include('bandeau.php');
}
include('db_connect.php');
//include('recup_session.php'); //
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF8" />
    <link rel="stylesheet" href="mmse.css"> <!-- CSS page -->
    <Title> Test TMT grefex </Title>
</head>

<body>
<center>
    <h2>Test TMT "grefex" - Partie B</h2>
    <br>
    <!--- Chronomètre de l'étape 1 -->
    <?php
    include('chrono.php');
    ?>
    <br>
    <form method="post" name="insertion" action="test_TMT2.php">
        <br>
        Reportez le temps que le/la patient(e) a mis pour relier les points (en secondes):
        <br><br> <!--- Espace pour reporter le temps en seconde -->
        <textarea cols="50" rows="2.5" name="temps1" id="temps1" placeholder="Temps en secondes (n'écrivez que le nombre de secondes)"></textarea>
        <br><br> <!--- Espace pour reporter le nombre d'erreurs -->
        <label for="errors2">Nombre d'erreur du patient (entre 0 et 25):</label>
        <input type="number" id="errors2" name="errors2" min="0" max="25" placeholder="0">
        <br><br> <!--- Espace pour reporter le nombre d'erreurs persévératives -->
        <label for="errorsP">Nombre d'erreur persévératives du patient (entre 0 et 25):</label>
        <input type="number" id="errorsP" name="errorsP" min="0" max="25" placeholder="0">
        <br><br> <!--- Espace pour enregistrer un scan du document -->
        <input type="hidden" name="MAX_FILE_SIZE" value="250000" />
        <input type="file" name="photo_TMT2" size=50 />
        <br><br>
        <input type="submit" value="Valider les réponses" name="insertion">
    </form>
</body>
</html>