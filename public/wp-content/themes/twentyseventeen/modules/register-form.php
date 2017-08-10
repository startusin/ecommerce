<?php
add_action( 'register_form', 'register_form_add_field' );

function register_form_add_field() {
    $skype = ( ! empty( $_POST['skype'] ) ) ? trim( $_POST['skype'] ) : '';
    ?>
    <p>
        <label for="skype">Skype<br />
            <input type="text" name="skype" id="skype" class="input" value="<?php echo esc_attr( wp_unslash( $skype ) ); ?>" size="25" /></label>
    </p>
    <?php
}

add_filter( 'registration_errors', 'custom_registration_errors', 10, 3 );

function custom_registration_errors( $errors ) {
    if (strlen($_POST['skype']) > 20) {
        $errors->add( 'skype_error', __( '<strong>ERROR</strong>: Wrong skype.' ) );
    }
    return $errors;
}

add_action( 'user_register', 'custom_user_register' );

function custom_user_register( $user_id ) {
    if ( !empty( $_POST['skype'] ) ) {
        update_user_meta($user_id, 'skype', trim($_POST['skype']));
    }
}

function modify_user_table( $column ) {
    $column['skype'] = 'Skype';
    return $column;
}
add_filter( 'manage_users_columns', 'modify_user_table' );

function modify_user_table_row( $val, $column_name, $user_id ) {
    switch ($column_name) {
        case 'skype' :
            return get_the_author_meta('skype', $user_id);
            break;
    }
    return $val;
}
add_filter( 'manage_users_custom_column', 'modify_user_table_row', 10, 3 );


function login_redirect() {
    return home_url('/films');
}

add_filter( 'login_redirect', 'login_redirect' );
add_filter('woocommerce_login_redirect', 'login_redirect');
