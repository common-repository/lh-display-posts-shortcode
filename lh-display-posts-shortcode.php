<?php
/**
 * Plugin Name: LH Display Posts Shortcode
 * Plugin URI: https://displayposts.com
 * Description: Display a listing of posts using the [lh_display_posts] shortcode
 * Version: 1.01
 * Author: Peter Shaw
 * Author URI: https://shawfactor.com
 * Requires PHP: 5.6
 * Text Domain: lh_dps
 * Domain Path: /languages
 */
 
 if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
 
 if (!class_exists('LH_Display_posts_shortcode_plugin')) {


class LH_Display_posts_shortcode_plugin {

    private static $instance;
    
    static function return_plugin_namespace(){
        
        return 'lh_dps';
        
    }

    public function lh_display_posts_output($atts = null,  $content = null ) {
    
        // define attributes and their defaults
        extract(
            shortcode_atts(
                array (
                    'post_parent' => false,
                    'post__in' => false,
                    'post_type' => 'post',
                    'post_author' => false,
                    'suppress_filters' => true,
                    'ignore_sticky_posts' => true,
                    'posts_per_page' => -1,
                    'template' 	=> 'default-template.php',
                    'orderby' => false,
                    'order' => false,
                ),
                $atts
            )
        );
        
        $return_string = '';
    
        ob_start();
        
        $args = array();
        
        $args['suppress_filters'] = $suppress_filters;
        $args['ignore_sticky_posts'] = $ignore_sticky_posts;
        $args['posts_per_page'] = $posts_per_page;
        $args['post_type'] = $post_type;
    
    
        if (isset($post__in)) { $args['post__in'] = $post__in; }
    
        if (isset($post_parent)) { $args['post_parent'] = $post_parent; }
    
        if (isset($post_author)) { $args['post_author'] = $post_author; }
        
        if (isset($orderby)) { $args['orderby'] = $orderby; }
        
        if (isset($order)) { $args['order'] = $order; }

    
        $the_query = new WP_Query( $args );
    
        $display_posts = $the_query->posts;
    
        $dir = get_stylesheet_directory().'/'.self::return_plugin_namespace().'-templates/'.$template;
    
    
        if (file_exists($dir)){
        
            include($dir);
        
        } else {
        
            include( plugin_dir_path( __FILE__ ).self::return_plugin_namespace().'-templates/default-template.php');    
        
        }
    
    
        $return_string .= ob_get_contents();
        ob_end_clean();
        
        return $return_string;
    
    }

    public function register_shortcodes(){
    
        add_shortcode('lh_display_posts', array($this,'lh_display_posts_output'));
    
    }


    public function plugin_init(){
        
        //potentially load translations
        load_plugin_textdomain( self::return_plugin_namespace(), false, basename( dirname( __FILE__ ) ) . '/languages' );
        
        //register the shortcode
        add_action( 'init', array($this,'register_shortcodes'));   
        
    }


    /**
     * Gets an instance of our plugin.
     *
     * using the singleton pattern
     */
    public static function get_instance(){
        
        if (null === self::$instance) {
            
            self::$instance = new self();
            
        }
 
        return self::$instance;
        
    }

    
    public function __construct() {
        
    	 //run our hooks on plugins loaded to as we may need checks       
        add_action( 'plugins_loaded', array($this,'plugin_init'));
    
    }

}

$lh_display_posts_shortcode_instance = LH_Display_posts_shortcode_plugin::get_instance();

}

?>