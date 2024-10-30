<?php
/*
Plugin Name: Hide/Show Post/Page Content
Version: 1.5.3
Description: Hide or show a selected content of public posts/pages depending on whether the user is logged or not. Compatible with Elementor.
Author: SOSidee.com srl
Author URI: https://sosidee.com
Text Domain: hideshow-postpage-content
Domain Path: /languages/
*/
namespace SOSIDEE_HSC;
( defined( 'ABSPATH' ) and defined( 'WPINC' ) ) or die( "you were not supposed to be here" );
defined('SOSIDEE_HSC') || define( 'SOSIDEE_HSC', true );

use \SOSIDEE_HSC\SOS\WP as SOS_WP;

require_once "loader.php";

\SOSIDEE_CLASS_LOADER::instance()->add( __NAMESPACE__, __DIR__ );

/**
 * 
 * The class of this plugin *
 * 
**/
class SosPlugin extends SOS\WP\Plugin
{

    public static $SC_TAG = 'soshsc';

    public $pgInfo;
    public $shortcode;

    protected function __construct() {
        parent::__construct();
        
        //PLUGIN KEY & NAME
        $this->key = 'sos-hsc';
        $this->name = 'Hide/Show Post/Page Content';

        $this->pgInfo = null;
        $this->shortcode = null;

        $this->internationalize('hideshow-postpage-content');

    }

    protected function initialize() {
        $this->addWidget( 'SRC\Widget' );
    }

    protected function initializeFrontend() {

        //add shortcode
        $this->addShortCode( self::$SC_TAG, array($this, 'handleSoshscShortcode') );
    }
    
    
    protected function initializeBackend() {
        //add the info page
        $this->pgInfo = $this->addPage('info');

        //add the info page to the tools admin console menu
        $menu_title = 'Hide/Show Content';
        $this->menu->addTool($this->pgInfo, $menu_title);

    }

    public function initializeElementor() {
        parent::initializeElementor();

        $widget = $this->elementorWidgets[0]->native;
        $widget::$SOS_TAG = self::$SC_TAG;
    }

    public function handleSoshscShortcode( $args, $content, $tag ) {
        $ret = '';

        // input validation
        $action = false;
        $condition = false;
        $roles = false;
        $users = false;
        $is_role = false;
        $is_user = false;

        foreach ( $args as $key => $value ) {
            if ( in_array($key, ['hide', 'show']) ) {
                $action = $key;
            }
            $value = strtolower(trim($value));
            if ( in_array($value, ['guest', 'logged']) ) {
                $condition = $value;
            }
            if ( $key == 'role' ) {
                $roles = explode(',', $value);
            }
            if ( $key == 'user' ) {
                $users = explode(',', $value);
            }
        }

        // apply action and condition if correct
        if ($action !== false && $condition !== false) {
            $hide = $action == 'hide';
            $show = $action == 'show';
            $if_guest = $condition == 'guest';
            $if_logged = $condition == 'logged';
            $logged = is_user_logged_in();
            $guest = !$logged;
            if ( $logged && ( $roles !== false || $users !== false ) ) {
                $user = SOS_WP\User::get();
                if ( is_array($roles) ) {
                    for ( $n=0; $n<count($user->roles); $n++ ) {
                        for ( $m=0; $m<count($roles); $m++ ) {
                            if ( strcasecmp($user->roles[$n], $roles[$m]) == 0 ) {
                                $is_role = true;
                                break;
                            }
                        }
                        if ($is_role) {
                            break;
                        }
                    }
                } else {
                    if ( is_array($users) ) {
                        for ( $m=0; $m<count($users); $m++ ) {
                            if ( strcasecmp($user->login, $users[$m]) == 0 ) {
                                $is_user = true;
                                break;
                            }
                        }
                    }
                }
            } else {
                $is_role = true;
                $is_user = true;
            }

            if ( $guest ) {
                $show_content = ( $hide && $if_logged ) || ( $show && $if_guest );
            } else {
                $show_content = ( $hide && $if_guest ) || ( $show && $if_logged && ( $is_role || $is_user ) );
            }

            if ( $show_content ) {
                $ret = do_shortcode($content);
            }

        } else {
            // problem with the input data from the editor
            $msg = "<pre><em>we've had a problem here:</em><br />[" . self::$SC_TAG;
            foreach ( $args as $key => $value ) {
                if ( is_numeric($key) ) {
                    $msg .= ' ' . $value;
                } else {
                    $msg .= ' ' . $key . '=' . $value;
                }
            }
            $msg .= '] ... [/' . self::$SC_TAG . ']';
            $msg .= '<br /><em>invalid attribute(s) a/o value(s)</em></pre>';
            // escape output for post content
            $ret = wp_kses_post( $msg );
        }

        return apply_filters( 'handleSoshscShortcode', $ret );
    }
   
}

/**
 * DO NOT CHANGE BELOW UNLESS YOU KNOW WHAT YOU DO *
 **/
$plugin = SosPlugin::instance();
$plugin->run();

// this is the end (A B C)