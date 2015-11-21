<?php
echo("bonjour");
echo("<br>");
$mysqli= new mysqli("127.0.0.1", "root", "root", "rsxSociables1");
if ($mysqli->connect_errno) {
	echo "<u><b>Serveur SQL inaccessible</b></u>: " . $mysqli->connect_error;
};
$req="set names utf8";
$mysqli->query($req);
if ($mysqli->connect_errno) {
	echo "<u><b>Probleme utf8</b></u>: " . $mysqli->connect_error;
};
$idUt=$_POST['id'];
$mdpUt=$_POST['mdp'];
echo($idUt);
echo($mdpUt);
echo("<br>");
	
$req="select * from utilisateur where Uti_Id='$idUt' and Uti_Mdp='$mdpUt'";
$resultat = mysqli_query ($mysqli, $req);
	if ($bd=mysqli_fetch_array ($resultat)){
		echo("lala");
	}else{
		header('Location: http://127.0.0.1/projets/reseaux-sociables/pageconnexion.php');
		exit();
};
	echo("au revoir");
?>
