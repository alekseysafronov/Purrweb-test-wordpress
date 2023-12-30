<?php
// Регистрация кастомного типа записи
function create_custom_post_type() {
    $labels = array(
        'name'               => 'Имя кастомного типа записи',
        'singular_name'      => 'Единственное имя кастомного типа записи',
        'add_new'            => 'Добавить новый',
        'add_new_item'       => 'Добавить новый кастомный тип записи',
        'edit_item'          => 'Редактировать кастомный тип записи',
        'new_item'           => 'Новый кастомный тип записи',
        'view_item'          => 'Просмотреть кастомный тип записи',
        'search_items'       => 'Искать кастомный тип записи',
        'not_found'          => 'Кастомные типы записей не найдены',
        'not_found_in_trash' => 'Кастомные типы записей не найдены в корзине',
        'parent_item_colon'  => 'Родительский кастомный тип записи:',
        'menu_name'          => 'Кастомные типы записей'
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => true,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'menu_position'       => null,
        'supports'            => array( 'thumbnail', 'title', 'editor', 'author', 'excerpt', 'comments', 'custom-fields' ),
    );

    register_post_type( 'custom_post_type', $args );
}
add_action( 'init', 'create_custom_post_type' );