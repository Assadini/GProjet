<html>
	<head>
	<style>
			body {
				font-family: monospace;
				background-color: #D7D7D7;
			}
			form {
				background-color: #fff;
				border: 1px solid black;
				padding: 20px;
				margin: 20px auto;
				max-width: 500px;
				border-radius:10px;
			}
			form label {
				display: block;
				margin-bottom: 5px;
				font-weight: bold;
			}
			form input[type="text"],
			form input[type="date"],
			form textarea {
				width: 100%;
				padding: 8px;
				border: 1px solid black;
				border-radius: 4px;
				box-sizing: border-box;
				margin-bottom: 10px;
				font-size: 16px;
			}
			form button[type="submit"],
			form button[type="reset"] {
				background-color: #00B712;
				color: #fff;
				border: none;
				padding: 10px 20px;
				margin-top: 10px;
				font-size: 16px;
				cursor: pointer;
				border-radius: 4px;
				transition: background-color 0.3s ease;
				transition: all 0.4s ease-in-out;
			}
			form button[type="submit"]:hover,
			form button[type="reset"]:hover{
				background-color: #00B712;
				color: #fff;
				border: none;
				padding: 10px 20px;
				margin-top: 10px;
				font-size: 16px;
				cursor: pointer;
				border-radius: 4px;
				transition: background-color 0.3s ease;
				transform: scale(0.9);
			}
			h1 {
            font-family:monospace;
			font-size: 30px;
        }

		</style>
	</head>
	<body>
		<center><h1>Ajouter une Tache</h1></center>
		<form action="TaskController/add" method="post" >
		<input type="hidden" name="projetID" value=" <?php echo $this->projetId; ?>">
		<label> Nom</label>
		<input type="text" name="nom"><br>
		<label> Date De Début </label>
		<input type="text" name="debut"><br>
		<label> Date De Fin </label>
		<input type="text" name="fin"><br>
		
		<button type="submit" >Ajouter</button>
		<button type="reset" >Annuler</button>
		</form>
	</body>

</html>