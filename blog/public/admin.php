<?php
use Core\Auth\DBAuth;

if ( ! defined( 'ROOT' ) ) {
	define( 'ROOT', dirname( __DIR__ ) . '\\' );
}
//var_dump( ROOT );

//require ROOT . 'app/App.php';
//App::load();

$a = $_GET[ 'a' ] ?? 'admin';
//var_dump('admin a', $a);
// Auth
$app  = App::getInstance();
$auth = new DBAuth( $app->getDB() );

ob_start();

//var_dump( isset( $_SESSION[ 'auth' ] ) );
if ( ! $auth->logged() ) {
	require ROOT . 'pages/users/login.php';
}
else {
	if ( $a === 'admin' ) {
		require ROOT . 'pages/admin/posts/index.php';
	}
	else {
		if ( $a === 'posts.edit' ) {
			require ROOT . 'pages/admin/posts/edit.php';
		}
		else {
			if ( $a === 'posts.add' ) {
				require ROOT . 'pages/admin/posts/add.php';
			}
			elseif ( $a === 404 ) {
				echo '<h1>Oups.... Cette page n\'existe pas !</h1>';
			}
		}
	}
}

$content = ob_get_clean();
require ROOT . 'pages/templates/default.php';