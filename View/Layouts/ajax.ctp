<?php

echo $this->fetch('content');

echo $this->Js->writeBuffer(
	array(
		'onDomReady' =>  true, 
		'safe' => true
	)
);
