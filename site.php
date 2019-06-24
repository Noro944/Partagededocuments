<!DOCTYPE html>
<!-- <a href="#" onClick="envoieRequete('./partagedocuments/listerfichiers.php','resultat');">Lien</a>-->
<html lang="fr">
    <head>
	<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="Alexanian Norair">
    <!-- <meta rel="icon" href="pics\logo.ico">-->
      <link rel="stylesheet" href="main page\dist\css\bootstrap.min.css">
      <script src="main page\dist\js\jquery.min.js"></script>
      <script src="main page\dist\js\popper.min.js"></script>
      <script src="main page\dist\js\bootstrap.min.js"></script>
      <style>
        #pic
        {
        background-image: url('./main page/pics/1.png');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        }
		#banner
		{
			padding : 0px;
		}
      </style>
	</head>
    <body id ="pic">
        
		<div class="container-fluid">
			<div class="row">
				<div id="banner"  class="col-12">
					<img class="img-fluid" src="./main page/pics/3.jpg"> 
				</div>
				</div>
			 </div>
		<?php
		echo '<script>envoieRequete(url,url2,id,id2)</script>';
	echo'   <nav class="navbar navbar-expand-lg navbar-light bg-light ">';
    echo'   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" >';
     echo'  <span class="navbar-toggler-icon"></span>';
     echo'   </button>';
     echo'   <div class="collapse navbar-collapse" id="navbarSupportedContent">';
      echo'   <ul class="navbar-nav mr-auto">';
	 $dossier = './';
	$iterator = new DirectoryIterator($dossier);
	foreach($iterator as $fichier)
	{
		if (is_dir($fichier) && $fichier!='Logo' && $fichier!='Logo backup' 
			&& $fichier!='main page' && $fichier!='site back up'
			&& $fichier!='site.php' && $fichier!='logo.png' && $fichier!='psd.png'
			&& $fichier!='.gitattributes' && $fichier!='.git' && $fichier!='.' && $fichier!='..')
		{
			    echo' <li class="nav-item dropdown">';
				echo'  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
				echo'  <b>'.$fichier.'</b>';
				echo'  </a>';
		
		    echo '<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';  
			$dossier1 = './'.$fichier.'/';
			$iterator1 = new DirectoryIterator($dossier1);
			foreach($iterator1 as $file)
			{
				if ($file!='Logo' && $file!='Logo' && $file!='Logo backup' 
				&& $file!='main page' && $file!='site back up'
				&& $file!='site.php' && $file!='logo.png' && $file!='psd.png'
				&& $file!='.gitattributes' && $file!='.git' && $file!='.git' && $file!='.' && $file!='..')
				{
				echo' <a href="#" class="dropdown-item" onClick="envoieRequete(\'./'.$fichier.'/'.$file.'/listerfichiers.php\',\'1\') ">'.$file.'</a>';
				}
			}
			echo' </div>';
		    echo'</li>';
		}
	}
	echo'</ul>';
    echo'</div>';
     echo'</nav>';
	
		  ?>
		<div  class="container-fluid">
		<div class="row">
			<div id="1" class="col-md-12">
			</div>		
		</div>
		</div>
		
		
	<script>
function envoieRequete(url,id)
{
var xhr_object = null;
var position = id;
if(window.XMLHttpRequest) xhr_object = new XMLHttpRequest();
else
if (window.ActiveXObject) xhr_object = new ActiveXObject("Microsoft.XMLHTTP" );
// On ouvre la requete vers la page désirée
xhr_object.open("GET", url, true);
xhr_object.onreadystatechange = function()
{
if ( xhr_object.readyState == 4 && xhr_object.status== 200 )
{
// j'affiche dans la DIV spécifiées le contenu retourné par le fichier
document.getElementById(position).innerHTML = xhr_object.response;
}
}
xhr_object.send();
}
    </script>
    </body>
</html>