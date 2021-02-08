<?php
class cartewidget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct('cartevisite', 'Carte visite', array('description' => 'Un plug-in qui écrit une carte de visite'));
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
        global $wpdb;
        $row=$wpdb->get_row("SELECT * FROM {$wpdb->prefix}cartevisite ORDER BY `id` DESC LIMIT 1;");
        $couleur = get_option('cartevisite_couleur', 'black');
        $nom = $row->nom;
        $prenom = $row->prenom;
        $adresse = $row->adresse;
        $phone = $row->phone;
        $affAdresse= get_option('cartevisite_aff_adresse','off');
        $affNom= get_option('cartevisite_aff_nom','nom-prenom');
        $affPhone= get_option('cartevisite_aff_phone','off');
        $background=get_option('cartevisite_background',"white")
        ?>
        <h1>Carte de visite</h1>
        <div id="carte" style="background-color:<?php echo $background ;?>">
            <div class="image"><img src="http://tout/WordPresse/WordPress2/wp-content/uploads/2021/02/ff2.jpg" alt=""></div>
            <div class="colonne">
                <div class="colonne" id="recto">
                    <?php 
                    if($affNom=="nom-prenom"){
                        echo '<div style="color:'.$couleur.'">'.$nom." ".$prenom.'</div> ';
                    }else{
                        echo '<div style="color:'.$couleur.'">'.$prenom." ".$nom.'</div> ';
                    }
                    ?>
                </div>
                <div class="colonne invisible" id="verso">
                <?php
                    if($affAdresse=="on"){
                        echo '<div style="color:'.$couleur.'">'.$adresse.'</div> ';
                    }
                    if($affPhone=="on"){
                        echo '<div style="color:'.$couleur.'">'.$phone.'</div> ';
                    }
                    ?>
                </div>
            </div>
        </div>

        <?php
        echo $args['after_widget'];
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