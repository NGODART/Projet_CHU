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

<?php
// On récupère L'identifiant du patient de la derniène consultation enregistrée dans La bdd, qui correspond au patient
$id_pat = $base -> prepare(query: 'SELECT id_patient FROM consultation ORDER BY id_consultation DESC LIMIT 1');
$id_pat -> execute(array());
while ($resultat = $id_pat -> fetch()) {
$id_pat = $resultat['id_patient'];
}

// On récupère le niveau d'étude
$nb_etude = $base -> prepare(query: 'SELECT nb_annees_etudes FROM patient where id_P = ?');
$nb_etude -> execute(array($id_pat));
while ($resultat = $nb_etude -> fetch()) {
$nb_etude = $resultat['nb_annees_etudes'];
}

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
        <h2>Test STROOP</h2>

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
            <textarea cols="100" rows="5"  name="com_stroop" id="com_stroop" placeholder="Ecrivez un commentaire..."></textarea>
            <br>
                <br>
                <input type="submit" value="Valider le test" name="affREPONSES">
                <br>
                <br>
            </form>
    
            
</body>
</html>



<!-- -------------- Récupération des résultats dans des variables -----------------------> 

<?php
if (isset($_POST['affREPONSES'])) {

    
        $partie1_ENC = $_POST['ENC1'];
        $partie1_EC = $_POST['EC1'];
        $partie1_T50 = $_POST['time1-1'];
        $partie1_TT = $_POST['time1-2'];

        $partie2_ENC = $_POST['ENC2'];
        $partie2_EC = $_POST['EC2'];
        $partie2_T50 = $_POST['time2-1'];
        $partie2_TT = $_POST['time2-2'];

        $partie3_ENC = $_POST['ENC3'];
        $partie3_EC = $_POST['EC3'];
        $partie3_T50 = $_POST['time3-1'];
        $partie3_TT = $_POST['time3-2'];

}

//récupération du commentaire
{
$com_stroop = htmlspecialchars($_POST['com_stroop']);
}

$Interference_ENC = $partie3_TT - $partie1_TT;
$Interference_temps = $partie3_ENC - $partie1_ENC;

if ($nb_etude)
{
    

} 

?>