<!DOCTYPE html>
<html>
<head>
<style>
    form{
    margin-left:auto;
    margin-right:auto;
    width:500px;
    }
</style>
<title>ajouter benne</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<style>
  body {
  justify-content: center;
  align-items: center;
}   
</style>
</head>
<body>

<form action="../functions/demandeaction.php" method="post">
<h1>Demande emplacement</h1>
  <div class="form-group">
    <label for="location">Location</label>
    <input type="text" class="form-control" id="location"  placeholder="Enter la localisation" name="location">  
  </div>
  <div class="form-group">
    <label for="storage">Storage</label>
    <input type="number" class="form-control" id="storage" name="storage" placeholder="Entrez  storage">
  </div>
  
  <button type="submit" class="btn btn-primary">Demander </button>
</form>
<?php
if(isset($_REQUEST['retour']))
{
  $res=$_REQUEST['retour'];
  if($res)
  echo "<center><b><span style='color:green'>demande envoyée ajout avec succés</span></b></center>";
  else
  echo "<center><b><span style='color:red'>erreur d'envoi</span></b></center>";
}
?>
</body>
</html>
