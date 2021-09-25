<?php
class NAME_PLUGIN_MANAGER_POST_TYPES {
    public static function name_plugin_register() {
        register_post_type(
            'name_plugin_z',
            array(
                'label'                 => 'name_plugin_z',
                'public'                => false,
                'show_ui'               => true,
                // '_builtin'              => true, /* internal use only. don't use this when registering your own post type. */
                // '_edit_link'            => 'post.php?post=%d', /* internal use only. don't use this when registering your own post type. */
                'capability_type'       => 'post',
                // 'map_meta_cap'          => true,
                'menu_position'         => 60,
                'menu_icon'             => 'dashicons-carrot',
                'hierarchical'          => false,
                'rewrite'               => false,
                'query_var'             => false,
                'delete_with_user'      => true,
                'supports'              => array( 'title' , 'custom-fields' /*, 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'post-formats'*/ ),
                'show_in_rest'          => false,
                // 'rest_base'             => 'posts',
                // 'rest_controller_class' => 'WP_REST_Posts_Controller',
            )
        );
    }
}
?>