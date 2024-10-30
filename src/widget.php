<?php
namespace SOSIDEE_HSC\SRC;
defined( 'SOSIDEE_HSC' ) or die( 'you were not supposed to be here' );
use \Elementor as NativeElementor;
use \SOSIDEE_HSC\SOS\WP as SOS_WP;

class Widget extends \SOSIDEE_HSC\SOS\WP\Elementor\Widget
{
    protected $ctrlMode;
    protected $ctrlSelector;
    protected $ctrlRole;
    protected $ctrlUser;
    protected $ctrlContent;

    public static $SOS_TAG = 'problem';

    public function setKey() {
        $this->key = \SOSIDEE_HSC\SosPlugin::instance()->key . '_ew' ;
    }

    public function initialize() {
        parent::initialize();

        $plugin = self::plugin();

        $this->title = $plugin::t_('elementor.widget.title');

        $this->section->title = $this->title;
        $this->icon = 'eicon-preview-medium';

        $this->ctrlMode = $this->addControl($plugin::t_('elementor.widget.mode.label') . ':', NativeElementor\Controls_Manager::SELECT );
        $this->ctrlMode->options = [
            '' => $plugin::t_('elementor.widget.mode.select'),
            'hide-guest' => $plugin::t_('elementor.widget.mode.hide.guest'),
            'hide-logged' => $plugin::t_('elementor.widget.mode.hide.logged'),
            'show-guest' => $plugin::t_('elementor.widget.mode.show.guest'),
            'show-logged' => $plugin::t_('elementor.widget.mode.show.logged'),
        ];
        $this->ctrlMode->default = '';

        $this->ctrlSelector = $this->addControl($plugin::t_('elementor.widget.selector.label') . ':', NativeElementor\Controls_Manager::SELECT );
        $this->ctrlSelector->description = $plugin::t_('elementor.widget.selector.description');
        $this->ctrlSelector->options = [
            '' => $plugin::t_('elementor.widget.selector.none'),
            'role' => $plugin::t_('elementor.widget.selector.role'),
            'user' => $plugin::t_('elementor.widget.selector.user'),
        ];
        $this->ctrlSelector->default = '';

        $this->ctrlRole = $this->addControl($plugin::t_('elementor.widget.role.label') . ':', NativeElementor\Controls_Manager::SELECT2 );
        $this->ctrlRole->description = $plugin::t_('elementor.widget.role.description');
        $roles = SOS_WP\User::getRoles();
        foreach ( $roles as $role ) {
            $this->ctrlRole->options[ $role->name ] = $role->description;
        }
        $this->ctrlRole->multiple = true;
        $this->ctrlRole->default = [];

        $this->ctrlUser = $this->addControl($plugin::t_('elementor.widget.user.label') . ':', NativeElementor\Controls_Manager::SELECT2 );
        $this->ctrlUser->description = $plugin::t_('elementor.widget.user.description');
        $users = SOS_WP\User::getList();
        foreach ( $users as $user ) {
            $this->ctrlUser->options[ $user->login ] = "{$user->login} <{$user->email}>";
        }
        $this->ctrlUser->multiple = true;
        $this->ctrlUser->default = [];

        $this->ctrlContent = $this->addControl($plugin::t_('elementor.widget.content.label') . ':', NativeElementor\Controls_Manager::WYSIWYG );
        $this->ctrlContent->description = $plugin::t_('elementor.widget.content.description');
        $this->ctrlContent->default = $plugin::t_('elementor.widget.content.placeholder');

    }

    private function openShortcode( $action, $selector, $roles, $users) {
        $ret = '[' . self::$SOS_TAG . ' ' . $action;
        if ( !empty($selector) ) {
            $ret .= ' ' . $selector . '="';
            if ( $selector == 'role' ) {
                $ret .= implode(',', $roles);
            } else if ( $selector == 'user' ) {
                $ret .= implode(',', $users);
            }
            $ret .= '"';
        }
        $ret .= ']';
        return $ret;
    }
    private function closeShortcode() {
        return '[/' . self::$SOS_TAG . ']';
    }

    protected function render() {
        parent::render();

        $this->add_inline_editing_attributes( $this->ctrlContent->key, 'advanced' );
        $settings = $this->get_settings_for_display();

        if ( key_exists($this->ctrlMode->key, $settings) ) {
            $value = $settings[ $this->ctrlMode->key ];
        } else {
            $value = '?-?';
        }
        $items = explode('-', $value);
        $action = $items[0] . '="' . $items[1] . '"';

        $selector = $settings[ $this->ctrlSelector->key ];
        $roles = $settings[ $this->ctrlRole->key ];
        $users = $settings[ $this->ctrlUser->key ];

        $ras = $this->get_render_attribute_string( $this->ctrlContent->key );
        if ( key_exists($this->ctrlContent->key, $settings) ) {
            $content = $settings[ $this->ctrlContent->key ];
        } else {
            $plugin = self::plugin();
            $content = '<strong style="color:red;">' . $plugin::t_('elementor.widget.mode.invalid') . '</strong>';
        }
        $html = $this->openShortcode($action, $selector, $roles, $users);
        $html .= '<hscontent ' . $ras . '>' . $content . '</hscontent>';
        $html .= $this->closeShortcode();

        echo $html;
    }

}