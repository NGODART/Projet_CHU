
<!doctype html>
<html>
<head>


	<title>Chronomètre</title>
	<meta charset="utf-8">
	<style type="text/css">

      .chronometre{
        margin: auto ;
        width: 60%;
        text-align: center;
          padding: 10px;
          border: 1px solid #f1f1f1;
          background: #fff;
          box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);

      }
      .tim{
      	margin: auto;
      	width: 90%;
      	border: 1px solid rgba(0,0,0,0.5);
      	padding:5px 0;
      	text-align: center;
      	font-size: 1.5em;
      	font-family: digital;
      	margin-bottom: 10px;


      }
	</style>
</head>
<body>

<div class="chronometre">
    <h3>Chronomètre : </h3>
  <div class="tim">
  	<span >0 seconde</span>

  </div>
  <button id="start" onclick="start()">Start</button>
  <button id="stop" onclick="stop()" >Stop</button>
  <button id="reset" onclick="reset()" >Reset</button>
</div>

  
</body>
</html>

<script type="text/javascript">
  /*la fonction getElementByTagName renvoie une liste des éléments portant le nom de balise donné ici "span".*/
  var sp = document.getElementsByTagName("span");
  var btn_start=document.getElementById("start");
  var btn_stop=document.getElementById("stop");
  var t;
  var ms=0,s=0;
   
   /*La fonction "start" démarre un appel répétitive de la fonction update_chrono par une cadence de 100 milliseconde en utilisant setInterval et désactive le bouton "start" */

  function start(){
   t =setInterval(update_chrono,100);
   btn_start.disabled=true;
  
  }
  /*La fonction update_chrono incrémente le nombre de millisecondes par 1 <==> 1*cadence = 100 */
  function update_chrono(){
    ms+=1;
    /*si ms=10 <==> ms*cadence = 1000ms <==> 1s alors on incrémente le nombre de secondes*/
       if(ms==10){
        ms=0;
        s+=1;
       }

       /*afficher les nouvelle valeurs*/
       sp[0].innerHTML=s+" secondes";

  }
  
	/*on arrête le "timer" par clearInterval ,on réactive le bouton start */
	function stop(){
    clearInterval(t);
    btn_start.disabled=false;

		
	}
  /*dans cette fonction on arrête le "timer" ,on réactive le bouton "start" et on initialise les variables à zéro */
  function reset(){
   clearInterval(t);
    btn_start.disabled=false;
    ms=0,s=0;
    /*on accède aux différents span par leurs indice*/
    sp[0].innerHTML=s+" seconde";
      }
</script>
