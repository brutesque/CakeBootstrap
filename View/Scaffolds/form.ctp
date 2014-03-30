<?php

echo $this->Bootstrap->pageheader(
	$pluralHumanName . 
	( ($this->request->action !== 'add') ? (' ' . $this->Bootstrap->button(
		array(
			'label' => __d('cake', 'Delete'), 
			'size' => 'sm', 
			'icon' => 'trash', 
			'color' => 'danger', 
			'url' => array('action' => 'delete', $this->Form->value($modelClass . '.' . $primaryKey)), 
			'confirm' => __d('cake', 'Are you sure you want to delete # %s?', $this->Form->value($modelClass . '.' . $primaryKey))
		)
	)) : null )
);




$actions = array();
$actions[] = array(
	'label' => __d('cake', $pluralHumanName), 
	'active' => true, 
	'dropdown' => array(
		array(
			'label' => __d('cake', 'List %s', $pluralHumanName), 
			'url' => array('action' => 'index'), 
			'icon' => 'list'
		), 
		'divider', 
		array(
			'label' => __d('cake', 'New %s', $pluralHumanName), 
			'url' => array('action' => 'add'), 
			'icon' => 'plus'
		)
	)
);
$done = array();
foreach ($associations as $_type => $_data) {
	foreach ($_data as $_alias => $_details) {
		if ($_details['controller'] != $this->name && !in_array($_details['controller'], $done)) {
			$actions[] = array(
				'label' => __d('cake', Inflector::humanize($_details['controller'])), 
				'dropdown' => array(
					array(
						'label' => __d('cake', 'List %s', Inflector::humanize($_details['controller'])), 
						'url' => array('plugin' => $_details['plugin'], 'controller' => $_details['controller'], 'action' => 'index'), 
						'icon' => 'list'
					), 
					'divider', 
					array(
						'label' => __d('cake', 'New %s', Inflector::humanize(Inflector::underscore($_alias))), 
						'url' => array('plugin' => $_details['plugin'], 'controller' => $_details['controller'], 'action' => 'add'), 
						'icon' => 'plus'
					)
				)
			);
			$done[] = $_details['controller'];
		}
	}
}

echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->nav(
			$actions, 
			array(
				'type' => 'pills', 
				'justified' => false
			)
		) . $this->Bootstrap->br()
	)
);
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->panel(
			$this->Bootstrap->form(
				$scaffoldFields, 
				array(
					'model' => $modelClass, 
					'ignore' => array('created', 'modified', 'updated'), 
					'horizontal' => true, 
					'size' => 8, 
					'labelSize' => 4
				)
			)
		), 
		array(
			'size' => array(12, 12, 6, 6)
		)
	)
);

echo $this->Form->create();
echo $this->Form->inputs($scaffoldFields, array('created', 'modified', 'updated'));
echo $this->Form->end(__d('cake', 'Submit'));

