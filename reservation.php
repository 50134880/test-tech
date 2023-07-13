<!DOCTYPE html>
<html>
<head>
	<title>Create reservation</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/createcourse.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Créer reservation</h4><hr><br>
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
		     <label for="date">date</label>
		     <input type="date" 
		           class="form-control" 
		           id="date" 
		           name="date" 
		           value="<?php if(isset($_GET['date']))
		                           echo($_GET['date']); ?>"
		           placeholder="Enter date">
		   </div>
       <div class="form-group">
		     <label for="heure">heure de debut</label>
		     <input type="heure" 
		           class="heure" 
		           id="heure" 
		           name="heure" 
		           value="<?php if(isset($_GET['heure-debut']))
		                           echo($_GET['heure-debut']); ?>"
		           placeholder="Enter hour">
		   </div>
       <div class="form-group">
		     <label for="heure">heure de fin</label>
		     <input type="heure" 
		           class="heure" 
		           id="heure" 
		           name="heure" 
		           value="<?php if(isset($_GET['heure-fin']))
		                           echo($_GET['heure-fin']); ?>"
		           placeholder="Enter hour">
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