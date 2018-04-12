<?php

function encrypt_UseRWorD( $value ) {
    $cryptKey  = 'sqJuB0rGtlIn5UeB1xG03efyCpiman';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $value, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $qEncoded );
}
?>