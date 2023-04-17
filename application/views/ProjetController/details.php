<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>/* Table styles */
	@import url('https://fonts.googleapis.com/css2?family=Satisfy&display=swap');
table {
  border:1px solid black;
  border-collapse: collapse;
  width: 100%;
  margin: 20px 0;
  font-size: 18px;
  font-family:monospace;
}

th,
td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
  font-weight: bold;
}

h1 {
  font-size: 24px;
  margin-bottom: 10px;
}


.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

button {
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 3px;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  transition: all 0.2s ease-in-out;
  margin-right: 10px;
}

button:hover {
  background-color: #0069d9;
}

th {
  background-color: #D7D7D7;
  color: black;
}



        h1 {
            font-family: monospace;
        }

        
</style>
</head>
<body>
<?php 
echo '<center><h1>Informations générales :</h1></center>';
echo '<table border=1> 
     <tr><th>Titre</th><td>'.$this->details['Titre'].'</td><tr>
	 <tr><th>Dèbut</th><td>'.$this->details['DatDebut'].'</td><tr>
	 <tr><th>Fin</th><td>'.$this->details['DateFin'].'</td><tr>
	 <tr><th>Déscription</th><td>'.$this->details['Description'].'</td><tr>
	 </table>';
if(sizeof($this->details['tasks'])){
	echo '<center><h1>Liste des tâches :</h1></center>';
	echo '<table border=1><tr><th>N°</th><th>Tache</th><th>Début</th><th>Fin</th></tr>';
	$i=1;
	foreach($this->details['tasks'] as $task){
		echo '<tr><td>'.$i++.'</td><td>'.$task['Nom'].'</td><td>'.$task['Debut'].'</td><td>'.$task['Fin'].'</td></tr>';
	}
	echo'</table>';
}

?>
</body>
</html>