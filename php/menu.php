
	<nav class="navbar navbar-expand-sm bg-pzgrey navbar-dark">
		<a class="navbar-brand" href="index.php">My Little Panzer</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle <?php if ($thisPage=="panzer") echo " active" ?> pl-3" href="#" id="navbardrop" data-toggle="dropdown">Panzer</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="pz1.php">PzKpfw I</a>
						<a class="dropdown-item" href="pz2.php">PzKpfw II</a>
						<a class="dropdown-item" href="pz38.php">PzKpfw 38(t)</a>
						<a class="dropdown-item" href="pz3.php">PzKpfw III</a>
						<a class="dropdown-item" href="pz4.php">PzKpfw IV</a>
						<a class="dropdown-item" href="pz5.php">PzKpfw V "Panther"</a>
						<a class="dropdown-item" href="pz6.php">PzKpfw VI "Tiger"</a>
						<a class="dropdown-item" href="pz7.php">PzKpfw VIB "Tiger II"</a>
						<a class="dropdown-item" href="sg3.php">StuG</a>
						<a class="dropdown-item" href="jp1.php">JPz</a>
						<a class="dropdown-item disabled" href="#">Prototypes</a>				                                                                
					</div>
				</li>
							
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle <?php if ($thisPage=="story") echo " active"; ?> pl-3" href="#" id="navbardrop" data-toggle="dropdown">Stories</a>
					<div class="dropdown-menu">
                        <a class="dropdown-item" href="001.php">Ziegler goes to town</a>
                        <a class="dropdown-item" href="002.php">An awkward victory</a>
                        <a class="dropdown-item" href="007.php">Tea and sausages</a>
                        <a class="dropdown-item" href="009.php">Rommel at Flavion</a>
                        <a class="dropdown-item" href="010.php">Across the Meuse</a>
                        <a class="dropdown-item" href="011.php">Carius at Sinimae</a>
                        <a class="dropdown-item" href="013.php">Northern Doom</a>
					</div>
				</li>
				
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php if ($thisPage=="stuff") echo " active" ?> pl-3" href="#" id="navbardrop" data-toggle="dropdown">Stuff</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="stuff.php">Thingies</a>
					</div>
				</li>
				
			</ul>
		</div>
	</nav>
