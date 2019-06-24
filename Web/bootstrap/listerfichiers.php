		  <?php
	$dir=dirname($_SERVER['PHP_SELF']);
		echo ' <div  class="container">';
	echo '	<div class="col-12">';         
	echo '	<div class="row justify-content-center">';
	//echo " <img   src='/php/eden/web/".$basedir."/Logo/logo.png'> ";
	echo " <img   src='".$dir."/Logo/logo.png'> ";
	echo '	</div>';
	  echo '      </div>';
      echo '   </div>';
		 ?>
		 
		<div  class="container">
		<div class="row">
			<div class="col-3">
				<p ><b>Logo</b></p>
			</div>
			<div class="col-3">
				<p ><b>Nom</b></p>
			</div>
			<div class="col-3">
				<p ><b>Taille</b></p>
			</div>
			<div class="col-3">
				<p><b>Type</b></p>
			</div>
		</div>
		
	<div  class="container">
			  <?php
	$dossier = './';
	$dir=dirname($_SERVER['PHP_SELF']);
	//$tab = explode('/',str_replace("\\","/",getcwd()));
	//$basedir =  $tab[sizeOf($tab)-1];
	$iterator = new DirectoryIterator($dossier);
	foreach($iterator as $fichier)
	{
		echo '<div class="row ">';
		echo '	<div class="col-3">';
		if(!$fichier->isDot())
	  {
			$ext = pathinfo($fichier, PATHINFO_EXTENSION);
			if ($fichier!='doc.png' && $fichier!='language.png' && !is_dir($dossier.'/'.$fichier)
			&& $fichier!='image.png' && $fichier!='listerfichiers.php'
			&& $fichier!='pdf.png' && $fichier!='logo.png' && $fichier!='psd.png'
			&& $fichier!='rar.png' && $fichier!='audio.png'
			&& $fichier!='txt.png' && $fichier!='video.png')
			{
			if($ext=='jpg' || $ext=='png' || $ext=='bmp' || $ext=='jpeg' || $ext=='raw')
			{
			echo "<img src='".$dossier."/Logo/image.png'>";
			}
			elseif($ext=='wmv' || $ext=='mp4' || $ext=='mkv' || $ext=='avi')
			{
			echo "<img src='".$dossier."/Logo/video.png'>";
			}
			elseif($ext=='mp3' || $ext=='wav' || $ext=='ogg' || $ext=='flac' || $ext=='wma')
			{
			echo "<img src='".$dossier."/Logo/audio.png'>";
			}
			elseif($ext=='html'|| $ext=='php' || $ext=='css' || $ext=='cs' || $ext=='py' || $ext=='java' || $ext=='c' || $ext=='js')
			{
			echo "<img src='".$dossier."/Logo/language.png'>";
			}
			elseif($ext=='pdf')
			{
		    echo "<img src='".$dossier."/Logo/pdf.png'>";
			}
			elseif($ext=='txt')
			{
			echo "<img src='".$dossier."/Logo/txt.png'>";
			}
			elseif($ext=='rar' || $ext=='zip')
			{
			echo "<img src='".$dossier."/Logo/rar.png'>" ;
			}
			elseif($ext=='docx' || $ext=='rtf' || $ext=='odt' || $ext=='doc' || $ext=='rtf')
			{
			echo "<img src='".$dossier."/Logo/doc.png'>" ;
			}
			elseif($ext=='psd' || $ext=='pdd' || $ext=='psdt')
			{
			echo "<img src='".$dossier."/Logo/psd.png'>" ;
			} 				
			}
	  }
		echo '	</div>';
		echo '	<div class="col-3">';
		if ($fichier!='doc.png' && $fichier!='language.png' && !is_dir($dossier.'/'.$fichier)
			&& $fichier!='image.png' && $fichier!='listerfichiers.php'
			&& $fichier!='pdf.png' && $fichier!='logo.png' && $fichier!='psd.png'
			&& $fichier!='rar.png' && $fichier!='audio.png'
			&& $fichier!='txt.png' && $fichier!='video.png')
			{
	  if(!$fichier->isDot())
	  {
		    echo '<a href="'.$dir.'/'.$fichier->getFilename().'"target="_blank">'.explode('.',$fichier->getFilename())[0].'</a>';	  
	  }
			}	
		echo '	</div>';
		echo '	<div class="col-3">';
		if ($fichier!='doc.png' && $fichier!='language.png' && !is_dir($dossier.'/'.$fichier)
			&& $fichier!='image.png' && $fichier!='listerfichiers.php'
			&& $fichier!='pdf.png' && $fichier!='logo.png' && $fichier!='psd.png'
			&& $fichier!='rar.png' && $fichier!='audio.png'
			&& $fichier!='txt.png' && $fichier!='video.png')
			{
	  if(!$fichier->isDot())
	  {
		  
			$size1= ($fichier->getSize()/1024);
			$size2 = ($fichier->getSize()/1048576);
			$size3 = ($fichier->getSize()/1073741824);
			$size11=number_format($size1, 2);
			$size12=number_format($size2, 2);
			$size13=number_format($size3, 2);
			if($size1==0)
			{
			echo '1 ko';	
			}
			elseif($size1>1024 && $size1<1048576)
			{
				echo ''.$size12.' mo';
			}
			elseif($size1>1048576)
			{
				echo ''.$size13.' go';
			}
			else
			{
		    echo ''.$size11.' ko';	
			}			
	  }
			}	
		echo '	</div>';
		echo ' <div class="col-3">';
		if ($fichier!='doc.png' && $fichier!='language.png' && !is_dir($dossier.'/'.$fichier)
			&& $fichier!='image.png' && $fichier!='listerfichiers.php'
			&& $fichier!='pdf.png' && $fichier!='logo.png' && $fichier!='psd.png'
			&& $fichier!='rar.png' && $fichier!='audio.png'
			&& $fichier!='txt.png' && $fichier!='video.png')
			{
	  if(!$fichier->isDot())
	  {
		    $ext = pathinfo($fichier, PATHINFO_EXTENSION);
		    echo '<pre style="font-size: 100%" >  '.$ext.'</pre>';
	  }
			}
		echo ' </div>';
		echo '</div>';
	}	
        ?>
		</div> 