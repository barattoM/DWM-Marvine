<?php
/* Plugin Name: Hello World 
Description: Ecrit Hello World en haut de la page 
Author: Martine 
Version: 1.0 
*/
class HelloWorld_Plugin{ 
    public function __construct(){ 
        include_once plugin_dir_path(__FILE__).'/helloClass.php';
        register_activation_hook(__FILE__, array('helloclass','install'));
        register_deactivation_hook(__FILE__, array('helloclass', 'uninstall'));
        add_action('admin_menu', array($this, 'add_admin_menu'),20);
        add_action('admin_init', array($this, 'register_settings'));
        new HelloClass();
    } 

    public function add_admin_menu(){
        //on ajoute une page dans le menu administrateur
        add_menu_page('Hello World', 'Hello World plugin', 'manage_options', 'helloworld', array($this, 'menu_html'));
    }

    public function menu_html(){ 
        echo '<h1>'.get_admin_page_title().'</h1>';
        ?>
        <form method="post" action="options.php">
            <label>Couleur</label>
            <input type="color" value="<?php echo get_option("helloworld_couleur")?>" name="helloworld_couleur" />
            <!-- <input type="text" name="helloworld_couleur" value="<?php echo get_option("helloworld_couleur")?>"/> -->
            <?php settings_fields('helloworld_settings') ?>
            <?php submit_button(); ?>
        </form>
        <?php
    }

    public function register_settings(){
        register_setting('helloworld_settings', 'helloworld_couleur');
    }
} 
new HelloWorld_Plugin();
