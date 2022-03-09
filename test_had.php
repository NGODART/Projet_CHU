<?php
session_start();
if (isset($_SESSION['id_M']) and $_SESSION['chef'] == 1) {
    include('bandeauChef.php');
} else {
    include('bandeau.php');
}
include('db_connect.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF8" />
    <link rel="stylesheet" href="test_had.css"> <!-- CSS page -->
    <Title> Test HAD </Title>
</head>

<body>
    <center>
        <h2>Echelle HAD : Hospital Anxiety and Depression scale</h2>
        <!--- Formulaire du test -->
        <form method="post" name=insertion action="test_had.php">

            <table width="95%">
                <p>L’échelle HAD est un instrument qui permet de dépister les troubles anxieux et dépressifs. Elle comporte 14 items cotés de 0 à 3. Sept questions se rapportent à l’anxiété (total A) et sept autres à la dimension dépressive (total D), permettant ainsi l’obtention de deux scores (note maximale de chaque score = 21).</p>
            
                <tr>
                    <td>
                    <h3>Question 1</h3>
                    <p>Je me sens tendu(e) ou énervé(e)<br><br>
                        <input type="radio" name="question1" value="A"><label for="A"> Jamais </label><br>
                        <input type="radio" name="question1" value="B"><label for="B"> De temps en temps </label><br>
                        <input type="radio" name="question1" value="C"><label for="C"> Souvent </label><br>
                        <input type="radio" name="question1" value="D"><label for="D"> La plupart du temps </label><br>
                    </p>
                    </td>

                    <td>
                    <h3>Question 2</h3>
                    <p>Je prends plaisir aux mêmes choses qu'autrefois<br><br>
                        <input type="radio" name="question2" value="A"><label for="A"> Presque plus </label><br>
                        <input type="radio" name="question2" value="B"><label for="B"> Un peu seulement </label><br>
                        <input type="radio" name="question2" value="C"><label for="C"> Pas autant </label><br>
                        <input type="radio" name="question2" value="D"><label for="D"> Oui, tout autant </label><br>
                    </p>
                    </td>
                </tr>

                <tr>
                    <td>
                    <h3>Question 3</h3>
                    <p>J'ai une sensation de peur comme si quelque chose d'horrible allait m'arriver<br><br>
                        <input type="radio" name="question3" value="A"><label for="A"> Pas du tout </label><br>
                        <input type="radio" name="question3" value="B"><label for="B"> Un peu, mais cela ne m'inquiete pas </label><br>
                        <input type="radio" name="question3" value="C"><label for="C"> Oui, mais ce n'est pas trop grave </label><br>
                        <input type="radio" name="question3" value="D"><label for="D"> Oui, très nettement </label><br>
                    </p>
                    </td>

                    <td>
                    <h3>Question 4</h3>
                    <p>Je ris facilement et vois le bon côté des choses<br><br>
                        <input type="radio" name="question4" value="A"><label for="A"> Autant que par le passé </label><br>
                        <input type="radio" name="question4" value="B"><label for="B"> Plus autant qu'avant </label><br>
                        <input type="radio" name="question4" value="C"><label for="C"> Vraiment moins qu'avant </label><br>
                        <input type="radio" name="question4" value="D"><label for="D"> Plus du tout </label><br>
                    </p>
                    </td>
                </tr>

                <tr>
                    <td>
                    <h3>Question 5</h3>
                    <p>Je me fais du soucis<br><br>
                        <input type="radio" name="question5" value="A"><label for="A"> Très occasionnellement </label><br>
                        <input type="radio" name="question5" value="B"><label for="B"> Occasionnellement </label><br>
                        <input type="radio" name="question5" value="C"><label for="C"> Assez souvent </label><br>
                        <input type="radio" name="question5" value="D"><label for="D"> Très souvent </label><br>
                    </p>
                    </td>

                    <td>
                    <h3>Question 6</h3>
                    <p>Je suis de bonne humeur<br><br>
                        <input type="radio" name="question6" value="A"><label for="A"> La plupart du temps </label><br>
                        <input type="radio" name="question6" value="B"><label for="B"> Assez souvent </label><br>
                        <input type="radio" name="question6" value="C"><label for="C"> Rarement </label><br>
                        <input type="radio" name="question6" value="D"><label for="D"> Jamais </label><br>
                    </p>
                    </td>
                </tr>

                <tr>
                    <td>
                    <h3>Question 7</h3>
                    <p>Je peux rester tranquilement assis(e) à ne rien faire et me sentir décontracté(e)<br><br>
                        <input type="radio" name="question7" value="A"><label for="A"> Oui, quoi qu'il arrive </label><br>
                        <input type="radio" name="question7" value="B"><label for="B"> Oui, en général </label><br>
                        <input type="radio" name="question7" value="C"><label for="C"> Rarement </label><br>
                        <input type="radio" name="question7" value="D"><label for="D"> Jamais </label><br>
                    </p>
                    </td>

                    <td>
                    <h3>Question 8</h3>
                    <p>J'ai l'impression de fonctionner au ralenti<br><br>
                        <input type="radio" name="question8" value="A"><label for="A"> Jamais </label><br>
                        <input type="radio" name="question8" value="B"><label for="B"> Parfois </label><br>
                        <input type="radio" name="question8" value="C"><label for="C"> Très souvent </label><br>
                        <input type="radio" name="question8" value="D"><label for="D"> Presque toujours </label><br>
                    </p>
                    </td>
                </tr>

                <tr>
                    <td>
                    <h3>Question 9</h3>
                    <p>J'éprouve des sensations de peur et j'ai l'estomac noué<br><br>
                        <input type="radio" name="question9" value="A"><label for="A"> Jamais </label><br>
                        <input type="radio" name="question9" value="B"><label for="B"> Parfois </label><br>
                        <input type="radio" name="question9" value="C"><label for="C"> Assez souvent </label><br>
                        <input type="radio" name="question9" value="D"><label for="D"> Très souvent </label><br>
                    </p>
                    </td>

                    <td>
                    <h3>Question 10</h3>
                    <p>Je ne m'intéresse plus à mon apparence<br><br>
                        <input type="radio" name="question10" value="A"><label for="A"> J'y prête autant d'attention que par le passé </label><br>
                        <input type="radio" name="question10" value="B"><label for="B"> Il se peut que je n'y fasse plus autant attention </label><br>
                        <input type="radio" name="question10" value="C"><label for="C"> Je n'y accorde pas autant d'attention que je devrais </label><br>
                        <input type="radio" name="question10" value="D"><label for="D"> Plus du tout </label><br>
                    </p>
                    </td>
                </tr>

                <tr>
                    <td>
                    <h3>Question 11</h3>
                    <p>J'ai la bougeotte et n'arrive pas à tenir en place<br><br>
                        <input type="radio" name="question11" value="A"><label for="A"> Pas du tout </label><br>
                        <input type="radio" name="question11" value="B"><label for="B"> Pas tellement </label><br>
                        <input type="radio" name="question11" value="C"><label for="C"> Un peu </label><br>
                        <input type="radio" name="question11" value="D"><label for="D"> Oui c'est tout à fait le cas </label><br>
                    </p>
                    </td>

                    <td>
                    <h3>Question 12</h3>
                    <p>Je me réjouis d'avance à l'idée de faire certaines choses<br><br>
                        <input type="radio" name="question12" value="A"><label for="A"> Autant qu'avant </label><br>
                        <input type="radio" name="question12" value="B"><label for="B"> Un peu moins qu'avant </label><br>
                        <input type="radio" name="question12" value="C"><label for="C"> Bien moins qu'avant </label><br>
                        <input type="radio" name="question12" value="D"><label for="D"> Presque jamais </label><br>
                    </p>
                    </td>
                </tr>
                <tr>
                    <td>
                    <h3>Question 13</h3>
                    <p>J'éprouve des sensations soudaines de panique<br><br>
                        <input type="radio" name="question13" value="A"><label for="A"> Jamais </label><br>
                        <input type="radio" name="question13" value="B"><label for="B"> Pas très souvent </label><br>
                        <input type="radio" name="question13" value="C"><label for="C"> Assez souvent </label><br>
                        <input type="radio" name="question13" value="D"><label for="D"> Vraiment très souvent </label><br>
                    </p>
                    </td>

                    <td>
                    <h3>Question 14</h3>
                    <p>Je peux prendre plaisir à un bon livre ou à une bonne émission de radio ou de télévision<br><br>
                        <input type="radio" name="question14" value="A"><label for="A"> Souvent </label><br>
                        <input type="radio" name="question14" value="B"><label for="B"> Parfois </label><br>
                        <input type="radio" name="question14" value="C"><label for="C"> Rarement </label><br>
                        <input type="radio" name="question14" value="D"><label for="D"> Très rarement </label><br>
                    </p>
                    </td>
                </tr>

            </table>
            <br>
            <textarea cols="100" rows="5"  name="com_had" id="com_had" placeholder="Ecrivez un commentaire..."></textarea>
            <br>
                <br>
                <input type="submit" value="Afficher les réponses du test" name="affREPONSES">
                <br>
                <br>
            </form>
</body>
</html>

<!-- -------------- Récupération des résultats dans des variables -----------------------> 

<?php
if (isset($_POST['affREPONSES'])) {

{
    if ($_POST['question1'] == "A") {
        $pnt_Epreuve1 =  0;}
    elseif ($_POST['question1'] == "B") {
        $pnt_Epreuve1 = 1;}
    elseif ($_POST['question1'] == "C") {
        $pnt_Epreuve1 =  2;}
    elseif ($_POST['question1'] == "D") {
        $pnt_Epreuve1 = 3;}
}

{
    if ($_POST['question2'] == "A") {
        $pnt_Epreuve2 =  0;}
    elseif ($_POST['question2'] == "B") {
        $pnt_Epreuve2 = 1;}
    elseif ($_POST['question2'] == "C") {
        $pnt_Epreuve2 =  2;}
    elseif ($_POST['question2'] == "D") {
        $pnt_Epreuve2 = 3;}
}

{
    if ($_POST['question3'] == "A") {
        $pnt_Epreuve3 =  0;}
    elseif ($_POST['question3'] == "B") {
        $pnt_Epreuve3 = 1;}
    elseif ($_POST['question3'] == "C") {
        $pnt_Epreuve3 =  2;}
    elseif ($_POST['question3'] == "D") {
        $pnt_Epreuve3 = 3;}
}

{
    if ($_POST['question4'] == "A") {
        $pnt_Epreuve4 =  0;}
    elseif ($_POST['question4'] == "B") {
        $pnt_Epreuve4 = 1;}
    elseif ($_POST['question4'] == "C") {
        $pnt_Epreuve4 =  2;}
    elseif ($_POST['question4'] == "D") {
        $pnt_Epreuve4 = 3;}
}

{
    if ($_POST['question5'] == "A") {
        $pnt_Epreuve5 =  0;}
    elseif ($_POST['question5'] == "B") {
        $pnt_Epreuve5 = 1;}
    elseif ($_POST['question5'] == "C") {
        $pnt_Epreuve5 =  2;}
    elseif ($_POST['question5'] == "D") {
        $pnt_Epreuve5 = 3;}
}

{
    if ($_POST['question6'] == "A") {
        $pnt_Epreuve6 =  0;}
    elseif ($_POST['question6'] == "B") {
        $pnt_Epreuve6 = 1;}
    elseif ($_POST['question6'] == "C") {
        $pnt_Epreuve6 =  2;}
    elseif ($_POST['question6'] == "D") {
        $pnt_Epreuve6 = 3;}
}



{
    if ($_POST['question7'] == "A") {
        $pnt_Epreuve7 =  0;}
    elseif ($_POST['question7'] == "B") {
        $pnt_Epreuve7 = 1;}
    elseif ($_POST['question7'] == "C") {
        $pnt_Epreuve7 =  2;}
    elseif ($_POST['question7'] == "D") {
        $pnt_Epreuve7 = 3;}
}
    
{
    if ($_POST['question8'] == "A") {
        $pnt_Epreuve8 =  0;}
    elseif ($_POST['question8'] == "B") {
        $pnt_Epreuve8 = 1;}
    elseif ($_POST['question8'] == "C") {
        $pnt_Epreuve8 =  2;}
    elseif ($_POST['question8'] == "D") {
        $pnt_Epreuve8 = 3;}
}
    
{
    if ($_POST['question9'] == "A") {
        $pnt_Epreuve9 =  0;}
    elseif ($_POST['question9'] == "B") {
        $pnt_Epreuve9 = 1;}
    elseif ($_POST['question9'] == "C") {
        $pnt_Epreuve9 =  2;}
    elseif ($_POST['question9'] == "D") {
        $pnt_Epreuve9 = 3;}
}

{
    if ($_POST['question10'] == "A") {
        $pnt_Epreuve10 =  0;}
    elseif ($_POST['question10'] == "B") {
        $pnt_Epreuve10 = 1;}
    elseif ($_POST['question10'] == "C") {
        $pnt_Epreuve10 =  2;}
    elseif ($_POST['question10'] == "D") {
        $pnt_Epreuve10 = 3;}
}
    
{
    if ($_POST['question11'] == "A") {
        $pnt_Epreuve11 =  0;}
    elseif ($_POST['question11'] == "B") {
        $pnt_Epreuve11 = 1;}
    elseif ($_POST['question11'] == "C") {
        $pnt_Epreuve11 =  2;}
    elseif ($_POST['question11'] == "D") {
        $pnt_Epreuve11 = 3;}
}
    
{
    if ($_POST['question12'] == "A") {
        $pnt_Epreuve12 =  0;}
    elseif ($_POST['question12'] == "B") {
        $pnt_Epreuve12 = 1;}
    elseif ($_POST['question12'] == "C") {
        $pnt_Epreuve12 =  2;}
    elseif ($_POST['question12'] == "D") {
        $pnt_Epreuve12 = 3;}
}
    
{
    if ($_POST['question13'] == "A") {
        $pnt_Epreuve13 =  0;}
    elseif ($_POST['question13'] == "B") {
        $pnt_Epreuve13 = 1;}
    elseif ($_POST['question13'] == "C") {
        $pnt_Epreuve13 =  2;}
    elseif ($_POST['question13'] == "D") {
        $pnt_Epreuve13 = 3;}
}
    
{
    if ($_POST['question14'] == "A") {
        $pnt_Epreuve14 =  0;}
    elseif ($_POST['question14'] == "B") {
        $pnt_Epreuve14 = 1;}
    elseif ($_POST['question14'] == "C") {
        $pnt_Epreuve14 =  2;}
    elseif ($_POST['question14'] == "D") {
        $pnt_Epreuve14 = 3;}
}

//récupération du commentaire
{
$com_had = htmlspecialchars($_POST['com_had']);
}


//Calculs des 2 totaux pour Anxiété et Dépression

$TotalPOINTA = $pnt_Epreuve1 + $pnt_Epreuve3 +$pnt_Epreuve5 + $pnt_Epreuve7 + $pnt_Epreuve9 + $pnt_Epreuve11 + $pnt_Epreuve13;
$TotalPOINTD = $pnt_Epreuve2 + $pnt_Epreuve4 +$pnt_Epreuve6 + $pnt_Epreuve8 + $pnt_Epreuve10 + $pnt_Epreuve12 + $pnt_Epreuve14;
}


// Insertion du nombre de points obtenus dans la table had_resultats
$requeteResultat = $base->prepare("INSERT INTO had_resultats(id_patient, no_consultation, question1, question2, question3, question4, question5, question6, question7, question8, question9, question10, question11, question12, question13, question14) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
try {
    $requeteResultat->execute(array($id_patient, $no_consult, $pnt_Epreuve1, $pnt_Epreuve1, $pnt_Epreuve2, $pnt_Epreuve3, $pnt_Epreuve4, $pnt_Epreuve5, $pnt_Epreuve6, $pnt_Epreuve7, $pnt_Epreuve8, $pnt_Epreuve9, $pnt_Epreuve10, $pnt_Epreuve11, $pnt_Epreuve12, $pnt_Epreuve13, $pnt_Epreuve14, $TotalPOINTA, $TotalPOINTD));
    $id_had = $base->lastInsertId();
} catch (Exception $e) {
    echo $e->getMessage();
};

// Insertion des réponses écrites dans la table had_reponses
$requeteReponse = $base->prepare("INSERT INTO bref_reponses(id_consultation_bref, id_resultats, question1, question2, question3, question4, question5, question6, question7, question8, question9, question10, question11, question12, question13, question14, totalA, totalD, com_had) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
try {
    $requeteReponse->execute(array($no_consult, $id_had, $pnt_Epreuve1, $pnt_Epreuve1, $pnt_Epreuve2, $pnt_Epreuve3, $pnt_Epreuve4, $pnt_Epreuve5, $pnt_Epreuve6, $pnt_Epreuve7, $pnt_Epreuve8, $pnt_Epreuve9, $pnt_Epreuve10, $pnt_Epreuve11, $pnt_Epreuve12, $pnt_Epreuve13, $pnt_Epreuve14, $TotalPOINTA, $TotalPOINTD, $com_had));
} catch (Exception $e) {
    echo $e->getMessage();
};


//Affichage des résultats selon un code couleur lié au score

if (isset($_POST['affREPONSES'])) {

    if ($TotalPOINTA <8){
        echo "<h3><p style=color:#000000;>Score Anxiété : " , $TotalPOINTA , " pas d'anxiété.</p></h3>";} // ici en noir
    elseif ($TotalPOINTA <11){
        echo "<h3><p style=color:#0066ff;>Score Anxiété : ", $TotalPOINTA , " symptomatologie douteuse.</p></h3>";} // ici en bleu
    else{
    echo "<h3><p style=color:#FF0000;>Score Anxiété : ", $TotalPOINTA , " état certain d'anxiété.</p></h3>";} // ici en rouge


    if ($TotalPOINTD <8){
        echo "<h3><p style=color:#000000;>Score Dépression : ", $TotalPOINTD , " pas de dépression.</p></h3>";} // ici en noir
    elseif ($TotalPOINTD <11){
        echo "<h3><p style=color:#0066ff;>Score Dépression : ", $TotalPOINTD , " symptomatologie douteuse.</p></h3>";} // ici en bleu
    else{
    echo "<h3><p style=color:#FF0000;>Score Dépression : ", $TotalPOINTD , " état certain de dépression.</p></h3>";} // ici en rouge

    {
    echo "<h3><p style=color:#000000;>Commentaire ajouté : ", $com_had , ".</p></h3>";} // ici en noir
}

?>
