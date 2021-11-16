<?php

//1. Add a new form element...
add_action( 'register_form', 'myplugin_register_form' );
function myplugin_register_form() {

    $first_name = ( ! empty( $_POST['first_name'] ) ) ? sanitize_text_field( $_POST['first_name'] ) : '';
    $last_name = ( ! empty( $_POST['last_name'] ) ) ? sanitize_text_field( $_POST['last_name'] ) : '';
    $title = ( ! empty( $_POST['title'] ) ) ? sanitize_text_field( $_POST['title'] ) : '';
    $company = ( ! empty( $_POST['company'] ) ) ? sanitize_text_field( $_POST['company'] ) : '';
    $phone = ( ! empty( $_POST['phone'] ) ) ? sanitize_text_field( $_POST['phone'] ) : '';



        
        ?>
        <p>
            <label for="first_name"><?php _e( 'First Name', 'mydomain' ) ?><br />
                <input type="text" required name="first_name" id="first_name" class="input form-control" value="<?php echo esc_attr(  $first_name  ); ?>" size="25" /></label>
        </p>
        <p>
            <label for="last_name"><?php _e( 'Last Name', 'mydomain' ) ?><br />
                <input type="text" required name="last_name" id="last_name" class="input form-control" value="<?php echo esc_attr(  $last_name  ); ?>" size="25" /></label>
        </p>
        <p>
            <label for="title"><?php _e( 'Your Title', 'mydomain' ) ?><br />
                <input type="text" required name="title" id="title" class="input form-control" required value="<?php echo esc_attr(  $title  ); ?>" size="25" /></label>
        </p>
        <p>
            <label for="company"><?php _e( 'Your Company', 'mydomain' ) ?><br />
                <input type="text" required name="company" id="company" class="input form-control" required value="<?php echo esc_attr(  $company  ); ?>" size="25" /></label>
        </p>
        <p>
            <label for="phone"><?php _e( 'Your Phone Number', 'mydomain' ) ?><br />
                <input type="text" required name="phone" id="phone" class="input form-control" required value="<?php echo esc_attr(  $phone  ); ?>" size="25" /></label>
        </p>
        <?php
    }

    //2. Add validation. In this case, we make sure first_name is required.
    add_filter( 'registration_errors', 'myplugin_registration_errors', 10, 3 );
    function myplugin_registration_errors( $errors, $sanitized_user_login, $user_email ) {
        
        if ( empty( $_POST['first_name'] ) || ! empty( $_POST['first_name'] ) && trim( $_POST['first_name'] ) == '' ) {
        $errors->add( 'first_name_error', sprintf('<strong>%s</strong>: %s',__( 'ERROR', 'mydomain' ),__( 'You must include a first name.', 'mydomain' ) ) );

        }

        if ( empty( $_POST['last_name'] ) || ! empty( $_POST['last_name'] ) && trim( $_POST['last_name'] ) == '' ) {
        $errors->add( 'last_name_error', sprintf('<strong>%s</strong>: %s',__( 'ERROR', 'mydomain' ),__( 'You must include a last name.', 'mydomain' ) ) );

        }

        if ( empty( $_POST['title'] ) || ! empty( $_POST['title'] ) && trim( $_POST['title'] ) == '' ) {
        $errors->add( 'title_error', sprintf('<strong>%s</strong>: %s',__( 'ERROR', 'mydomain' ),__( 'You must include a title.', 'mydomain' ) ) );

        }

        if ( empty( $_POST['company'] ) || ! empty( $_POST['company'] ) && trim( $_POST['company'] ) == '' ) {
        $errors->add( 'company_error', sprintf('<strong>%s</strong>: %s',__( 'ERROR', 'mydomain' ),__( 'You must include a company.', 'mydomain' ) ) );

        }
        if ( empty( $_POST['phone'] ) || ! empty( $_POST['phone'] ) && trim( $_POST['phone'] ) == '' ) {
        $errors->add( 'phone_error', sprintf('<strong>%s</strong>: %s',__( 'ERROR', 'mydomain' ),__( 'You must include a phone.', 'mydomain' ) ) );

        }

        return $errors;
    }

    //3. Finally, save our extra registration user meta.
    add_action( 'user_register', 'myplugin_user_register' );
    function myplugin_user_register( $user_id ) {
        if ( ! empty( $_POST['first_name'] ) ) {
            update_user_meta( $user_id, 'first_name', sanitize_text_field( $_POST['first_name'] ) );
        }
        if ( ! empty( $_POST['last_name'] ) ) {
            update_user_meta( $user_id, 'last_name', sanitize_text_field( $_POST['last_name'] ) );
        }
        if ( ! empty( $_POST['title'] ) ) {
            update_user_meta( $user_id, 'title', sanitize_text_field( $_POST['title'] ) );
        }
        if ( ! empty( $_POST['company'] ) ) {
            update_user_meta( $user_id, 'company', sanitize_text_field( $_POST['company'] ) );
        }
        if ( ! empty( $_POST['phone'] ) ) {
            update_user_meta( $user_id, 'phone', sanitize_text_field( $_POST['phone'] ) );
        }
    }




add_action( 'show_user_profile', 'crf_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'crf_show_extra_profile_fields' );

function crf_show_extra_profile_fields( $user ) {
    ?>
    <h3><?php esc_html_e( 'Title', 'crf' ); ?></h3>

    <table class="form-table">
        <tr>
            <th><label for="Title"><?php esc_html_e( 'Title', 'crf' ); ?></label></th>
            <td><?php echo esc_html( get_the_author_meta( 'title', $user->ID ) ); ?></td>
        </tr>
    </table>
    <h3><?php esc_html_e( 'Phone Number', 'crf' ); ?></h3>

    <table class="form-table">
        <tr>
            <th><label for="Phone"><?php esc_html_e( 'Phone', 'crf' ); ?></label></th>
            <td><?php echo esc_html( get_the_author_meta( 'phone', $user->ID ) ); ?></td>
        </tr>
    </table>
    <?php
}
