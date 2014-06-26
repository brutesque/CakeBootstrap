<?php
echo $this->Bootstrap->container(
	$this->Bootstrap->row(
		$this->Bootstrap->col(
			$this->Bootstrap->alert(
				$message, 
				array(
					'color' => ( isset($color) ? $color : 'warning' )
				)
			)
		)
	)
);
