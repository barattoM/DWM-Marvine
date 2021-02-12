<?php
/* Plugin Name: Image
Description: Widget image
Author: Moi
Version: 1.0 
*/
class Image_Plugin{ 
    public function __construct(){ 
        include_once plugin_dir_path(__FILE__).'/imageClass.php';
        add_action('admin_menu', array($this, 'add_admin_menu'),20);
        add_action('admin_init', array($this, 'register_settings'));
        new imageClass();
    } 

    public function add_admin_menu(){
        //on ajoute une page dans le menu administrateur
        add_menu_page('Image', 'Image', 'manage_options', 'Image', array($this, 'menu_html'));
    }

    public function menu_html(){ 
       
    }

    public function register_settings(){
      
    }
} 
new Image_Plugin();
