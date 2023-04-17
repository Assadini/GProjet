<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<style>
    *{
      font-family:monospace;
    }
		.project-table {
  width: 100%;
  margin: 20px 0;
  border: 2px solid black;
  border-radius: 10px;
  border-collapse:collapse;
}

.project-table th {
  background-color: #D7D7D7;
  border: 1px solid black;
  padding: 10px;
  text-align: center;
}

.project-table td {
  border: 1px solid black;
  padding: 10px;
}

.delete-btn, .planifier-btn, .details-btn, .gantt-btn {
  display: inline-block;
  padding: 5px 10px;
  border: none;
  border-radius: 2px;
  color: #fff;
  text-decoration: none;
  margin-right: 10px;
  font-weight: bold;
}

.delete-btn {
  background-color: #A71D31;
}

.planifier-btn {
  background-color: #00B712;
}

.details-btn {
  background-color: #20DED3;
}

.gantt-btn {
  background-color: #0CBABA;
}
.delete-btn,
.planifier-btn,
.details-btn,
.gantt-btn {
  display: inline-block;
  padding: 5px 10px;
  border: none;
  border-radius: 3px;
  color: #fff;
  text-decoration: none;
  margin-right: 10px;
  font-weight: bold;
  transition: all 0.4s ease-in-out;
}

.delete-btn:hover,
.planifier-btn:hover,
.details-btn:hover,
.gantt-btn:hover {
  transform: scale(1.2);
}

.delete-btn {
  background-color: #A71D31;
}

.planifier-btn {
  background-color: #00B712;
}

.details-btn {
  background-color: #20DED3;
}

.gantt-btn {
  background-color: #0CBABA;
}
.project-heading {
  font-size: 50px;
  font-weight: bold;
  color: #333;
  text-align: center;
  margin-top: 20px;
  margin-bottom: 10px;
}
@import url('https://fonts.googleapis.com/css2?family=Satisfy&display=swap');

        h1 {
            font-family: "Satisfy", cursive;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            letter-spacing: 0px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            scroll-behavior: smooth;
            margin: 0;
        }

        

        h1 {
            font-size: 40px;
            font-family:monospace;
        }

	</style>
</head>
<body>
<?php
echo '<h1 class="project-heading">Gestionnaire De Projets</h1>';
echo '<table class="project-table">
      <tr><th>Numéro</th><th>Titre</th><th>Date de début</th><th>Date de fin</th><th>Description</th><th colspan="4">Action</th></tr>';
$i=1;
foreach( $this->projets as $projet){
echo '<tr><td>'.$i++.'</td><td>'.$projet['Titre'].'</td><td>'.$projet['DatDebut'].'</td><td>'.$projet['DateFin'].'</td><td>'.$projet['Description'].'</td></td>
      <td><a class="planifier-btn" href="../TaskController/add/'.$projet['Id'].'">Planifier</td>
      <td><a class="details-btn" href="../ProjetController/details/'.$projet['Id'].'">Détails</td>
      <td><a class="delete-btn" href="../projetController/delete/'.$projet['Id'].'">Supprimer</td>
	    <td><a class="gantt-btn" href="../ProjetController/summury/'.$projet['Id'].'">Générer Gantt</td>
	  </tr>';
}
echo '</table>';
?>

</body>
</html>