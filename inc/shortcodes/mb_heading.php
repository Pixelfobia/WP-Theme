<?php
// mb vc element
vc_map(array(
	'name' => 'MB Heading',
	'base' => 'mb_heading',
	'description' => 'Heading.',
	'category' => 'MB Elements',
	'params' => array(
		array(
			'type' => 'textfield',
			'admin_label' => true,
			'heading' => 'Heading',
			'description' => 'Heading',
			'param_name' => 'mb_heading_heading',
		),
		array(
			'type' => 'textfield',
			'admin_label' => true,
			'heading' => 'Subheading',
			'description' => 'Subheading',
			'param_name' => 'mb_heading_subheading',
		),
		array(
			'type' => 'colorpicker',
			'admin_label' => true,
			'heading' => 'Background Color',
			'description' => 'Background Color',
			'param_name' => 'mb_heading_background_color',
		),		
	)
));
	
// mb vc shortcode
add_shortcode('mb_heading', 'mb_heading');
function mb_heading($atts, $content) {
	extract(shortcode_atts(array(	
		'mb_heading_heading' => '',
		'mb_heading_subheading' => '',
		'mb_heading_background_color' => '',
	), $atts));
	
	$html = '';
	
	if ($mb_heading_background_color) {
		$html .= '
		<style>
		#mb-heading {
			background-color: '.$mb_heading_background_color.' !important;
		}
		</style>
		';
	}

	$html .= '

	<!-- Heading section -->
		<section class="bg-light pt-5" id="mb-heading">
			<div class="container px-5 mt-5">
				<div class="text-center">
						<h1 class="fw-bolder">'.$mb_heading_heading.'</h1>
						<p class="lead fw-normal text-muted mb-0">'.$mb_heading_subheading.'</p>
				</div>
			</div>
		</section>
	';
	
	return $html;
}