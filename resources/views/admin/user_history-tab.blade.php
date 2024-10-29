<?php
    if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

<div id="user_history_data" class="panel woocommerce_options_panel">
    <div class="options_group">

        {{-- Rang min and max orders --}}
        <?php
        woocommerce_wp_text_input(array(
            'id'          => 'wda_min_orders',
            'label'       => __('Minimum orders', 'advanced-coupons-for-woocommerce'),
            'description' => __('The minimum number of orders placed by the user to apply the coupon.', 'advanced-coupons-for-woocommerce'),
            'desc_tip'    => true,
            'type'        => 'number',
            'placeholder' => __('No minimum', 'advanced-coupons-for-woocommerce'),
        ));

        woocommerce_wp_text_input(array(
            'id'          => 'wda_max_orders',
            'label'       => __('Maximum orders', 'advanced-coupons-for-woocommerce'),
            'description' => __('The maximum number of orders placed by the user to apply the coupon.', 'advanced-coupons-for-woocommerce'),
            'desc_tip'    => true,
            'type'        => 'number',
            'placeholder' => __('No maximum', 'advanced-coupons-for-woocommerce'),
        ));
        ?>

        {{-- Rang min and max total spent --}}
        <?php
        woocommerce_wp_text_input(array(
            'id'          => 'wda_min_total_spent',
            'label'       => __('Minimum total spent', 'advanced-coupons-for-woocommerce'),
            'description' => __('The minimum total amount spent by the user to apply the coupon.', 'advanced-coupons-for-woocommerce'),
            'desc_tip'    => true,
            'type'        => 'number',
            'placeholder' => __('No minimum', 'advanced-coupons-for-woocommerce'),
        ));

        woocommerce_wp_text_input(array(
            'id'          => 'wda_max_total_spent',
            'label'       => __('Maximum total spent', 'advanced-coupons-for-woocommerce'),
            'description' => __('The maximum total amount spent by the user to apply the coupon.', 'advanced-coupons-for-woocommerce'),
            'desc_tip'    => true,
            'type'        => 'number',
            'placeholder' => __('No maximum', 'advanced-coupons-for-woocommerce'),
        ));
        ?>

        {{-- User Role --}}
        <?php
        woocommerce_wp_select(array(
            'id' => 'wda_user_roles',
            'label' => __('User Role', 'advanced-coupons-for-woocommerce'),
            'description' => __('Restrict the coupon to users with the selected role.', 'advanced-coupons-for-woocommerce'),
            'desc_tip'    => true,
            'options' => wp_roles()->get_names(),
            'class' => 'wc-enhanced-select',
            'style' => 'width: 50%;',
            'name' => 'wda_user_roles[]',
            'custom_attributes' => array(
                'multiple' => 'multiple',
                'data-placeholder' => __('Select a role', 'advanced-coupons-for-woocommerce'),
            ),
        ));
        ?>

        {{-- Frist Order --}}
        <?php
        woocommerce_wp_checkbox(array(
            'id'          => 'wda_first_order',
            'label'       => __('First Order', 'advanced-coupons-for-woocommerce'),
            'description' => __('Apply the coupon only if this is the user\'s first order.', 'advanced-coupons-for-woocommerce'),
        ));
        ?>
    </div>
</div>
