<?php

return [
    'show_popup_final_step_currency_switcher' => true,
    // 'theme_name' => '',
    'visibility' => 'private', // public
    'element_language' => [
        'active' => false, // true
        'format' => 'english', // native, short
        'flag' => false,
    ],
    'element_currency' => [
        'active' => false,
        'format' => 'name_code', // name_symbol, name_code_symbol, name, code_symbol, code
        'flag' => false, //false
    ],
    'flag_style' => 'rectangle', // round, circle, square
    'divider_format' => '/', // -, |
    'desktop' => [
        'position' => 'floating', // embedded, top_page
        'float_corner' => 'bottom_left', // bottom_right , top_left  , top_right,
        'float_bottom' => 20,
        'float_left' => 20,
        'float_top' => 20,
        'float_right' => 20,
        'shadow_effect' => false,
        'embedded_theme' => '',
        'top_page_corner' => 'left', // right
        'top_page_bar_color' => '#fff',
        'font_size' => 'theme', // custom
        'font_size_custom' => 15,
        'expanded_style' => 'dropdown', // popup
    ],
    'mobile' => [
        'position' => 'floating', // embedded, top_page
        'float_corner' => 'bottom_left', // bottom_right , top_left  , top_right,
        'float_bottom' => 20,
        'float_left' => 20,
        'float_top' => 20,
        'float_right' => 20,
        'shadow_effect' => false,
        'embedded_theme' => '',
        'top_page_corner' => 'left', // right
        'top_page_bar_color' => '#fff',
        'font_size' => 'theme', // custom
        'font_size_custom' => 15,
        'expanded_style' => 'dropdown', // popup
    ],
    'switcher_color' => [
        'text' => '#000',
        'background' => '#fff',
        'hover_state' => '#f1f4f8'
    ],
    'expanded_switcher_color' => [
        'label' => '#000',
        'background' => '#fff',
        'button_text' => '#000',
        'button_background' => '#1890ff',
        'text' => '#000',
        'dropdown_field' =>  '#fff',
        'hover_state' =>  '#f1f4f8',
        'selected_state' =>  '#dbe2eb',
    ],
];
