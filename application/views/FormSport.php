<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="<?php echo   site_url('sportAdmin/updateSport');?>" method="post">
    <input type="hidden" value="<?php  echo $idSport; ?>" name="idSport" id="duree">
     <br/>
     <br/>
  <label for="sakafo">NomSport</label>
    <input type="text" name="nom" id="nom">
    <br/>
    <br/>    
     <button type="submit">Modifier</button>
     </form>
</body>
</html>