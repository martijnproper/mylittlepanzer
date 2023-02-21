<!DOCTYPE html>
<html lang="en">
<?php $thisPage="panzer"; ?>
<head>
	<title>My Little Panzer | Armoured Pixels</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Site over Panzer en de tweede wereldoorlog. Tanks worden getekend in pixels met behulp van MSPaint en geillustreerd door verhalen en kaarten of fotos waar mogelijk." />
	<meta name="keywords" content="Panzer,PzKfw,PzPkfw,JPz,StuG,SdKfz,tiger,panther,KwK,tank,tanks,WW2,war,pixel,pixels" />
	<meta name="author" content="Martijn Proper" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <style>
		.bg-pzgrey { background-color: #4A5054; }
		.carousel-inner img { width: 100%; height: 100%; }
		.carousel-caption { background: rgba(0, 0, 0, 0.35); }
    </style>
    
	<script>
		$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();   
		});
	</script>
</head>

<body>

<div class="container">

<!--Top navbar-->
<?php include("php/menu.php"); ?>

<!--Spacer-->
	<div style="height:50px"></div>
	
<!--Page title-->
	<div class="row">
		<div class="col-auto mb-3">
			<h1 class="display-2">PzKpfw. II</h1>
			<img src="pic/pz2/pz2-mains.jpg" class="rounded float-lg-right p-3" alt="I'll have the bacon cheesburger please">
			<h3><i>Panzer v2.0</i></h3>
			<div style="height:50px"></div>			
			<p>The Panzer II incorporated the lessons learnt from the Panzer I’s in the Spanish civil war – including a 2cm autocannon. In the first two years of the war, it was widely used while the Wehrmacht was waiting for its Panzer 3 and 4s. It saw acton everywhere the Germans went - Russia, Tunisia, France and Yugoslavia.</p>
			<p>It was still an experimental vehice; for example the turret housed only one man, the commander, who had to track targets, fire and command the driver and radioman/loader. As such, he had too much to his hands, something that was certainly rectified on the Panzer III and upwards.</p>
			<p>This tank was made by a lot of companies in even more versions, from the first A-model to the Ausführung L "Luchs" you can see to the left, but that was really an entirely different vehicle. A lot more funky adaptations were made to this vehicle, from Bergepanzer to Marder and a bridge layer version, for a really tiny bridge.</p>
		</div>
	</div>

<!--Spacer-->
	<div style="height:50px"></div>
	
<!--CARDS-->
    <div class="row justify-content-center">
        
		<div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PzKpfw II ausf. B</h4>
				<img class="mx-auto d-block" src="draw/pz2/pz2b-1s.png" alt="PzKpfw II ausf. B">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Bzura river, Sochaczew, Polen</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i>  September 16th, 1939 </li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> 3.PD PR6 "201"</li>
					</ul>
					<p class="card-text"> Large bits of Poland used to be Germany. After the First World War, Poland was reshaped by taking these bits and sticking them on to bits of Russian land. Guderian himself was from such a German region and in 1939, he went back home. On the way, he discovered that his troops were far from ready...</p>
					<a href="#" class="btn btn-outline-info">Leutnant Felix knows what to do!</a>
                </div>
            </div>
        </div>

	</div>
 
<!--Spacer-->
	<div style="height:100px"></div>

<!-- next - previous -->
	
	<div class="row justify-content-center">
		<a href="pz1.php" class="btn btn-outline-secondary">< PzKpfw I</a>
		<a href="pz38.php" class="btn btn-outline-secondary">PzKpfw 38(t) ></a>
	</div>


<!--Spacer-->
	<div style="height:100px"></div>	
	
<!-- ImageCarousel -->
	<div id="demo" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
		</ul>

		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="pic/pz2/pz2-1.png" alt="Girls un Panzer">
				<div class="carousel-caption">
					<h3>Panzer vor!</h3>
					<p><b>...because everybody loves <i>Girls und Panzer</i></b></p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="pic/pz2/pz2-2.jpg" alt="Boy scout party">
                <div class="carousel-caption">
					<h3>Boy scout party</h3>
					<p><b>Look at my new barrel polishing badge!</i></b></p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="pic/pz2/pz2-3.jpg" alt="New York">
                <div class="carousel-caption">
					<h3>Rumbling through France</h3>
					<p><b>Suddenly, a wild Baguette appears</i></b></p>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#demo" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
		<a class="carousel-control-next" href="#demo" data-slide="next"><span class="carousel-control-next-icon"></span></a>
	</div>

<!--Spacer-->
	<div style="height:100px"></div>
	
<!--Footer-->
<?php include("php/footer2.php"); ?>

</div>

</body>
</html>
