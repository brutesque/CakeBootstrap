<?php

echo "\n";
echo '<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->' . "\n";
echo '<!--[if lt IE 9]>';
echo $this->Html->script(array(
	'TwitterBootstrap.html5shiv', 
	'TwitterBootstrap.respond.min'
), array('inline' => true, 'once' => true));
echo '<![endif]-->' . "\n";
