<?php
class NAME_PLUGIN_MANAGER {
    public static function run() {
        // print_r(get_post_types());die;
        NAME_PLUGIN_MANAGER_POST_TYPES::name_plugin_register();

        // $post_meta = new NAME_PLUGIN_MANAGER_POST_METAS();
        // $post_meta->init();
        $post_meta = new NAME_PLUGIN_MANAGER_POST_METAS_with_CMB2();
        $post_meta->init();
    }
}