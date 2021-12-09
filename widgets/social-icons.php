<?php
function menro_load_widget() {
    register_widget( 'menro_widget' );
}
add_action( 'widgets_init', 'menro_load_widget' );

// Creating the widget
class menro_widget extends WP_Widget {
    function __construct() {
        parent::__construct('menro_widget',__('MENRO Social Icons', 'menro_widget_domain'),array( 'description' => __( 'Botones de redes sociales.', 'menro_widget_domain' ), ));
    }

    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        $facebook = $instance['menro_facebook'];
        $pinterest = $instance['menro_pinterest'];
        $linkedin = $instance['menro_linkedin'];
        $youtube = $instance['menro_youtube'];
        $whatsapp = $instance['menro_whatsapp'];
        $twitter = $instance['menro_twitter'];
        $instagram = $instance['menro_instagram'];
        $whatsapp_text = $instance['menro_whatsapp_text'];

        echo $args['before_widget'];
        if ( ! empty( $title ) ){
        echo $args['before_title'] . $title . $args['after_title'];
        }

        if($whatsapp):
            $whatsapp__url = "https://wa.me/".$whatsapp;
            if($whatsapp_text):
                $whatsapp__url = "https://wa.me/".$whatsapp.'?text='.$whatsapp_text;
            endif;
        endif;

        echo "<div class='social-container'>";
        if( ! empty($facebook)){
            echo "<a href='".$facebook."' target='_blank'><div class='item'><img class='no-hover' src='".get_template_directory_uri().'/img/icons/facebook.png'."' alt=''><img class='hover' src='".get_template_directory_uri().'/img/icons/facebook-alternate.png'."' alt=''></div></a>";
        }
        if( ! empty($linkedin)){
            echo "<a href='".$linkedin."' target='_blank'><div class='item'><img class='no-hover' src='".get_template_directory_uri().'/img/icons/linkedin.png'."' alt=''><img class='hover' src='".get_template_directory_uri().'/img/icons/linkedin-alternate.png'."' alt=''></div></a>";
        }
        if( ! empty($instagram)){
            echo "<a href='".$instagram."' target='_blank'><div class='item'><img class='no-hover' src='".get_template_directory_uri().'/img/icons/instagram.png'."' alt=''><img class='hover' src='".get_template_directory_uri().'/img/icons/instagram-alternate.png'."' alt=''></div></a>";
        }
        if( ! empty($twitter)){
            echo "<a href='".$twitter."' target='_blank'><div class='item'><img class='no-hover' src='".get_template_directory_uri().'/img/icons/twitter.png'."' alt=''><img class='hover' src='".get_template_directory_uri().'/img/icons/twitter-alternate.png'."' alt=''></div></a>";
        }
        if( ! empty($youtube)){
            echo "<a href='".$youtube."' target='_blank'><div class='item'><img class='no-hover' src='".get_template_directory_uri().'/img/icons/youtube.png'."' alt=''><img class='hover' src='".get_template_directory_uri().'/img/icons/youtube-alternate.png'."' alt=''></div></a>";
        }
        if( ! empty($pinterest)){
            echo "<a href='".$pinterest."' target='_blank'><div class='item'><img class='no-hover' src='".get_template_directory_uri().'/img/icons/pinterest.png'."' alt=''><img class='hover' src='".get_template_directory_uri().'/img/icons/pinterest-alternate.png'."' alt=''></div></a>";
        }
        if( ! empty($whatsapp)){
            echo "<a href='".$whatsapp__url."' target='_blank'><div class='item'><img class='no-hover' src='".get_template_directory_uri().'/img/icons/whatsapp.png'."' alt=''><img class='hover' src='".get_template_directory_uri().'/img/icons/whatsapp-alternate.png'."' alt=''></div></a>";
        }


        echo "</div>";

        echo $args['after_widget'];
    }


public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
        $title = $instance[ 'title' ];
    }else {
        $title = __( 'New title', 'menro_widget_domain' );
    }

    if ( isset( $instance[ 'menro_facebook' ] ) ) {
        $facebook = $instance[ 'menro_facebook' ];
    }else{
        $facebook = __( '#', 'menro_widget_domain' );
    }

    if ( isset( $instance[ 'menro_youtube' ] ) ) {
        $youtube = $instance[ 'menro_youtube' ];
    }else{
        $youtube = __( '#', 'menro_widget_domain' );
    }

    if ( isset( $instance[ 'menro_linkedin' ] ) ) {
        $linkedin = $instance[ 'menro_linkedin' ];
    }else{
        $linkedin = __( '#', 'menro_widget_domain' );
    }

    if ( isset( $instance[ 'menro_pinterest' ] ) ) {
        $pinterest = $instance[ 'menro_pinterest' ];
    }else{
        $pinterest = __( '#', 'menro_widget_domain' );
    }

    if ( isset( $instance[ 'menro_whatsapp' ] ) ) {
        $whatsapp = $instance[ 'menro_whatsapp' ];
    }else{
        $whatsapp = __( '#', 'menro_widget_domain' );
    }

    if ( isset( $instance[ 'menro_whatsapp_text' ] ) ) {
        $whatsapp_text = $instance[ 'menro_whatsapp_text' ];
    }else{
        $whatsapp_text = __( '#', 'menro_widget_domain' );
    }

    if ( isset( $instance[ 'menro_instagram' ] ) ) {
        $instagram = $instance[ 'menro_instagram' ];
    }else{
        $instagram = __( '#', 'menro_widget_domain' );
    }

    if ( isset( $instance[ 'menro_twitter' ] ) ) {
        $twitter = $instance[ 'menro_twitter' ];
    }else{
        $twitter = __( '#', 'menro_widget_domain' );
    }
// Widget admin form
?>
<p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><strong><?php _e( 'Title:' ); ?></strong></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>

<ul>
    <li>
        <label for="<?php echo $this->get_field_id('menro_facebook');?>"><strong><?php _e( 'Facebook:' ); ?></strong></label>
        </br>
        <input type="text" id="<?php echo $this->get_field_id('menro_facebook');?>" name="<?php echo $this->get_field_name('menro_facebook');?>" value="<?php echo esc_attr( $facebook ); ?>">
        <hr>
    </li>
    <li>
        <label for="<?php echo $this->get_field_id('menro_linkedin');?>"><strong><?php _e( 'LinkedIn:' ); ?></strong></label></br>
        <input type="text" id="<?php echo $this->get_field_id('menro_linkedin');?>" name="<?php echo $this->get_field_name('menro_linkedin');?>" value="<?php echo esc_attr( $linkedin ); ?>">
        <hr>
    </li>
    <li>
        <label for="<?php echo $this->get_field_id('menro_instagram');?>"><strong><?php _e( 'Instagram:' ); ?></strong></label></br>
        <input type="text" id="<?php echo $this->get_field_id('menro_instagram');?>" name="<?php echo $this->get_field_name('menro_instagram');?>" value="<?php echo esc_attr( $instagram ); ?>">
        <hr>
    </li>
    <li>
        <label for="<?php echo $this->get_field_id('menro_twitter');?>"><strong><?php _e( 'Twitter:' ); ?></strong></label></br>
        <input type="text" id="<?php echo $this->get_field_id('menro_twitter');?>" name="<?php echo $this->get_field_name('menro_twitter');?>" value="<?php echo esc_attr( $twitter ); ?>">
        <hr>
    </li>
    <li>
        <label for="<?php echo $this->get_field_id('menro_youtube');?>"><strong><?php _e( 'YouTube:' ); ?></strong></label></br>
        <input type="text" id="<?php echo $this->get_field_id('menro_youtube');?>" name="<?php echo $this->get_field_name('menro_youtube');?>" value="<?php echo esc_attr( $youtube ); ?>">
        <hr>
    </li>
    <li>
        <label for="<?php echo $this->get_field_id('menro_pinterest');?>"><strong><?php _e( 'Pinterest:' ); ?></strong></label></br>
        <input type="text" id="<?php echo $this->get_field_id('menro_pinterest');?>" name="<?php echo $this->get_field_name('menro_pinterest');?>" value="<?php echo esc_attr( $pinterest ); ?>">
        <hr>
    </li>
    <li>
        <label for="<?php echo $this->get_field_id('menro_whatsapp');?>"><strong><?php _e( 'Whatsapp:' ); ?></strong></label></br>
        <input type="text" id="<?php echo $this->get_field_id('menro_whatsapp');?>" name="<?php echo $this->get_field_name('menro_whatsapp');?>" value="<?php echo esc_attr( $whatsapp ); ?>">
        <br>
        <small>Agrega tu número de whatsapp incluyendo tu código de país al principio ( 52 1 para México). No agregues
            signos ( +, ()) ni
            espacios. <strong>Ejemplo:</strong>5210000000000.</small>
        <br><br>
        <label for="<?php echo $this->get_field_id('menro_whatsapp_text');?>"><strong><?php _e( 'Mensaje predeterminado:' ); ?></strong></label>
        </br>
        <input type="text" id="<?php echo $this->get_field_id('menro_whatsapp_text');?>" name="<?php echo $this->get_field_name('menro_whatsapp_text');?>" value="<?php echo esc_attr( $whatsapp_text ); ?>">
        <hr>

    </li>

</ul>
<?php
}
public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['menro_facebook'] = ( ! empty( $new_instance['menro_facebook'] ) ) ? strip_tags( $new_instance['menro_facebook'] ) : '';
    $instance['menro_whatsapp'] = ( ! empty( $new_instance['menro_whatsapp'] ) ) ? strip_tags( $new_instance['menro_whatsapp'] ) : '';
    $instance['menro_whatsapp_text'] = ( ! empty( $new_instance['menro_whatsapp_text'] ) ) ? strip_tags( $new_instance['menro_whatsapp_text'] ) : '';
    $instance['menro_instagram'] = ( ! empty( $new_instance['menro_instagram'] ) ) ? strip_tags( $new_instance['menro_instagram'] ) : '';
    $instance['menro_twitter'] = ( ! empty( $new_instance['menro_twitter'] ) ) ? strip_tags( $new_instance['menro_twitter'] ) : '';
    $instance['menro_linkedin'] = ( ! empty( $new_instance['menro_linkedin'] ) ) ? strip_tags( $new_instance['menro_linkedin'] ) : '';
    $instance['menro_pinterest'] = ( ! empty( $new_instance['menro_pinterest'] ) ) ? strip_tags( $new_instance['menro_pinterest'] ) : '';
    $instance['menro_youtube'] = ( ! empty( $new_instance['menro_youtube'] ) ) ? strip_tags( $new_instance['menro_youtube'] ) : '';
    return $instance;
}
}
