<?php $user_info = wp_get_current_user(); ?>
<?php if ( $user_info->ID == 0): ?>You are not authorized to do this action.<?php exit; endif; ?>
<form method="post" action="/checkout/?wc-ajax=checkout" id="checkout-form" data-autosubmit="true">
    <input type="hidden" name="billing_first_name" value="Unauthorized" />
    <input type="hidden" name="billing_last_name" value="Client" />
    <input type="hidden" name="billing_company" value="" />
    <input type="hidden" name="billing_country" value="" />
    <input type="hidden" name="billing_address_1" value="" />
    <input type="hidden" name="billing_address_2" value="" />
    <input type="hidden" name="billing_city" value="" />
    <input type="hidden" name="billing_state" value="" />
    <input type="hidden" name="billing_postcode" value="" />
    <input type="hidden" name="billing_phone" value="" />
    <input type="hidden" name="billing_email" value="<?php echo $user_info->user_email; ?>" />
    <input type="hidden" name="order_comments" value="" />
    <input type="hidden" name="payment_method" value="paypal" />
    <?php echo wp_nonce_field('woocommerce-process_checkout'); ?>
    <button>Sending data...</button>
</form>
