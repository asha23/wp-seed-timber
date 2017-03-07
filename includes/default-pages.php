<?php

// Do some initial stuff

$default_pages_generated = get_option( 'default_pages_generated', false );

if (isset($_GET['activated']) && is_admin() && $default_pages_generated == false){

        $pages = array(
                'Home' => array (
                        '' => 'front-page.php'
                ),
                'Terms and Conditions' => array ( // Page title
                        '' => '' // Content to use (Use a url)
                ),
                'Cookie Policy' => array (
                        '' => ''
                ),
                'Privacy Policy' => array (
                        '' => ''
                )
        );

        foreach ($pages as $page_url_title => $page_meta) {
                $id = get_page_by_title($page_url_title);

                foreach($page_meta as $page_content => $page_template) {
                        $page = array (
                                'post_type' => 'page',
                                'post_title' => $page_url_title,
                                'post_name' => $page_url_title,
                                'post_status' => 'publish',
                                'post_content' => $page_content,
                                'post_author' => 1,
                                'post_parent' => ''
                        );
                };

                if (!isset($id -> ID)) {
                        $new_page_id = wp_insert_post($page);
                        if(!empty($page_template)) {
                                update_post_meta($new_page_id, '_wp_page_template', $page_template);
                        };
                };
        };

        // Find and delete the WP default 'Sample Page'

        $defaultPage = get_page_by_title('Sample Page');
        if($defaultPage) {
                wp_delete_post( $defaultPage->ID );
        }

        // Delete the hello world post

        $post = get_page_by_path('hello-world',OBJECT,'post');
        if ($post) wp_delete_post($post->ID,true);

        // Set the front page
        $home = get_page_by_title( 'Home' );
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $home->ID );
        update_option( 'default_pages_generated', true );

};
