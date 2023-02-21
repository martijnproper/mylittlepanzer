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
			<h1 class="display-2">PzKpfw. IV</h1>
			<img src="pic/pz4/pz4-main.jpg" class="rounded float-lg-right p-3" alt="I'll have the bacon cheesburger please">
			<h3><i>War horse</i></h3>
			<div style="height:50px"></div>			
			<p>The venerable Panzer 4 is what the M4 Sherman was for the allies: the main war horse. While the Panzer 1 and 2 were, from the start, intended for training and experiments, the Panzer 3 and 4 were designed as the backbone of an armoured force. The idea was to have the smaller, faster Panzer 3 fight other tanks, while the larger, heavier (and slower) Panzer 4 would travel with and support the infantry. This was a good idea - on paper. It is now accepted wisdom that a tank gun should be able to shoot both anti-tank as explosive rounds. Back then, however, different guns or vehicles were used for each task. The Char B1b and M3 Lee, for example, had a separate AP and HE guns; the one in the turret and the other in the bow. While good on paper, this actually produces a heavy, inflexible vehicle. Which is why, later on, the Panzer 4 was massively upgunned to a 7,5cm KWK 40 L48. That was by all means an excellent gun, capable of firing both types of ammo.<br><br> Now, to be honest, I don't like the Panzer 4 that much. I'm not sure why, maybe the rear sprocket looks weird, maybe it's the exhaust vents... It's a good vehicle and I know that, but even if I had the dosh I'd buy a Panzer 3 instead. Much... dunno, cuter I guess. I'd paint a Hello Kitty on it, too. Additional fun fact: there's a couple of Panzer 4's in Israel, at the Yad La-Shiryon museum in Latrun. Those were captured when the Syrians used them in the 1967 Six Day War. Quite a good 'track' record for such an old machine.</p>
		</div>
	</div>

<!--Spacer-->
	<div style="height:50px"></div>
	
<!--CARDS-->
    <div class="row justify-content-center">
        
		<div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PzKpfw IV ausf. D</h4>
				<img class="mx-auto d-block" src="draw/pz4/010.png" alt="PzKpfw IV ausf. D">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Bazeilles, Sedan, France</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> May 12th, 1940</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> "32", 2. PR, 10. PD</li>
					</ul>
					<p class="card-text">Sedan is like the linchpin of Franco-German relations: any army going either way will pass this city. When the Germans tried sneak in behind the Allied advance, Sedan had to be taken quickly. It was, thanks to an extremely agressive infantry platoon and some very demoralised Frenchmen.</p>
					<a href="010.php" class="btn btn-outline-info">Rubarth saves the day</a>
                </div>
            </div>
        </div>

		<div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PzKpfw IV ausf. E</h4>
				<img class="mx-auto d-block" src="draw/pz4/pz4e.png" alt="PzKpfw IV ausf. D">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Sint Lenaarts, Belgium</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> May 15th, 1940</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> XVI PC 9.PD PR33 "402" </li>
					</ul>
					<p class="card-text">To draw the Allied troops north, the Germans faked a second Schlieffenplan while sneaking from in behind. That diversion rolled through the village I grew up in; it's on the road from Rotterdam to Antwerp so it got attacked too. That is to say, the collecive village memory is of one Stuka bombing the local brigde and some stomping German boots.</p>
                </div>
            </div>
        </div>
        
        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PzKpfw IV ausf. F</h4>
				<img class="mx-auto d-block" src="draw/pz4/pz4f2-215.png" alt="PzKpfw IV ausf. F">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> El Alamein, Egypt</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> July 2nd, 1942</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> '215', 5. PzReg, 21. PzDiv</li>
					</ul>
					<p class="card-text">There were actually two battles of El Alamein. The second one, we all know because the British won. The first battle involved a badly coordinated British counterattack, a sandstorm and some excellent FlaK-guns. Bottom line - the UK lost this round and then, Bernard Montgomery entered the ring.</p>
                </div>
            </div>
        </div>
        
        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">PzKpfw IV ausf. H</h4>
				<img class="mx-auto d-block" src="draw/pz4/pz4h-meyer.png" alt="PzKpfw IV ausf. H">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Abbey "des Ardennes", Franqueville, France</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> June 7th, 1944</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> 2. Abt., 12. SS PzDiv "Hitlerjugend"</li>
					</ul>
					<p class="card-text">This Hitlerjugend-panzer hid among the trees of an abbey near Franqueville, Normandy. From there, it ambushed and shot up a bunch of Canadian M4s.</p>
                </div>
            </div>
        </div>
	
	</div>
 
<!--Spacer-->
	<div style="height:100px"></div>

<!-- next - previous -->
	
	<div class="row justify-content-center">
		<a href="pz3.php" class="btn btn-outline-secondary">< PzKpfw III</a>
		<a href="pz5.php" class="btn btn-outline-secondary">PzKpfw V ></a>
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
				<img src="pic/pz4/pz4-1.jpg" alt="Los Angeles">
				<div class="carousel-caption">
					<h3>In Russia</h3>
					<p><b>trying to shoot a pigeon</b></p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="pic/pz4/pz4-2.jpg" alt="Chicago">
                <div class="carousel-caption">
					<h3>The Cleanest I've ever seen</h3>
					<p><b>...must have been to the carwash before the photo op</b></p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="pic/pz4/pz4-3.jpg" alt="New York">
                <div class="carousel-caption">
					<h3>Kemping Bush</h3>
					<p><b>in sunny France</b></p>
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
