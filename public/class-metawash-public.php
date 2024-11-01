<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.suments.com
 * @since      1.0.0
 *
 * @package           Metawash
 * @author     Suments Data 
 */

class METAWASH_Public {

	
	private $plugin_name;


	private $version;

	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}


	public function enqueue_styles() {

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/metawash-public.css', array(), $this->version, 'all' );

	}


	public function enqueue_scripts() {

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/plugin-name-public.js', array( 'jquery' ), $this->version, false );

	}

}
