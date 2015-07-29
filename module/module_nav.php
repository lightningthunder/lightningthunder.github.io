<nav class="navbar navbar-default" id="global-header-wrap">
	<div class="container-fluid" id="global-header">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="#"><img class="la_global-header-logo" src="img/la_logo_script_salmon-on-transparent.png" alt="local alike logo" /></a>
		</div>
		<div class="navbar-collapse collapse" id="navbar">
			<ul class="nav navbar-nav">
				<li><a href="#about">About</a></li>
			</ul>
			<?php
				if ( $_SESSION['code'] )
				{
			?>
			<div class="promo-code-notify" data-toggle="popover" data-content="Yay! Deals! You can use this discount code at checkout to apply 10% off your entire transaction.">You have unlocked<code><?= $_SESSION['code']; ?></code>discount code!</div>
			<?php
				}
			?>
		</div>
	</div>
</nav>