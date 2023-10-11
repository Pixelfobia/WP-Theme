<?php
// mb vc element
vc_map(array(
	'name' => 'MB Team Members',
	'base' => 'mb_team_members',
	'description' => 'Left Image. Right Text.',
	'category' => 'MB Elements',
	'params' => array(
		array(
			'type' => 'attach_image',
			'admin_label' => true,
			'heading' => 'Left Image',
			'description' => 'Left Image',
			'param_name' => 'mb_team_members_image',
		),
		array(
			'type' => 'textfield',
			'admin_label' => true,
			'heading' => 'Heading',
			'description' => 'Heading',
			'param_name' => 'mb_team_members_heading',
		),
		array(
			'type' => 'textfield',
			'admin_label' => true,
			'heading' => 'Subheading',
			'description' => 'Subheading',
			'param_name' => 'mb_team_members_subheading',
		),
		array(
			'type' => 'colorpicker',
			'admin_label' => true,
			'heading' => 'Background Color',
			'description' => 'Background Color',
			'param_name' => 'mb_team_members_background_color',
		),		
	)
));
	
// mb vc shortcode
add_shortcode('mb_team_members', 'mb_team_members');
function mb_team_members($atts, $content) {
	extract(shortcode_atts(array(	
		'mb_team_members_image' => '',
		'mb_team_members_heading' => '',
		'mb_team_members_subheading' => '',
		'mb_team_members_background_color' => '',
	), $atts));
	
	$html = '';
	
	if ($mb_team_members_background_color) {
		$html .= '
		<style>
		#about-section-two {
			background-color: '.$mb_team_members_background_color.' !important;
		}
		</style>
		';
	}

	$html .= '

	<!-- About section two-->
		<section class="py-5">
			<div class="container px-5 my-5">
				<div class="row gx-5 align-items-center">
					<div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="'.wp_get_attachment_url($mb_team_members_image).'" alt="..." /></div>
					<div class="col-lg-6">
						<h2 class="fw-bolder">'.$mb_team_members_heading.'</h2>
						<p class="lead fw-normal text-muted mb-0">'.$mb_team_members_subheading.'</p>
					</div>
				</div>
			</div>
		</section>
	';
	
	return $html;
}