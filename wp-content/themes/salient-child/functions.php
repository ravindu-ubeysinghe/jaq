<?php 

add_action( 'wp_enqueue_scripts', 'salient_child_enqueue_styles');
function salient_child_enqueue_styles() {
	
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', array('font-awesome'));

    if ( is_rtl() ) 
   		wp_enqueue_style(  'salient-rtl',  get_template_directory_uri(). '/rtl.css', array(), '1', 'screen' );
}

function salient_redux_custom_fonts( $custom_fonts ) {
    return array(
        'Custom Fonts' => array(
             'lucida-sans' => "lucida-sans"
        )
    );
}
add_filter( "redux/salient_redux/field/typography/custom_fonts", "salient_redux_custom_fonts" );

function wb_populate_customer_reviews(){
    $output = "";

    // WP_Query arguments
    $args = array (
        'post_type'              => array( 'reviews' ),
        'post_status'            => array( 'publish' ),
        'nopaging'               => true,
        'order'                  => 'ASC',
        'orderby'                => 'menu_order',
    );

    // The Query
    $reviews = new WP_Query( $args );

    // The Loop
    if ( $reviews->have_posts() ) {
        while ( $reviews->have_posts() ) {
            $reviews->the_post();
                $output .= '<div class="wb-single-review">
                                <div class="content">'. get_the_content() .' - <strong>'.get_the_title() .'</strong></div>
                            </div>';
        }
    } else {
        $output .="<div>Something has gone wrong. Please try again later!</div>";
    }

    // Restore original Post Data
    wp_reset_postdata();
    return $output;
}

add_shortcode('wb_customer_review_list', 'wb_populate_customer_reviews');

function wb_create_customer_review($form_data){
    $post_title = "";
    $post_content = "";

    foreach( $form_data[ 'fields' ] as $field ) 
    { 
        if( 'your_name_1558151023795' == $field[ 'key' ] ){
            $post_title = $field[ 'value' ];
        }

        if( 'your_review_1558151570459' == $field[ 'key' ] ){
            $post_content = $field[ 'value' ];
        }
    }

    // Create post object
    $review_post = array(
        'post_type'     => 'reviews',
        'post_title'    => $post_title,
        'post_content'  => $post_content,
        'post_status'   => 'draft'
    );

    if($post_title != "" && $post_content != ""){
        wp_insert_post( $review_post );
    }
}

add_action('ninja_forms_after_submission', 'wb_create_customer_review');
?>