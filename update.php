<?php include 'update.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="update.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Update</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="name"></label>
		     <input type="name" 
		           class="form-control" 
		           id="name" 
		           name="name" 
		           value="<?=$row['name'] ?>" >
		   </div>
		   <div class="form-group">
		     <label for="name">nom_salle</label>
		     <input type="name" 
		           class="form-control" 
		           id="name" 
		           name="name" 
		           value="<?=$row['nom_salle'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="password">capacité</label>
		     <input type="password" 
		           class="form-control" 
		           id="password" 
		           name="password" 
		           value="<?=$row['capacite'] ?>" >
		   </div>
		   <div class="form-group">
		     <label for="password">disponibilité</label>
		     <input type="password" 
		           class="form-control" 
		           id="password" 
		           name="password" 
		           value="<?=$row['disponibilite'] ?>" >
		   </div>
		   

		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Update</button>
				  
	   
		    <a href="creation.php" class="link-primary"></a>
	    </form>
	</div>
</body>
</html>