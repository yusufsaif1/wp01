<?php
class fiona_blog_import_dummy_data {

	private static $instance;

	public static function init( ) {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof fiona_blog_import_dummy_data ) ) {
			self::$instance = new fiona_blog_import_dummy_data;
			self::$instance->fiona_blog_setup_actions();
		}

	}

	/**
	 * Setup the class props based on the config array.
	 */
	

	/**
	 * Setup the actions used for this class.
	 */
	public function fiona_blog_setup_actions() {

		// Enqueue scripts
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'fiona_blog_import_customize_scripts' ), 0 );

	}
	
	

	public function fiona_blog_import_customize_scripts() {

	wp_enqueue_script( 'fiona-blog-import-customizer-js', get_template_directory_uri() . '/assets/js/fiona-blog-import-customizer.js', array( 'customize-controls' ) );
	}
}

$fiona_blog_import_customizers = array(

		'import_data' => array(
			'recommended' => true,
			
		),
);
fiona_blog_import_dummy_data::init( apply_filters( 'fiona_blog_import_customizer', $fiona_blog_import_customizers ) );