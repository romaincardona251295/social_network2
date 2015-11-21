<DOCTYPE html>
    <html>
    <head>
        <title>Site test</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
		<div>
			<form name="form-co" id="form-co" action="connexion.php" method="post">
				<input type ="text" name="id" id="id" value ="Identifiant">
				<input  type ="text" name="mdp" id="mdp" value ="Mot de passe">
				<input type="submit" name="connexGo" id="connexGo">
			</form>
			Pas de compte ? <a href = inscription.php>Inscrivez-vous !</a>
		</div
		
		<?php
            session_start ();
            if(isset ($_SESSION["erreur"]))
            {
                echo("<br/>");
                echo($_SESSION["erreur"]);
            };
            $_SESSION["erreur"]="";
        ?>
        
	</body>
	
