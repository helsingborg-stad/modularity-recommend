<?php 

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
    'key' => 'group_61ea7a87e8e9f',
    'title' => __('Recommendations', 'modularity-rekai'),
    'fields' => array(
        0 => array(
            'key' => 'field_61ea7a992b202',
            'label' => __('Add links', 'modularity-rekai'),
            'name' => '',
            'type' => 'message',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'message' => __('This module enables you to add static quicklinks to enable recommended links.', 'modularity-rekai'),
            'new_lines' => 'wpautop',
            'esc_html' => 0,
        ),
        1 => array(
            'key' => 'field_61ea7ae22b203',
            'label' => __('Link list', 'modularity-rekai'),
            'name' => 'rekai_link_list',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'collapsed' => 'field_61ea7afd2b204',
            'min' => 0,
            'max' => 0,
            'layout' => 'table',
            'button_label' => __('Add new recommendation', 'modularity-rekai'),
            'sub_fields' => array(
                0 => array(
                    'key' => 'field_61ea7afd2b204',
                    'label' => __('Label', 'modularity-rekai'),
                    'name' => 'rekai_link_label',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                1 => array(
                    'key' => 'field_61ea7b1c2b205',
                    'label' => __('Target', 'modularity-rekai'),
                    'name' => 'rekai_target',
                    'type' => 'post_object',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'post_type' => '',
                    'taxonomy' => '',
                    'allow_null' => 0,
                    'multiple' => 0,
                    'return_format' => 'id',
                    'ui' => 1,
                ),
            ),
        ),
    ),
    'location' => array(
        0 => array(
            0 => array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'mod-rekai',
            ),
        ),
        1 => array(
            0 => array(
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/rekai',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
));
}