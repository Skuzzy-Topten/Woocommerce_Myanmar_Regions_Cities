<?php
function add_myanmar_states( $states ) {
    $myanmar_states = array(
        'MM' => array(
            'AYA' => 'Ayeyarwady',
            'BGO' => 'Bago',
            'CHN' => 'Chin',
            'KCN' => 'Kachin',
            'KYH' => 'Kayah',
            'KYN' => 'Kayin',
            'MGY' => 'Magway',
            'MDY' => 'Mandalay',
            'MON' => 'Mon',
            'RKN' => 'Rakhine',
            'SGN' => 'Sagaing',
            'SHN' => 'Shan',
            'TNT' => 'Tanintharyi',
            'YGN' => 'Yangon',
        ),
    );

    return array_merge( $states, $myanmar_states );
}

add_filter( 'woocommerce_states', 'add_myanmar_states' );
