<?php

function my_custom_posttypes() {
    
    $labels = array(
        'name'               => esc_html__('Projects', 'westcomfort'),
        'singular_name'      => esc_html__('Project', 'westcomfort'),
        'menu_name'          => esc_html__('Projects', 'westcomfort'),
        'name_admin_bar'     => esc_html__('Project', 'westcomfort'),
        'add_new'            => esc_html__('Add New'),
        'add_new_item'       => esc_html__('Add New Project'),
        'new_item'           => esc_html__('New Project'),
        'edit_item'          => esc_html__('Edit Project'),
        'view_item'          => esc_html__('View Project'),
        'all_items'          => esc_html__('All Projects'),
        'search_items'       => esc_html__('Search Projects'),
        'parent_item_colon'  => esc_html__('Parent Projects:'),
        'not_found'          => esc_html__('No projects found.'),
        'not_found_in_trash' => esc_html__('No projects found in Trash.'),
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-admin-multisite',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'projects' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' )
    );
    register_post_type( 'project', $args );
}
add_action( 'init', 'my_custom_posttypes' );

// Flush rewrite rules to add "projects" as a permalink slug
my_custom_posttypes();
flush_rewrite_rules();
