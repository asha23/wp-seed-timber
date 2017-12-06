<?php

if ( ! class_exists( 'Timber' ) ) {
	add_action( 'admin_notices', function() {
			echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . esc_url( admin_url( 'plugins.php#timber' ) ) . '">' . esc_url( admin_url( 'plugins.php' ) ) . '</a></p></div>';
		} );
	return;
}

Timber::$dirname = array('views');

class ArloTwig extends TimberSite {

	function __construct() {
		add_filter( 'timber_context', array( $this, 'add_to_context' ) );
		add_filter( 'get_twig', array( $this, 'add_to_twig' ) );
		parent::__construct();
	}

	// Register variables for using in twig template files & Add to context so it can be accessed globally.
	function add_to_context( $context ) {
		$content[''] = new TimberMenu('');
		//globally assigned theme options
		$context['domain']      = get_site_url();
		$context['ajax_url']    = admin_url('admin-ajax.php');
		$context['notes'] 	= 'These values are available everytime you call Timber::get_context();';

		$context['main_nav'] 	= new TimberMenu('main_nav');
		$context['footer_nav']	= new TimberMenu('footer_nav');

		$context['site'] 	= $this;
		$context['options'] 	= get_fields('option');
		$context['id']		= get_the_ID();
		return $context;
	}

	function add_to_twig( $twig ) {
		/* this is where you can add your own fuctions to twig */
		$twig->addExtension( new Twig_Extension_StringLoader() );
		$twig->addFilter( 'str_repeat', new Twig_Filter_Function( 'str_repeat' ) );
		return $twig;
	}

}

new ArloTwig();
