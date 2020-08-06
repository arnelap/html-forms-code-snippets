add_filter( 'hf_action_email_message', function( $message, $submission ) {

    //do stuff with the $message variable that contains the email body.

    return $message;
}, 10, 3 );
