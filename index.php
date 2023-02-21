<!DOCTYPE html>

<html lang="en">
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
	
<!--Block 1-->
	<div class="row text-center">
		<div class="col-auto mb-3">
			<h1 class="display-2">Hello</h1>
			<h3><i>(and welcome to my website)</i></h3>
			<div style="height:50px"></div>
			<p class="text-justify">This website is about history, about war and about people. And it’s definitely about tanks. I like tanks. I wouldn’t want to fight in one – or at all. I’m a friendly person. But tanks are massive, impressive lumps of technology, a bit like steam trains. And the soldiers in my stories are, well, just people. I don't dig <i>cancel culture</i>; I believe we should remember the bad times, as well as the good. Like my granddad, who was a smuggler for the Dutch resistance. His buddy was a former Waffen-SS officer and if they can be friends, who am I to judge? Only if we fully accept all our human facets, both positive and negative, we can become better than we are.</p>
		</div>
	</div>

<!--Panzerzug-->
	<div style="height:50px"></div>
	<img class="mx-auto d-block" src="misc/row3.png" alt="My Little Panzers">
	<div style="height:100px"></div>
	
<!--Block 2-->	
	<div class="row text-center">
		<div class="col-auto mb-3">
			<h3><i>So what is this all about?</i></h3>
			<div style="height:50px"></div>
			<p class="text-justify">Allright then, the war. Yes, the Nazis were a bunch of genocidal maniacs. We all know that. It’s been written about quite a lot. However, a lot of Germans at the time were just going along with the flow. As always, there were nuances. There were ‘good’ Germans. There were ‘bad’ Germans. There were uninterested, weird, homesick, brilliant and/or stupid Germans.</p>
			<p class="text-justify">What I’m after is the stories about normal people, like you or me. Only, they were fighting for their country, which had -in all fairness- been rather mistreated post-WW1. I want to know about the ones that were scared to death, hiding in a ditch. The ones that took the initiative and won the day. The ones that knew they were capable soldiers fighting for a terrible cause, but had no other options. And I might well completely ignore Michael Wittmann's hour of fame. He’s had enough attention already.</p>
			<p class="text-justify">And I sincerely believe he and Bobby Woll were gay lovers.</p>
		</div>
	</div>

<!--Spacer-->
	<div style="height:100px"></div>
	
<!--Footer-->
<?php include("php/footer.php"); ?>

</div>

</body>
</html>
