<?php

return [
    // 'decimal_format' => 'do_not_format', // remove_decimal, replace_decimal, round_up
    'decimal_format' => 'do_not_format', // do_not_format(round_off) round_up, round_down, custom_rounding
    'custom_rounding_input_decimal' => '.99',
    'currency_format' => 'symbol', // symbol_code,
    // 'replace_decimal' => 25,
    'show_original_price' => false,
    'convert_prices_on_location' => false,
    'checkout_notification' => false,
    'checkout_notification_text_color' => '#FFFFFF',
    'checkout_notification_background_color' => '#213176',
    'checkout_notification_add_variables' => ["default_currency", "target_currency"],
    'checkout_notification_content' => 'We process all orders in {{ default_currency }} While your cart is currently displayed in {{  target_currency }}, you will checkout using  {{ default_currency }} at the most current exchange rate.'
];
