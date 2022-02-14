
<?php
  $testo="1. Un robot non può recar danno a un essere umano né può permettere che, a causa del proprio mancato intervento, un essere umano riceva danno.
          2. Un robot deve obbedire agli ordini impartiti dagli esseri umani, purché tali ordini non contravvengano alla Prima Legge.
          3. Un robot deve proteggere la propria esistenza, purché questa autodifesa non contrasti con la Prima e con la Seconda Legge.";
  $badword=$_GET["badword"];
  
  # misuro la lunghezza della stringa con strlen
  $size=strlen($testo);
  

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
    
     <div>
         <h3>
             <?php  echo $testo?>
         </h3>
         <h3>
             <br><br>

             <?php echo $size?> 
         </h3>
     </div>


</body>


</html>