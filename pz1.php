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
			<h1 class="display-2">PzKpfw. I</h1>
			<img src="pic/pz1/panzer1.jpg" class="rounded float-lg-right p-3" alt="CRAAASSHHHHHH!!!">
			<h3><i>It's like a hatchback...only different.</i></h3>
			<div style="height:50px"></div>			
			<p>Since the Treaty of Versailles, the Germans were forbidden to build tanks, fighter planes and battleships. Also, they were allowed a maximum of one hundred thousand men under arms. After a few years of internal Stahlhelm chaos, however, the country felt the need for a normal army. Generaloberst Hans von Seeckt got the job and because the army had to be small, only the best people were selected. And because the army needed practice, you could see these elite soldiers running across the battlefield, armed with wooden signs saying <i>"I'm a tank!"</i>. That was silly and something had to be done. <br><br> So they built the Panzer 1. It's really what it says on the tin: the first Panzer. Before it came the A7, the Großtraktor and the Neubaufahrzeug - those were just experiments. The Panzer 1 was intended as a training vehicle. About VW Golf-sized, it was too small for decent armour or an actual cannon. But did see actual combat! First in Spain, where it met Soviet BT-s and T-26s; those were far superior. From the start it was clear the vehicle was just not good enough. Just park it next to a Char B1b and see - or don't, the massive French tank will probably block your view. Most of them were rebuilt and used for many different things, a bit like the UK's bren carriers.</p>
		</div>
	</div>

<!--Spacer-->
	<div style="height:50px"></div>
	
<!--CARDS-->
    <div class="row justify-content-center">
        
		<div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PzKpfw I ausf. A</h4>
				<img class="mx-auto d-block" src="draw/pz1/pz1a-1s.png" alt="PzKpfw I ausf. A">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Wallendorf, Gemany</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> May 10th, 1940</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> 1. Abt, 1. PR, 1. PD</li>
					</ul>
					<p class="card-text">Early in the morning, German forces were waiting for the sun to come up. It would, soon now. The soldiers were ready for their big jump into france, Belgium and the Netherlands. Just before first light, the 1st Panzer division left Wallendorf (on the Luxemburg border), pushing towards France. It was going to be an interesting day.</p>
					<a href="#" class="btn btn-outline-info">Go West!</a>
                </div>
            </div>
        </div>

        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PzKpfw I ausf. B</h4>
				<img class="mx-auto d-block" src="draw/pz1/pz1b-1s.png" alt="PzKpfw IV ausf. B">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Guido Gezelleweg, ner the Groeningebrug, Kortrijk, Belgium</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> 15:30, May 24th 1940</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> 14e AufklAbt, 4e InfReg, IV Armeekorps, 6e Armee</li>
					</ul>
					<p class="card-text">To prevent trench warfare, the Germans had a Plan. Invading Belgium and Holland, luring the Allies north to the Dijle - and KW-line and then cutting in behind them, pushing to Paris and the sea. This was Fall Gelb. It worked - first the Netherlands surrendered, then Belgium and finally France. The British were left standing, with wet feet, in Dunkirk. But that's another story.</p>
                </div>
            </div>
        </div>
        
	</div>
 
<!--Spacer-->
	<div style="height:100px"></div>

<!-- next - previous -->
	
	<div class="row justify-content-center">
		<a href="index.php" class="btn btn-outline-secondary">< Welcome</a>
		<a href="pz2.php" class="btn btn-outline-secondary">PzKpfw II ></a>
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
				<img src="pic/pz1/pz1-1.jpg" alt="On parade">
				<div class="carousel-caption">
					<h3>On Parade</h3>
					<p><b>"Aaaargh matey!"</b></p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="pic/pz1/pz1-2.jpg" alt="Hill Climbing">
				<div class="carousel-caption">
					<h3>Training hard</h3>
					<p><b>Hill Climbing Competition</b></p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="pic/pz1/pz1-3.jpg" alt="Swimming">
				<div class="carousel-caption">
					<h3>Hello Sailor!</h3>
					<p><b>That's a funny boat</b></p>
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
