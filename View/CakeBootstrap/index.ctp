<?php
echo $this->Bootstrap->row($this->Bootstrap->col($this->Bootstrap->pageheader('Responsive images')));
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->typo(
			'
$this->Bootstrap->image(
	"http://placehold.it/300x300", 
	array(
		"border" => "rounded"
	)
);
$this->Bootstrap->image("http://placehold.it/300x300", array("border" => "circle")); 
$this->Bootstrap->image("http://placehold.it/300x300", array("border" => "thumbnail"));
			', 
			array('type' => 'pre', 'pre-scrollable' => true)
		)
	)
);
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		array(
			$this->Bootstrap->image('http://placehold.it/300x300', array('border' => 'rounded')), 
			$this->Bootstrap->image('http://placehold.it/300x300', array('border' => 'circle')), 
			$this->Bootstrap->image('http://placehold.it/300x300', array('border' => 'thumbnail')), 
			$this->Bootstrap->image('http://placehold.it/300x300', array('border' => 'rounded')), 
			$this->Bootstrap->image('http://placehold.it/300x300', array('border' => 'circle')), 
			$this->Bootstrap->image('http://placehold.it/300x300', array('border' => 'thumbnail')), 
			$this->Bootstrap->image('http://placehold.it/300x300', array('border' => 'rounded')), 
			$this->Bootstrap->image('http://placehold.it/300x300', array('border' => 'circle')), 
			$this->Bootstrap->image('http://placehold.it/300x300', array('border' => 'thumbnail')), 
			$this->Bootstrap->image('http://placehold.it/300x300', array('border' => 'rounded')), 
			$this->Bootstrap->image('http://placehold.it/300x300', array('border' => 'circle')), 
			$this->Bootstrap->image('http://placehold.it/300x300', array('border' => 'thumbnail')), 
		), 
		array( 'size' => 1 )
	)
);
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		array(
			array(
				$this->Bootstrap->image('http://placehold.it/300x300', array('border' => 'circle')), 
				array( 'size' => array(12, 6, 3) )
			), 
			array(
				$this->Bootstrap->image('http://placehold.it/300x300', array('border' => 'thumbnail')), 
				array( 'size' => array(12, 6, 3) )
			), 
			array(
				$this->Bootstrap->image('http://placehold.it/300x300', array('border' => 'thumbnail')), 
				array( 'size' => array(12, 6, 3) )
			), 
			array(
				$this->Bootstrap->image('http://placehold.it/300x300', array('border' => 'thumbnail')), 
				array( 'size' => array(12, 6, 3) )
			)
		)
	)
);

echo $this->Bootstrap->row($this->Bootstrap->col($this->Bootstrap->pageheader('Typography')));
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->typo(
			'
echo $this->Bootstrap->typo(
	"h1. Bootstrap heading " . 
	$this->Bootstrap->typo(
		"Secondary text", 
		array("type" => "small")
	), 
	array("type" => "h1")
);
			', 
			array('type' => 'pre', 'pre-scrollable' => true)
		)
	)
);
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->typo(
			'h1. Bootstrap heading ' . 
			$this->Bootstrap->typo(
				'Secondary text', 
				array('type' => 'small')
			), 
			array('type' => 'h1')
		) . 
		$this->Bootstrap->typo(
			'h2. Bootstrap heading ' . 
			$this->Bootstrap->typo(
				'Secondary text', 
				array('type' => 'small')
			), 
			array('type' => 'h2')
		) . 
		$this->Bootstrap->typo(
			'h3. Bootstrap heading ' . 
			$this->Bootstrap->typo(
				'Secondary text', 
				array('type' => 'small')
			), 
			array('type' => 'h3')
		) . 
		$this->Bootstrap->typo(
			'h4. Bootstrap heading ' . 
			$this->Bootstrap->typo(
				'Secondary text', 
				array('type' => 'small')
			), 
			array('type' => 'h4')
		) . 
		$this->Bootstrap->typo(
			'h5. Bootstrap heading ' . 
			$this->Bootstrap->typo(
				'Secondary text', 
				array('type' => 'small')
			), 
			array('type' => 'h5')
		) . 
		$this->Bootstrap->typo(
			'h6. Bootstrap heading ' . 
			$this->Bootstrap->typo(
				'Secondary text', 
				array('type' => 'small')
			), 
			array('type' => 'h6')
		), 
		array(
			'size' => array(12)
		)
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->typo('Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.

Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.

Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.') . 
		$this->Bootstrap->typo('Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.', array('type' => 'lead')) . 
		$this->Bootstrap->typo(
			'This line of text is meant to be treated as fine print.', 
			array('type' => 'small')
		) . 
		$this->Bootstrap->typo(
			'The following snippet of text is ' . 
			$this->Bootstrap->typo('rendered as bold text.', 
			array('type' => 'strong')) . '.'
		) . 
		$this->Bootstrap->typo(
			'The following snippet of text is ' . 
			$this->Bootstrap->typo('rendered as italicized text.', array('type' => 'em')) . '.'
		) . 
		$this->Bootstrap->typo(
			'Left aligned text.', 
			array('align' => 'left')
		) . 
		$this->Bootstrap->typo(
			'Center aligned text.', 
			array('align' => 'center')
		) . 
		$this->Bootstrap->typo(
			'Right aligned text.', 
			array('align' => 'right')
		) . 
		$this->Bootstrap->typo(
			'Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.', 
			array('color' => 'muted')
		) . 
		$this->Bootstrap->typo(
			'Nullam id dolor id nibh ultricies vehicula ut id elit.', 
			array('color' => 'primary')
		) . 
		$this->Bootstrap->typo(
			'Duis mollis, est non commodo luctus, nisi erat porttitor ligula.', 
			array('color' => 'success')
		) . 
		$this->Bootstrap->typo(
			'Maecenas sed diam eget risus varius blandit sit amet non magna.', 
			array('color' => 'info')
		) . 
		$this->Bootstrap->typo(
			'Etiam porta sem malesuada magna mollis euismod.', 
			array('color' => 'warning')
		) . 
		$this->Bootstrap->typo(
			'Donec ullamcorper nulla non metus auctor fringilla.', 
			array('color' => 'danger')
		) . 
		$this->Bootstrap->typo(
			array(
				array(
					'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.'
				), 
				array(
					'Someone famous in Source Title', 
					array('type' => 'small')
				)
			), 
			array(
				'type' => 'blockquote'
			)
		) . 
		$this->Bootstrap->typo(
			array(
				array(
					'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.'
				), 
				array(
					'Someone famous in Source Title', 
					array('type' => 'small')
				)
			), 
			array(
				'type' => 'blockquote', 
				'align' => 'right'
			)
		), 
		array(
			'size' => array(12)
		)
	)
);

echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->lists(
			$currentUser, 
			array(
				'type' => 'unordered'
			)
		), 
		array('size' => array(4))
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->lists(
			$currentUser, 
			array(
				'type' => 'ordered'
			)
		), 
		array('size' => array(4))
	) .
	$this->Bootstrap->col(
		$this->Bootstrap->lists(
			$currentUser, 
			array(
				'type' => 'unstyled'
			)
		), 
		array('size' => array(4))
	)
);

echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->lists(
			$currentUser, 
			array(
				'type' => 'description'
			)
		), 
		array('size' => array(6))
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->lists(
			$currentUser, 
			array(
				'type' => 'horizontal-description'
			)
		), 
		array('size' => array(6))
	)
);

echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->lists(
			$currentUser, 
			array(
				'type' => 'inline'
			)
		), 
		array('size' => array(12))
	)
);
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->typo(
			'For example, ' . 
			$this->Bootstrap->typo(
				'&lt;section&gt;', 
				array('type' => 'code')
			) . 
			' should be wrapped as inline.'
		)
	)
);

echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->typo(
			'Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.

Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.

Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.

Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.

Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.

Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.

Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.', 
			array('type' => 'pre', 'pre-scrollable' => true)
		), 
		array( 'size' => 6 )
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->typo(
			'Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.

Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.

Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.

Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.

Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.

Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.

Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.', 
			array('type' => 'pre')
		), 
		array( 'size' => 6 )
	)
);

$table = array(
	array(
		'a' => 'aaaaaaaaaaaaaaa', 
		'b' => 'bbbbbbbbbbbbbbb', 
		'c' => 'ccccccccccccccc', 
		'd' => 'ddddddddddddddd', 
		'e' => 'eeeeeeeeeeeeeee'
	),
	array(
		'a' => 'fffff', 
		'b' => array(
			'gggg', 
			array(
				'cellcolor' => 'success'
			)
		), 
		'c' => 'hhhhh', 
		'd' => array(
			'iiiii', 
			array(
				'cellcolor' => 'danger'
			)
		), 
		'e' => 'jjjjj'
	),
	array(
		'a' => 'kkkkkkkkkkkkkkk', 
		'b' => 'lllll', 
		'c' => 'mmmmm', 
		'd' => 'nnnnn', 
		'e' => 'ooooo'
	),
	array(
		'rowcolor' => 'active', 
		'a' => 'ppppp', 
		'b' => 'qqqqqqqqqqqqqqq', 
		'c' => 'rrrrr', 
		'd' => 'sssss', 
		'e' => 'ttttt'
	),
	array(
		'a' => 'uuuuu', 
		'b' => 'vvvvv', 
		'c' => 'wwwww', 
		'd' => 'xxxxxxxxxxxxxxx', 
		'e' => 'yyyyy'
	),
	array(
		'rowcolor' => 'success', 
		'a' => 'aaaaaaaaaaaaaaa', 
		'b' => 'bbbbbbbbbbbbbbb', 
		'c' => 'ccccccccccccccc', 
		'd' => 'ddddddddddddddd', 
		'e' => 'eeeeeeeeeeeeeee'
	),
	array(
		'a' => 'fffff', 
		'b' => 'ggggg', 
		'c' => 'hhhhh', 
		'd' => 'iiiii', 
		'e' => 'jjjjj'
	),
	array(
		'rowcolor' => 'warning', 
		'a' => 'kkkkkkkkkkkkkkk', 
		'b' => 'lllll', 
		'c' => 'mmmmm', 
		'd' => 'nnnnn', 
		'e' => 'ooooo'
	),
	array(
		'a' => 'ppppp', 
		'b' => 'qqqqqqqqqqqqqqq', 
		'c' => 'rrrrr', 
		'd' => 'sssss', 
		'e' => 'ttttt'
	),
	array(
		'rowcolor' => 'danger', 
		'a' => 'uuuuu', 
		'b' => 'vvvvv', 
		'c' => 'wwwww', 
		'd' => 'xxxxxxxxxxxxxxx', 
		'e' => 'yyyyy'
	), 
	array(
		'a' => 'aaaaaaaaaaaaaaa', 
		'b' => 'bbbbbbbbbbbbbbb', 
		'c' => 'ccccccccccccccc', 
		'd' => 'ddddddddddddddd', 
		'e' => 'eeeeeeeeeeeeeee'
	),
	array(
		'a' => 'fffff', 
		'b' => 'ggggg', 
		'c' => 'hhhhh', 
		'd' => 'iiiii', 
		'e' => 'jjjjj'
	),
	array(
		'a' => 'kkkkkkkkkkkkkkk', 
		'b' => 'lllll', 
		'c' => 'mmmmm', 
		'd' => 'nnnnn', 
		'e' => 'ooooo'
	),
	array(
		'a' => 'ppppp', 
		'b' => 'qqqqqqqqqqqqqqq', 
		'c' => 'rrrrr', 
		'd' => 'sssss', 
		'e' => 'ttttt'
	),
	array(
		'a' => 'uuuuu', 
		'b' => 'vvvvv', 
		'c' => 'wwwww', 
		'd' => 'xxxxxxxxxxxxxxx', 
		'e' => 'yyyyy'
	),
	array(
		'a' => 'aaaaaaaaaaaaaaa', 
		'b' => 'bbbbbbbbbbbbbbb', 
		'c' => 'ccccccccccccccc', 
		'd' => 'ddddddddddddddd', 
		'e' => 'eeeeeeeeeeeeeee'
	),
	array(
		'a' => 'fffff', 
		'b' => 'ggggg', 
		'c' => 'hhhhh', 
		'd' => 'iiiii', 
		'e' => 'jjjjj'
	),
	array(
		'a' => 'kkkkkkkkkkkkkkk', 
		'b' => 'lllll', 
		'c' => 'mmmmm', 
		'd' => 'nnnnn', 
		'e' => 'ooooo'
	),
	array(
		'a' => 'ppppp', 
		'b' => 'qqqqqqqqqqqqqqq', 
		'c' => 'rrrrr', 
		'd' => 'sssss', 
		'e' => 'ttttt'
	),
	array(
		'a' => 'uuuuu', 
		'b' => 'vvvvv', 
		'c' => 'wwwww', 
		'd' => 'xxxxxxxxxxxxxxx', 
		'e' => 'yyyyy'
	)
);

echo $this->Bootstrap->row($this->Bootstrap->col($this->Bootstrap->pageheader('Tables')));
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->table(
			$table
		), 
		array( 'size' => 12 )
	)
);

echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->table(
			$table, 
			array(
				'striped' => true, 
				'bordered' => true, 
				'hover' => true
			)
		), 
		array( 'size' => 12 )
	)
);

echo $this->Bootstrap->row($this->Bootstrap->col($this->Bootstrap->pageheader('Forms')));
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->form(
			array(
				array(
					'field' => 'email', 
					'type' => 'email', 
					'placeholder' => 'Enter email', 
					'label' => 'Email address'
				), 
				array(
					'field' => 'password', 
					'type' => 'password', 
					'placeholder' => 'Password', 
					'label' => 'Password'
				), 
				array(
					'field' => 'image', 
					'type' => 'file', 
					'placeholder' => 'Password', 
					'label' => 'File input', 
					'help' => 'Example block-level help text here.'
				), 
				array(
					'field' => 'admin', 
					'type' => 'checkbox', 
					'label' => 'Check me out'
				)
			), 
			array(
				'model' => false, 
				'buttons' => array(
					array(
						'label' => 'Submit', 
						'type' => 'submit'
					)
				)
			)
		), 
		array(
			'size' => 12
		)
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->form(
			array(
				array(
					'field' => 'email', 
					'type' => 'email', 
					'placeholder' => 'Enter email'
				), 
				array(
					'field' => 'password', 
					'type' => 'password', 
					'placeholder' => 'Password'
				), 
				array(
					'field' => 'admin', 
					'type' => 'checkbox', 
					'label' => 'Remember me'
				)
			), 
			array(
				'inline' => true, 
/* 				'model' => 'BruteUsers.User',  */
				'buttons' => array(
					array(
						'label' => 'Sign in', 
						'tag' => 'submit'
					)
				)
			)
		)
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->form(
			array(
				array(
					'field' => 'email', 
					'type' => 'email', 
					'placeholder' => 'Enter email', 
					'label' => 'Email'
				), 
				array(
					'field' => 'password', 
					'type' => 'password', 
					'placeholder' => 'Password', 
					'label' => 'Password'
				), 
				array(
					'field' => 'admin', 
					'type' => 'checkbox', 
					'label' => 'Remember me'
				)
			), 
			array(
				'horizontal' => true, 
/* 				'model' => 'BruteUsers.User',  */
				'buttons' => array(
					array(
						'label' => 'Sign in', 
						'tag' => 'submit'
					)
				)
			)
		)
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->form(
			array(
				array(
					'type' => 'text', 
					'label' => 'text'
				), 
				array(
					'type' => 'password', 
					'label' => 'password'
				), 
				array(
					'type' => 'datetime', 
					'label' => 'datetime'
				), 
				array(
					'type' => 'datetime-local', 
					'label' => 'datetime-local'
				), 
				array(
					'type' => 'date', 
					'label' => 'date'
				), 
				array(
					'type' => 'month', 
					'label' => 'month'
				), 
				array(
					'type' => 'time', 
					'label' => 'time'
				), 
				array(
					'type' => 'week', 
					'label' => 'week'
				), 
				array(
					'type' => 'number', 
					'label' => 'number'
				), 
				array(
					'type' => 'email', 
					'label' => 'email'
				), 
				array(
					'type' => 'url', 
					'label' => 'url'
				), 
				array(
					'type' => 'search', 
					'label' => 'search', 
					'disabled' => true
				), 
				array(
					'type' => 'tel', 
					'label' => 'tel'
				), 
				array(
					'type' => 'color', 
					'label' => 'color'
				)
			), 
			array(
				'horizontal' => true, 
				'buttons' => false
			)
		), 
		array(
			'size' => 4
		)
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->form(
			array(
				array(
					'type' => 'textarea', 
					'rows' => 3
				)
			)
		)
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->form(
			array(
				array(
					'type' => 'checkbox', 
					'label' => "Option one is this and that&mdash;be sure to include why it's great"
				), 
				array(
					'type' => 'radio'
				)
			)
		)
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->form(
			array(
				array(
					'type' => 'checkbox', 
					'inline' => true, 
					'value' => 'option1'
				), 
				array(
					'type' => 'checkbox', 
					'inline' => true, 
					'value' => 'option1'
				)
			)
		)
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->form(
			array(
				array(
					'type' => 'select', 
					'multiple' => true
				)
			)
		)
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->form(
			array(
				array(
					'type' => 'static', 
					'value' => 'email@example.com', 
					'label' => 'Email'
				), 
				array(
					'type' => 'password', 
					'label' => 'Password', 
					'placeholder' => 'Password'
				)
			), 
			array(
				'horizontal' => true, 
				'buttons' => false
			)
		)
	)
);

echo $this->Bootstrap->row($this->Bootstrap->col($this->Bootstrap->pageheader('Buttons')));
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->button(array(
			'label' => 'Default'
		)) . ' ' .
		$this->Bootstrap->button(array(
			'label' => 'Primary', 
			'color' => 'primary'
		)) . ' ' .
		$this->Bootstrap->button(array(
			'label' => 'Success', 
			'color' => 'success'
		)) . ' ' .
		$this->Bootstrap->button(array(
			'label' => 'Info', 
			'color' => 'info'
		)) . ' ' .
		$this->Bootstrap->button(array(
			'label' => 'Warning', 
			'color' => 'warning'
		)) . ' ' .
		$this->Bootstrap->button(array(
			'label' => 'Danger', 
			'color' => 'danger'
		)) . ' ' .
		$this->Bootstrap->button(array(
			'label' => 'Link', 
			'color' => 'link'
		))
	)
);
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->button(array(
			'label' => 'Large button', 
			'color' => 'primary', 
			'size' => 'lg'
		)) . ' ' .
		$this->Bootstrap->button(array(
			'label' => 'Large button', 
			'size' => 'lg'
		))
	)
);
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->button(array(
			'label' => 'Default button', 
			'color' => 'primary'
		)) . ' ' .
		$this->Bootstrap->button(array(
			'label' => 'Default button'
		))
	)
);
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->button(array(
			'label' => 'Small button', 
			'color' => 'primary', 
			'size' => 'sm'
		)) . ' ' .
		$this->Bootstrap->button(array(
			'label' => 'Small button', 
			'size' => 'sm'
		))
	)
);
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->button(array(
			'label' => 'Extra small button', 
			'color' => 'primary', 
			'size' => 'xs'
		)) . ' ' .
		$this->Bootstrap->button(array(
			'label' => 'Extra small button', 
			'size' => 'xs'
		))
	)
);
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->button(array(
			'label' => 'Block level button', 
			'color' => 'primary', 
			'size' => 'lg', 
			'block' => true
		)) . ' ' .
		$this->Bootstrap->button(array(
			'label' => 'Block level button', 
			'size' => 'lg', 
			'block' => true
		))
	)
);
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->button(array(
			'label' => 'Primary button', 
			'color' => 'primary', 
			'size' => 'lg', 
			'active' => true
		)) . ' ' .
		$this->Bootstrap->button(array(
			'label' => 'Button', 
			'size' => 'lg', 
			'active' => true
		))
	)
);
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->button(array(
			'label' => 'Primary link', 
			'color' => 'primary', 
			'size' => 'lg', 
			'active' => true, 
			'tag' => 'a'
		)) . ' ' .
		$this->Bootstrap->button(array(
			'label' => 'Link', 
			'size' => 'lg', 
			'active' => true, 
			'tag' => 'a'
		))
	)
);
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->button(array(
			'label' => 'Primary button', 
			'color' => 'primary', 
			'size' => 'lg', 
			'disabled' => true
		)) . ' ' .
		$this->Bootstrap->button(array(
			'label' => 'Button', 
			'size' => 'lg', 
			'disabled' => true
		))
	)
);
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->button(array(
			'label' => 'Primary link', 
			'color' => 'primary', 
			'size' => 'lg', 
			'disabled' => true, 
			'tag' => 'a'
		)) . ' ' .
		$this->Bootstrap->button(array(
			'label' => 'Link', 
			'size' => 'lg', 
			'disabled' => true, 
			'tag' => 'a'
		))
	)
);
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->button(array(
			'label' => 'Link', 
			'tag' => 'a'
		)) . ' ' .
		$this->Bootstrap->button(array(
			'label' => 'Button', 
			'tag' => 'button'
		)) . ' ' .
		$this->Bootstrap->button(array(
			'label' => 'Input', 
			'tag' => 'input'
		)) . ' ' .
		$this->Bootstrap->button(array(
			'label' => 'Submit', 
			'tag' => 'submit'
		))
	)
);

/*
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->btn(
			array(
				array(
					'label' => 'Large button', 
					'size' => 'lg', 
					'type' => 'primary'
				), 
				array(
					'label' => 'Large button', 
					'size' => 'lg', 
					'type' => 'default'
				), 
				array(
					'label' => 'Default button', 
					'size' => 'md', 
					'type' => 'primary'
				), 
				array(
					'label' => 'Default button', 
					'size' => 'md', 
					'type' => 'default'
				), 
				array(
					'label' => 'Small button', 
					'size' => 'sm', 
					'type' => 'primary'
				), 
				array(
					'label' => 'Small button', 
					'size' => 'sm', 
					'type' => 'default'
				), 
				array(
					'label' => 'Extra small button', 
					'size' => 'xs', 
					'type' => 'primary'
				), 
				array(
					'label' => 'Extra small button', 
					'size' => 'xs', 
					'type' => 'default'
				)
			)
		)
	)
);
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->btn(
			array(
				array(
					'label' => 'Block level button', 
					'size' => 'lg', 
					'block' => true, 
					'type' => 'primary'
				), 
				array(
					'label' => 'Block level button', 
					'size' => 'lg', 
					'block' => true, 
					'type' => 'default'
				)
			)
		) .  
		$this->Bootstrap->btn(
			array(
				array(
					'label' => 'Primary button', 
					'size' => 'lg', 
					'type' => 'primary', 
					'active' => true
				), 
				array(
					'label' => 'Button', 
					'size' => 'lg', 
					'type' => 'default', 
					'active' => true
				)
			)
		) .  
		$this->Bootstrap->btn(
			array(
				array(
					'label' => 'Primary button', 
					'size' => 'lg', 
					'type' => 'primary', 
					'disabled' => true
				), 
				array(
					'label' => 'Button', 
					'size' => 'lg', 
					'type' => 'default', 
					'disabled' => true
				)
			)
		)
	)
);
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->btn(
			array(
				array(
					'label' => 'Link', 
					'tag' => 'a'
				), 
				array(
					'label' => 'Button', 
					'tag' => 'button'
				), 
				array(
					'label' => 'Input', 
					'tag' => 'input'
				), 
				array(
					'label' => 'Submit', 
					'tag' => 'submit'
				)
			)
		)
	)
);
*/

echo $this->Bootstrap->row($this->Bootstrap->col($this->Bootstrap->pageheader('Tables')));
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->closeIcon() . 
		$this->Bootstrap->caret(), 
		array( 'size' => 12 )
	)
);

echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->center(
			$this->Bootstrap->image('http://placehold.it/300x300', array('grow' => false, 'border' => 'rounded', 'responsive' => false))
		), 
		array( 'size' => 12 )
	)
);

echo $this->Bootstrap->row($this->Bootstrap->col($this->Bootstrap->pageheader('Glyphicons')));
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		array(
			$this->Bootstrap->icon('adjust'), 
			$this->Bootstrap->icon('align-center'), 
			$this->Bootstrap->icon('align-justify'), 
			$this->Bootstrap->icon('align-left'), 
			$this->Bootstrap->icon('align-right'), 
			$this->Bootstrap->icon('arrow-down'), 
			$this->Bootstrap->icon('arrow-left'), 
			$this->Bootstrap->icon('arrow-right'), 
			$this->Bootstrap->icon('arrow-up'), 
			$this->Bootstrap->icon('asterisk'), 
			$this->Bootstrap->icon('backward'), 
			$this->Bootstrap->icon('barcode'), 
			$this->Bootstrap->icon('bell'), 
			$this->Bootstrap->icon('bold'), 
			$this->Bootstrap->icon('book'), 
			$this->Bootstrap->icon('bookmark'), 
			$this->Bootstrap->icon('briefcase'), 
			$this->Bootstrap->icon('bullhorn'), 
			$this->Bootstrap->icon('calendar'), 
			$this->Bootstrap->icon('camera'), 
			$this->Bootstrap->icon('certificate'), 
			$this->Bootstrap->icon('check'), 
			$this->Bootstrap->icon('chevron-down'), 
			$this->Bootstrap->icon('chevron-left'), 
			$this->Bootstrap->icon('chevron-right'), 
			$this->Bootstrap->icon('chevron-up'), 
			$this->Bootstrap->icon('circle-arrow-down'), 
			$this->Bootstrap->icon('circle-arrow-left'), 
			$this->Bootstrap->icon('circle-arrow-right'), 
			$this->Bootstrap->icon('circle-arrow-up'), 
			$this->Bootstrap->icon('cloud'), 
			$this->Bootstrap->icon('cloud-download'), 
			$this->Bootstrap->icon('cloud-upload'), 
			$this->Bootstrap->icon('cog'), 
			$this->Bootstrap->icon('collapse-down'), 
			$this->Bootstrap->icon('collapse-up'), 
			$this->Bootstrap->icon('comment'), 
			$this->Bootstrap->icon('compressed'), 
			$this->Bootstrap->icon('copyright-mark'), 
			$this->Bootstrap->icon('credit-card'), 
			$this->Bootstrap->icon('cutlery'), 
			$this->Bootstrap->icon('dashboard'), 
			$this->Bootstrap->icon('download'), 
			$this->Bootstrap->icon('download-alt'), 
			$this->Bootstrap->icon('earphone'), 
			$this->Bootstrap->icon('edit'), 
			$this->Bootstrap->icon('eject'), 
			$this->Bootstrap->icon('envelope'), 
			$this->Bootstrap->icon('euro'), 
			$this->Bootstrap->icon('exclamation-sign'), 
			$this->Bootstrap->icon('expand'), 
			$this->Bootstrap->icon('export'), 
			$this->Bootstrap->icon('eye-close'), 
			$this->Bootstrap->icon('eye-open'), 
			$this->Bootstrap->icon('facetime-video'), 
			$this->Bootstrap->icon('fast-backward'), 
			$this->Bootstrap->icon('fast-forward'), 
			$this->Bootstrap->icon('file'), 
			$this->Bootstrap->icon('film'), 
			$this->Bootstrap->icon('filter'), 
			$this->Bootstrap->icon('fire'), 
			$this->Bootstrap->icon('flag'), 
			$this->Bootstrap->icon('flash'), 
			$this->Bootstrap->icon('floppy-disk'), 
			$this->Bootstrap->icon('floppy-open'), 
			$this->Bootstrap->icon('floppy-remove'), 
			$this->Bootstrap->icon('floppy-save'), 
			$this->Bootstrap->icon('floppy-saved'), 
			$this->Bootstrap->icon('folder-close'), 
			$this->Bootstrap->icon('folder-open'), 
			$this->Bootstrap->icon('font'), 
			$this->Bootstrap->icon('forward'), 
			$this->Bootstrap->icon('fullscreen'), 
			$this->Bootstrap->icon('gbp'), 
			$this->Bootstrap->icon('gift'), 
			$this->Bootstrap->icon('glass'), 
			$this->Bootstrap->icon('globe'), 
			$this->Bootstrap->icon('hand-down'), 
			$this->Bootstrap->icon('hand-left'), 
			$this->Bootstrap->icon('hand-right'), 
			$this->Bootstrap->icon('hand-up'), 
			$this->Bootstrap->icon('hd-video'), 
			$this->Bootstrap->icon('hdd'), 
			$this->Bootstrap->icon('header'), 
			$this->Bootstrap->icon('headphones'), 
			$this->Bootstrap->icon('heart'), 
			$this->Bootstrap->icon('heart-empty'), 
			$this->Bootstrap->icon('home'), 
			$this->Bootstrap->icon('import'), 
			$this->Bootstrap->icon('inbox'), 
			$this->Bootstrap->icon('indent-left'), 
			$this->Bootstrap->icon('indent-right'), 
			$this->Bootstrap->icon('info-sign'), 
			$this->Bootstrap->icon('italic'), 
			$this->Bootstrap->icon('leaf'), 
			$this->Bootstrap->icon('link'), 
			$this->Bootstrap->icon('list'), 
			$this->Bootstrap->icon('list-alt'), 
			$this->Bootstrap->icon('lock'), 
			$this->Bootstrap->icon('log-in'), 
			$this->Bootstrap->icon('log-out'), 
			$this->Bootstrap->icon('magnet'), 
			$this->Bootstrap->icon('map-marker'), 
			$this->Bootstrap->icon('minus'), 
			$this->Bootstrap->icon('minus-sign'), 
			$this->Bootstrap->icon('move'), 
			$this->Bootstrap->icon('music'), 
			$this->Bootstrap->icon('new-window'), 
			$this->Bootstrap->icon('off'), 
			$this->Bootstrap->icon('ok'), 
			$this->Bootstrap->icon('ok-circle'), 
			$this->Bootstrap->icon('ok-sign'), 
			$this->Bootstrap->icon('open'), 
			$this->Bootstrap->icon('paperclip'), 
			$this->Bootstrap->icon('pause'), 
			$this->Bootstrap->icon('pencil'), 
			$this->Bootstrap->icon('phone'), 
			$this->Bootstrap->icon('phone-alt'), 
			$this->Bootstrap->icon('picture'), 
			$this->Bootstrap->icon('plane'), 
			$this->Bootstrap->icon('play'), 
			$this->Bootstrap->icon('play-circle'), 
			$this->Bootstrap->icon('plus'), 
			$this->Bootstrap->icon('plus-sign'), 
			$this->Bootstrap->icon('print'), 
			$this->Bootstrap->icon('pushpin'), 
			$this->Bootstrap->icon('qrcode'), 
			$this->Bootstrap->icon('question-sign'), 
			$this->Bootstrap->icon('random'), 
			$this->Bootstrap->icon('record'), 
			$this->Bootstrap->icon('refresh'), 
			$this->Bootstrap->icon('registration-mark'), 
			$this->Bootstrap->icon('remove'), 
			$this->Bootstrap->icon('remove-circle'), 
			$this->Bootstrap->icon('remove-sign'), 
			$this->Bootstrap->icon('repeat'), 
			$this->Bootstrap->icon('resize-full'), 
			$this->Bootstrap->icon('resize-horizontal'), 
			$this->Bootstrap->icon('resize-small'), 
			$this->Bootstrap->icon('resize-vertical'), 
			$this->Bootstrap->icon('retweet'), 
			$this->Bootstrap->icon('road'), 
			$this->Bootstrap->icon('save'), 
			$this->Bootstrap->icon('saved'), 
			$this->Bootstrap->icon('screenshot'), 
			$this->Bootstrap->icon('sd-video'), 
			$this->Bootstrap->icon('search'), 
			$this->Bootstrap->icon('send'), 
			$this->Bootstrap->icon('share'), 
			$this->Bootstrap->icon('share-alt'), 
			$this->Bootstrap->icon('shopping-cart'), 
			$this->Bootstrap->icon('signal'), 
			$this->Bootstrap->icon('sort'), 
			$this->Bootstrap->icon('sort-by-alphabet'), 
			$this->Bootstrap->icon('sort-by-alphabet-alt'), 
			$this->Bootstrap->icon('sort-by-attributes'), 
			$this->Bootstrap->icon('sort-by-attributes-alt'), 
			$this->Bootstrap->icon('sort-by-order'), 
			$this->Bootstrap->icon('sort-by-order-alt'), 
			$this->Bootstrap->icon('sound-5-1'), 
			$this->Bootstrap->icon('sound-6-1'), 
			$this->Bootstrap->icon('sound-7-1'), 
			$this->Bootstrap->icon('sound-dolby'), 
			$this->Bootstrap->icon('sound-stereo'), 
			$this->Bootstrap->icon('star'), 
			$this->Bootstrap->icon('star-empty'), 
			$this->Bootstrap->icon('stats'), 
			$this->Bootstrap->icon('step-backward'), 
			$this->Bootstrap->icon('step-forward'), 
			$this->Bootstrap->icon('stop'), 
			$this->Bootstrap->icon('subtitles'), 
			$this->Bootstrap->icon('tag'), 
			$this->Bootstrap->icon('tags'), 
			$this->Bootstrap->icon('tasks'), 
			$this->Bootstrap->icon('text-height'), 
			$this->Bootstrap->icon('text-width'), 
			$this->Bootstrap->icon('th'), 
			$this->Bootstrap->icon('th-large'), 
			$this->Bootstrap->icon('th-list'), 
			$this->Bootstrap->icon('thumbs-down'), 
			$this->Bootstrap->icon('thumbs-up'), 
			$this->Bootstrap->icon('time'), 
			$this->Bootstrap->icon('tint'), 
			$this->Bootstrap->icon('tower'), 
			$this->Bootstrap->icon('transfer'), 
			$this->Bootstrap->icon('trash'), 
			$this->Bootstrap->icon('tree-conifer'), 
			$this->Bootstrap->icon('tree-deciduous'), 
			$this->Bootstrap->icon('unchecked'), 
			$this->Bootstrap->icon('upload'), 
			$this->Bootstrap->icon('usd'), 
			$this->Bootstrap->icon('user'), 
			$this->Bootstrap->icon('volume-down'), 
			$this->Bootstrap->icon('volume-off'), 
			$this->Bootstrap->icon('volume-up'), 
			$this->Bootstrap->icon('warning-sign'), 
			$this->Bootstrap->icon('wrench'), 
			$this->Bootstrap->icon('zoom-in'), 
			$this->Bootstrap->icon('zoom-out')
		), 
		array( 'size' => 1 )
	)
);
echo $this->Bootstrap->row($this->Bootstrap->col($this->Bootstrap->pageheader('Button groups')));
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->buttonGroup (
			array(
				array(
					'icon' => 'align-left'
				), 
				array(
					'icon' => 'align-center'
				), 
				array(
					'icon' => 'align-right'
				), 
				array(
					'icon' => 'align-justify'
				)
			)
		)
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->buttons (
			array(
				array(
					'icon' => 'star', 
					'label' => 'Star', 
					'size' => 'lg'
				), 
				array(
					'icon' => 'star', 
					'label' => 'Star', 
					'size' => 'md'
				), 
				array(
					'icon' => 'star', 
					'label' => 'Star', 
					'size' => 'sm'
				), 
				array(
					'icon' => 'star', 
					'label' => 'Star', 
					'size' => 'xs'
				)
			)
		)
	)
);

echo $this->Bootstrap->row($this->Bootstrap->col($this->Bootstrap->pageheader('Button dropdowns')));
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->button(
			array(
				'label' => 'Dropdown', 
				'dropdown' => array(
					array(
						'label' => 'Action', 
						'icon' => 'pencil'
					), 
					array(
						'label' => 'Another action', 
						'disabled' => true
					), 
					array(
						'label' => 'Something else here'
					), 
					'divider', 
					array(
						'label' => 'Separated link'
					)
				)
			)
		)
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->button(
			array(
				'label' => 'Dropdown', 
				'pull-right' => true, 
				'dropdown' => array(
					array(
						'label' => 'Action', 
						'icon' => 'pencil'
					), 
					array(
						'label' => 'Another action', 
						'disabled' => true
					), 
					array(
						'label' => 'Something else here'
					), 
					'divider', 
					array(
						'label' => 'Separated link'
					)
				)
			)
		)
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->button(
			array(
				'label' => 'Dropdown', 
				'dropdown' => array(
					'Dropdown header', 
					array(
						'label' => 'Action'
					), 
					array(
						'label' => 'Another action'
					), 
					array(
						'label' => 'Something else here'
					), 
					'divider', 
					'Dropdown header', 
					array(
						'label' => 'Separated link'
					)
				)
			)
		)
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->button(
			array(
				'label' => 'Dropdown', 
				'dropdown' => array(
					array(
						'label' => 'Regular link'
					), 
					array(
						'label' => 'Disabled link', 
						'disabled' => true
					), 
					array(
						'label' => 'Another link'
					)
				)
			)
		)
	)
);

echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->buttonGroup (
			array(
				array(
					'label' => 'Left'
				), 
				array(
					'label' => 'Middle'
				), 
				array(
					'label' => 'Right'
				)
			)
		)
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->buttonToolbar (
			array(
				array(
					array(
						'label' => '1'
					), 
					array(
						'label' => '2'
					), 
					array(
						'label' => '3'
					), 
					array(
						'label' => '4'
					)
				), 
				array(
					array(
						'label' => '5'
					), 
					array(
						'label' => '6'
					), 
					array(
						'label' => '7'
					)
				), 
				array(
					array(
						'label' => '8'
					)
				)
			)
		)
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->buttonGroup (
			array(
				array(
					'label' => 'Left'
				), 
				array(
					'label' => 'Middle'
				), 
				array(
					'label' => 'Right'
				)
			), 
			array(
				'size' => 'lg'
			)
		)
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->buttonGroup (
			array(
				array(
					'label' => 'Left'
				), 
				array(
					'label' => 'Middle'
				), 
				array(
					'label' => 'Right'
				)
			), 
			array(
				'size' => 'md'
			)
		)
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->buttonGroup (
			array(
				array(
					'label' => 'Left'
				), 
				array(
					'label' => 'Middle'
				), 
				array(
					'label' => 'Right'
				)
			), 
			array(
				'size' => 'sm'
			)
		)
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->buttonGroup(
			array(
				array(
					'label' => 'Left'
				), 
				array(
					'label' => 'Middle'
				), 
				array(
					'label' => 'Right'
				)
			), 
			array(
				'size' => 'xs'
			)
		)
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->buttonGroup(
			array(
				array(
					'label' => '1'
				), 
				array(
					'label' => '2'
				), 
				array(
					'label' => 'Dropdown', 
					'dropdown' => array(
						array(
							'label' => 'Dropdown link'
						), 
						array(
							'label' => 'Dropdown link'
						)
					)
				)
			)
		)
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->buttonGroup(
			array(
				array(
					'label' => 'Button'
				), 
				array(
					'label' => 'Button'
				), 
				array(
					'label' => 'Dropdown', 
					'dropdown' => array(
						array(
							'label' => 'Dropdown link'
						), 
						array(
							'label' => 'Dropdown link'
						)
					)
				), 
				array(
					'label' => 'Button'
				), 
				array(
					'label' => 'Button'
				), 
				array(
					'label' => 'Dropdown', 
					'dropdown' => array(
						array(
							'label' => 'Dropdown link'
						), 
						array(
							'label' => 'Dropdown link'
						)
					)
				), 
				array(
					'label' => 'Dropdown', 
					'dropdown' => array(
						array(
							'label' => 'Dropdown link'
						), 
						array(
							'label' => 'Dropdown link'
						)
					)
				), 
				array(
					'label' => 'Dropdown', 
					'dropdown' => array(
						array(
							'label' => 'Dropdown link'
						), 
						array(
							'label' => 'Dropdown link'
						)
					)
				)
			), 
			array(
				'vertical' => true
			)
		)
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->buttonGroup(
			array(
				array(
					'label' => 'Left'
				), 
				array(
					'label' => 'Middle'
				), 
				array(
					'label' => 'Right'
				)
			), 
			array(
				'justified' => true
			)
		)
	)
);

echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->buttons(
			array(
				array(
					'label' => 'Default', 
					'color' => 'default', 
					'dropdown' => array(
						array(
							'label' => 'Action'
						), 
						array(
							'label' => 'Another action'
						), 
						array(
							'label' => 'Something else here'
						), 
						'divider',
						array(
							'label' => 'Separated link'
						)
					)
				), 
				array(
					'label' => 'Primary', 
					'color' => 'primary', 
					'dropdown' => array(
						array(
							'label' => 'Action'
						), 
						array(
							'label' => 'Another action'
						), 
						array(
							'label' => 'Something else here'
						), 
						'divider',
						array(
							'label' => 'Separated link'
						)
					)
				), 
				array(
					'label' => 'Success', 
					'color' => 'success', 
					'dropdown' => array(
						array(
							'label' => 'Action'
						), 
						array(
							'label' => 'Another action'
						), 
						array(
							'label' => 'Something else here'
						), 
						'divider',
						array(
							'label' => 'Separated link'
						)
					)
				), 
				array(
					'label' => 'Info', 
					'color' => 'info', 
					'dropdown' => array(
						array(
							'label' => 'Action'
						), 
						array(
							'label' => 'Another action'
						), 
						array(
							'label' => 'Something else here'
						), 
						'divider',
						array(
							'label' => 'Separated link'
						)
					)
				), 
				array(
					'label' => 'Warning', 
					'color' => 'warning', 
					'dropdown' => array(
						array(
							'label' => 'Action'
						), 
						array(
							'label' => 'Another action'
						), 
						array(
							'label' => 'Something else here'
						), 
						'divider',
						array(
							'label' => 'Separated link'
						)
					)
				), 
				array(
					'label' => 'Danger', 
					'color' => 'danger', 
					'dropdown' => array(
						array(
							'label' => 'Action'
						), 
						array(
							'label' => 'Another action'
						), 
						array(
							'label' => 'Something else here'
						), 
						'divider',
						array(
							'label' => 'Separated link'
						)
					)
				)
			)
		)
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->buttons(
			array(
				array(
					'label' => 'Default', 
					'color' => 'default', 
					'split' => true, 
					'dropdown' => array(
						array(
							'label' => 'Action'
						), 
						array(
							'label' => 'Another action'
						), 
						array(
							'label' => 'Something else here'
						), 
						'divider',
						array(
							'label' => 'Separated link'
						)
					)
				), 
				array(
					'label' => 'Primary', 
					'color' => 'primary', 
					'split' => true, 
					'dropdown' => array(
						array(
							'label' => 'Action'
						), 
						array(
							'label' => 'Another action'
						), 
						array(
							'label' => 'Something else here'
						), 
						'divider',
						array(
							'label' => 'Separated link'
						)
					)
				), 
				array(
					'label' => 'Success', 
					'color' => 'success', 
					'split' => true, 
					'dropdown' => array(
						array(
							'label' => 'Action'
						), 
						array(
							'label' => 'Another action'
						), 
						array(
							'label' => 'Something else here'
						), 
						'divider',
						array(
							'label' => 'Separated link'
						)
					)
				), 
				array(
					'label' => 'Info', 
					'color' => 'info', 
					'split' => true, 
					'dropdown' => array(
						array(
							'label' => 'Action'
						), 
						array(
							'label' => 'Another action'
						), 
						array(
							'label' => 'Something else here'
						), 
						'divider',
						array(
							'label' => 'Separated link'
						)
					)
				), 
				array(
					'label' => 'Warning', 
					'color' => 'warning', 
					'split' => true, 
					'dropdown' => array(
						array(
							'label' => 'Action'
						), 
						array(
							'label' => 'Another action'
						), 
						array(
							'label' => 'Something else here'
						), 
						'divider',
						array(
							'label' => 'Separated link'
						)
					)
				), 
				array(
					'label' => 'Danger', 
					'color' => 'danger', 
					'split' => true, 
					'dropdown' => array(
						array(
							'label' => 'Action'
						), 
						array(
							'label' => 'Another action'
						), 
						array(
							'label' => 'Something else here'
						), 
						'divider',
						array(
							'label' => 'Separated link'
						)
					)
				)
			)
		)
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->buttons(
			array(
				array(
					'label' => 'Large button', 
					'size' => 'lg', 
					'dropdown' => array(
						array(
							'label' => 'Action'
						), 
						array(
							'label' => 'Another action'
						), 
						array(
							'label' => 'Something else here'
						), 
						'divider',
						array(
							'label' => 'Separated link'
						)
					)
				), 
				array(
					'label' => 'Small button', 
					'size' => 'sm', 
					'dropdown' => array(
						array(
							'label' => 'Action'
						), 
						array(
							'label' => 'Another action'
						), 
						array(
							'label' => 'Something else here'
						), 
						'divider',
						array(
							'label' => 'Separated link'
						)
					)
				), 
				array(
					'label' => 'Extra small button', 
					'size' => 'xs', 
					'dropdown' => array(
						array(
							'label' => 'Action'
						), 
						array(
							'label' => 'Another action'
						), 
						array(
							'label' => 'Something else here'
						), 
						'divider',
						array(
							'label' => 'Separated link'
						)
					)
				)
			)
		)
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->buttons(
			array(
				array(
					'label' => 'Dropup', 
					'split' => true, 
					'dropup' => true, 
					'dropdown' => array(
						array('label' => 'Action'), 
						array('label' => 'Another action'), 
						array('label' => 'Something else here'), 
						'divider',
						array('label' => 'Separated link')
					)
				), 
				array(
					'label' => 'Right dropup', 
					'color' => 'primary', 
					'split' => true, 
					'dropup' => true, 
					'pull-right' => true, 
					'dropdown' => array(
						array('label' => 'Action'), 
						array('label' => 'Another action'), 
						array('label' => 'Something else here'), 
						'divider',
						array('label' => 'Separated link')
					)
				)
			)
		)
	)
);

echo $this->Bootstrap->row($this->Bootstrap->col($this->Bootstrap->pageheader('Input groups')));
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->form(
			array(
				array(
					'label' => 'Subdomain', 
					'field' => array(
						array(
							'field' => 'subdomain', 
							'type' => 'text', 
							'placeholder' => 'you'
						), 
						'.brutefolio.com'
					), 
					'help' => 'This is some help text'
				), 
				array(
					'label' => 'Email address', 
					'field' => array(
						array(
							'field' => 'emailuser', 
							'type' => 'text', 
							'placeholder' => 'user'
						), 
						'@', 
						array(
							'field' => 'emaildomain', 
							'type' => 'text', 
							'placeholder' => 'domain'
						), 
						'.', 
						array(
							'field' => 'emailext', 
							'type' => 'text', 
							'placeholder' => 'com'
						)
					), 
					'help' => 'This is some help text'
				), 
				array(
					'field' => 'password', 
					'type' => 'password', 
					'placeholder' => 'Password', 
					'label' => 'Password'
				)
			)
		)
	)
);

echo $this->Bootstrap->row($this->Bootstrap->col($this->Bootstrap->pageheader('Navs')));
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		array(
			array(
				$this->Bootstrap->nav(
					array(
						array(
							'label' => 'Home', 
							'active' => true
						), 
						array(
							'label' => 'Profile'
						), 
						array(
							'label' => 'Messages'
						)
					)
				)
			), 
			array(
				$this->Bootstrap->nav(
					array(
						array(
							'label' => 'Home', 
							'active' => true
						), 
						array(
							'label' => 'Profile'
						), 
						array(
							'label' => 'Messages'
						)
					), 
					array(
						'type' => 'pills'
					)
				)
			), 
			array(
				$this->Bootstrap->nav(
					array(
						array(
							'label' => 'Home', 
							'active' => true
						), 
						array(
							'label' => 'Profile'
						), 
						array(
							'label' => 'Messages'
						)
					), 
					array(
						'type' => 'pills', 
						'stacked' => true
					)
				)
			), 
			array(
				$this->Bootstrap->nav(
					array(
						array(
							'label' => 'Home', 
							'active' => true
						), 
						array(
							'label' => 'Profile'
						), 
						array(
							'label' => 'Messages'
						)
					), 
					array(
						'type' => 'tabs', 
						'justified' => true
					)
				)
			), 
			array(
				$this->Bootstrap->nav(
					array(
						array(
							'label' => 'Home', 
							'active' => true
						), 
						array(
							'label' => 'Profile'
						), 
						array(
							'label' => 'Messages'
						)
					), 
					array(
						'type' => 'pills', 
						'justified' => true
					)
				)
			), 
			array(
				$this->Bootstrap->nav(
					array(
						array(
							'label' => 'Clickable link'
						), 
						array(
							'label' => 'Clickable link'
						), 
						array(
							'label' => 'Disabled link', 
							'disabled' => true
						)
					), 
					array(
						'type' => 'pills'
					)
				)
			), 
			array(
				$this->Bootstrap->nav(
					array(
						array(
							'label' => 'Home', 
							'active' => true
						), 
						array(
							'label' => 'Help'
						), 
						array(
							'label' => 'Dropdown', 
							'dropdown' => array(
								array(
									'label' => 'Action'
								), 
								array(
									'label' => 'Another action'
								), 
								array(
									'label' => 'Something else here'
								), 
								'divider', 
								array(
									'label' => 'Separated link'
								)
							)
						)
					), 
					array(
						'type' => 'tabs'
					)
				)
			), 
			array(
				$this->Bootstrap->nav(
					array(
						array(
							'label' => 'Home', 
							'active' => true
						), 
						array(
							'label' => 'Help'
						), 
						array(
							'label' => 'Dropdown', 
							'dropdown' => array(
								array(
									'label' => 'Action'
								), 
								array(
									'label' => 'Another action'
								), 
								array(
									'label' => 'Something else here'
								), 
								'divider', 
								array(
									'label' => 'Separated link'
								)
							)
						)
					), 
					array(
						'type' => 'pills'
					)
				)
			)
		)
	)
);

echo $this->Bootstrap->row($this->Bootstrap->col($this->Bootstrap->pageheader('Navbar')));
echo $this->Bootstrap->navbar(
	array(
		array(
			array(
				'label' => 'Link', 
				'active' => true
			), 
			array(
				'label' => 'Link'
			), 
			array(
				'label' => 'Dropdown', 
				'dropdown' => array(
					array(
						'label' => 'Action'
					), 
					array(
						'label' => 'Another action'
					), 
					array(
						'label' => 'Something else here'
					), 
					'divider', 
					array(
						'label' => 'Separated link'
					), 
					'divider', 
					array(
						'label' => 'One more separated link'
					)
				)
			)
		), 
		'form' => array(
			array(
				array(
					'field' => 'search', 
					'type' => 'text', 
					'placeholder' => 'Search', 
					'label' => 'Search'
				)
			), 
			array(
				'role' => 'search'
			)
		), 
		'right' => array(
			array(
				'label' => 'Link'
			), 
			array(
				'label' => 'Dropdown', 
				'dropdown' => array(
					array(
						'label' => 'Action'
					), 
					array(
						'label' => 'Another action'
					), 
					array(
						'label' => 'Something else here'
					), 
					'divider', 
					array(
						'label' => 'Separated link'
					)
				)
			)
		)
	), 
	array(
		'brand' => 'Brand', 
		'url' => '#'
	)
);
echo $this->Bootstrap->navbar(
	array(
		'form' => array(
			array(
				array(
					'field' => 'search', 
					'type' => 'text', 
					'placeholder' => 'Search', 
					'label' => 'Search'
				)
			), 
			array(
				'role' => 'search'
			)
		)
	), 
	array(
		'brand' => 'Brand'
	)
);
echo $this->Bootstrap->navbar(
	array(
		'button' => array(
			'label' => 'Sign in', 
			'color' => 'primary'
		)
	), 
	array(
		'brand' => 'Brand'
	)
);
echo $this->Bootstrap->navbar(
	array(
		'buttons' => array(
			array(
				'label' => 'Sign up'
			), 
			array(
				'label' => 'Sign in', 
				'color' => 'primary'
			)
		)
	), 
	array(
		'brand' => 'Brand'
	));
echo $this->Bootstrap->navbar(
	array(
		'text' => 'Signed in as Mark Otto'
	)
);

echo $this->Bootstrap->navbar(
	array(
		array(
			array(
				'label' => 'Home'
			), 
			array(
				'label' => 'Link'
			), 
			array(
				'label' => 'Link'
			)
		)
	), 
	array(
		'brand' => 'Brand', 
/* 		'type' => 'fixed' */
	)
);
echo $this->Bootstrap->navbar(
	array(
		array(
			array(
				'label' => 'Home'
			), 
			array(
				'label' => 'Link'
			), 
			array(
				'label' => 'Link'
			)
		)
	), 
	array(
		'brand' => 'Brand', 
/*
		'type' => 'fixed', 
		'position' => 'bottom'
*/
	)
);
echo $this->Bootstrap->navbar(
	array(
		array(
			array(
				'label' => 'Home'
			), 
			array(
				'label' => 'Link'
			), 
			array(
				'label' => 'Link'
			)
		)
	), 
	array(
		'brand' => 'Brand', 
		'type' => 'static'
	)
);

echo $this->Bootstrap->navbar(
	array(
		array(
			array(
				'label' => 'Home'
			), 
			array(
				'label' => 'Link'
			), 
			array(
				'label' => 'Link'
			)
		)
	), 
	array(
		'brand' => 'Brand', 
		'color' => 'inverse'
	)
);


echo $this->Bootstrap->row($this->Bootstrap->col($this->Bootstrap->pageheader('Breadcrumbs')));
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->nav(
			array(
				array(
					'label' => 'Home', 
					'active' => true
				)
			), 
			array(
				'type' => 'breadcrumbs'
			)
		) . 
		$this->Bootstrap->nav(
			array(
				array(
					'label' => 'Home'
				), 
				array(
					'label' => 'Library', 
					'active' => true
				)
			), 
			array(
				'type' => 'breadcrumbs'
			)
		) . 
		$this->Bootstrap->nav(
			array(
				array(
					'label' => 'Home'
				), 
				array(
					'label' => 'Library'
				), 
				array(
					'label' => 'Data', 
					'active' => true
				)
			), 
			array(
				'type' => 'breadcrumbs'
			)
		)
	)
);

echo $this->Bootstrap->row($this->Bootstrap->col($this->Bootstrap->pageheader('Labels')));
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->labelheader( 'Example heading', 'New' ) . 
		$this->Bootstrap->labelheader( 'Example heading', 'New', array( 'type' => 'h2' ) ) . 
		$this->Bootstrap->labelheader( 'Example heading', 'New', array( 'type' => 'h3' ) ) . 
		$this->Bootstrap->labelheader( 'Example heading', 'New', array( 'type' => 'h4' ) ) . 
		$this->Bootstrap->labelheader( 'Example heading', 'New', array( 'type' => 'h5' ) ) . 
		$this->Bootstrap->labelheader( 'Example heading', 'New', array( 'type' => 'h6' ) )
	)
);

echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->label( 'Default' ) . ' ' .
		$this->Bootstrap->label( 'Primary', array( 'color' => 'primary' ) ) . ' ' .
		$this->Bootstrap->label( 'Success', array( 'color' => 'success' ) ) . ' ' .
		$this->Bootstrap->label( 'Info', array( 'color' => 'info' ) ) . ' ' .
		$this->Bootstrap->label( 'Warning', array( 'color' => 'warning' ) ) . ' ' .
		$this->Bootstrap->label( 'Danger', array( 'color' => 'danger' ) )
	)
);

echo $this->Bootstrap->row($this->Bootstrap->col($this->Bootstrap->pageheader('Badges')));
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Html->link(
			'Inbox' . ' ' . $this->Bootstrap->badge( 42 ), 
			'#', 
			array(
				'escape' => false
			)
		)
	)
);

echo $this->Bootstrap->row($this->Bootstrap->col($this->Bootstrap->pageheader('Jumbotron')));
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->jumbotron(
			array(
				'header' => 'Hello, world!', 
				'text' => 'This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.', 
				'buttons' => array(
					array(
						'label' => 'Learn more', 
						'type' => 'primary', 
						'size' => 'lg'
					)
				)
			)
		) . 
		$this->Bootstrap->jumbotron(
			array(
				'header' => 'Hello, world!', 
				'text' => 'This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.', 
				'buttons' => array(
					array(
						'label' => 'Learn more', 
						'type' => 'primary', 
						'size' => 'lg'
					)
				)
			), 
			array(
				'size' => 6, 
				'offset' => 3
			)
		) . 
		$this->Bootstrap->jumbotron(
			array(
				'header' => array(
					'Hello, world!', 
					'type' => 'h2'
				), 
				'text' => 'This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.', 
				'buttons' => array(
					array(
						'label' => 'Learn more', 
						'type' => 'primary', 
						'size' => 'lg'
					)
				), 
				'background-image' => 'http://placehold.it/100x50/ffff00/000000'
			), 
			array(
				'size' => 6, 
				'offset' => 3
			)
		) . 
		$this->Bootstrap->jumbotron(
			array(
				'image' => 'http://placehold.it/100x50/ffff00/000000', 
				'text' => 'This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.'
			)
		) . 
		$this->Bootstrap->jumbotron(
			'Hello, world!'
		)
	)
);

echo $this->Bootstrap->row($this->Bootstrap->col($this->Bootstrap->pageheader('Pageheader')));
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->pageheader(
			'Example page header'
		)
	)
);

echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->pageheader(
			'Example page header', 
			'Subtext for header'
		)
	)
);

echo $this->Bootstrap->row($this->Bootstrap->col($this->Bootstrap->pageheader('Thumbnails')));
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->thumbnail(
			'http://placehold.it/300x200'
		), 
		array(
			'size' => 3
		)
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->thumbnail(
			array(
				'http://placehold.it/300x200'
			)
		), 
		array(
			'size' => 3
		)
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->thumbnail(
			array(
				'image' => 'http://placehold.it/300x200'
			)
		), 
		array(
			'size' => 3
		)
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->thumbnail(
			array(
				'image' => 'http://placehold.it/300x200', 
				'caption' => 'Thumbnail label', 
				'description' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 
				'buttons' => array(
					array(
						'label' => 'Button', 
						'type' => 'primary'
					), 
					array(
						'label' => 'Button'
					)
				)
			)
		), 
		array(
			'size' => 3
		)
	)
);

echo $this->Bootstrap->row($this->Bootstrap->col($this->Bootstrap->pageheader('Alerts')));
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->alert(
			$this->Bootstrap->typo("Well done!", array('type' => 'strong')) . " You successfully read this important alert message.", 
			array('color' => 'success', 'dismissable' => false)
		) . 
		$this->Bootstrap->alert(
			$this->Bootstrap->typo("Heads up!", array('type' => 'strong')) . " This alert needs your attention, but it's not super important.", 
			array('color' => 'info', 'dismissable' => false)
		) . 
		$this->Bootstrap->alert(
			$this->Bootstrap->typo("Warning!", array('type' => 'strong')) . " Best check yo self, you're not looking too good.", 
			array('color' => 'warning', 'dismissable' => false)
		) . 
		$this->Bootstrap->alert(
			$this->Bootstrap->typo("Oh snap!", array('type' => 'strong')) . " Change a few things up and try submitting again.", 
			array('color' => 'danger', 'dismissable' => false)
		)
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->alert(
			$this->Bootstrap->typo("This alert...", array('type' => 'strong')) . " You can dismiss if if you like.", 
			array('color' => 'info')
		)
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->alert(
			$this->Bootstrap->typo("Well done!", array('type' => 'strong')) . " You successfully read " . $this->Html->link("this important alert message.", '#', array('class' => 'alert-link')), 
			array('color' => 'success', 'dismissable' => false)
		) . 
		$this->Bootstrap->alert(
			$this->Bootstrap->typo("Heads up!", array('type' => 'strong')) . " This " . $this->Html->link("alert needs your attention", '#', array('class' => 'alert-link')) . ", but it's not super important.", 
			array('color' => 'info', 'dismissable' => false)
		) . 
		$this->Bootstrap->alert(
			$this->Bootstrap->typo("Warning!", array('type' => 'strong')) . " Best check yo self, you're " . $this->Html->link("not looking too good", '#', array('class' => 'alert-link')) . ".", 
			array('color' => 'warning', 'dismissable' => false)
		) . 
		$this->Bootstrap->alert(
			$this->Bootstrap->typo("Oh snap!", array('type' => 'strong')) . " " . $this->Html->link("Change a few things up", '#', array('class' => 'alert-link')) . " and try submitting again.", 
			array('color' => 'danger', 'dismissable' => false)
		)
	)
);

echo $this->Bootstrap->row($this->Bootstrap->col($this->Bootstrap->pageheader('Progress bars')));
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->progress(60)
	)
);

echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->progress(40, array( 'color' => 'success' )) . 
		$this->Bootstrap->progress(20, array( 'color' => 'info' )) . 
		$this->Bootstrap->progress(60, array( 'color' => 'warning' )) . 
		$this->Bootstrap->progress(80, array( 'color' => 'danger' ))
	)
);

echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->progress(60) . 
		$this->Bootstrap->progress(40, array( 'color' => 'success', 'striped' => true)) . 
		$this->Bootstrap->progress(20, array( 'color' => 'info', 'striped' => true)) . 
		$this->Bootstrap->progress(60, array( 'color' => 'warning', 'striped' => true)) . 
		$this->Bootstrap->progress(80, array( 'color' => 'danger', 'striped' => true))
	)
);

echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->progress(45, array( 'striped' => true, 'active' => true ))
	)
);

echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->progress(
			array(35, 20, 10), 
			array( 
				'color' => array( 'success', 'warning', 'danger')
			)
		)
	)
);

echo $this->Bootstrap->row($this->Bootstrap->col($this->Bootstrap->pageheader('Media object')));
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->media(
			array(
				'heading' => 'Media heading', 
				'body' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 
				'image' => 'http://placehold.it/64x64', 
				'url' => '#'
			)
		) . 
		$this->Bootstrap->media(
			array(
				'heading' => 'Media heading', 
				'body' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 
				'nested' => array(
					'heading' => 'Media heading', 
					'body' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 
					'image' => 'http://placehold.it/64x64', 
					'url' => '#'
				), 
				'image' => 'http://placehold.it/64x64', 
				'url' => '#'
			)
		)
	) . 
	$this->Bootstrap->col(
		$this->Bootstrap->mediaList(
			array(
				array(
					'heading' => 'Media heading', 
					'body' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 
					'image' => 'http://placehold.it/64x64', 
					'url' => '#'
				), 
				array(
					'heading' => 'Media heading', 
					'body' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 
					'image' => 'http://placehold.it/64x64', 
					'url' => '#', 
					'nested' => array(
						array(
							'heading' => 'Media heading', 
							'body' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 
							'image' => 'http://placehold.it/64x64', 
							'url' => '#', 
							'nested' => array(
								'heading' => 'Media heading', 
								'body' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 
								'image' => 'http://placehold.it/64x64', 
								'url' => '#'
							)
						), 
						array(
							'heading' => 'Media heading', 
							'body' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 
							'image' => 'http://placehold.it/64x64', 
							'url' => '#'
						)
					)
				), 
				array(
					'heading' => 'Media heading', 
					'body' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 
					'image' => 'http://placehold.it/64x64', 
					'url' => '#', 
					'nested' => array(
						array(
							'heading' => 'Media heading', 
							'body' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 
							'image' => 'http://placehold.it/64x64', 
							'url' => '#', 
							'nested' => array(
								array(
									'heading' => 'Media heading', 
									'body' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 
									'image' => 'http://placehold.it/64x64', 
									'url' => '#'
								), 
								array(
									'heading' => 'Media heading', 
									'body' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 
									'image' => 'http://placehold.it/64x64', 
									'url' => '#'
								)
							)
						), 
						array(
							'heading' => 'Media heading', 
							'body' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 
							'image' => 'http://placehold.it/64x64', 
							'url' => '#'
						)
					)
				)
			)
		)
	)
);

echo $this->Bootstrap->row($this->Bootstrap->col($this->Bootstrap->pageheader('List group')));
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->typo(
			'
$this->Bootstrap->listGroup(
	array(
		\'Cras justo odio\', 
		\'Dapibus ac facilisis in\', 
		\'Morbi leo risus\', 
		\'Porta ac consectetur ac\', 
		\'Vestibulum at eros\'
	)
);
			', 
			array('type' => 'pre', 'pre-scrollable' => true)
		)
	)
);
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		array(
			array(
				$this->Bootstrap->listGroup(
					array(
						'Cras justo odio', 
						'Dapibus ac facilisis in', 
						'Morbi leo risus', 
						'Porta ac consectetur ac', 
						'Vestibulum at eros'
					)
				)
			)
		), 
		array(
			'size' => 3
		)
	)
);
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->typo(
			'
$this->Bootstrap->listGroup(
	array(
		array(
			\'label\' => \'Cras justo odio\', 
			\'badge\' => 14
		), 
		array(
			\'label\' => \'Dapibus ac facilisis in\', 
			\'badge\' => 2
		), 
		array(
			\'label\' => \'Morbi leo risus\', 
			\'badge\' => 1
		)
	)
);
			', 
			array('type' => 'pre', 'pre-scrollable' => true)
		)
	)
);
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		array(
			array(
				$this->Bootstrap->listGroup(
					array(
						array(
							'label' => 'Cras justo odio', 
							'badge' => 14
						), 
						array(
							'label' => 'Dapibus ac facilisis in', 
							'badge' => 2
						), 
						array(
							'label' => 'Morbi leo risus', 
							'badge' => 1
						)
					)
				)
			)
		), 
		array(
			'size' => 3
		)
	)
);
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->typo(
			'
$this->Bootstrap->listGroup(
	array(
		array(
			\'label\' => \'Cras justo odio\', 
			\'url\' => \'#\', 
			\'active\' => true
		), 
		array(
			\'label\' => \'Dapibus ac facilisis in\', 
			\'url\' => \'#\', 
			\'badge\' => \'New\'
		), 
		array(
			\'label\' => \'Morbi leo risus\', 
			\'url\' => \'#\'
		), 
		array(
			\'label\' => \'Porta ac consectetur ac\', 
			\'url\' => \'#\'
		), 
		array(
			\'label\' => \'Vestibulum at eros\', 
			\'url\' => \'#\'
		)
	)
);
			', 
			array('type' => 'pre', 'pre-scrollable' => true)
		)
	)
);
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		array(
			array(
				$this->Bootstrap->listGroup(
					array(
						array(
							'label' => 'Cras justo odio', 
							'url' => '#', 
							'active' => true
						), 
						array(
							'label' => 'Dapibus ac facilisis in', 
							'url' => '#', 
							'badge' => 'New'
						), 
						array(
							'label' => 'Morbi leo risus', 
							'url' => '#'
						), 
						array(
							'label' => 'Porta ac consectetur ac', 
							'url' => '#'
						), 
						array(
							'label' => 'Vestibulum at eros', 
							'url' => '#'
						)
					)
				)
			)
		), 
		array(
			'size' => 3
		)
	)
);
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->typo(
			'
$this->Bootstrap->listGroup(
	array(
		array(
			\'label\' => $this->Bootstrap->typo(
				\'List group item heading\', 
				array(
					\'type\' => \'h4\'
				), 
				array(
					\'class\' => \'list-group-item-heading\'
				)
			) . 
			$this->Bootstrap->typo(
				\'Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.\', 
				array(), 
				array(
					\'class\' => \'list-group-item-text\'
				)
			), 
			\'url\' => \'#\', 
			\'active\' => true
		), 
		array(
			\'label\' => $this->Bootstrap->typo(
				\'List group item heading\', 
				array(
					\'type\' => \'h4\'
				), 
				array(
					\'class\' => \'list-group-item-heading\'
				)
			) . 
			$this->Bootstrap->typo(
				\'Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.\', 
				array(), 
				array(
					\'class\' => \'list-group-item-text\'
					)
				), 
			\'url\' => \'#\'
		), 
		array(
			\'label\' => $this->Bootstrap->typo(
				\'List group item heading\', 
				array(
					\'type\' => \'h4\'
				), 
				array(
					\'class\' => \'list-group-item-heading\'
				)
			) . 
			$this->Bootstrap->typo(
				\'Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.\', 
				array(), 
				array(
					\'class\' => \'list-group-item-text\'
				)
			), 
			\'url\' => \'#\'
		)
	)
)
			', 
			array('type' => 'pre', 'pre-scrollable' => true)
		)
	)
);
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		array(
			array(
				$this->Bootstrap->listGroup(
					array(
						array(
							'label' => $this->Bootstrap->typo('List group item heading', array('type' => 'h4'), array('class' => 'list-group-item-heading')) . 
							$this->Bootstrap->typo('Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.', array(), array('class' => 'list-group-item-text')), 
							'url' => '#', 
							'active' => true
						), 
						array(
							'label' => $this->Bootstrap->typo('List group item heading', array('type' => 'h4'), array('class' => 'list-group-item-heading')) . 
							$this->Bootstrap->typo('Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.', array(), array('class' => 'list-group-item-text')), 
							'url' => '#'
						), 
						array(
							'label' => $this->Bootstrap->typo('List group item heading', array('type' => 'h4'), array('class' => 'list-group-item-heading')) . 
							$this->Bootstrap->typo('Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.', array(), array('class' => 'list-group-item-text')), 
							'url' => '#'
						)
					)
				)
			)
		), 
		array(
			'size' => 3
		)
	)
);

echo $this->Bootstrap->row($this->Bootstrap->col($this->Bootstrap->pageheader('Panels')));
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		array(
			$this->Bootstrap->panel(
				'Basic panel example'
			), 
			$this->Bootstrap->panel(
				array(
					'heading' => 'Panel heading without title', 
					'body' => 'Panel content'
				)
			), 
			$this->Bootstrap->panel(
				array(
					'heading' => $this->Bootstrap->typo('Panel Title', array('type' => 'h3'), array('class' => 'panel-title')), 
					'body' => 'Panel content'
				)
			), 
			$this->Bootstrap->panel(
				array(
					'body' => 'Panel content', 
					'footer' => 'Panel footer'
				)
			)
		), 
		array(
			'size' => 3
		)
	)
);

echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		array(
			$this->Bootstrap->panel(
				array(
					'heading' => 'Panel title', 
					'body' => 'Panel content'
				), 
				array(
					'color' => 'default'
				)
			), 
			$this->Bootstrap->panel(
				array(
					'heading' => 'Panel title', 
					'body' => 'Panel content'
				), 
				array(
					'color' => 'primary'
				)
			), 
			$this->Bootstrap->panel(
				array(
					'heading' => 'Panel title', 
					'body' => 'Panel content'
				), 
				array(
					'color' => 'success'
				)
			), 
			$this->Bootstrap->panel(
				array(
					'heading' => 'Panel title', 
					'body' => 'Panel content'
				), 
				array(
					'color' => 'info'
				)
			), 
			$this->Bootstrap->panel(
				array(
					'heading' => 'Panel title', 
					'body' => 'Panel content'
				), 
				array(
					'color' => 'warning'
				)
			), 
			$this->Bootstrap->panel(
				array(
					'heading' => 'Panel title', 
					'body' => 'Panel content'
				), 
				array(
					'color' => 'danger'
				)
			)
		), 
		array(
			'size' => 2
		)
	)
);

echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		array(
			$this->Bootstrap->panel(
				array(
					'heading' => 'Panel heading', 
					'body' => 'Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.', 
					$this->Bootstrap->table(
						$table, 
						array(
							'striped' => true, 
							'hover' => true
						)
					)
				), 
				array(
					'color' => 'default'
				)
			)
		)
	)
);
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		array(
			$this->Bootstrap->panel(
				array(
					'heading' => 'Panel heading', 
					$this->Bootstrap->table(
						$table, 
						array(
							'striped' => true, 
							'hover' => true
						)
					)
				), 
				array(
					'color' => 'default'
				)
			)
		)
	)
);
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		array(
			$this->Bootstrap->panel(
				array(
					'heading' => 'Panel heading', 
					'body' => 'Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.', 
					$this->Bootstrap->image('http://placehold.it/960x300')
				), 
				array(
					'color' => 'default'
				)
			)
		)
	)
);

echo $this->Bootstrap->row($this->Bootstrap->col($this->Bootstrap->pageheader('Wells')));
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->well(
			'Look, I\'m in a well!'
		) . 
		$this->Bootstrap->well(
			'Look, I\'m in a well-lg!', 
			array(
				'size' => 'lg'
			)
		) . 
		$this->Bootstrap->well(
			'Look, I\'m in a well-sm!', 
			array(
				'size' => 'sm'
			)
		)
	)
);

echo $this->Bootstrap->row($this->Bootstrap->col($this->Bootstrap->pageheader('Modal')));
echo $this->Bootstrap->button(array(
	'color' => 'primary', 
	'label' => 'Launch demo modal', 
	'size' => 'lg', 
	'data' => array(
		'target' => '#myModal1', 
		'toggle' => 'modal'
	)
));

echo $this->Bootstrap->modal(
	array(
		'header' => 'Modal title 1', 
		'body' => '...', 
		'footer' => $this->Bootstrap->buttons(array(
			array(
				'label' => 'Close', 
				'data' => array(
					'dismiss' => 'modal'
				)
			), 
			array(
				'label' => 'Save changes', 
				'color' => 'primary'
			)
		))
	), 
	array(
		'name' => 'myModal1'
	)
);


