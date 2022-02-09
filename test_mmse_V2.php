test_mmse.php<?php
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
    <link rel="stylesheet" href="mmse.css"> <!-- CSS page -->
    <Title> Test MMSE </Title>
</head>

<body>
    <center>
        <h2>Test MMSE</h2>
        <!--- Formulaire du test -->
        <form method="post" name=insertion action="add_mmse.php">
            <h3>Données du patient</h3>
            <tr>
                <td><label for="NSC_MMSE"> NSC : </label></td>
                <td><input type="radio" name="NSC_MMSE" value="1" /> 1 <input type="radio" name="NSC_MMSE" value="2" /> 2 <input type="radio" name="NSC_MMSE" value="3" /> 3 <input type="radio" name="NSC_MMSE" value="4" /> 4 </td>
                <br><br>
            </tr>
            <table width="95%" border="1">
                <!--- Partie Orientation -->
                <h4>Orientation</h4>
                <p>Je vais vous poser quelques questions pour apprécier comment fonctionne votre mémoire. Les unes sont très simples, les autres un peu moins. Vous devez répondre du mieux que vous pouvez.</p>
                <tr>
                    <td><label>1. En quelle année sommes-nous ?</label></td>
                    <td><input type="radio" name="Orientation_1" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" name="Orientation_1" value="F"><label for="F"> Faux </label></td>
                </tr>
                <tr>
                    <td><label>2. En quelle saison ? </label></td>
                    <td><input type="radio" name="Orientation_2" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" name="Orientation_2" value="F"><label for="F"> Faux </label></td>
                </tr>
                <tr>
                    <td><label>3. En quelle mois ? </label></td>
                    <td><input type="radio" name="Orientation_3" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" name="Orientation_3" value="F"><label for="F"> Faux </label></td>
                </tr>
                <tr>
                    <td><label>4. Quel jour du mois ? </label></td>
                    <td><input type="radio" name="Orientation_4" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" name="Orientation_4" value="F"><label for="F"> Faux </label></td>
                </tr>
                <tr>
                    <td><label>5. Quelle jour de la semaine ? </label></td>
                    <td><input type="radio" name="Orientation_5" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" name="Orientation_5" value="F"><label for="F"> Faux </label></td>
                </tr>
            </table>
            <br>
            <table>
                <p>Je vais vous poser maintenant quelques questions sur l'endroit où nous nous trouvons :</p>
                <tr>
                    <td width="70%"><label>6. Quelle est le nom de l'hôpital où nous sommes ? </label><br>
                        <l>(si l'examen est réalisé en cabinet, demander le nom du cabinet médical ou de la rue où il se trouve)</l>
                    </td>
                    <td><input type="radio" name="Orientation_6" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" name="Orientation_6" value="F"><label for="F"> Faux </label></td>
                </tr>
                <tr>
                    <td><label>7. Dans quelle ville se trouve t-il ? </label></td>
                    <td><input type="radio" name="Orientation_7" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" name="Orientation_7" value="F"><label for="F"> Faux </label></td>
                </tr>
                <tr>
                    <td><label>8. Quelle est le nom du département dans lequel est située cette ville ? </label></td>
                    <td><input type="radio" name="Orientation_8" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" name="Orientation_8" value="F"><label for="F"> Faux </label></td>
                </tr>
                <tr>
                    <td><label>9. Dans quelle région est situé ce département ? </label></td>
                    <td><input type="radio" name="Orientation_9" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" name="Orientation_9" value="F"><label for="F"> Faux </label></td>
                </tr>
                <tr>
                    <td><label>10. A quelle étage sommes-nous ici ? </label></td>
                    <td><input type="radio" name="Orientation_10" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" name="Orientation_10" value="F"><label for="F"> Faux </label></td>
                </tr>
            </table>
            <br>
            <!--- Partie Apprentissage -->
            <h4> Apprentissage </h4>
            <p>Je vais vous dire 3 mots. Je voudrais que vous me les répétiez et que vous essayiez de les retenir car je vous les redemanderai tout à l'heure.</p>
            <table>
                <tr>
                    <td><label>11. Cigare </label></td>
                    <td><input type="radio" name="Apprentissage_1" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" name="Apprentissage_1" value="F"><label for="F"> Faux </label></td>
                </tr>
                <tr>
                    <td><label>12. Fleur </label></td>
                    <td><input type="radio" name="Apprentissage_2" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" iname="Apprentissage_2" value="F"><label for="F"> Faux </label></td>
                </tr>
                <tr>
                    <td><label>13. Porte </label></td>
                    <td><input type="radio" name="Apprentissage_3" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" name="Apprentissage_3" value="F"><label for="F"> Faux </label></td>
                </tr>
            </table>
            <center>
                <p>Répétez les 3 mots</p>
            </center>
            <td><input type="text" name="com_apprentissage" id="com_apprentissage" placeholder="Commentaire" required /></td>
            <br>
            <!--- Partie Attention et calcul -->
            <h4>Attention et calcul </h4>
            <p>Voules vous compter à partir de 100 en retirant 7 à chaque fois ?</p>
            <table>
                <tr>
                    <td><label>14. 93 </label></td>
                    <td><input type="number" name="rep1_attention" id="rep1_attention" placeholder="Réponse" required /></td>
                    <td><input type="radio" name="Attention_1" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" name="Attention_1" value="F"><label for="F"> Faux </label></td>
                </tr>
                <tr>
                    <td><label>15. 86 </label></td>
                    <td><input type="number" name="rep2_attention" id="rep2_attention" placeholder="Réponse" required /></td>
                    <td><input type="radio" name="Attention_2" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" name="Attention_2" value="F"><label for="F"> Faux </label></td>
                </tr>
                <tr>
                    <td><label>16. 79 </label></td>
                    <td><input type="number" name="rep3_attention" id="rep3_attention" placeholder="Réponse" required /></td>
                    <td><input type="radio" name="Attention_3" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" name="Attention_3" value="F"><label for="F"> Faux </label></td>
                </tr>
                <tr>
                    <td><label>17. 72 </label></td>
                    <td><input type="number" name="rep4_attention" id="rep4_attention" placeholder="Réponse" required /></td>
                    <td><input type="radio" name="Attention_4" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" name="Attention_4" value="F"><label for="F"> Faux </label></td>
                </tr>
                <tr>
                    <td><label>18. 65 </label></td>
                    <td><input type="number" name="rep5_attention" id="rep5_attention" placeholder="Réponse" required /></td>
                    <td><input type="radio" name="Attention_5" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" name="Attention_5" value="F"><label for="F"> Faux </label></td>
                </tr>
            </table>
            <p>Pour tous les sujets, même ceux qui ont obtenu le maximum de points, demander : voulez-vous épeler le mot MONDE à l'envers : EDNOM.</p>
            <p>Le score correspond au nombre de lettres dans la bonne position. (Ce chiffre ne doit PAS figurer dans le résultat global)</p>
            <table>
                <tr>
                    <td><input type="radio" name="Attention_6" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" name="Attention_6" value="F"><label for="F"> Faux </label></td>
                </tr>
            </table>
            <!--- Partie Rappel -->
            <h4> Rappel </h4>
            <p> Pouvez-vous me dire quels étaient les 3 mots que je vous ai demandés de répéter et de retenir tout à l'heure ?</p>
            <table>
                <tr>
                    <td><label>11. Citron </label></td>
                    <td><input type="radio" name="Rappel_1" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" name="Rappel_1" value="F"><label for="F"> Faux </label></td>
                </tr>
                <tr>
                    <td><label>12. Clé </label></td>
                    <td><input type="radio" name="Rappel_2" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" name="Rappel_2" value="F"><label for="F"> Faux </label></td>
                </tr>
                <tr>
                    <td><label>13. Ballon </label></td>
                    <td><input type="radio" name="Rappel_3" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" name="Rappel_3" value="F"><label for="F"> Faux </label></td>
                </tr>
            </table>
            <br>
            <!--- Partie Langage -->
            <h4> Langage </h4>
            <table>
                <tr>
                    <td><label>24. Ecoutez bien et répétez après moi : "Pas de mais, de si, ni de et" </label></td>
                    <td><input type="radio" name="Langage_1" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" name="Langage_1" value="F"><label for="F"> Faux </label></td>
                </tr>
                <tr>
                    <td><label>25. Poser une feuille de papier sur le bureau, la montrer au sujet en lui disant : Ecoutez bien et faites ce que je vais vous dire :<br>Prenez cette feuille de papier avec la main droite</label></td>
                    <td><input type="radio" name="Langage_2" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" name="Langage_2" value="F"><label for="F"> Faux </label></td>
                </tr>
                <tr>
                    <td><label>26. Pliez la en deux </label></td>
                    <td><input type="radio" name="Langage_3" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" name="Langage_3" value="F"><label for="F"> Faux </label></td>
                </tr>
                <tr>
                    <td><label>27. Et jetez-la par terre </label></td>
                    <td><input type="radio" name="Langage_4" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" name="Langage_4" value="F"><label for="F"> Faux </label></td>
                </tr>
                <tr>
                    <td><label>28. Tendre au sujet une feuille de papier sur laquelle est écrit en gros caractères : "FERMEZ LES YEUX" et dire au sujet : Faites ce qui est écrit </label></td>
                    <td><input type="radio" name="Langage_5" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" name="Langage_5" value="F"><label for="F"> Faux </label></td>
                </tr>
                <tr>
                    <td><label>29. Tendre au sujet une feuille de papier et un stylo en disant : Voulez vous m'écrire une phrase, ce que vous voulez mais une phrase entière.<br>Cette phrase doit être écrite spontanément. Elle doit contenir un sujet, et avoir un sens. </label>
                    <td><input type="radio" name="Langage_6" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" name="Langage_6" value="F"><label for="F"> Faux </label></td>
                </tr>
            </table>
            <br>

            <!-- Insertion de l'image -->
            <input type="hidden" name="MAX_FILE_SIZE" value="250000" />
            <input type="file" name="photo_langage" size=50 />
            <!--- Partie Praxie -->
            <h4> Praxies constructives </h4>
            <table>
                <tr>
                    <td><label>30. Tendre au sujet une feuille de papier et lui demander : "Voulez-vous recopier ce dessin ?" </label></td>
                    <td><input type="radio" name="Praxie_1" value="J"><label for="J"> Juste </label></td>
                    <td><input type="radio" name="Praxie_1" value="F"><label for="F"> Faux </label></td>
                </tr>
            </table>
            <br>
            <form enctype="multipart/form-data" action="#" method="post">
                <!-- Insertion de l'image -->
                <input type="hidden" name="MAX_FILE_SIZE" value="250000" />
                <input type="file" name="photo_praxie" size=50 />
                <br>
                <br>
                <input type="submit" value="Valider les réponses" name="insertion">
                <br>
                <br>
            </form>
</body>

</html>