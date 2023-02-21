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
			<h1 class="display-2">Sturmgeschütze</h1>
			<img src="pic/sg3/sg3_main_2.jpg" class="rounded float-lg-right p-3" alt="I'll have the bacon cheesburger please">
			<h3><i>Schildkröte</i></h3>
			<div style="height:50px"></div>			
			<p>The idea of a StuG is quite simple; just look at Leonardo da Vinci's designs. It's basically the lower half of a Panzer III, plus a big gun in a box. A StuG can take a bigger gun than a turreted tank of equal size but ofcourse a turret can turn, where a StuG crew must aim the whole vehicle. The series was generally very successful, both in the infantry and tank hunter role. Although the Panzers are generally much more famous, the StuGs destroyed many more tanks, some 20,000. Because of their low silhouette they were easy to camouflage and difficult to hit.</p>
		</div>
	</div>

<!--Spacer-->
	<div style="height:50px"></div>
	
<!--CARDS-->
    <div class="row justify-content-center">
        
		<div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">StuG III ausf. D</h4>
				<img class="mx-auto d-block" src="draw/stug3_2.jpg" alt="PzKpfw III ausf. E">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> somewhere in Russia</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> July 15th, 1941</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> "25", 2nd Co, StuGAbt 12</li>
					</ul>
					<p class="card-text">Oberfeldwebel Rudolf Jaenicke raided a Russian station with his StuG platoon, just when an unknown Soviet unit was offloading. In the ensuing chaos, they destroyed 12 BT-2 tanks and numerous trucks, tractors and other equipment.</p>
                </div>
            </div>
        </div>

        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">StuG III ausf. D</h4>
				<img class="mx-auto d-block" src="draw/stug3_4.jpg" alt="PzKpfw III ausf. E">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Tunis</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> 1942</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> Sonderverband 288</li>
					</ul>
					<p class="card-text">Sonderverband 288 was similar to the British LRDP: a very small unit, made up of the most capable people in the region. It was tasked with taking over the Arabian oil fields - with three StuGs and a camel! - but that was never going to happen. So the unit was sucked up by the DAK and shared its fate.</p>
                </div>
            </div>
        </div>
        
        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">StuG III ausf. F</h4>
				<img class="mx-auto d-block" src="draw/stug3_5.jpg" alt="PzKpfw III ausf. E">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Osinovski, near Rostov on Don</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> September 3rd, 1942</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> 1st Co StuGAbt 244</li>
					</ul>
					<p class="card-text">Oberwachtmeister Kurt Pfreundtner destroyed with his StuG 9 Russian tanks in 20 minutes. Possibly this was the most successful action of a StuG ever, and Kurt got the knight's cross for it.</p>
					<a href="#" class="btn btn-outline-info">I know what Kurt did...</a>
                </div>
            </div>
        </div>
        
        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">StuG III ausf. G</h4>
				<img class="mx-auto d-block" src="draw/stug3_10.jpg" alt="PzKpfw III ausf. J">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Russia, USSR</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> July 15th, 1943</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> 2nd StuGAbt, 2nd SSPzDiv "Das Reich"</li>
					</ul>
					<p class="card-text">Sturmbannführer Walter Kniep's unit apparently destroyed 129 Russian tanks between 5 July 1943 and 17 January 1944, losing only two StuGs of their own.</p>
                </div>
            </div>
        </div>
        
        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">StuG IV ausf. G</h4>
				<img class="mx-auto d-block" src="draw/sg4_1.jpg" alt="PzKpfw III ausf. J">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> railway guard house, Omschoorweg, Raamsdonk, the Netherlands</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> October 31st, 1944, approximately 11 a.m.</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> PzJgAbt 256</li>
					</ul>
					<p class="card-text">Because there weren't enough PzKfw III chassis in the long run, StuG III-like armor started to be built on PzKfw IV chassis. They were built by Krupp in Magdeburg. This early StuG IV participated in the Short but Heroic Battle for the Reformed Church in Raamsdonk.</p>
                </div>
            </div>
        </div>
        
        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">Stug IV ausf. G (spät)</h4>
				<img class="mx-auto d-block" src="draw/sg4_2.jpg" alt="PzKpfw III ausf. L">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Vigy, near Metz, Lorraine, France/li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> September 4th, 1944</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> StuGAbt 200, 21st PzDiv</li>
					</ul>
					<p class="card-text">This StuG IV of StuGAbt 200 defended Vigy from the American 3rd Army, under Patton. The terrain was in favor of the Germans - the Moselle is a fast flowing river with steep banks, which makes crossing more difficult, and the weather was bad so American fighter bombers could not take off.</p>
                </div>
            </div>
        </div>
        
        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">SdKfz. 165 "Hummel"</h4>
				<img class="mx-auto d-block" src="draw/sgd_hum.jpg" alt="PzKpfw III ausf. M">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Korsun, Russia, USSR</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i>  February 8th, 1944</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> 7th MotArtReg, 1st PzDiv, 3rd PzCor</li>
					</ul>
					<p class="card-text">Gruppe Stemmerman was basically a bunch of units caught in a kessel. As they slowly started to withdraw, they were supported by airdrops from Ju-52s. Finally, the 1st PzDiv managed to conquer the only intact bridge towards safety, preventing a total disaster.</p>
                </div>
            </div>
        </div>
        
        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">SdKfz. 166 "Brummbär"</h4>
				<img class="mx-auto d-block" src="draw/sgd_br1.jpg" alt="PzKpfw III ausf. N">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Perwoje Ponyiri, Kursk, Russia</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> July 3rd, 1943</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> "53", StPzAbt 216, JpzAbt 656</li>
					</ul>
					<p class="card-text">Sturmpanzer Abteilung 216 and Jagdpanzer Abteilung 653 (with the Ferdinands) were tasked with taking Hill 257.7 ("Panzerhöhe") near Meloarchangelsk. Together with the 292nd Infantry Division, the units headed for Ponyiri -about 20km- under the command of a Major Kahl. The combination of both vehicles was sucessful but the attack wasn't; the Soviets soon pushed back.</p>
                </div>
            </div>
        </div>

        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">SdKfz. 166 "Brummbär"</h4>
				<img class="mx-auto d-block" src="draw/sgd_br2.jpg" alt="PzKpfw III ausf. N">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Lake Velençei, Hungary</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> December 20, 1944</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> StPzAbt 219</li>
					</ul>
					<p class="card-text">In January 1945 StPzAbt 219 took part in the battle for Budapest as part of the 23rd Panzer Division. By March they had lost all their Brummbärs, and 219 was sent to (then) Czechoslovakia where they were equipped with 10 Bärs and some captured Russian tanks. In that form they became part of the Panzerjagd-brigade "Trumpa" in Waidhofen, Germany.</p>
                </div>
            </div>
        </div>

	
		<div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">FlakPz "Wirbelwind"</h4>
				<img class="mx-auto d-block" src="draw/sgd_wir.jpg" alt="PzKpfw III ausf. N">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> Trois-Ponts, Belgium</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> December 18, 1944</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> KG Peiper, 1e Waffen-SS PzDiv "Leibstandarte Adolf Hitler"</li>
					</ul>
					<p class="card-text">his Wirbelwind was tested by the LSSAH during the Ardennes Offensive and was able to return to the factory undamaged. It proved nearly completely ineffective against Allied aircraft, but it turned out to perform miracles against infantry units.</p>
                </div>
            </div>
        </div>

	
	        <div class="col-auto mb-3">
			<div class="card" style="width: 500px">
                <div class="card-body">
				<h4 class="card-title text-center">Bergepanzer IV</h4>
				<img class="mx-auto d-block" src="draw/sgd_bpz.jpg" alt="PzKpfw III ausf. N">
					<ul class="list-group list-group-flush">
						<li class="list-group-item small"><i class="fas fa-map-marker"></i> the bridge over the Danube, near Floridsdorf, Vienna, Austria</li>
						<li class="list-group-item small"><i class="fas fa-calendar"></i> February 15th, 1945</li>
						<li class="list-group-item small"><i class="fas fa-cubes"></i> 1st Co PzJgAbt 510, 2nd SS PzDiv "Das Reich"</li>
					</ul>
					<p class="card-text">Between October 1944 and March 1945 21 damaged PzKfw IVs were converted to Bergepanzer. Standard equipment included: a 2-ton crane, towing ropes and ropes, pulleys and a gutter, wooden beam. This Bergepanzer had to fish Oberscharführer Barkmann's Panther out of a shell hole during the retreat from Prague to Vienna.</p>
                </div>
            </div>
        </div>
        
	</div>       

<!--Spacer-->
	<div style="height:100px"></div>

<!-- next - previous -->
	
	<div class="row justify-content-center">
		<a href="pz7.php" class="btn btn-outline-secondary">< PzKpfw VI-B</a>
		<a href="jp1.php" class="btn btn-outline-secondary">JPz ></a>
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
				<img src="pic/sg3/sg3-1.jpg" alt="Los Angeles">
				<div class="carousel-caption">
					<h3>Naughty tree-line</h3>
					<p><b>gets shot by StuKa bombs</b></p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="pic/sg3/sg3-2.jpg" alt="Chicago">
								<div class="carousel-caption">
					<h3>Playing soldier</h3>
					<p><b>who wouldn't?</b></p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="pic/sg3/sg3-3.jpg" alt="New York">
								<div class="carousel-caption">
					<h3>France would be nice</h3>
					<p><b>if it weren't for all those bullet holes</b></p>
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
