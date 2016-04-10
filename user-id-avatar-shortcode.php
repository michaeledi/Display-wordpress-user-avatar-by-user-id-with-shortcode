<?
// Using user-id to display a user's avatar.
function shortcode_user_avatar($atts, $content = null) {
extract( shortcode_atts( 
                array('id' => '0',), $atts 
                       ) 
        );

return get_avatar( $user_id, 96 ); // display the specific user_id's avatar	
                                                        }
add_shortcode('avatar','shortcode_user_avatar');
?>
