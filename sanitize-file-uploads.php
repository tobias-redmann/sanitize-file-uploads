<?php
/**
 * Plugin Name: Sanitize File Uploads
 * Plugin URI: http://www.tricd.de
 * Description: Rename uploaded files with a seo 
 * Version: 0.1
 */


function make_seo_filename($filename) {
    $info = pathinfo($filename);
    $ext  = empty($info['extension']) ? '' : '.' . $info['extension'];
    $name = basename($filename, $ext);
    return sanitize_title_with_dashes($name) . $ext;
}
add_filter('sanitize_file_name', 'make_seo_filename', 10);

?>