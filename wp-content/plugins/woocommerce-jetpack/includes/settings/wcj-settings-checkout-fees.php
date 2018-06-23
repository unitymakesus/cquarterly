<?php
/**
 * Booster for WooCommerce - Settings - Checkout Fees
 *
 * @version 3.7.0
 * @since   3.7.0
 * @author  Algoritmika Ltd.
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$settings = array(
	array(
		'title'    => __( 'Fees', 'woocommerce-jetpack' ),
		'type'     => 'title',
		'id'       => 'wcj_checkout_fees_general_options',
	),
	array(
		'title'    => __( 'Total Fees', 'woocommerce-jetpack' ),
		'id'       => 'wcj_checkout_fees_total_number',
		'default'  => 1,
		'type'     => 'custom_number',
		'desc'     => apply_filters( 'booster_message', '', 'desc' ),
		'custom_attributes' => apply_filters( 'booster_message', '', 'readonly' ),
	),
	array(
		'type'     => 'sectionend',
		'id'       => 'wcj_checkout_fees_general_options',
	),
);
$total_number = apply_filters( 'booster_option', 1, get_option( 'wcj_checkout_fees_total_number', 1 ) );
for ( $i = 1; $i <= $total_number; $i++ ) {
	$settings = array_merge( $settings, array(
		array(
			'title'    => __( 'Fee', 'woocommerce-jetpack' ) . ' #' . $i,
			'type'     => 'title',
			'id'       => "wcj_checkout_fees_data_options[$i]",
		),
		array(
			'title'    => __( 'Enable/Disable', 'woocommerce-jetpack' ),
			'desc'     => __( 'Enable', 'woocommerce-jetpack' ),
			'id'       => "wcj_checkout_fees_data_enabled[$i]",
			'default'  => 'yes',
			'type'     => 'checkbox',
		),
		array(
			'title'    => __( 'Title', 'woocommerce-jetpack' ),
			'id'       => "wcj_checkout_fees_data_titles[$i]",
			'default'  => __( 'Fee', 'woocommerce-jetpack' ) . ' #' . $i,
			'type'     => 'text',
		),
		array(
			'title'    => __( 'Type', 'woocommerce-jetpack' ),
			'id'       => "wcj_checkout_fees_data_types[$i]",
			'default'  => 'fixed',
			'type'     => 'select',
			'options'  => array(
				'fixed'   => __( 'Fixed', 'woocommerce-jetpack' ),
				'percent' => __( 'Percent', 'woocommerce-jetpack' ),
			),
		),
		array(
			'title'    => __( 'Value', 'woocommerce-jetpack' ),
			'id'       => "wcj_checkout_fees_data_values[$i]",
			'default'  => 0,
			'type'     => 'number',
			'custom_attributes' => array( 'step' => 0.000001 ),
		),
		array(
			'title'    => __( 'Taxable', 'woocommerce-jetpack' ),
			'desc'     => __( 'Enable', 'woocommerce-jetpack' ),
			'id'       => "wcj_checkout_fees_data_taxable[$i]",
			'default'  => 'yes',
			'type'     => 'checkbox',
		),
		array(
			'type'     => 'sectionend',
			'id'       => "wcj_checkout_fees_data_options[$i]",
		),
	) );
}
return $settings;
