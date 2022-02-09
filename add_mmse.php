<?php
include('db_connect.php');
// Inclusion du test afin de récupérer ses données
include('test_mmse_V1.php');
if (isset($_POST['insertion'])) {

    // Récupération des réponses au test
    $NSC_MMSE = htmlspecialchars($_POST['NSC_MMSE']);

    // Récupération des réponses justes
    // Orientation
    if ($_POST['Orientation_1'] == "J") {
        $orientation_MMSE = $orientation_MMSE + 1;
    } elseif ($_POST['Orientation_1'] == "F") {
        $orientation_MMSE = $orientation_MMSE + 0;
    }
    if ($_POST['Orientation_2'] == "J") {
        $orientation_MMSE = $orientation_MMSE + 1;
    } elseif ($_POST['Orientation_2'] == "F") {
        $orientation_MMSE = $orientation_MMSE + 0;
    }
    if ($_POST['Orientation_3'] == "J") {
        $orientation_MMSE = $orientation_MMSE + 1;
    } elseif ($_POST['Orientation_3'] == "F") {
        $orientation_MMSE = $orientation_MMSE + 0;
    }
    if ($_POST['Orientation_4'] == "J") {
        $orientation_MMSE = $orientation_MMSE + 1;
    } elseif ($_POST['Orientation_4'] == "F") {
        $orientation_MMSE = $orientation_MMSE + 0;
    }
    if ($_POST['Orientation_5'] == "J") {
        $orientation_MMSE = $orientation_MMSE + 1;
    } elseif ($_POST['Orientation_5'] == "F") {
        $orientation_MMSE = $orientation_MMSE + 0;
    }
    if ($_POST['Orientation_6'] == "J") {
        $orientation_MMSE = $orientation_MMSE + 1;
    } elseif ($_POST['Orientation_6'] == "F") {
        $orientation_MMSE = $orientation_MMSE + 0;
    }
    if ($_POST['Orientation_7'] == "J") {
        $orientation_MMSE = $orientation_MMSE + 1;
    } elseif ($_POST['Orientation_7'] == "F") {
        $orientation_MMSE = $orientation_MMSE + 0;
    }
    if ($_POST['Orientation_8'] == "J") {
        $orientation_MMSE = $orientation_MMSE + 1;
    } elseif ($_POST['Orientation_8'] == "F") {
        $orientation_MMSE = $orientation_MMSE + 0;
    }
    if ($_POST['Orientation_9'] == "J") {
        $orientation_MMSE = $orientation_MMSE + 1;
    } elseif ($_POST['Orientation_9'] == "F") {
        $orientation_MMSE = $orientation_MMSE + 0;
    }
    if ($_POST['Orientation_10'] == "J") {
        $orientation_MMSE = $orientation_MMSE + 1;
    } elseif ($_POST['Orientation_10'] == "F") {
        $orientation_MMSE = $orientation_MMSE + 0;
    }
    // Apprentissage
    if ($_POST['Apprentissage_1'] == "J") {
        $apprentissage_MMSE = $apprentissage_MMSE + 1;
    } elseif ($_POST['Apprentissage_1'] == "F") {
        $apprentissage_MMSE = $apprentissage_MMSE + 0;
    }
    if ($_POST['Apprentissage_2'] == "J") {
        $apprentissage_MMSE = $apprentissage_MMSE + 1;
    } elseif ($_POST['Apprentissage_2'] == "F") {
        $apprentissage_MMSE = $apprentissage_MMSE + 0;
    }
    if ($_POST['Apprentissage_3'] == "J") {
        $apprentissage_MMSE = $apprentissage_MMSE + 1;
    } elseif ($_POST['Apprentissage_3'] == "F") {
        $apprentissage_MMSE = $apprentissage_MMSE + 0;
    }
    // Attention
    if ($_POST['Attention_1'] == "J") {
        $attention_MMSE = $attention_MMSE + 1;
    } elseif ($_POST['Attention_1'] == "F") {
        $attention_MMSE = $attention_MMSE + 0;
    }
    if ($_POST['Attention_2'] == "J") {
        $attention_MMSE = $attention_MMSE + 1;
    } elseif ($_POST['Attention_2'] == "F") {
        $attention_MMSE = $attention_MMSE + 0;
    }
    if ($_POST['Attention_3'] == "J") {
        $attention_MMSE = $attention_MMSE + 1;
    } elseif ($_POST['Attention_3'] == "F") {
        $attention_MMSE = $attention_MMSE + 0;
    }
    if ($_POST['Attention_4'] == "J") {
        $attention_MMSE = $attention_MMSE + 1;
    } elseif ($_POST['Attention_4'] == "F") {
        $attention_MMSE = $attention_MMSE + 0;
    }
    if ($_POST['Attention_5'] == "J") {
        $attention_MMSE = $attention_MMSE + 1;
    } elseif ($_POST['Attention_5'] == "F") {
        $attention_MMSE = $attention_MMSE + 0;
    }
    // Nous ne devons apparemment pas comptabiliser les points de cette question 
    // if ($_POST['Attention_6'] == "J") {
    //     $attention_MMSE = $attention_MMSE + 1;
    // } elseif ($_POST['Attention_6'] == "F") {
    //     $attention_MMSE = $attention_MMSE + 0;
    // }
    // Rappel
    if ($_POST['Rappel_1'] == "J") {
        $rappel_MMSE = $rappel_MMSE + 1;
    } elseif ($_POST['Rappel_1'] == "F") {
        $rappel_MMSE = $rappel_MMSE + 0;
    }
    if ($_POST['Rappel_2'] == "J") {
        $rappel_MMSE = $rappel_MMSE + 1;
    } elseif ($_POST['Rappel_2'] == "F") {
        $rappel_MMSE = $rappel_MMSE + 0;
    }
    if ($_POST['Rappel_3'] == "J") {
        $rappel_MMSE = $rappel_MMSE + 1;
    } elseif ($_POST['Rappel_3'] == "F") {
        $rappel_MMSE = $rappel_MMSE + 0;
    }
    // Langage
    if ($_POST['Langage_1'] == "J") {
        $langage_MMSE = $langage_MMSE + 1;
    } elseif ($_POST['Langage_1'] == "F") {
        $langage_MMSE = $langage_MMSE + 0;
    }
    if ($_POST['Langage_2'] == "J") {
        $langage_MMSE = $langage_MMSE + 1;
    } elseif ($_POST['Langage_2'] == "F") {
        $langage_MMSE = $langage_MMSE + 0;
    }
    if ($_POST['Langage_3'] == "J") {
        $langage_MMSE = $langage_MMSE + 1;
    } elseif ($_POST['Langage_3'] == "F") {
        $langage_MMSE = $langage_MMSE + 0;
    }
    if ($_POST['Langage_4'] == "J") {
        $langage_MMSE = $langage_MMSE + 1;
    } elseif ($_POST['Langage_4'] == "F") {
        $langage_MMSE = $langage_MMSE + 0;
    }
    if ($_POST['Langage_5'] == "J") {
        $langage_MMSE = $langage_MMSE + 1;
    } elseif ($_POST['Langage_5'] == "F") {
        $langage_MMSE = $langage_MMSE + 0;
    }
    if ($_POST['Langage_6'] == "J") {
        $langage_MMSE = $langage_MMSE + 1;
    } elseif ($_POST['Langage_6'] == "F") {
        $langage_MMSE = $langage_MMSE + 0;
    }
    // Praxie
    if ($_POST['Praxie_1'] == "J") {
        $praxie_MMSE = $praxie_MMSE + 1;
    } elseif ($_POST['Praxie_1'] == "F") {
        $praxie_MMSE = $praxie_MMSE + 0;
    }

    $com_apprentissage = htmlspecialchars($_POST['com_apprentissage']);
    $rep1_attention = htmlspecialchars($_POST['rep1_attention']);
    $rep2_attention = htmlspecialchars($_POST['rep2_attention']);
    $rep3_attention = htmlspecialchars($_POST['rep3_attention']);
    $rep4_attention = htmlspecialchars($_POST['rep4_attention']);
    $rep5_attention = htmlspecialchars($_POST['rep5_attention']);

    $photo_langage = htmlspecialchars($_POST['photo_langage']);
    $photo_praxie = htmlspecialchars($_POST['photo_praxie']);

    // Calcul du score total obtenu lors du test
    $total_MMSE = $praxie_MMSE + $langage_MMSE + $rappel_MMSE + $attention_MMSE + $apprentissage_MMSE + $orientation_MMSE;

    // Insertion du nombre de points obtenus dans la table MMSE_resultats
    $requeteResultat = $base->prepare("INSERT INTO MMSE_resultats(NSC_MMSE, orientation_MMSE, apprentissage_MMSE, attention_MMSE, rappel_MMSE, langage_MMSE, praxie_MMSE, total) VALUES(?,?,?,?,?,?,?,?)");
    try {
        $requeteResultat->execute(array($NSC_MMSE, $orientation_MMSE, $apprentissage_MMSE, $attention_MMSE, $rappel_MMSE, $langage_MMSE, $praxie_MMSE, $total_MMSE));
        $id_MMSE = $base->lastInsertId();
    } catch (Exception $e) {
        echo $e->getMessage();
    };

    // Insertion des réponses écrites dans la table MMSE_reponses
    $requeteReponse = $base->prepare("INSERT INTO MMSE_reponses(com_apprentissage, rep1_attention, rep2_attention, rep3_attention, rep4_attention, rep5_attention) VALUES(?,?,?,?,?,?)");
    try {
        $requeteReponse->execute(array($com_apprentissage, $rep1_attention, $rep2_attention, $rep3_attention, $rep4_attention, $rep5_attention));
    } catch (Exception $e) {
        echo $e->getMessage();
    };

    // Insertion des photos ajoutées dans la table photo_MMSE --> Non abouti
    $requetePhoto = $base->prepare("INSERT INTO photo_MMSE(photo_langage, photo_praxie) VALUES(?,?)");
    try {
        $requetePhoto->execute(array($photo_langage, $photo_praxie));
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