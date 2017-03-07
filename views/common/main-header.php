<?php // Uses the standard Bootstrap navigation system ?>

<header id="header" class="container">
    <div class="row">

		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-header">

				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<i class="fa fa-bars"></i>
				</button>

				<a href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage" class="navbar-brand">

					<?php bloginfo('title'); ?>

				</a>

			</div>

			<?php // Collect the nav links, forms, and other content for toggling ?>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<?php seed_main_nav(); ?>
			</div>

		</nav>

    </div>
</header>
