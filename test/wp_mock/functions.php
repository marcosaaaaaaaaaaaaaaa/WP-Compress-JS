<?php

function get_header() {
    return file_get_contents(WP_COMPRESS_JS_TEST_ROOT . '/wp_mock/get_header.html');
}

function get_footer() {
    
    return file_get_contents(WP_COMPRESS_JS_TEST_ROOT . '/wp_mock/get_footer.html');
}

?>
