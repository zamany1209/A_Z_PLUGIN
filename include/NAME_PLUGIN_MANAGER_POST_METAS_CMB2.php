<?php
class NAME_PLUGIN_MANAGER_POST_METAS_with_CMB2 {
    public function init() {
        add_action( 'cmb2_admin_init', [$this,'name_plugin_cmb2_metaboxes'] );
    }
    function name_plugin_cmb2_metaboxes() {

        /**
         * Initiate the metabox
         */
        $cmb = new_cmb2_box( array(
            'id'            => 'test_metabox',
            'title'         => __( 'Add detail', 'cmb2' ),
            'object_types'  => array( 'name_plugin_z', ), // Post type
            'context'       => 'normal',
            'priority'      => 'high',
            'show_names'    => true, // Show field names on the left
            // 'cmb_styles' => false, // false to disable the CMB stylesheet
            // 'closed'     => true, // Keep the metabox closed by default
        ) );

        $cmb->add_field( array(
            'name' => __( 'Redirect URL', 'cmb2' ),
            'desc'    => 'Enter URL PAGE',
            'id'   => 'name_redirect_url',
            'type' => 'text_url',
            'protocols' => array( 'http', 'https' ),// array( 'http', 'https','ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols
        ) );


        $cmb->add_field( array(
            'name'    => 'Image URL',
            'desc'    => 'Upload an image or enter an URL.',
            'id'      => 'name_image_url',
            'type'    => 'file',
            // Optional:
            'options' => array(
                'url' => true, // Hide the text input for the url
            ),
            'text'    => array(
                'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
            ),
            // query_args are passed to wp.media's library query.
            'query_args' => array(
                'type' => array(
                	'image/gif',
                	'image/jpeg',
                	'image/png',
                ),
                // Or only allow gif, jpg, or png images Or pdf
                // 'type' => 'application/pdf', // Make library only display PDFs.
            ),
            'preview_size' => 'large', // Image size to use when previewing in the admin.
        ) );


        $cmb->add_field( array(
            'name'    => 'Click Count',
            'desc'    => 'Number Click',
            'default' => '10',
            'id'      => 'name_click_count',
            'type'    => 'text',
        ) );
    
    }
}