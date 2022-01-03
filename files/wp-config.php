<?php
define( 'DB_NAME', '{{DB_NAME}}' );
define( 'DB_USER', '{{DB_USER}}' );
define( 'DB_PASSWORD', '{{DB_PW}}' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );


define( 'AUTH_KEY',         'CU,6BUj#5}PDl=Hx?)rhkH=]1^4NnRu`j,4kl26=i!S</jvRu47ZAhfOq=D^s0Yi' );
define( 'SECURE_AUTH_KEY',  'z`,dM:b9tA6*hw||x:_:TXY-D[cheYJw^)MI(N7hKx_@d/8XlnF(Fdc[kV.F1HM@' );
define( 'LOGGED_IN_KEY',    'j^4~e,j|@]=5T@wmpeXg~]+u~nax[k}bz086gCLr>-#W!n;:C& +[Z!@(2P,$Z5_' );
define( 'NONCE_KEY',        'd/}zoF*R*xK*+w3%ZEXF[)[oMAc(R&Qq=.O;jU)+c:7Ft$(Y[!R}c]W9XOqXA<&.' );
define( 'AUTH_SALT',        'HTiZCb7T}D`;EmX5ye]SRSKx?:P3bd)YCJ+Xb#^_[C>f3Z1l5&x@Mvmmb3Ep5>Jq' );
define( 'SECURE_AUTH_SALT', 'x&^/X269+SW!r-Rej#QPoRGr5R-gey<?*l^`q3g@Tr:vZdA=D(vJT^fF]Y$B)C]O' );
define( 'LOGGED_IN_SALT',   '&E;bfa1t5Fb I)y[j?R^nR2mdvRlWX/Wj_A*1vzz~kR.J%|WEyLSIL T_[O4Z$h~' );
define( 'NONCE_SALT',       '2k[Y_k%rB)I2?$o E >nfw:fX!!=wfzt=o3j#3<x7!LoPnY7CS8oCHdcf1h^(V#&' );

$table_prefix = 'wp_';


define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';
