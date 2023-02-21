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
			<h1 class="display-2">PzKpfw. VI-B Tiger II</h1>
			<img src="pic/pz7/pz7-main.png" class="rounded float-lg-right p-3" alt="I'll have the bacon cheesburger please">
			<h3><i>Too much of a good thing</i></h3>
			<div style="height:50px"></div>			
			<p>The Panzer VI-II, mistakenly called "King Tiger", is quite the supermassive vehicle, as per German engineering preference. You see, the Tiger One had been around for a while and it, being an überpanzer, wasn't winning the war. Therefore something even bigger was needed! <br><br> The same insane type of specifcations were laid down, Henschel, Krupp and Porsche (again) went to work. The result was spectacular and very heavy indeed. A pretty tank, not at all as huge as some pictures suggest - go stand next to one and see - but rather very <i>dense</i>. Intended as a kind of long range sniper tank for the east front, the hedgerows and bocages of the Normandy landscape did not do it favours. <br><br> Because of its massive armour, the Maybach petrol engine and drive train were far too fragile and underpowered. It had, however, a massive gun - the biggest tank gun of WW2. Even though this is the epitomy of German Panzer-ness, I feel they were wasting their time on this monster. One of these machines cost the same as several Panzer IV's and those would certainly have been more useful.</b></p>
		</div>
	</div>

<!--Spacer-->
	<div style="height:50px"></div>
	
<!--CARDS-->
    <div class="row justify-content-center">
        
		<div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PzKpfw VI-B "Porsche"</h4>
				<img class="mx-auto d-block" src="draw/pz7/pz6b-anneliese.png" alt="PzKpfw VI-II Porsche">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> near Caen, France</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> 10 juli 1944</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> 1. Zug, sPzAbt 503</li>
					</ul>
					<p class="card-text">sPzAbt 503's 1. Zug received the first operational batch of Königstiger. They were deployed during the battle of Caen and completely destroyed by British Lancaster bombers. This one, named "Anneliese", survived that. For thanks, they were sent east where Annelise was painted white and her crew froze their butts off.</p>
                </div>
            </div>
        </div>

        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PzKpfw VI-B "Krupp"</h4>
				<img class="mx-auto d-block" src="draw/pz7/pz6b-krpp-s.png" alt="PzKpfw VIII Krupp">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> La Gleize, Belgie</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> December 16th, 1944 (and still there!)</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> "213", 2e Co sSSPzAbt 101 "Leibstandarte Adolf Hitler"</li>
					</ul>
					<p class="card-text">Kampfgruppe Peiper was the tip of the German spear during the Ardennes offensive. At La Gleize, the Americans slugged it out with Tiger II "213" and somehow managed to shoot the cannon in half. The tank was to be scrapped but a resident of La Gleize bought the wreck for a bottle of cognac. It's still there, a big cat on a small village square.</p>
                </div>
            </div>
        </div>
        
        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PzKpfw VI-B "Krupp"</h4>
				<img class="mx-auto d-block" src="draw/pz7/pz6b-nordland.png" alt="PzKpfw VIII Krupp">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Jahnsfelde, near Berlin, Germany</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> April 18th, 1945</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> "22", 2e Zug, 2e Co, sSSPzAbt 503, 11e SS "Nordland", AG "Vistula"</li>
					</ul>
					<p class="card-text">The end was nigh, and (nearly) everyone knew it. The Russians were on the Oder, which is uncomfortably close if you live in Berlin. Because the Russians wouldn't be very friendly post-war, the remaining Nazi forces fought to the death. And I say Nazi because by that time, everyone else had already surrendered.</p>
                </div>
            </div>
        </div>
        
	</div>
 
<!--Spacer-->
	<div style="height:100px"></div>

<!-- next - previous -->
	
	<div class="row justify-content-center">
		<a href="pz6.php" class="btn btn-outline-secondary">< PzKpfw VI</a>
		<a href="sg3.php" class="btn btn-outline-secondary">StuG ></a>
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
				<img src="pic/pz7/pz7-1.jpg" alt="obvious">
				<div class="carousel-caption">
					<h3>Klaus has learned the first lesson of not being seen</h3>
					<p><b>However, he has chosen a very obvious piece of cover.</b></p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="pic/pz7/pz7-2.jpg" alt="Recoloured">
                <div class="carousel-caption">
					<h3>Guarding some bridge</h3>
					<p><b>over troubled water</b></p>
				</div>
			</div>

			<div class="carousel-item">
				<img src="pic/pz7/pz7-3.jpg" alt="Fender bender">
                <div class="carousel-caption">
					<h3>Got my finger stuck</h3>
					<p><b>OK boys, careful now</b></p>
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
