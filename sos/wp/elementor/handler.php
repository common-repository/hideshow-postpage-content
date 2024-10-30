<?php
namespace SOSIDEE_HSC\SOS\WP\Elementor;
defined( 'SOSIDEE_HSC' ) or die( 'you were not supposed to be here' );

class Handler
{
    public $class;
    public $native;

    public function __construct( $class ) {
        $this->class = $class;
        $this->native = null;
    }
}