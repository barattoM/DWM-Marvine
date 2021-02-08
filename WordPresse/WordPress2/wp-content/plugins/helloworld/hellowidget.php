<?php
class hellowidget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct('helloworld', 'Hello World', array('description' => 'Un plug-in qui écrit Hello World'));
        // on ajoute l'action de sauvegarde au chargement du widget
        add_action('wp_loaded', array($this, 'save_comm'));
    }
    public function widget($args, $instance)
    {
        // formulaire afficher à l'écran pour l'utilisateur
        // on appel les méthodes standard au cas où un autre plug-in les aurait surchargées
        echo $args['before_widget'];
        echo $args['before_title'];
        echo apply_filters('widget_title', $instance['title']);
        echo $args['after_title'];
        // corps du widget
        $couleur = get_option('helloworld_couleur', 'white');
        ?>
        <div id="test" style="color:<?php echo $couleur;?>">Hello World est un plug-in qui enregistre les commentaires en base de données</div>
        <form action="" method="post">
            <p>
                <label for="helloworld_comm">Votre commentaire :</label>
                <input id="helloworld_comm" name="helloworld_comm" type="texte"/>
            </p>
            <input type="submit"/>
        </form>
        <h1>Hello World</h1>
        <?php
        echo $args['after_widget'];
    }

    public function save_comm(){
        if (isset($_POST['helloworld_comm']) && !empty($_POST['helloworld_comm'])){
            global $wpdb; $comm = $_POST['helloworld_comm'];
            $row = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}helloworld_commentaire WHERE comm = '$comm'");
            if (is_null($row)) {
                $wpdb->insert("{$wpdb->prefix}helloworld_commentaire", array('comm' => $comm));
            }
        }
    }

    public function form($instance)
    // formulaire de gestion des paramètres pour le module d'administration
    { 
        $title = isset($instance['title']) ? $instance['title'] : '';
        ?> 
        <p>
            <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
        <?php
    }
}