<?php  
/* 
Plugin Name: bio plugin 
Plugin URI: http://www.bio.com/ 
Description: Bio plugin shows author information on page or post
Author: codecin 
Version: 0.1 
Author URI: http://www.bio.com/ 
* */  



function author_bio_display($content){
    //This is where we display the bio
    $options["page"] = get_option("bio_on_page");  
    $options["post"] = get_option("bio_on_post");  

    if ((is_single() && $options["post"]) || (is_page() && $options["page"] )) {
        $bio_box =   
        '<div id="author-bio-box"> 
            '.get_avatar( get_the_author_meta("user_email"), "80" ).' 
            <span class="author-name">'.get_the_author_meta("display_name").'</span> 
            <p>'.get_the_author_meta("description").'</p> 
            <div class="spacer"></div> 
        </div>';  
          
        return $content . $bio_box;  
    } else {  
        return $content;  
    }  
}  

function author_bio_style()
{
   //This is where we will style our box. 
        echo 
        '<style type="text/css">
        #author-bio-box {
                border: 1px solid #bbb;
                background: #eee;
                padding: 5px;
        }
        
        #author-bio-box img {
                float: left;
                margin-right: 10px;
        }
        
        #author-bio-box .author-name {
                font-weight: bold;
                margin: 0px;
                font-size: 14px;
        }
        
        #author-bio-box p {
                font-size: 10px;
                line-height: 14px;
                font-style: italic;
        }
        
        .spacer { display: block; clear: both; }
        </style>';
}

function author_bio_settings()
{
   //This is where we will display admin functions 
  // this is where we will display our admin options  
    if ($_POST["action"] == "update")  
    {  
        $_POST["show_pages"] == "on" ? update_option("bio_on_page", "checked") : update_option("bio_on_page", "");  
        $_POST["show_posts"] == "on" ? update_option("bio_on_post", "checked") : update_option("bio_on_post", "");  
        $message = '<div id="message" class="updated fade"><p><strong>Options Saved</strong></p></div>';  
    }  
      
    $options["page"] = get_option("bio_on_page");  
    $options["post"] = get_option("bio_on_post");  
      
    echo ' 
    <div class="wrap"> 
        '.$message.' 
        <div id="icon-options-general" class="icon32"><br /></div> 
        <h2>Author Bio Settings</h2> 
         
        <form method="post" action=""> 
        <input type="hidden" name="action" value="update" /> 
         
        <h3>When to Display Author Bio</h3> 
        <input name="show_pages" type="checkbox" id="show_pages" '.$options["page"].' /> Pages<br /> 
        <input name="show_posts" type="checkbox" id="show_posts" '.$options["post"].' /> Posts<br /> 
        <br /> 
        <input type="submit" class="button-primary" value="Save Changes" /> 
        </form> 
         
    </div>';   

}

function author_bio_admin_menu()
{
   //This is where we add our plugin to admin menu 
   add_options_page('Author Bio', 'Author Bio', 9, basename(__FILE__), 'author_bio_settings'); 
}

add_action('the_content','author_bio_display');
add_action('admin_menu','author_bio_admin_menu');
add_action('wp_head', 'author_bio_style');

add_filter( 'excerpt_more', 'my_excerpt_more' );
function my_excerpt_more( $more ) {
        $more = '...';
         
            return $more;
}




?>
