<?php

use app\assets\IndexAsset;

IndexAsset::register( $this );


if ( $session['isFirstLogin'] ) {
	echo " <script>
			window.onload = function(){	layer.msg('登陆成功', { icon: 1, offset:'100px' } ) }
		</script> ";
}

$session['isFirstLogin'] = false;
?>

	<h3>index</h1>
