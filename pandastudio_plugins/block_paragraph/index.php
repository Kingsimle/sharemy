<?php
function pandastudio_paragraph_text_indent_script() {wp_enqueue_script('pandastudio-paragraph-script',get_stylesheet_directory_uri().'/pandastudio_plugins/block_paragraph/index.js',array( 'wp-blocks'));}add_action( 'enqueue_block_editor_assets', 'pandastudio_paragraph_text_indent_script' );?>