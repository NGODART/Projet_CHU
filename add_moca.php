<?php

include('db_connect.php');
// Inclusion des tests afin de récupérer leurs données
include('test_moca_V1.php');
include('test_moca_V2.php');
include('test_moca_V3.php');
if (isset($_POST['insertion'])) {

    // Vérification de la version du test MOCA pour son insertion dans la base de donnée
    if ($_POST['version'] == "1") {
        $version_MOCA = 1;
    } elseif ($_POST['version'] == "2") {
        $version_MOCA = 2;
    } elseif ($_POST['version'] == "3") {
        $version_MOCA = 3;
    }

    // Récupération des réponses au test
    $NSC_MOCA = htmlspecialchars($_POST['NSC_MOCA']);

    $rep1_denomination = htmlspecialchars($_POST['rep1_denomination']);
    $rep2_denomination = htmlspecialchars($_POST['rep2_denomination']);
    $rep3_denomination = htmlspecialchars($_POST['rep3_denomination']);
    $rep1_memoire = htmlspecialchars($_POST['rep1_memoire']);
    $rep2_memoire = htmlspecialchars($_POST['rep2_memoire']);
    $rep3_memoire = htmlspecialchars($_POST['rep3_memoire']);
    $rep4_memoire = htmlspecialchars($_POST['rep4_memoire']);
    $rep5_memoire = htmlspecialchars($_POST['rep5_memoire']);
    $rep1_bis_memoire = htmlspecialchars($_POST['rep1_bis_memoire']);
    $rep2_bis_memoire = htmlspecialchars($_POST['rep2_bis_memoire']);
    $rep3_bis_memoire = htmlspecialchars($_POST['rep3_bis_memoire']);
    $rep4_bis_memoire = htmlspecialchars($_POST['rep4_bis_memoire']);
    $rep5_bis_memoire = htmlspecialchars($_POST['rep5_bis_memoire']);
    $rep1_attention = htmlspecialchars($_POST['rep1_attention']);
    $rep2_attention = htmlspecialchars($_POST['rep2_attention']);
    $rep3_attention = htmlspecialchars($_POST['rep3_attention']);
    $rep4_attention = htmlspecialchars($_POST['rep4_attention']);
    $rep5_attention = htmlspecialchars($_POST['rep5_attention']);
    $rep1_langage = htmlspecialchars($_POST['rep1_langage']);
    $rep1_abstraction = htmlspecialchars($_POST['rep1_abstraction']);
    $rep2_abstraction = htmlspecialchars($_POST['rep2_abstraction']);
    $rep1_rappel = htmlspecialchars($_POST['rep1_rappel']);
    $rep2_rappel = htmlspecialchars($_POST['rep2_rappel']);
    $rep3_rappel = htmlspecialchars($_POST['rep3_rappel']);
    $rep4_rappel = htmlspecialchars($_POST['rep4_rappel']);
    $rep5_rappel = htmlspecialchars($_POST['rep4_rappel']);
    $rep6_rappel = htmlspecialchars($_POST['rep6_rappel']);
    $rep7_rappel = htmlspecialchars($_POST['rep7_rappel']);
    $rep8_rappel = htmlspecialchars($_POST['rep8_rappel']);
    $rep9_rappel = htmlspecialchars($_POST['rep9_rappel']);
    $rep10_rappel = htmlspecialchars($_POST['rep10_rappel']);
    $rep11_rappel = htmlspecialchars($_POST['rep11_rappel']);
    $rep12_rappel = htmlspecialchars($_POST['rep12_rappel']);
    $rep13_rappel = htmlspecialchars($_POST['rep13_rappel']);
    $rep14_rappel = htmlspecialchars($_POST['rep14_rappel']);
    $rep15_rappel = htmlspecialchars($_POST['rep15_rappel']);

    $photo1_visio = htmlspecialchars($_POST['photo1_visio']);
    $photo2_visio = htmlspecialchars($_POST['photo2_visio']);
    $photo3_visio = htmlspecialchars($_POST['photo3_visio']);

    // Récupération des réponses justes
    // Visuospatial/Exécutif
    if ($_POST['Rond'] == "J") {
        $visuospatial = $visuospatial + 1;
    } elseif ($_POST['Rond'] == "F") {
        $visuospatial = $visuospatial + 0;
    }
    if ($_POST['Cube'] == "J") {
        $visuospatial = $visuospatial + 1;
    } elseif ($_POST['Cube'] == "F") {
        $visuospatial = $visuospatial + 0;
    }
    if ($_POST['Contour'] == "J") {
        $visuospatial = $visuospatial + 1;
    } elseif ($_POST['Contour'] == "F") {
        $visuospatial = $visuospatial + 0;
    }
    if ($_POST['Chiffres'] == "J") {
        $visuospatial = $visuospatial + 1;
    } elseif ($_POST['Chiffres'] == "F") {
        $visuospatial = $visuospatial + 0;
    }
    if ($_POST['Aiguilles'] == "J") {
        $visuospatial = $visuospatial + 1;
    } elseif ($_POST['Aiguilles'] == "F") {
        $visuospatial = $visuospatial + 0;
    }
    // Dénomination
    // Version 1
    if ($_POST['Lion'] == "J") {
        $denomination = $denomination + 1;
    } elseif ($_POST['Lion'] == "F") {
        $denomination = $denomination + 0;
    }
    if ($_POST['Rhino'] == "J") {
        $denomination = $denomination + 1;
    } elseif ($_POST['Rhino'] == "F") {
        $denomination = $denomination + 0;
    }
    if ($_POST['Droma'] == "J") {
        $denomination = $denomination + 1;
    } elseif ($_POST['Droma'] == "F") {
        $denomination = $denomination + 0;
    }
    // Version 2
    if ($_POST['Serpent'] == "J") {
        $denomination = $denomination + 1;
    } elseif ($_POST['Serpent'] == "F") {
        $denomination = $denomination + 0;
    }
    if ($_POST['Elephant'] == "J") {
        $denomination = $denomination + 1;
    } elseif ($_POST['Elephant'] == "F") {
        $denomination = $denomination + 0;
    }
    if ($_POST['Crocodile'] == "J") {
        $denomination = $denomination + 1;
    } elseif ($_POST['Crocodile'] == "F") {
        $denomination = $denomination + 0;
    }
    // Version 3
    if ($_POST['Cheval'] == "J") {
        $denomination = $denomination + 1;
    } elseif ($_POST['Cheval'] == "F") {
        $denomination = $denomination + 0;
    }
    if ($_POST['Tigre'] == "J") {
        $denomination = $denomination + 1;
    } elseif ($_POST['Tigre'] == "F") {
        $denomination = $denomination + 0;
    }
    if ($_POST['Canard'] == "J") {
        $denomination = $denomination + 1;
    } elseif ($_POST['Canard'] == "F") {
        $denomination = $denomination + 0;
    }
    // Attention
    if ($_POST['Ordre'] == "J") {
        $memoire_chiffres = $memoire_chiffres + 1;
    } elseif ($_POST['Ordre'] == "F") {
        $memoire_chiffres = $memoire_chiffres + 0;
    }
    if ($_POST['Envers'] == "J") {
        $memoire_chiffres = $memoire_chiffres + 1;
    } elseif ($_POST['Envers'] == "F") {
        $memoire_chiffres = $memoire_chiffres + 0;
    }
    if ($_POST['Lettre'] == "J") {
        $attention = $attention + 1;
    } elseif ($_POST['Lettre'] == "F") {
        $attention = $attention + 0;
    }
    // Arithmetique 
    if ($_POST['Attention_1'] == "J") {
        $arithmetique_cpt = $arithmetique_cpt + 1;
    }
    if ($_POST['Attention_2'] == "J") {
        $arithmetique_cpt = $arithmetique_cpt + 1;
    }
    if ($_POST['Attention_3'] == "J") {
        $arithmetique_cpt = $arithmetique_cpt + 1;
    }
    if ($_POST['Attention_4'] == "J") {
        $arithmetique_cpt = $arithmetique_cpt + 1;
    }
    if ($_POST['Attention_5'] == "J") {
        $arithmetique_cpt = $arithmetique_cpt + 1;
    }
    if ($arithmetique_cpt = 4 or 5) {
        $arithmetique = 3;
    } elseif ($arithmetique_cpt = 2 or 3) {
        $arithmetique = 2;
    } elseif ($arithmetique_cpt = 1) {
        $arithmetique = 1;
    } else $arithmetique_cpt = 0; {
        $arithmetique = 0;
    }
    // Langage
    // Version 1
    if ($_POST['Colibri'] == "J") {
        $langage = $langage + 1;
    } elseif ($_POST['Colibri'] == "F") {
        $langage = $langage + 0;
    }
    if ($_POST['Avocat'] == "J") {
        $langage = $langage + 1;
    } elseif ($_POST['Avocat'] == "F") {
        $langage = $langage + 0;
    }
    // Version 2
    if ($_POST['Voleur'] == "J") {
        $langage = $langage + 1;
    } elseif ($_POST['Voleur'] == "F") {
        $langage = $langage + 0;
    }
    if ($_POST['Etudiant'] == "J") {
        $langage = $langage + 1;
    } elseif ($_POST['Etudiant'] == "F") {
        $langage = $langage + 0;
    }
    // Version 3
    if ($_POST['Enfant'] == "J") {
        $langage = $langage + 1;
    } elseif ($_POST['Enfant'] == "F") {
        $langage = $langage + 0;
    }
    if ($_POST['Artiste'] == "J") {
        $langage = $langage + 1;
    } elseif ($_POST['Artiste'] == "F") {
        $langage = $langage + 0;
    }
    // Fluidité
    if ($_POST['rep1_langage'] < 11) {
        $fluidite = $fluidite + 0;
    } elseif ($_POST['rep1_langage'] >= 11) {
        $fluidite = $fluidite + 1;
    }
    // Abstraction
    // Version 1
    if ($_POST['Train'] == "J") {
        $abstraction = $abstraction + 1;
    } elseif ($_POST['Train'] == "F") {
        $abstraction = $abstraction + 0;
    }
    if ($_POST['Montre'] == "J") {
        $abstraction = $abstraction + 1;
    } elseif ($_POST['Montre'] == "F") {
        $abstraction = $abstraction + 0;
    }
    // Version 2
    if ($_POST['Lit'] == "J") {
        $abstraction = $abstraction + 1;
    } elseif ($_POST['Lit'] == "F") {
        $abstraction = $abstraction + 0;
    }
    if ($_POST['Lettre'] == "J") {
        $abstraction = $abstraction + 1;
    } elseif ($_POST['Lettre'] == "F") {
        $abstraction = $abstraction + 0;
    }
    // Version 3
    if ($_POST['Marteau'] == "J") {
        $abstraction = $abstraction + 1;
    } elseif ($_POST['Marteau'] == "F") {
        $abstraction = $abstraction + 0;
    }
    if ($_POST['Allumette'] == "J") {
        $abstraction = $abstraction + 1;
    } elseif ($_POST['Allumette'] == "F") {
        $abstraction = $abstraction + 0;
    }
    // Rappel
    //Version 1
    if ($_POST['Visage_3'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Velours_3'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Eglise_3'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Marguerite_3'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Rouge_3'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Visage_4'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Velours_4'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Eglise_4'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Marguerite_4'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Rouge_4'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Visage_5'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Velours_5'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Eglise_5'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Marguerite_5'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Rouge_5'] == "J") {
        $rappel = $rappel + 1;
    }
    // Version 2 
    if ($_POST['Main_3'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Nylon_3'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Parc_3'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Carotte_3'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Jaune_3'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Main_4'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Nylon_4'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Parc_4'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Carotte_4'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Jaune_4'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Main_5'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Nylon_5'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Parc_5'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Carotte_5'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Jaune_5'] == "J") {
        $rappel = $rappel + 1;
    }
    // Version 3
    if ($_POST['Jambe_3'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Coton_3'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Ecole_3'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Tomate_3'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Blanc_3'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Jambe_4'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Coton_4'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Ecole_4'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Tomate_4'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Blanc_4'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Jambe_5'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Coton_5'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Ecole_5'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Tomate_5'] == "J") {
        $rappel = $rappel + 1;
    }
    if ($_POST['Blanc_5'] == "J") {
        $rappel = $rappel + 1;
    }
    // Orientation
    if ($_POST['Date'] == "J") {
        $orientation = $orientation + 1;
    } elseif ($_POST['Date'] == "F") {
        $orientation = $orientation + 0;
    }
    if ($_POST['Mois'] == "J") {
        $orientation = $orientation + 1;
    } elseif ($_POST['Mois'] == "F") {
        $orientation = $orientation + 0;
    }
    if ($_POST['Année'] == "J") {
        $orientation = $orientation + 1;
    } elseif ($_POST['Année'] == "F") {
        $orientation = $orientation + 0;
    }
    if ($_POST['Jour'] == "J") {
        $orientation = $orientation + 1;
    } elseif ($_POST['Jour'] == "F") {
        $orientation = $orientation + 0;
    }
    if ($_POST['Endroit'] == "J") {
        $orientation = $orientation + 1;
    } elseif ($_POST['Endroit'] == "F") {
        $orientation = $orientation + 0;
    }
    if ($_POST['Ville'] == "J") {
        $orientation = $orientation + 1;
    } elseif ($_POST['Ville'] == "F") {
        $orientation = $orientation + 0;
    }

    // Calcul du score total obtenu lors du test MOCA
    $total = $orientation + $rappel + $abstraction + $fluidite + $langage + $arithmetique + $attention + $memoire_chiffres + $denomination + $visuospatial;

    // Insertion du nombre de points obtenus dans la table MOCA_resultats
    $requeteResultat = $base->prepare("INSERT INTO MOCA_resultats(NSC_MOCA, version_MOCA, visuospatial, denomination, memoire_chiffres, attention, arithmetique, langage, fluidite, abstraction, rappel, orientation, total) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
    try {
        $requeteResultat->execute(array($NSC_MOCA, $version_MOCA, $visuospatial, $denomination, $memoire_chiffres, $attention, $arithmetique, $langage, $fluidite, $abstraction, $rappel, $orientation, $total));
        $id_MOCA = $base->lastInsertId();
    } catch (Exception $e) {
        echo $e->getMessage();
    };

    // Insertion des réponses écrites dans la table MOCA_reponses
    $requeteReponse = $base->prepare("INSERT INTO MOCA_reponses(rep1_denomination, rep2_denomination, rep3_denomination, rep1_memoire, rep2_memoire, rep3_memoire, rep4_memoire, rep5_memoire, rep1_bis_memoire, rep2_bis_memoire, rep3_bis_memoire, rep4_bis_memoire, rep5_bis_memoire,
    rep1_attention, rep2_attention, rep3_attention, rep4_attention, rep5_attention, rep1_langage, rep1_abstraction, rep2_abstraction, rep1_rappel, rep2_rappel, rep3_rappel, rep4_rappel, rep5_rappel, rep6_rappel, rep7_rappel, rep8_rappel, rep9_rappel, rep10_rappel, rep11_rappel, 
    rep12_rappel, rep13_rappel, rep14_rappel, rep15_rappel) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    try {
        $requeteReponse->execute(array(
            $rep1_denomination, $rep2_denomination, $rep3_denomination, $rep1_memoire, $rep2_memoire, $rep3_memoire, $rep4_memoire, $rep5_memoire, $rep1_bis_memoire, $rep2_bis_memoire, $rep3_bis_memoire, $rep4_bis_memoire, $rep5_bis_memoire,
            $rep1_attention, $rep2_attention, $rep3_attention, $rep4_attention, $rep5_attention, $rep1_langage, $rep1_abstraction, $rep2_abstraction, $rep1_rappel, $rep2_rappel, $rep3_rappel, $rep4_rappel, $rep5_rappel, $rep6_rappel, $rep7_rappel, $rep8_rappel, $rep9_rappel, $rep10_rappel, $rep11_rappel,
            $rep12_rappel, $rep13_rappel, $rep14_rappel, $rep15_rappel
        ));
    } catch (Exception $e) {
        echo $e->getMessage();
    };

    // Insertion des photos ajoutées dans la table photo_MOCA --> Non abouti
    $requetePhoto = $base->prepare("INSERT INTO photo_MOCA(photo1_visio, photo2_visio, photo3_visio) VALUES(?,?,?)");
    try {
        $requetePhoto->execute(array($photo1_visio, $photo2_visio, $photo3_visio));
    } catch (Exception $e) {
        echo $e->getMessage();
    };

?>
    <META http-equiv="refresh" content="0; URL=./choix_test.php">;
<?php
    $erreur = "Le formulaire a été correctement enregistré !";
} else {
    $erreur =  "<script language='JavaScript'>alert('Le formulaire n'a pas été enregistré !')</script>";
}
if (isset($erreur)) {
    echo '<font color="red">' . $erreur . "</font>";
}
?>