<?php
    
	include_once('conf/funcion.php');
	include_once('conf/queries.php');
	
	$result0 = sql_do_query($sql4,'1');
          
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IUSM</title>

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"  rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="dist/css/poncho.min.css" rel="stylesheet">
        <link href="dist/css/icono-arg.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/styles.css">
       


    </head>
<body>
<!-- head-->
<div class="fixed-top">
	<div class="container-fluid bg-pna d-none d-lg-block" style="padding: 5px 0px 10px 0px; background-color: #1074A6; color: white; ">
	   <div class="container">
		   <div class="row">

				<div class="col-sm-12 col-md-12 col-lg-12 small text-right">

					<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
						<div class="jumbotron_bar">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 col-md-12 col-lg-12">
										  <ol class="breadcrumb pull-left" style="padding-bottom: 10px; padding-left: 15px; color: white;" >
											<li><a href="index.php" style="color: rgba(255, 255, 255, 0.5);">IUSM</a></li>
											<li><a href="index.php" style="color: white;">INICIO</a></li>
											
											
										</ol>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-0 col-sm-0 col-md-12 col-lg-8 col-xl-8" style="padding-top: 15px; float: right; align-content: center;">
						
						
						<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-6" style="text-align: right;"></div>
						

						<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-2" style="text-align: right;">
							<i class="icono-arg-telefono-neg" style="font-size: 14px;"></i> <span class="small text-light" style="font-size: 14px;"> +54 11 4512 1014</span>
						</div>

						<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-2" style="text-align: right;">
								  <i class="icono-arg-mail-1" style="font-size:14px"></i><span class="small text-light" style="font-size: 14px;"> informes.iusm@gmail.com</span>
						</div>	

						<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-2" style="text-align: right;">		
								  <a href="https://www.facebook.com/prefecturanavalar" target="_blank" class="pictogramanav"style="font-size: 16px"><i class="icono-arg-facebook-f-"></i></a>
							   <a href="https://twitter.com/PrefecturaNaval" target="_blank" class="pictogramanav" style="font-size: 16px"><i class="icono-arg-twitter-pajaro"></i></a>
							   <a href="https://www.youtube.com/c/prefecturanavalar" target="_blank" class="pictogramanav" style="font-size: 16px"><i class="icono-arg-youtube"></i></a>
							   <a href="https://www.instagram.com/prefecturanaval/" target="_blank" class="pictogramanav"style="font-size: 16px"><i class="icono-arg-instagram"></i></a>
						</div>   
					</div>
				
				</div>
			   </div>
		</div>
	</div>
</div>	
 
<!-- nav-->
		
<div class="container">		
	<div class="row">
	<nav class="navbar navbar-light shadow navbar-expand-lg " style="background-color: rgba(255,255,255,1); padding: 0px;">
		<div class=" container" style="padding:0px;">
			<a class="navbar-brand" href="index.php" style="padding:0px; width: 20%; height: 20%; margin-top: 10px"><img class="logomenu img-responsive" src="img/fragmentos/logo iusm.png"></a>
			<div class="nav-item-float">
			<ul class="nav nav-pills col-12 col-md-auto mb-2 justify-content-center mb-md-0" style="padding-top: 40px; float: right; text-decoration: none;">
				<li class="nav-item"><a href="index.php"> <i class="icono-arg-casa-negativo" style="color: black"></i> </a></li>
				<li class="nav-item"><a href="institucional.html" class="textomenu">INSTITUCIONAL</a></li>
				<li class="nav-item"><a href="carreras.php" class="textomenu">CARRERAS</a></li>
				<li class="nav-item"><a href="academica.html" class="textomenu">ACADÉMICA</a></li>
				<li class="nav-item"><a href="posgrado.html" class="textomenu">POSGRADO</a></li>
				<li class="nav-item"><a href="extension.html" class="textomenu">EXTENSIÓN</a></li>
				<li class="nav-item"><a href="revista/index.html" target="_blank" class="textomenu">REVISTA</a></li>
				<li class="nav-item"><a href="noticias.php" class="textomenu">NOTICIAS</a></li>
			<!--	<li class="nav-item"><a href="http://www.biblioteca.prefecturanaval.gov.ar/" class="textomenu">BIBLIOTECA</a></li> -->
				<li class="nav-item"><a href="investigacion.html" class="textomenu">INVESTIGACIÓN</a></li>
				<li class="nav-item"><a href="ubicacion.html"><i class="icono-arg-marcador-ubicacion-2" style="color: black"></i>
				</a></li>
			</ul>
			</div>
		</div>	  		
       		<span class="navbar-toggler-icon"></span>
        	<div class="collapse navbar-collapse justify-content-end" id="navbarContent"> 			
    			<ul class="navbar-nav">
				</ul>
			</div>
	</nav>
		</div>

    
</div>
<!-- boody-->
	<!-- imagen banner-->	
<div class="imagen1">	
	<div class="contenedor_slider">
		<div class="fling-minislide" style="height: 430px;">
			<img src="img/fragmentos/1inicio.jpg"  style="width: 100%">  
			<img src="img/fragmentos/2inicio.jpg"  style="width: 100%">
			<img src="img/fragmentos/3inicio.jpg"  style="width: 100%">
			<img src="img/fragmentos/4inicio.jpg"  style="width: 100%">
			<img src="img/fragmentos/5inicio.jpg"  style="width: 100%">
			<img src="img/fragmentos/6inicio.jpg"  style="width: 100%">
			<img src="img/fragmentos/7inicio.jpg"  style="width: 100%">
			<img src="img/fragmentos/8inicio.jpg"  style="width: 100%">
			<img src="img/fragmentos/9inicio.jpg"  style="width: 100%">
			<img src="img/fragmentos/10inicio.jpg" style="width: 100%">
		</div>
	</div>		
</div>
	

	
<!-- Footer-->
		
<div class="row">
	<div class="col-lg-12"><br>
		<!--<h2 class="text-pna" style="color: #0072bb; padding-left: 45px">Perfil Institucional</h2>-->
		<div class="text-justify">
		<div class="textop1" style="padding-left: 45px; padding-right: 40px">
		<br>
		<p style="text-align: justify; font-size: 20px; line-height: 30px; ">El <strong>INSTITUTO UNIVERSITARIO DE SEGURIDAD MARÍTIMA (IUSM)</strong> es un proyecto educativo institucional de carácter estratégico para la Prefectura Naval Argentina, el cual se
		justifica sobre la base de poseer un campo disciplinar propio. Por lo cual la oferta educativa que brinda se orienta a la formación de profesionales capacitados en disciplinas ligadas
		a la Seguridad Marítima y Protección del Medio Ambientes; Seguridad Pública y Ciudadana; esto conforma un campo disciplinar con objeto de conocimiento y metodologías de
		investigación propias.</p>
		</div>
		</div>

		<!-- video incrustado prueba
		

		<section class="video3 cid-sq4nz71I6t" id="video3-q" style="padding-left: 35px">


			<div class="container-fluid">
				<div class="mbr-section-head">
					<h2 class="text-pna" style="color: #0072bb;" >Videos</h2>
					
				</div>
				<div class="row mt-4">
					<div class="col-12 col-md-6 video-block">
						<div class="embed-responsive embed-responsive-16by9"><iframe width="640" height="360" style="max-width: 100%;max-height: 100%; border:none;" src="https://recursoseducativos.iusm.edu.ar/videoEmbed/25/recursos-audiovisuales-de-la-prefectura-naval-argentina?channelName=5ebd5ce433c9d" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay" scrolling="no">iFrame is not supported!</iframe></div>       							
					</div>
					<div class="col-12 col-md-6 video-block">
						<div class="embed-responsive embed-responsive-16by9"><iframe width="640" height="360" style="max-width: 100%;max-height: 100%; border:none;" src="https://recursoseducativos.iusm.edu.ar/videoEmbed/25/recursos-audiovisuales-de-la-prefectura-naval-argentina?channelName=5ebd5ce433c9d" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay" scrolling="no">iFrame is not supported!</iframe></div>       
						
					</div>
				</div>
			</div>
		</section>
		-->

<!-- noticias debajo de perfil institucional -->
<br><br>

<div class="row">
	<div class="col-md-12" style="padding-right: 60px; padding-left: 60px;">
		<a href="noticias.php" style="text-decoration: none;"><h3 style="color: #0072bb;">Noticias <i class="fa fa-plus-circle"></i></h3></a>
	<div class="row">
	
	<div class="row">
		<?php while($row=sql_do_array($result0)){ ?>
			<div class="col-md-4">
				<a class="panel panel-default" style="height: 350px" href="noticiasola.php?noticiaid=<?php echo $row['NOTICIAID']; ?>">			
					<div class="panel-heading" style="background-image: url(img/fragmentos/bannernoticias.svg); height: 250px; width: auto"></div>
						<div class="panel-body" style="background-color: #0072bb; color: white; height: 120px; ">
							<div class="media-body">
								<h3><?php echo$row['TITULO']; ?></h3>
								<p style="text-align: justify">
									<?php
										$variable=strtolower($row['RESUMEN']);
										$texto=ucfirst($variable);
										if (strlen($texto) <= 140){
											echo $texto;
										}else{
											$nuevoTexto = substr($texto, 0, -140);
											$finalTexto = $nuevoTexto.'...';
											echo $finalTexto;
										}						
								?></p>
								<input type="hidden" name="noticiaid" id="noticiaid" value="<?php echo $row['NOTICIAID'];?>"/>
							</div>
						</div>
				</a>

			</div>	
		<?php }?>  
    </div>

	



		<!--
		<div class="col-md-4">
			<a class="panel panel-default" href="noticiasola.html">
				<div class="panel-heading" style="background-image: url(img/fragmentos/INICIO.jpg); height: 300px;"></div>
				<div class="panel-body" style="background-color: #0072bb; color: white;">
				  <div class="media-body">
					<h3>Noticia 1</h3>
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima vel commodi deserunt eligendi, modi reiciendis repellendus nihil, quibusdam ab, illo repudiandae. Vel excepturi laudantium, rem neque aut quod earum perspiciatis?</p>
				  </div>
				</div>
			  </a>
		</div>
		<div class="col-md-4">
			<a class="panel panel-default" href="noticiasola.html">
				<div class="panel-heading" style="background-image: url(img/fragmentos/INICIO.jpg); height: 300px;"></div>
				<div class="panel-body" style="background-color: #0072bb; color: white;">
				  <div class="media-body">
					<h3>Noticia 2</h3>
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima vel commodi deserunt eligendi, modi reiciendis repellendus nihil, quibusdam ab, illo repudiandae. Vel excepturi laudantium, rem neque aut quod earum perspiciatis?</p>
				  </div>
				</div>
			  </a>
		</div>
		<div class="col-md-4">
			<a class="panel panel-default" href="noticiasola.html">
				<div class="panel-heading" style="background-image: url(img/fragmentos/INICIO.jpg); height: 300px;"></div>
				<div class="panel-body" style="background-color: #0072bb; color: white;">
				  <div class="media-body">
					<h3>Noticia 3</h3>
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima vel commodi deserunt eligendi, modi reiciendis repellendus nihil, quibusdam ab, illo repudiandae. Vel excepturi laudantium, rem neque aut quod earum perspiciatis?</p>
				  </div>
				</div>
			  </a>
		  </div> 
						-->
		 
	</div>
	</div>
</div>

			

	<!--		
<div class="imagenmapeada">				
	<a href="google.com" target="_blank"><img src="img/fragmentos/banner_iusm.svg" usemap="#image-map" style="width: 100%; height: 86%; margin-right: auto; margin-left: auto;" ></a>
</div>
-->
<div class="imagenmapeada">
<div class="container-fluid">
	<div class="row">
		<div col-lg-12 style="background-color: white; height: auto; width: 100%; text-align: center"  >
			<a href="./ubicacion.html" target="_blank"><img src="img/fragmentos/banner_iusm1.svg" usemap="#image-map" style="width: 33%; height: 86%; margin-right: auto; margin-left: auto;" ></a>
			<a href="./unidades academicas.html" target="_blank"><img src="img/fragmentos/banner_iusm2.svg" usemap="#image-map" style="width: 33%; height: 86%; margin-right: auto; margin-left: auto;" ></a>
			<a href="./carreras.php" target="_blank"><img src="img/fragmentos/banner_iusm3.svg" usemap="#image-map" style="width: 33%; height: 86%; margin-right: auto; margin-left: auto;" ></a>
		</div>
	</div>	
</div>
</div>


<div class="imagenmapeada2">
	<div class="container-fluid">
		<div class="row">
			<div col-lg-12 style="background-color: white; height: auto; width: 100%; text-align: center"  >
				<a href="./ubicacion.html" target="_blank"><img src="img/fragmentos/banner_iusm1.svg" usemap="#image-map" style="width: 33%; height: 86%; margin-right: auto; margin-left: auto;" ></a><br>
				<a href="./unidades academicas.html" target="_blank"><img src="img/fragmentos/banner_iusm2.svg" usemap="#image-map" style="width: 33%; height: 86%; margin-right: auto; margin-left: auto;" ></a> <br> 
				<a href="./carreras.php" target="_blank"><img src="img/fragmentos/banner_iusm3.svg" usemap="#image-map" style="width: 33%; height: 86%; margin-right: auto; margin-left: auto;" ></a> <br>
			</div>
		</div>	
	</div>
</div>


</div>


	
	
<div class="container-fluid">
	<div class="row">
		<div col-lg-12 style="background-color: white; height: auto; width: 100%; text-align: center"  >
			<a href="https://www.argentina.gob.ar"><img src="img/fragmentos/LogoArgentina.jpg" alt="Min.Seguridad" style="width: 20%; float: 	left; margin-left: 10%"></a>
			<a href="https://www.argentina.gob.ar/educacion"><img src="img/fragmentos/Logo Min Edu.jpg" alt="Prefectura" style="width: 20%; margin-left: -70px"></a>	
			<a href="https://www.argentina.gob.ar/seguridad"><img src="img/fragmentos/Logo Min Seg.jpg" alt="Min.Educacion" style="width: 20%"></a>
			<a href="https://www.argentina.gob.ar/prefecturanaval"><img src="img/fragmentos/Logo PNA.jpg" alt="Min.Educacion" style="width: 	20%"></a>
		</div>
	</div>	
</div>
<div class="container-fluid home-footer" style="padding: 0px; background-color: #343A40; color: white; padding-top: 0px">
<br><br>
	
	
<div class="container">
  <div class="row">
  
    <div class="col-md-7">
      <p class="small text-light text-justify" style="font-size: 20px; padding-left: 20px;">La <strong>Prefectura Naval Argentina</strong> posee una extensa tradici&oacute;n hist&oacute;rica ampliamente reconocida. Las m&uacute;ltiples actividades de indudable repercusi&oacute;n p&uacute;blica y las sucesivas innovaciones en sus procedimientos y medios, renuevan el inter&eacute;s hacia lo que constituye un verdadero ejemplo de dedicaci&oacute;n a los cometidos que el Estado le ha confiado.<br><br></p><br>
      
      
      <br>
      <br>
      
    </div>
    <div class="col-md-1"> </div>
	<div class="col-md-2" style="text-align: left; font-size: 22px;">
      <h5 style="margin-top: 0px;">CONTACTO</h5>
      <p class="small text-light">IUSM<br>Corrientes 180 <br>Olivos, Buenos Aires, Argentina </p>
	  <h5>VISITÁ NUESTRAS REDES</h5>
      
	</div>

	

	<div class="col-md-2" style="text-align: left; font-size: 22px;">
		<p class="text-light small"><i class="icono-arg-telefono-neg"></i> +54 11 4512 1014</p>
		<p class="text-light small"><i class="icono-arg-mail-1"></i> informes.iusm@gmail.com </p>
		<p class="text-light small"><i class="icono-arg-mundo"></i> https://prefecturanaval.gob.ar</p>
		<a href="https://www.facebook.com/prefecturanavalar" target="_blank" class="pictogramanav"style="font-size: 16px"><i class="icono-arg-facebook-f-"></i></a>
		<a href="https://twitter.com/PrefecturaNaval" target="_blank" class="pictogramanav" style="font-size: 16px"><i class="icono-arg-twitter-pajaro"></i></a>
		<a href="https://www.youtube.com/c/prefecturanavalar" target="_blank" class="pictogramanav" style="font-size: 16px"><i class="icono-arg-youtube"></i></a>
		<a href="https://www.instagram.com/prefecturanaval/" target="_blank" class="pictogramanav"style="font-size: 16px"><i class="icono-arg-instagram"></i></a>
	  </div>

	  <br>
		  
	   
	
		
      <ul class="sitemap">
             
      </ul>
    </div>
  </div>
  
</div>
</div>
</footer>
	</div>
 </body>
        
</html>