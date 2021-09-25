<?php
class NAME_PLUGIN_MANAGER_POST_METAS {
    public function init() {
        add_action('add_meta_boxes',[$this,'metaboxes_1']);
        add_action('save_post',[$this,'save_metaboxes_1']);
        // add_action('add_meta_boxes',[$this,'metaboxes_2']);
    }
    public function metaboxes_1() {
        add_meta_box(
            'NAME_PLUGIN_metabox_1',  // unique ID
            'NAME_PLUGIN Detail _1',  //  Box title
            [$this,'NAME_PLUGIN_Render_1'], // Content callback, must be of type callable
            'NAME_PLUGIN'  // Post type;
        );
    }
    public function NAME_PLUGIN_Render_1($post) {
        echo 'Hello'.'<br>';
        ?>
        <label for="redirect_url">Redirect Url</label>
        <input type="text" name="redirect_url" id="redirect_url" value="<?= get_post_meta( $post->ID , 'name_plugin_redirect_url' , true) ?>" style="width: 100%;" />
        <br>
        <label for="image_url">Image Url</label>
        <input type="text" name="image_url" id="image_url" value="<?= get_post_meta( $post->ID , 'name_plugin_image_url' , true) ?>" style="width: 100%;" />
        <br>
        <label for="click_count">Click Count</label>
        <input type="text" name="click_count" id="click_count" value="<?= get_post_meta( $post->ID , 'name_plugin_click_count' , true) ?>" style="width: 100%;" />
        <?php
    }
    public function save_metaboxes_1($post) {
        // print_r($post_id);die;
        // add_post_meta();
        // update_post_meta();
        update_post_meta( $post_id , 'name_plugin_redirect_url' , $_POST['redirect_url'] );
        update_post_meta( $post_id , 'name_plugin_image_url' , $_POST['image_url'] );
        update_post_meta( $post_id , 'name_plugin_click_count' , $_POST['click_count'] );

    }
    /////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////
    // public function metaboxes_2() {
    //     add_meta_box(
    //         'NAME_PLUGIN_metabox_2',  // unique ID
    //         'NAME_PLUGIN Detail_2 (side)',  //  Box title
    //         [$this,'NAME_PLUGIN_Render_2'], // Content callback, must be of type callable
    //         'NAME_PLUGIN',  // Post type;
    //         'side'
    //     );
    // }
    // public function NAME_PLUGIN_Render_2($post) {
    //     echo 'Hello';
    //     <input type="text" name="Amir" />
    // }
}
?>