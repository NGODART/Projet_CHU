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
    <Title> Test BREF </Title>
</head>

<body>
    <center>
        <h2>Test BREF</h2>
        <!--- Formulaire du test -->
        <form method="post" name=insertion action="test_bref.php"> <!--il faudra remettre la direction vers ./choix_test.php-->
            
            <table width="95%" border="1" align="center">
                <!--- EPREUVE 1 -->
                <p><h4>1. Épreuve des similitudes  <br> <br> Demander en quoi se ressemblent ... </h4>

                <tr>
                    <td align="center"><label> Une orange et une banane </label></td>
                    <td><input type="radio" name="similitudes_1" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" name="similitudes_1" value="F"><label for="F"> Faux </label></td>
                    <td align="center">Commentaire :<br><textarea  cols="50" rows="3 name="Commentaire_1" id="Commentaire_1" placeholder="Ecrivez un commentaire..."></textarea></textarea></td>
                </tr>
                <tr>
                    <td align="center"><label> Une chaise et une table </label></td>
                    <td><input type="radio" name="similitudes_2" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" name="similitudes_2" value="F"><label for="F"> Faux </label></td>
                    <td align="center">Commentaire :<br><textarea cols="50" rows="3 name="Commentaire_2" id="Commentaire_2" placeholder="Ecrivez un commentaire..."></textarea></textarea></td>
                </tr>
                <tr>
                    <td align="center"><label> Une tulipe, une rose, et une margerite </label></td>
                    <td><input type="radio" name="similitudes_3" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" name="similitudes_3" value="F"><label for="F"> Faux </label></td>
                    <td align="center">Commentaire :<br><textarea cols="50" rows="3" name="Commentaire_3" id="Commentaire_3" placeholder="Ecrivez un commentaire..."></textarea></textarea></td>
                </tr>
            </table>
            <br>La cotation se fait automatiquement.
            <br>
            <br>Chaque réponse correcte rapporte 1 point et chaque réponse fausse rapporte 0 point. <p></p>

<!-- ---------------------------------------------------------------------------------------------------------------------------------- -->
            <table width="95%" border="1">
                <!--- EPREUVE 2 -->
                <p><h4>2. Épreuve de fluence verbale  <br> <br> Demander au patient de donner le maximum de mot commençant par la lettre "s". </h4></p>
                <tr>
                    <td><label> + de 10 mots</label></td>
                    <td><input type="radio" name="res2" value="R1"><label for="R1"> 3 points </label></td>
                </tr>
                <tr>
                    <td><label> Entre 5 et 10 mots  </label></td>
                    <td><input type="radio" name="res2" value="R2"><label for="R2"> 2 points </label></td>
                </tr>
                <tr>
                    <td><label> Entre 3 et 5 mots </label></td>
                    <td><input type="radio" name="res2" value="R3"><label for="R3"> 1 point </label></td>
                </tr>
                <tr>
                    <td><label> - de 3 mots </label></td>
                    <td><input type="radio" name="res2" value="R4" checked ><label for="R4"> 0 point </label></td>
                </tr>
            </table>
            <br>
            <br>
            Commentaire - Épreuve 2 :<br><br><textarea cols="100" rows="5" name="Commentaire_GLO_2" id="Commentaire_GLO_2" placeholder="Écrivez un commentaire..."></textarea>

<!-- ---------------------------------------------------------------------------------------------------------------------------------- -->
<table width="95%" border="1">
                <!--- EPREUVE 3-->
                <p><h4>3. Comportement de préhension <br> <br> L'examinateur s'assoit devant le patient dont les mains reposent sur les genoux. Il place alors ses mains dans celles du patients afin de voir s'il va les saisir spontanément.</h4></p>
                <tr>
                    <td><label> Le patient ne saisit pas les mains de l'examinateur  </label></td>
                    <td><input type="radio" name="res3" value="R1"><label for="R1"> 3 points </label></td>
                </tr>
                <tr>
                    <td><label> Le patient hésite et demande ce qu'il doit faire  </label></td>
                    <td><input type="radio" name="res3" value="R2"><label for="R2"> 2 points </label></td>
                </tr>
                <tr>
                    <td><label> Le patient prend les mains sans hesitation  </label></td>
                    <td><input type="radio" name="res3" value="R3"><label for="R3"> 1 point </label></td>
                </tr>
                <tr>
                    <td><label> Le patient prend les mains alors que l'examinateur lui demande de ne pas le faire  </label></td>
                    <td><input type="radio" name="res3" value="R4" checked ><label for="R4"> 0 point </label></td>
                </tr>
            </table>
                    <!--METTRE PEUT ETRE UNE ZONE DE COMMENTAIRRE-->
<!-- ---------------------------------------------------------------------------------------------------------------------------------- -->
<table width="95%" border="1">
                <!--- EPREUVE 4-->
                <p><h4>4. Séquences motrices de Luria <br> <br> Le patient doit reproduire la séquence "tranche - point - paume" après que l'examinateur lui ait montré seul 3 fois, après qu'il l'ait réalisé 3 fois avec l'examinateur. </h4></p>
                <tr>
                    <td><label> Le patient réussit seul 6 séquences consécutives  </label></td>
                    <td><input type="radio" name="res4" value="R1"><label for="R1"> 3 points </label></td>
                </tr>
                <tr>
                    <td><label> Le patient réussit seul au moins 3 séquences consécutives  </label></td>
                    <td><input type="radio" name="res4" value="R2"><label for="R2"> 2 points </label></td>
                </tr>
                <tr>
                    <td><label> Le patient peut y arriver seul, mais réussit correctement avec l'examinateur  </label></td>
                    <td><input type="radio" name="res4" value="R3"><label for="R3"> 1 point </label></td>
                </tr>
                <tr>
                    <td><label> Le patient n'est pas capable de réussir 3 séquences correctes même avec l'examinateur  </label></td>
                    <td><input type="radio" name="res4" value="R4" checked ><label for="R4"> 0 point </label></td>
                </tr>
            </table>
            <br>
            <br>
            Commentaire - Épreuve 4 :<br><br><textarea cols="100" rows="5"  name="Commentaire_GLO_4" id="Commentaire_GLO_4" placeholder="Écrivez un commentaire..."></textarea></textarea>


<!-- ---------------------------------------------------------------------------------------------------------------------------------- -->
<table width="95%" border="1">
                <!--- EPREUVE 5-->
                <p><h4>5. Épreuve des consignes conflictuelles <br> <br> Demander au patient de taper 1 fois lorsque l'examinateur tape 2 fois et vice-versa <br> (séquence proposée : 1-1-2-1-2-2-2-1-1-1-2). </h4></p>
                <tr>
                    <td><label> Aucune erreur  </label></td>
                    <td><input type="radio" name="res5" value="R1"><label for="R1"> 3 points </label></td>
                </tr>
                <tr>
                    <td><label> Seulement 1 ou 2 erreurs  </label></td>
                    <td><input type="radio" name="res5" value="R2"><label for="R2"> 2 points </label></td>
                </tr>
                <tr>
                    <td><label> Plus de 2 erreurs  </label></td>
                    <td><input type="radio" name="res5" value="R3"><label for="R3"> 1 point </label></td>
                </tr>
                <tr>
                    <td><label> Le patient suit le rythme de l'examinateur  </label></td>
                    <td><input type="radio" name="res5" value="R4" checked ><label for="R4"> 0 point </label></td>
                </tr>
            </table>
            <br>
            <br>
            Commentaire - Épreuve 5 :<br><br><textarea cols="100" rows="5" name="Commentaire_GLO_5" id="Commentaire_GLO_5" placeholder="Écrivez un commentaire..."></textarea></textarea>


<!-- ---------------------------------------------------------------------------------------------------------------------------------- -->
<table width="95%" border="1">
                <!--- EPREUVE 6-->
                <p><h4>6. Épreuve de Go - No Go <br> <br> Le patient doit taper 1 fois quand l'examinateur tape 1 fois et ne pas taper lorsque l'examinateur tape 2 fois <br> (séquence proposée : 1-1-2-1-2-2-2-1-1-1-2).</h4></p>
                <tr>
                    <td><label> Aucune erreur  </label></td>
                    <td><input type="radio" name="res6" value="R1"><label for="R1"> 3 points </label></td>
                </tr>
                <tr>
                    <td><label> Seulement 1 ou 2 erreurs  </label></td>
                    <td><input type="radio" name="res6" value="R2"><label for="R2"> 2 points </label></td>
                </tr>
                <tr>
                    <td><label> Plus de 2 erreurs  </label></td>
                    <td><input type="radio" name="res6" value="R3"><label for="R3"> 1 point </label></td>
                </tr>
                <tr>
                    <td><label> Le patient est perdu ou suit le rythme de l'examinateur  </label></td>
                    <td><input type="radio" name="res6" value="R4" checked ><label for="R4"> 0 point </label></td>
                </tr>
            </table>
            <br>
            <br>
            Commentaire - Épreuve 6 :<br><br><textarea cols="100" rows="5" name="Commentaire_GLO_6" id="Commentaire_GLO_6" placeholder="Écrivez un commentaire..."></textarea>

            <!-- ---------------------------------------------------------------------------------------------------------------------------------- -->
                <br>
                <br>
                <input type="submit" value="Valider les réponses du test" name="affREPONSES">
                <br>
                <br>
            </form>
</body>
</html>

<?php

error_reporting(0);


//qd on clique sur "afficher les reponses du test": les points se mettent dans les variables. 
if (isset($_POST['affREPONSES'])) {

                /////////////////////////// A VIRER PLUS TARD ///////////////////////////////

				//récupère les infos du patient

                $id_pat = $base->prepare(query:'select id_patient from consultation order by id_consultation desc limit 1');
                $id_pat->execute(array());
                while ($requetePat= $id_pat->fetch()){
                    $id_patient=$requetePat['id_patient']; // recupere le patient associé à la dernière consultation que l'on considère en cours.
                }
				$res = $base->query("SELECT * FROM `patient` WHERE `id_P`= $id_patient");	
				$donnees = $res->fetch();
				
				//gere le NSC du patient (en dessous de 9 ans d'étude --> 0 ; si plus --> 1)
				if ($donnees['nb_annees_etudes']<9){
				$NSC_Bref = 0;}
				else{
				$NSC_Bref = 1;}
				
				//récupère le no de consult
                $id_cons = $base->prepare(query:'SELECT `id_consultation` FROM `consultation` order by `id_consultation` desc limit 1');
                $id_cons->execute(array());
                while ($requeteCons= $id_cons->fetch()){
                    $no_consult=$requeteCons['id_consultation']; // selectionner la derniere consult enregistré car c'est celle qui est en cours ducoup.
                }
                ////////////////////////////////////////////////////////////////////////////

                //si il manque un champs etre les trois alors la met "mal rempli" et rien ne va dans la variable ptn°epreuve1
                if  ( ($_POST['similitudes_1'] == null) || ($_POST['similitudes_2'] == null) || ($_POST['similitudes_3'] == null) ) {
                    echo "Vous avez oubliez de remplir 1 des 3 champs lors de l'epreuve 1 ! ";
                    $pnt_Epreuve1 = null ;}
                else {

                
					// en fonction de si il coche Juste Juste Juste ou Juste Faux Faux et tout ca, l'incrementation des points sera diff
					if ($_POST['similitudes_1'] == "J") { 
					$pnt_Epreuve1_1=1;}
					else {
					$pnt_Epreuve1_1=0;}
					
					if ($_POST['similitudes_2'] == "J") { 
					$pnt_Epreuve1_2=1;}
					else {
					$pnt_Epreuve1_2=0;}
					
					if ($_POST['similitudes_3'] == "J") { 
					$pnt_Epreuve1_3=1;}
					else {
					$pnt_Epreuve1_3=0;}
						
					$pnt_Epreuve1 = $pnt_Epreuve1_1 + $pnt_Epreuve1_2 + $pnt_Epreuve1_3;
						
					
					$com_similitudes1 = htmlspecialchars($_POST['Commentaire_1']);
					$com_similitudes2 = htmlspecialchars($_POST['Commentaire_2']);
					$com_similitudes3 = htmlspecialchars($_POST['Commentaire_3']);

					
            
                            
            
            {
                if ($_POST['res2'] == "R1") {
                    $pnt_Epreuve2 =  3;}
                elseif ($_POST['res2'] == "R2") {
                    $pnt_Epreuve2 = 2;}
                elseif ($_POST['res2'] == "R3") {
                    $pnt_Epreuve2 =  1;}
                elseif ($_POST['res2'] == "R4") {
                    $pnt_Epreuve2 = 0;}
            }
			$com_fluence = htmlspecialchars($_POST['Commentaire_GLO_2']);

            {
                if ($_POST['res3'] == "R1") {
                    $pnt_Epreuve3 =  3;}
                elseif ($_POST['res3'] == "R2") {
                    $pnt_Epreuve3 = 2;}
                elseif ($_POST['res3'] == "R3") {
                    $pnt_Epreuve3 =  1;}
                elseif ($_POST['res3'] == "R4") {
                    $pnt_Epreuve3 = 0;}
            }

            {
                if ($_POST['res4'] == "R1") {
                    $pnt_Epreuve4 =  3;}
                elseif ($_POST['res4'] == "R2") {
                    $pnt_Epreuve4 = 2;}
                elseif ($_POST['res4'] == "R3") {
                    $pnt_Epreuve4 =  1;}
                elseif ($_POST['res4'] == "R4") {
                    $pnt_Epreuve4 = 0;}
            }
			$com_Luria = htmlspecialchars($_POST['Commentaire_GLO_4']);
			
            {
                if ($_POST['res5'] == "R1") {
                    $pnt_Epreuve5 =  3;}
                elseif ($_POST['res5'] == "R2") {
                    $pnt_Epreuve5 = 2;}
                elseif ($_POST['res5'] == "R3") {
                    $pnt_Epreuve5 =  1;}
                elseif ($_POST['res5'] == "R4") {
                    $pnt_Epreuve5 = 0;}
            }
			$com_consigne = htmlspecialchars($_POST['Commentaire_GLO_5']);

            {
                if ($_POST['res6'] == "R1") {
                    $pnt_Epreuve6 =  3;}
                elseif ($_POST['res6'] == "R2") {
                    $pnt_Epreuve6 = 2;}
                elseif ($_POST['res6'] == "R3") {
                    $pnt_Epreuve6 =  1;}
                elseif ($_POST['res6'] == "R4") {
                    $pnt_Epreuve6 = 0;}
            }
            $com_gonogo = htmlspecialchars($_POST['Commentaire_GLO_6']);
			
			
			// calcul du nombre de point total pour l'affichage
			$TotalPOINT = $pnt_Epreuve1 + $pnt_Epreuve2 +$pnt_Epreuve3 + $pnt_Epreuve4 + $pnt_Epreuve5 + $pnt_Epreuve6;
			
			// Insertion du nombre de points obtenus dans la table bref_resultats
			$requeteResultat = $base->prepare("INSERT INTO bref_resultats(id_patient, no_consultation, NSC_Bref, similitudes_bref, fluence_bref, prehension_bref, Luria_bref, consigne_bref,gonogo_bref,total,age_patient) VALUES(?,?,?,?,?,?,?,?,?,?,?)");
			try {
				$requeteResultat->execute(array($id_patient, $no_consult, $NSC_Bref, $pnt_Epreuve1, $pnt_Epreuve2, $pnt_Epreuve3, $pnt_Epreuve4, $pnt_Epreuve5, $pnt_Epreuve6, $TotalPOINT, $donnees['age_P']));
				$id_bref = $base->lastInsertId();
			} catch (Exception $e) {
				echo $e->getMessage();
			};

            // Insertion des réponses écrites dans la table bref_reponses
            $requeteReponse = $base->prepare("INSERT INTO bref_reponses(id_consultation_bref, id_resultats, rep1_similitudes, com1_similitudes, rep2_similitudes, com2_similitudes,rep3_similitudes,com3_similitudes,rep_fluence,com_fluence,rep_prehension,rep_Luria,com_Luria,rep_consigne,com_consigne,rep_gonogo,com_gonogo) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            try {
                $requeteReponse->execute(array($no_consult, $id_bref, $pnt_Epreuve1_1, $com_similitudes1, $pnt_Epreuve1_2, $com_similitudes2,$pnt_Epreuve1_3,$com_similitudes3,$pnt_Epreuve2,$com_fluence,$pnt_Epreuve3,$pnt_Epreuve4,$com_Luria,$pnt_Epreuve5,$com_consigne,$pnt_Epreuve6,$com_gonogo));
            } catch (Exception $e) {
                echo $e->getMessage();
            };

			

            //Affichage du score (plutot dans la grille de notation (voir plus tard))
            if ($donnees['nb_annees_etudes']<9) {
                if ($TotalPOINT < 16) {
                            echo "<h3><p style=color:#FF0000;>Voici le score total du patient : <var>$TotalPOINT</var></p></h3>";} // ici en rouge 
                else {
                                echo "<h3><p>Voici le score total du patient : <var>$TotalPOINT</var></p></h3>";}
                            }
            elseif ($donnees['nb_annees_etudes']>9) {
                if  ($TotalPOINT < 15) {
                        echo "<h3><p style=color:#FF0000;>Voici le score total du patient : <var>$TotalPOINT</var></p></h3>";} // ici en rouge
                    else {
                        echo "<h3><p>Voici le score total du patient : <var>$TotalPOINT</var></p></h3>";}
            }
        }

}
?>
