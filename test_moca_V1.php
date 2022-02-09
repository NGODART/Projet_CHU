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
  <link rel="stylesheet" href="moca.css"> <!-- CSS page -->
  <Title> Test MOCA Version 1</Title>
</head>

<body>
  <center>
    <h2>Test MOCA Version 1</h2>
    <!--- Formulaire du test -->
    <form method="post" name=insertion action="add_moca.php">
      <h3>Données du patient</h3>
      <tr>
        <td><label for="NSC_MOCA"> NSC : </label></td>
        <td><input type="radio" name="NSC_MOCA" value="1" /> 1 <input type="radio" name="NSC_MOCA" value="2"> 2 </td>
        <br><br>
      </tr>

      <table width="95%" border="1">
        <!--- Partie visuospatial -->
        <h4> Visuospatial/Exécutif :</h4>
        <table width="95%" border="1" cellpadding="15">
          <tbody>
            <!-- Nom des colonnes en première ligne -->
            <tr>
              <th> Relier les ronds dans le bon ordre </th>
              <th> Copier le cube </th>
              <th> Dessiner une HORLOGE (Onze heures et dix minutes) </th>
            </tr>
            <!--- Valeur de la première ligne -->
            <tr align="center">
              <td>
                <figure><img src="images/visio1.png" align=center height="140px" width="200px" /></figure>
              </td>
              <td>
                <figure><img src="images/visio2.png" align=center height="125px" width="200px" /></figure>
              </td>
              <td>
              </td>
            </tr>
            <!-- Valeur de la deuxième ligne -->
            <tr align="center">
              <td>
                <input type="radio" name="Rond" value="J" /> 1 <input type="radio" name="Rond" value="F"> 0 <br><br>
                <input type="file" name="photo1_visio" size=50 />
              </td>
              <td>
                <input type="radio" name="Cube" value="J" /> 1 <input type="radio" name="Cube" value="F"> 0 <br><br>
                <input type="file" name="photo2_visio" size=50 />
              </td>
              <td>
                <label> Contour </label>
                <input type="radio" name="Contour" value="J" />1<input type="radio" name="Contour" value="F">0 &nbsp &nbsp
                <label> Chiffres </label>
                <input type="radio" name="Chiffres" value="J" />1<input type="radio" name="Chiffres" value="F">0 &nbsp &nbsp
                <label> Aiguilles </label>
                <input type="radio" name="Aiguilles" value="J" />1<input type="radio" name="Aiguilles" value="F">0 <br><br>
                <input type="file" name="photo3_visio" size=50 />
              </td>
            </tr>
        </table><br>
          Commentaire :<br><textarea name="Com" id="Com_RepMeme" placeholder="Ecrivez un commentaire..."></textarea></textarea>
        <!--- Partie dénomination -->
        <h4> Dénomination :</h4>
        <table width="95%" border="1" cellpadding="10">
          <tbody>
            <tr align="center">
              <td>
                <div class="row">
                  <div class="column">
                    <figure><img src="images/lion.jpg" align=center height="125px" width="200px" /></figure>
                  </div>
                </div>
              </td>
              <td>
                <div class="row">
                  <div class="column">
                    <figure><img src="images/rhinoceros.jpg" align=center height="125px" width="200px" /></figure>
                  </div>
                </div>
              </td>
              <td>
                <div class="row">
                  <div class="column">
                    <figure><img src="images/dromadaire.png" align=center height="125px" width="200px"/></figure>
                  </div>
                </div>
              </td>
            </tr>
            <tr align="center">
              <td>
                <input type="radio" name="Lion" value="J" /> 1 <input type="radio" name="Lion" value="F"> 0 <input type="text" name="rep1_denomination" id="rep1_denomination" placeholder="Réponse...">
              </td>
              <td>
                <input type="radio" name="Rhino" value="J" /> 1 <input type="radio" name="Rhino" value="F"> 0 <input type="text" name="rep2_denomination" id="rep2_denomination" placeholder="Réponse...">
              </td>
              <td>
                <input type="radio" name="Droma" value="J" /> 1 <input type="radio" name="Droma" value="F"> 0 <input type="text" name="rep3_denomination" id="rep3_denomination" placeholder="Réponse...">
                </td>
              </tr>

          </tbody>
        </table></table>
        Commentaire :<br><textarea name="Com" id="Com_RepMeme" placeholder="Ecrivez un commentaire..."></textarea></textarea>
        <!--- Partie mémoire-->
        <h4> Mémoire :</h4>
        <table width="95%" border="1" cellpadding="10">
          <tbody>
            <tr>
              <label> Lire la liste de mots, le sujet doit la répéter. Faire 2 essais même si le 1er essai est réussi. Faire un rappel après 5 minutes : </label><br>
            </tr><br>
            <tr align="center">
              <td> </td>
              <th> VISAGE </th>
              <th> VELOURS </th>
              <th> EGLISE </th>
              <th> MARGUERITE </th>
              <th> ROUGE </th>
            </tr>
            <tr align="center">
              <th> 1er Essai </th>
              <td> <input type="text" id="rep1_memoire" name="rep1_memoire" placeholder="Réponse..."><br><input type="radio" name="Visage_1" value="J" /> 1 <input type="radio" name="Visage_1" value="F"> 0 <br></td>
              <td> <input type="text" id="rep2_memoire" name="rep2_memoire" placeholder="Réponse..."><br><input type="radio" name="Velours_1" value="J" /> 1 <input type="radio" name="Velours_1" value="F"> 0 <br></td>
              <td> <input type="text" id="rep3_memoire" name="rep3_memoire" placeholder="Réponse..."><br><input type="radio" name="Eglise_1" value="J" /> 1 <input type="radio" name="Eglise_1" value="F"> 0 <br></td>
              <td> <input type="text" id="rep4_memoire" name="rep4_memoire" placeholder="Réponse..."><br><input type="radio" name="Marguerite_1" value="J" /> 1 <input type="radio" name="Marguerite_1" value="F"> 0 <br></td>
              <td> <input type="text" id="rep5_memoire" name="rep5_memoire" placeholder="Réponse..."><br><input type="radio" name="Rouge_1" value="J" /> 1 <input type="radio" name="Rouge_1" value="F"> 0 <br></td>
                <td>Commentaire :<br><textarea name="Com" id="Com_Memo1" placeholder="Ecrivez un commentaire..."></textarea></textarea></td>
            </tr>
            <tr align="center">
              <th> 2ème Essai </th>
              <td> <input type="text" id="rep1_bis_memoire" name="rep1_bis_memoire" placeholder="Réponse..."><br><input type="radio" name="Visage_2" value="J" /> 1 <input type="radio" name="Visage_2" value="F"> 0 <br></td>
              <td> <input type="text" id="rep2_bis_memoire" name="rep2_bis_memoire" placeholder="Réponse..."><br><input type="radio" name="Velours_2" value="J" /> 1 <input type="radio" name="Velours_2" value="F"> 0 <br></td>
              <td> <input type="text" id="rep3_bis_memoire" name="rep3_bis_memoire" placeholder="Réponse..."><br><input type="radio" name="Eglise_2" value="J" /> 1 <input type="radio" name="Eglise_2" value="F"> 0 <br></td>
              <td> <input type="text" id="rep4_bis_memoire" name="rep4_bis_memoire" placeholder="Réponse..."><br><input type="radio" name="Marguerite_2" value="J" /> 1 <input type="radio" name="Marguerite_2" value="F"> 0 <br></td>
              <td> <input type="text" id="rep5_bis_memoire" name="rep5_bis_memoire" placeholder="Réponse..."><br><input type="radio" name="Rouge_2" value="J" /> 1 <input type="radio" name="Rouge_2" value="F"> 0 <br></td>
                <td>Commentaire :<br><textarea name="Com" id="Com_Memo2" placeholder="Ecrivez un commentaire..."></textarea></textarea></td>
            </tr>
          </tbody>
        </table></br>
        <!--- Partie attention -->
        <h4>Attention :</h4>
        <table width="95%" border="1" cellpadding="10">
          <tbody>
            <tr>
              <label> Lire la série de chiffres (1 chiffre/seconde) : </label>
            </tr>
            <tr align="center">
              <th> Le sujet doit la répeter dans le même ordre:</th>
              <td>[2,1,8,5,4] </td>
              <td><input type="radio" name="Ordre" value="J" />1<br><input type="radio" name="Ordre" value="F">0</td><br>
                <td>Commentaire :<textarea name="Com" id="Com_RepMeme" placeholder="Ecrivez un commentaire..."></textarea></textarea></td>
            </tr>
            <tr align="center">
              <th> Le sujet doit la répeter à l'envers:</th>
              <td>[7,4,2] </td>
              <td><input type="radio" name="Envers" value="J" />1<br><input type="radio" name="Envers" value="F">0</td><br>
                <td>Commentaire :<textarea name="Com" id="Com_RepEnvers" placeholder="Ecrivez un commentaire..."></textarea></textarea></td>
            </tr>
            <tr align="center">
              <th> Lire la série de lettres. Le sujet doit taper de la main à chaque lettre A : <br> Pas de points si plus de 2 erreurs.</th>
              <td> [ F B A C M N A A J K L B A F A K D E A A A J A M O F A A B]</td>
              <td><input type="radio" name="Lettre" value="J" />1<br><input type="radio" name="Lettre" value="F">0</td><br>
                <td>Commentaire :<textarea name="Com" id="Com_SerieLet" placeholder="Ecrivez un commentaire..."></textarea></textarea></td>

            </tr>
        </table><br>
        <table width="95%" border="1" cellpadding="10">
          <tr align="center">
            <th colspan="4"> Soustraire par série de 7 à partir de 100. </th>
          <tr>
                <td> [<span id="NB_1_SOUS7">93</span>] <input type="number" name="rep1_attention" id="rep1_attention" oninput="controleInput(id,document)" placeholder="Réponse..." required /></td>
            <td><input type="radio" name="Attention_1" id="Attention_1_J" value="J"><label for="J"> Juste </label></td>
            <td><input type="radio" name="Attention_1" id="Attention_1_F"value="F"><label for="F"> Faux </label></td>
                <td>Commentaire :<br><textarea name="Com" id="Com_Sous1" placeholder="Ecrivez un commentaire..."></textarea></textarea></td>
          </tr>
            <script src="automatisation_moca.js">
            </script>
          <tr>
            <td> [<span id="NB_2_SOUS7">86</span>]  <input type="number" name="rep2_attention" id="rep2_attention" oninput="controleInput(id,document)" placeholder="Réponse..." required /></td>
            <td><input type="radio" name="Attention_2" id="Attention_2_J" value="J"><label for="J"> Juste </label></td>
            <td><input type="radio" name="Attention_2" id="Attention_2_F" value="F"><label for="F"> Faux </label></td>
              <td>Commentaire :<br><textarea name="Com" id="Com_Sous2" placeholder="Ecrivez un commentaire..."></textarea></textarea></td>
          </tr>
          <tr>
            <td> [<span id="NB_3_SOUS7">79</span>] <input type="number" name="rep3_attention" id="rep3_attention" oninput="controleInput(id,document)" placeholder="Réponse..." required /></td>
            <td><input type="radio" name="Attention_3" id="Attention_3_J" value="J"><label for="J"> Juste </label></td>
            <td><input type="radio" name="Attention_3" id="Attention_3_F" value="F"><label for="F"> Faux </label></td>
              <td>Commentaire :<br><textarea name="Com" id="Com_Sous3" placeholder="Ecrivez un commentaire..."></textarea></textarea></td>
          </tr>
          <tr>
            <td> [<span id="NB_4_SOUS7">72</span>] <input type="number" name="rep4_attention" id="rep4_attention" oninput="controleInput(id,document)" placeholder="Réponse..." required /></td>
            <td><input type="radio" name="Attention_4" id="Attention_4_J" value="J"><label for="J"> Juste </label></td>
            <td><input type="radio" name="Attention_4" id="Attention_4_F"value="F"><label for="F"> Faux </label></td>
              <td>Commentaire :<br><textarea name="Com" id="Com_Sous4" placeholder="Ecrivez un commentaire..."></textarea></textarea></td>
          </tr>
          <tr>
            <td> [<span id="NB_5_SOUS7">65</span>] <input type="number" name="rep5_attention" id="rep5_attention" oninput="controleInput(id,document)" placeholder="Réponse..." required /></td>
            <td><input type="radio" name="Attention_5" id="Attention_5_J" value="J"><label for="J"> Juste </label></td>
            <td><input type="radio" name="Attention_5" id="Attention_5_F"value="F"><label for="F"> Faux </label></td>
              <td>Commentaire :<br><textarea name="Com" id="Com_Sous5" placeholder="Ecrivez un commentaire..."></textarea></textarea></td>
          </tr>
          </tbody>
        </table></br>
        <!--- Partie langage -->
        <h4> Langage :</h4>
        <table width="95%" border="1" cellpadding="10">
          <tbody>
            <tr align="center">
              <th ROWSPAN="2" width="40%"> Répeter : </th>
              <td width="40%"> Le colibri a déposé ses œufs sur le sable.</td>
              <td><input type="radio" name="Colibri" value="J" /> 1 <input type="radio" name="Colibri" value="F"> 0 </td><br>
                <td>Commentaire :<br><textarea name="Com" id="Com_RepColi" placeholder="Ecrivez un commentaire..."></textarea></textarea></td>
            </tr>
            <tr align="center">
              <td width="40%"> L’argument de l’avocat les a convaincu.</td>
              <td><input type="radio" name="Avocat" value="J" /> 1 <input type="radio" name="Avocat" value="F"> 0 </td><br>
                <td>Commentaire :<br><textarea name="Com" id="Com_RepAvocat" placeholder="Ecrivez un commentaire..."></textarea></textarea></td>
            </tr>
            <tr align="center">
              <th width="40%"> Fluidité de langage.<br>Nommer un maximum de mots commençant par la lettre « F » en 1 min. </th>
              <td> Nombre de mots (N >= 11) :
              <td><input type="number" id="rep1_langage" name="rep1_langage" placeholder="Réponse..."></td>
                <td>Commentaire :<br><textarea name="Com" id="Com_FluLang" placeholder="Ecrivez un commentaire..."></textarea></textarea></td>
            </tr>
          </tbody>
        </table></br>
        <!--- Partie abstraction -->
        <h4> Abstraction :</h4>
        <table width="95%" border="1" cellpadding="10">
          <tbody>
            <tr align="center">
              <th> Similitude entre (ex : banane - orange = fruit) : </th>
              <td> Train - Bicyclette </td>
              <td><input type="text" id="rep1_abstraction" name="rep1_abstraction" placeholder="Réponse..."><br><input type="radio" name="Train" value="J" /> 1 <input type="radio" name="Train" value="F"> 0 </td><br>
              <td> Montre - Règle </td>
              <td><input type="text" id="rep2_abstraction" name="rep2_abstraction" placeholder="Réponse..."><br><input type="radio" name="Montre" value="J" /> 1 <input type="radio" name="Montre" value="F"> 0 </td><br>
                <td>Commentaire :<br><textarea name="Com" id="Com_Abstraction" placeholder="Ecrivez un commentaire..."></textarea></textarea></td>
            </tr>
          </tbody>
        </table></br>
        <!--- Partie rappel -->
        <h4> Rappel :</h4>
        <table width="95%" border="1" cellpadding="10">
          <tbody>
            <tr align="center">
              <th ROWSPAN="4" width="10%"> Memory Index Score (MIS) </th>
              <th width="4%"> (MIS) </th>
              <th width="10%"> Doit se souvenir des mots </th>
              <th> VISAGE </th>
              <th> VELOURS </th>
              <th> EGLISE </th>
              <th> MARGUERITE </th>
              <th> ROUGE </th>
                <th>Commentaires</th>
            </tr>
            <tr align="center" id="RappelPart1">
              <td><label> x3 </label> </td>
              <td><label> Sans indice: </label> </td>
              <td> <input type="text" id="rep1_rappel" name="rep1_rappel" size="7" placeholder="Réponse..."><input type="checkbox" name="Visage_3" value="J" id="rep1_check" onclick="affichSuite(id,document)" /></td>
              <td> <input type="text" id="rep2_rappel" name="rep2_rappel" size="7" placeholder="Réponse..."><input type="checkbox" name="Velours_3" value="J" id="rep2_check" onclick="affichSuite(id,document)"/></td>
              <td> <input type="text" id="rep3_rappel" name="rep3_rappel" size="7" placeholder="Réponse..."><input type="checkbox" name="Eglise_3" value="J" id="rep3_check" onclick="affichSuite(id,document)"/></td>
              <td> <input type="text" id="rep4_rappel" name="rep4_rappel" size="7" placeholder="Réponse..."><input type="checkbox" name="Marguerite_3" value="J" id="rep4_check" onclick="affichSuite(id,document)"/></td>
              <td> <input type="text" id="rep5_rappel" name="rep5_rappel" size="7" placeholder="Réponse..."><input type="checkbox" name="Rouge_3" value="J" id="rep5_check" onclick="affichSuite(id,document)"/></td>
                <td>Commentaire :<br><textarea name="Com" id="Com_Rappel1" placeholder="Ecrivez un commentaire..."></textarea></textarea></td>
            </tr>

            <tr align="center" id="RappelPart2" >
              <td><label> x2 </label> </td>
              <td> <label> Indice de catégorie : </label></td>
              <td> <input type="text" id="rep6_rappel" name="rep6_rappel" size="7" placeholder="Réponse..." ><input type="checkbox" name="Visage_4" value="J" id="rep6_check" onclick="affichSuite(id,document)"/></td>
              <td> <input type="text" id="rep7_rappel" name="rep7_rappel" size="7" placeholder="Réponse..." ><input type="checkbox" name="Velours_4" value="J" id="rep7_check" onclick="affichSuite(id,document)"/></td>
              <td> <input type="text" id="rep8_rappel" name="rep8_rappel" size="7" placeholder="Réponse..." ><input type="checkbox" name="Eglise_4" value="J" id="rep8_check" onclick="affichSuite(id,document)"/></td>
              <td> <input type="text" id="rep9_rappel" name="rep9_rappel" size="7" placeholder="Réponse..." ><input type="checkbox" name="Marguerite_4" value="J" id="rep9_check" onclick="affichSuite(id,document)"/></td>
              <td> <input type="text" id="rep10_rappel" name="rep10_rappel" size="7" placeholder="Réponse..." ><input type="checkbox" name="Rouge_4" value="J" id="rep10_check" onclick="affichSuite(id,document)"/></td>
                <td>Commentaire :<br><textarea name="Com" id="Com_Rappel2" placeholder="Ecrivez un commentaire..."></textarea></textarea></td>
            </tr>
            <tr align="center" id="RappelPart3">
              <td> <label> x1 </label></td>
              <td> <label> Indice choix multiples : </label></td>
              <td> <input type="text" id="rep11_rappel" name="rep11_rappel" size="7" placeholder="Réponse..." ><input type="checkbox" name="Visage_5" value="J" id="rep11_check" onclick="affichSuite(id,document)"/></td>
              <td> <input type="text" id="rep12_rappel" name="rep12_rappel" size="7" placeholder="Réponse..." ><input type="checkbox" name="Velours_5" value="J" id="rep12_check" onclick="affichSuite(id,document)"/></td>
              <td> <input type="text" id="rep13_rappel" name="rep13_rappel" size="7" placeholder="Réponse..." ><input type="checkbox" name="Eglise_5" value="J" id="rep13_check" onclick="affichSuite(id,document)"/></td>
              <td> <input type="text" id="rep14_rappel" name="rep14_rappel" size="7" placeholder="Réponse..." ><input type="checkbox" name="Marguerite_5" value="J" id="rep14_check" onclick="affichSuite(id,document)"/></td>
              <td> <input type="text" id="rep15_rappel" name="rep15_rappel" size="7" placeholder="Réponse..." ><input type="checkbox" name="Rouge_5" value="J" id="rep15_check" onclick="affichSuite(id,document)"/></td>
                <td>Commentaire :<br><textarea name="Com" id="Com_Rappel3" placeholder="Ecrivez un commentaire..."></textarea></textarea></td>
            </tr>
          </tbody>
        </table><br>
        <!--- Partie orientation -->
        <h4> Orientation :</h4>
        <table width="95%" border="1" cellpadding="10">
          <tbody>
            <tr align="center">
              <th> Date </th>
              <td><input type="radio" name="Date" value="J" /> 1 <input type="radio" name="Date" value="F"> 0 </td><br>
              <th> Mois </th>
              <td><input type="radio" name="Mois" value="J" /> 1 <input type="radio" name="Mois" value="F"> 0 </td><br>
              <th> Année </th>
              <td><input type="radio" name="Année" value="J" /> 1 <input type="radio" name="Année" value="F"> 0 </td><br>
                <td>Commentaire :<br><textarea name="Com" id="Com_Orientation1" placeholder="Ecrivez un commentaire..."></textarea></textarea></td>
            </tr>

            <tr align="center">
              <th> Jour </th>
              <td><input type="radio" name="Jour" value="J" /> 1 <input type="radio" name="Jour" value="F"> 0 </td><br>
              <th> Endroit </th>
              <td><input type="radio" name="Endroit" value="J" /> 1 <input type="radio" name="Endroit" value="F"> 0 </td><br>
              <th> Ville </th>
              <td><input type="radio" name="Ville" value="J" /> 1 <input type="radio" name="Ville" value="F"> 0 </td><br>
                <td>Commentaire :<br><textarea name="Com" id="Com_Orientation2" placeholder="Ecrivez un commentaire..."></textarea></textarea></td>
            </tr>
          </tbody>
        </table></br>
        <input type="submit" value="Valider les réponses" name="insertion" />
        <input type="hidden" name="version" value="1">
    </form>
</body>

</html>