
<?php
  $testo="1. Un robot non può recar danno a un essere umano né può permettere che, a causa del proprio mancato intervento, un essere umano riceva danno.
          2. Un robot deve obbedire agli ordini impartiti dagli esseri umani, purché tali ordini non contravvengano alla Prima Legge.
          3. Un robot deve proteggere la propria esistenza, purché questa autodifesa non contrasti con la Prima e con la Seconda Legge.";
  #parola da censurare nel Url
  $badword=$_GET["badword"];
  $replace="***";
  
  # misuro la lunghezza della stringa con strlen
  $size=strlen($testo);

  #cerco la badword nella stringa
  //var_dump(strpos($testo,$badword));

  #sostituiso la badword trovata con "***"
  $testo_censurato=str_replace($_GET["badword"], $replace, $testo);
  

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TRE LEGGI DELLA ROBOTICA</h1>
     <div>
         <?php  echo $testo?>
         <br><br>


         <h3>
             lunghezza del testo:
             <?php echo $size?> 
         </h3>
     </div>

     <br><br>
     <div>
         <!--stampo il testo censurato-->
         <?php echo $testo_censurato ?>
     </div>


</body>


</html>