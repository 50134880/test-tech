<!DOCTYPE html>
<html>
<head>
	<title>Create salle</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/createcourse.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Créer salle</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="name">nom de salle</label>
		     <input type="name" 
		           class="form-control" 
		           id="name" 
		           name="name" 
		           value="<?php if(isset($_GET['nom_salle']))
		                           echo($_GET['nom_salle']); ?>" 
		           placeholder="Enter name">
		   </div>

		   <div class="form-group">
		     <label for="capacite">capacité</label>
		     <input type="capacite" 
		           class="form-control" 
		           id="capacite" 
		           name="capacite" 
		           value="<?php if(isset($_GET['capacite']))
		                           echo($_GET['capacite']); ?>"
		           placeholder="Enter capacity">
		   </div>
           <div class="form-group">
		     <label for="disponible">disponibilité</label>
		     <input type="disponible" 
		           class="disponible" 
		           id="disponible" 
		           name="disponible" 
		           value="<?php if(isset($_GET['disponibilite']))
		                           echo($_GET['disponibilite']); ?>"
		           placeholder="Enter disponibility">
		   </div>

		   <button type="submit" 
		          class="btn btn-primary"
		          name="create">Créer</button>
            <button type="submit" 
		          class="btn btn-primary"
		          name="create">Modifier</button>   
            <button type="submit" 
		          class="btn btn-primary"
		          name="create">Supprimer</button>         
		    
	    </form>
	</div>
</body>
</html>