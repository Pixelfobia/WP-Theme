<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<?php wp_head(); ?>
	</head>
  	<body <?php body_class('d-flex flex-column h-100'); ?>>
			<?php wp_body_open(); ?>
			<main class="flex-shrink-0">
				<!-- Navigation-->
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					<div class="container px-5">
						<a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<?php mb_menu('main_menu'); ?>
						</div>
					</div>
				</nav>