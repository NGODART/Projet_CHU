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
    <link rel="stylesheet" href="test_stroop.css"> <!-- CSS page -->
    <Title> Test STROOP </Title>
</head>

<body>
    <center>
        <h2>Test STROOPP</h2>

<script type="text/javascript" >    
    window.open("chrono.php", "chrono", "height=200, width=200, menubar='no', toolbar='no', location='yes', status='yes', scrollbars='no'");
</script>

        <form method="post" name=insertion action="test_stroop.php">
        <!--- Formulaire du test -->

            <p>Ce test est composé de trois parties. Pour chaque partie est affichée l'image correspondante pour que le praticien puisse vérifier les réponses du patient. Le patient devra réaliser ce test avec une feuille qui lui sera fournie par le praticen. Cette page est destinée uniquement au praticen pour évaluer le patient et ne sert pas de support au patient pour réaliser le test. </p>
        
        <!---------------------- Première partie ------------------------------------------>
        <h3>Partie 1 : Dénomination</h3>
            <p>Le patient doit nommer les couleurs des regtangles ligne par ligne sur la planche 1. </p>

            <img src="images/planche1_stroop.png"/>
            
        <p class="cpt"> Nombre d'erreurs non corrigées spontanément <input type="number" name="ENC1" value="ENC2" min="0" placeholder="0"> 
        </p>

        <p class="cpt"> Nombre d'erreurs corrigées <input type="number" name="EC1" value="EC1" min="0" placeholder="0">
        </p>
        

        <table width="95%">            
            <tr>
                <td>
                <p>Temps pour 50 items (en secondes) :
                    <input type="number" name="time1-1" value="sec" min="0" placeholder="0">
                </p>
                </td>

                <td>
                <p>Temps total (en secondes) :
                    <input type="number" name="time1-2" value="sec" min="0" placeholder="0">
                </p>
                </td>
            </tr>
        </table>
        </form>

<form method="post" name=insertion action="test_stroop.php">

        <!---------------------- Deuxième partie ------------------------------------------>
        <h3>Partie 2 : Lecture</h3>
            <p>Le patient doit lire les noms de couleurs ligne par ligne sur la planche 2. </p>

            <img src="images/planche2_stroop.png"/>

        <p class="cpt"> Nombre d'erreurs non corrigées spontanément <input type="number" name="ENC2" value="ENC2" min="0" placeholder="0"></p>

        <p class="cpt"> Nombre d'erreurs corrigées <input type="number" name="EC2" value="EC2" min="0" placeholder="0"></p>


            <table width="95%">            
            <tr>
                <td>
                <p>Temps pour 50 items (en secondes) :
                    <input type="number" name="time2-1" value="sec" min="0">
                </p>
                </td>

                <td>
                <p>Temps total (en secondes) :
                    <input type="number" name="time2-2" value="sec" min="0">
                </p>
                </td>
            </tr>
        </table>
        </form>

<form method="post" name=insertion action="test_stroop.php">

        <!---------------------- Troisème partie ------------------------------------------>
        <h3>Partie 3 : Interférence</h3>
            <p>Le patient doit nommer les couleurs sans tenir compte des mots, ligne par ligne sur la planche 3. </p>

            <img src="images/planche3_stroop.png"/>


            <p class="cpt"> Nombre d'erreurs non corrigées spontanément <input type="number" name="ENC3" value="ENC3" min="0" placeholder="0"></p>

            <p class="cpt"> Nombre d'erreurs corrigées <input type="number" name="EC3" value="EC3" min="0" placeholder="0"></p>

            <table width="95%">            
            <tr>
                <td>
                <p>Temps pour 50 items (en secondes) :
                    <input type="number" name="time3-1" value="sec" min="0">
                </p>
                </td>

                <td>
                <p>Temps total (en secondes) :
                    <input type="number" name="time3-2" value="sec" min="0">
                </p>
                </td>
            </tr>
        </table>
            

            <br>
            <textarea cols="100" rows="5"  name="com_had" id="com_had" placeholder="Ecrivez un commentaire..."></textarea>
            <br>
                <br>
                <input type="submit" value="Valider le test" name="affREPONSES">
                <br>
                <br>
            </form>

            
</body>
</html>

