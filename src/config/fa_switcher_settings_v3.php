<?php

return [
    'show_popup_final_step_currency_switcher' => false,
    'desktop' => [
        'general' => [
            'enable_switcher' => true,
            'visibility' => 'private', // 'private', 'public'
            'expanded_style' => 'dropdown' // popup
        ],
        'customizations' => [
            'preference' => [
                'position' => 'floating', //floating, embedded, top_page
                'float_corner' => 'top_right', //bottom_left, bottom_right, top_left, top_right
                'float_bottom' => 20,
                'float_left' => 20,
                'float_top' => 20,
                'float_right' => 20,
                'top_page_corner' => 'left',
                'top_page_bar_color' => '#f8f9fa',
                'embedded_theme' => ''
            ],
            'style' => [
                'width_type' => 'auto', //auto, fixed
                'width' => 240,
                'border_type' => 'rounded', //square => 0px, rounded => 4px, rounded_pill => 20px
                'border_width' => 'thin', //thin => border-width => thin, medium => border-width => medium, thick => border-width => thick
                'normal_effect' => 'none', //small_shadow => 0px 0px 13px rgba(0, 0, 0, 0.1); large_shadow => 0px 0px 20px rgba(0, 0, 0, 0.25);
                'hover_effect' => 'none', //small_shadow => 0px 0px 13px rgba(0, 0, 0, 0.1); large_shadow => 0px 0px 20px rgba(0, 0, 0, 0.25);
                'layout' => 'arrow_label', //arrow_label, only_label, only_arrow
                'arrow_segment' => 'chevron_down', //chevron_down, chevron_right, caret_down, angle_down, language_icon, globe_icon
                'arrow_segment_type' => 'regular', //light => font-weight => light, regular => font-weight => regular, bold => font-weight => bold
                'element_language' => [
                    'active' => true,
                    'format' => 'english', //english, short_name, native_name, only_flag
                    'flag' => true,
                    'flag_first' => true
                ],
                'element_currency' => [
                    'active' => true,
                    'name' => true,
                    'code' => false,
                    'symbol' => true,
                    'format' => ['name', 'symbol'],
                    'flag' => false,
                    'flag_first' => true,
                ],
                'divider_format' => '-', //-, /, |, none
                'font_size_custom' => 16,
                'font_weight' => 'regular', //light => font-weight => light, regular => font-weight => regular, bold => font-weight => bold
                'flag_style' => 'rounded', //square, rectangle, rounded, circle
                'flag_style_size' => 'small' //small => 24*16, medium => 37*25, large => 78*32
            ],
            'disclosure' => [
                'dropdown_width_type' => 'auto', //auto, fixed
                'dropdown_width' => 240,
                'popup_width_type' => 'auto',
                'popup_width' => 834,
                'border_type' => 'rounded', //square => 0px, rounded => 4px, rounded_pill => 20px
                'border_width' => 'thin', //thin => border-width => thin, medium => border-width => medium, thick => border-width => thick
                'effect' => 'small_shadow', //small_shadow => 0px 0px 13px rgba(0, 0, 0, 0.1); large_shadow => 0px 0px 20px rgba(0, 0, 0, 0.25);
                'language' => [
                    'active' => true, //true, false
                    'format' => 'english', //english, short_name, native_name, only_flag
                    'flag' => true, //true, false
                    'flag_first' => true, //true, false
                ],
                'currency' => [
                    'active' => true,
                    'name' => true,
                    'code' => true,
                    'symbol' => true,
                    'format' => ['name', 'code', 'symbol'],
                    'flag' => true,
                    'flag_first' => true,
                ],
                'title_font_size' => 18,
                'title_font_weight' => 'bold', //light => font-weight => light, regular => font-weight => regular, bold => font-weight => bold
                'select_box_border' => 'rounded', //square => 0px, rounded => 4px, rounded_pill => 20px
                'select_box_border_width' => 'thin', //thin => border-width => thin, medium => border-width => medium, thick => border-width => thick
                'use_arrow' => true, //true, false
                'arrow_segment' => 'chevron_down', //chevron_down, chevron_right, caret_down, angle_down, language_icon, globe_icon
                'arrow_segment_type' => 'regular', //light => font-weight => light, regular => font-weight => regular, bold => font-weight => bold
                'select_box_font' => 14,
                'select_box_weight' => 'regular', //light => font-weight => light, regular => font-weight => regular, bold => font-weight => bold
                'search_box_font' => 14,
                'search_box_weight' => 'regular', //light => font-weight => light, regular => font-weight => regular, bold => font-weight => bold
                'option_font' => 14,
                'option_weight' => 'regular', //light => font-weight => light, regular => font-weight => regular, bold => font-weight => bold
                'selected_option_font' => 14,
                'selected_option_weight' => 'regular', //light => font-weight => light, regular => font-weight => regular, bold => font-weight => bold
                'flag_style' => 'rounded', //square, rectangle, rounded, circle
                'flag_style_size' => 'small', //medium => 24*16, medium => 37*25, large => 78*32
                'button' => [
                    'width_type' => 'auto', //auto, fixed
                    'width' => 120,
                    'height_type' => 'auto', //auto, fixed
                    'height' => 40,
                    'border_type' => 'rounded', //square => 0px, rounded => 4px, rounded_pill => 20px
                    'font_size' => 16,
                    'font_weight' => 'bold' //light => font-weight => light, regular => font-weight => regular, bold => font-weight => bold
                ]
            ],
            'color' => [
                'switcher_color' => [
                    'background' => '#fff',
                    'border' => '#dbe2eb',
                    'text' => '#162a41',
                    'arrow' => '#162a41',
                    'hover_state' => [
                        'background' => '#f8f9fa',
                        'border' => '#dbe2eb',
                        'text' => '#162a41',
                        'arrow' => '#162a41'
                    ],
                    'active_state' => [
                        'background' => '#fff',
                        'border' => '#5062e9',
                        'text' => '#162a41',
                        'arrow' => '#162a41'
                    ]
                ],
                'expanded_color' => [
                    'background' => '#fff',
                    'border' => '#dbe2eb',
                    'title' => '#162a41',
                    'select_box_background' => '#fff',
                    'select_box_border' => '#dbe2eb',
                    'select_box_text' => '#162a41',
                    'select_box_arrow' => '#162a41',
                    'option_background' => '#fff',
                    'option_text' => '#162a41',
                    'selected_option_background' => '#f1f4f8',
                    'selected_option_text' => '#162a41',
                    'search_box_background' => '#fff',
                    'search_box_icon' => '#162a41',
                    'search_box_text' => '#677c96',
                    'button_background' => '#1a73e9',
                    'button_text' => '#fff',
                    'hover_state' => [
                        'select_box_background' => '#f1f4f8',
                        'select_box_border' => '#dbe2eb',
                        'select_box_text' => '#162a41',
                        'select_box_arrow' => '#162a41',
                        'option_background' => '#f8f9fa',
                        'option_text' => '#162a41',
                        'button_background' => '#0060df',
                        'button_text' => '#fff'
                    ]
                ]
            ]
        ],
        'templates' => [
            'template_name_active' => 'default', // light, dark & custom theme
            // 'customs' => [
            //     //default la null
            // ]
        ]
    ],
    'mobile' => [
        'general' => [
            'enable_switcher' => true,
            'visibility' => 'private', // 'private', 'public'
            'expanded_style' => 'dropdown',
            'breakpoint_device' => 'small_devices'
        ],
        'customizations' => [
            'preference' => [
                'position' => 'floating', //floating, embedded, top_page
                'float_corner' => 'top_right', //bottom_left, bottom_right, top_left, top_right
                'float_bottom' => 20,
                'float_left' => 20,
                'float_top' => 20,
                'float_right' => 20,
                'top_page_corner' => 'left',
                'top_page_bar_color' => '#f8f9fa',
                'embedded_theme' => ''
            ],
            'style' => [
                'width_type' => 'auto', //auto, fixed
                'width' => 240,
                'border_type' => 'rounded', //square => 0px, rounded => 4px, rounded_pill => 20px
                'border_width' => 'thin', //thin => border-width => thin, medium => border-width => medium, thick => border-width => thick
                'normal_effect' => 'none', //small_shadow => 0px 0px 13px rgba(0, 0, 0, 0.1); large_shadow => 0px 0px 20px rgba(0, 0, 0, 0.25);
                'hover_effect' => 'none', //small_shadow => 0px 0px 13px rgba(0, 0, 0, 0.1); large_shadow => 0px 0px 20px rgba(0, 0, 0, 0.25);
                'layout' => 'arrow_label', //arrow_label, only_label, only_arrow
                'arrow_segment' => 'chevron_down', //chevron_down, chevron_right, caret_down, angle_down, language_icon, globe_icon
                'arrow_segment_type' => 'regular', //light => font-weight => light, regular => font-weight => regular, bold => font-weight => bold
                'element_language' => [
                    'active' => true,
                    'format' => 'english', //english, short_name, native_name, only_flag
                    'flag' => true,
                    'flag_first' => true
                ],
                'element_currency' => [
                    'active' => true,
                    'name' => true,
                    'code' => false,
                    'symbol' => true,
                    'format' => ['name', 'symbol'],
                    'flag' => false,
                    'flag_first' => true,
                ],
                'divider_format' => '-', //-, /, |, none
                'font_size_custom' => 16,
                'font_weight' => 'regular', //light => font-weight => light, regular => font-weight => regular, bold => font-weight => bold
                'flag_style' => 'rounded', //square, rectangle, rounded, circle
                'flag_style_size' => 'small' //small => 24*16, medium => 37*25, large => 78*32
            ],
            'disclosure' => [
                'dropdown_width_type' => 'auto', //auto, fixed
                'dropdown_width' => 240,
                'popup_width_type' => 'auto',
                'popup_width' => 834,
                'border_type' => 'rounded', //square => 0px, rounded => 4px, rounded_pill => 20px
                'border_width' => 'thin', //thin => border-width => thin, medium => border-width => medium, thick => border-width => thick
                'effect' => 'small_shadow', //small_shadow => 0px 0px 13px rgba(0, 0, 0, 0.1); large_shadow => 0px 0px 20px rgba(0, 0, 0, 0.25);
                'language' => [
                    'active' => true, //true, false
                    'format' => 'english', //english, short_name, native_name, only_flag
                    'flag' => true, //true, false
                    'flag_first' => true, //true, false
                ],
                'currency' => [
                    'active' => true,
                    'name' => true,
                    'code' => true,
                    'symbol' => true,
                    'format' => ['name', 'code', 'symbol'],
                    'flag' => true,
                    'flag_first' => true,
                ],
                'title_font_size' => 18,
                'title_font_weight' => 'bold', //light => font-weight => light, regular => font-weight => regular, bold => font-weight => bold
                'select_box_border' => 'rounded', //square => 0px, rounded => 4px, rounded_pill => 20px
                'select_box_border_width' => 'thin', //thin => border-width => thin, medium => border-width => medium, thick => border-width => thick
                'use_arrow' => true, //true, false
                'arrow_segment' => 'chevron_down', //chevron_down, chevron_right, caret_down, angle_down, language_icon, globe_icon
                'arrow_segment_type' => 'regular', //light => font-weight => light, regular => font-weight => regular, bold => font-weight => bold
                'select_box_font' => 14,
                'select_box_weight' => 'regular', //light => font-weight => light, regular => font-weight => regular, bold => font-weight => bold
                'search_box_font' => 14,
                'search_box_weight' => 'regular', //light => font-weight => light, regular => font-weight => regular, bold => font-weight => bold
                'option_font' => 14,
                'option_weight' => 'regular', //light => font-weight => light, regular => font-weight => regular, bold => font-weight => bold
                'selected_option_font' => 14,
                'selected_option_weight' => 'regular', //light => font-weight => light, regular => font-weight => regular, bold => font-weight => bold
                'flag_style' => 'rounded', //square, rectangle, rounded, circle
                'flag_style_size' => 'small', //medium => 24*16, medium => 37*25, large => 78*32
                'button' => [
                    'width_type' => 'auto', //auto, fixed
                    'width' => 120,
                    'height_type' => 'auto', //auto, fixed
                    'height' => 40,
                    'border_type' => 'rounded', //square => 0px, rounded => 4px, rounded_pill => 20px
                    'font_size' => 16,
                    'font_weight' => 'bold' //light => font-weight => light, regular => font-weight => regular, bold => font-weight => bold
                ]
            ],
            'color' => [
                'switcher_color' => [
                    'background' => '#fff',
                    'border' => '#dbe2eb',
                    'text' => '#162a41',
                    'arrow' => '#162a41',
                    'hover_state' => [
                        'background' => '#f8f9fa',
                        'border' => '#dbe2eb',
                        'text' => '#162a41',
                        'arrow' => '#162a41'
                    ],
                    'active_state' => [
                        'background' => '#fff',
                        'border' => '#5062e9',
                        'text' => '#162a41',
                        'arrow' => '#162a41'
                    ]
                ],
                'expanded_color' => [
                    'background' => '#fff',
                    'border' => '#dbe2eb',
                    'title' => '#162a41',
                    'select_box_background' => '#fff',
                    'select_box_border' => '#dbe2eb',
                    'select_box_text' => '#162a41',
                    'select_box_arrow' => '#162a41',
                    'option_background' => '#fff',
                    'option_text' => '#162a41',
                    'selected_option_background' => '#f1f4f8',
                    'selected_option_text' => '#162a41',
                    'search_box_background' => '#fff',
                    'search_box_icon' => '#162a41',
                    'search_box_text' => '#677c96',
                    'button_background' => '#1a73e9',
                    'button_text' => '#fff',
                    'hover_state' => [
                        'select_box_background' => '#f1f4f8',
                        'select_box_border' => '#dbe2eb',
                        'select_box_text' => '#162a41',
                        'select_box_arrow' => '#162a41',
                        'option_background' => '#f8f9fa',
                        'option_text' => '#162a41',
                        'button_background' => '#0060df',
                        'button_text' => '#fff'
                    ]
                ]
            ]
        ],
        'templates' => [
            'template_name_active' => 'default', // light, dark & custom theme
            // 'customs' => [
            //     //default là null
            // ]
        ]
    ]
];
