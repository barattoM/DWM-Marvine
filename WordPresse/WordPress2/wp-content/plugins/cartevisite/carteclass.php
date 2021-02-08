<?php
 //on inclu la definition du widget 
include_once plugin_dir_path( __FILE__ ).'/cartewidget.php'; 
class CarteClass{ 
    public function __construct()
    { // on déclare le widget
        add_action('widgets_init', function(){register_widget('CarteWidget');}); 
        add_action('wp_enqueue_scripts',array($this,'persoCSS'),15);
        add_action('wp_footer',array($this,'persoJS'),15);
    }

    function persoCSS(){
        wp_enqueue_style('Visitecss', plugins_url('cartevisite/design.css'));
    }

    function persoJS(){
        wp_enqueue_script('VisiteJS', plugins_url('cartevisite/script.js'));
    }
    
    public static function install() {
        //méthode déclenchée à l'activation du plug-in
        global $wpdb;
        $wpdb->query("CREATE TABLE IF NOT EXISTS {$wpdb->prefix}cartevisite (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nom VARCHAR(255) NOT NULL,
            prenom VARCHAR(255) NOT NULL,
            adresse VARCHAR(255) NOT NULL,
            phone VARCHAR(255) NOT NULL
            );");
    }
    public static function uninstall(){
        //méthode déclenchée à la suppression du module
        global $wpdb;
        $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}cartevisite;");
    }
}