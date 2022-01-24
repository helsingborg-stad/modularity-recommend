<?php 

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
    'key' => 'group_61ea7a87e8e9f',
    'title' => __('Recommendations', 'modularity-recommend'),
    'fields' => array(
        0 => array(
            'key' => 'field_61ea7a992b202',
            'label' => __('Add links', 'modularity-recommend'),
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
            'message' => __('This module enables you to add static quicklinks to enable recommended links.', 'modularity-recommend'),
            'new_lines' => 'wpautop',
            'esc_html' => 0,
        ),
        1 => array(
            'key' => 'field_61ea7ae22b203',
            'label' => __('Link list', 'modularity-recommend'),
            'name' => 'recommend_link_list',
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
            'max' => 20,
            'layout' => 'table',
            'button_label' => __('Add new recommendation', 'modularity-recommend'),
            'sub_fields' => array(
                0 => array(
                    'key' => 'field_61ea7afd2b204',
                    'label' => __('Label', 'modularity-recommend'),
                    'name' => 'recommend_link_label',
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
                    'label' => __('Target', 'modularity-recommend'),
                    'name' => 'recommend_link_target',
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
        2 => array(
            'key' => 'field_61eab66ec9a8b',
            'label' => __('Max number of autosuggested recommendations', 'modularity-recommend'),
            'name' => 'rekai_number_of_recommendation',
            'type' => 'number',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_61ea7ae22b203',
                        'operator' => '!=empty',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => 7,
            'placeholder' => __('items', 'modularity-recommend'),
            'prepend' => '',
            'append' => __('items', 'modularity-recommend'),
            'min' => 0,
            'max' => 10,
            'step' => 1,
        ),
    ),
    'location' => array(
        0 => array(
            0 => array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'mod-recommend',
            ),
        ),
        1 => array(
            0 => array(
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/recommend',
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