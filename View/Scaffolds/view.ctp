<?php

$colsHtml = null;

echo $this->Bootstrap->pageheader(
	__d('cake', 'View %s', $singularHumanName)
);
$valueHtmlArr = array();
foreach ($scaffoldFields as $_field) {
	$isKey = false;
	if (!empty($associations['belongsTo'])) {
		foreach ($associations['belongsTo'] as $_alias => $_details) {
			if ( ($_field === $_details['foreignKey']) && (!empty(${$singularVar}[$_alias][$_details['displayField']])) ) {
				$isKey = true;
				$valueHtmlArr[Inflector::humanize($_alias)] = $this->Bootstrap->button(array(
					'label' => ${$singularVar}[$_alias][$_details['displayField']],
					'url' => array('plugin' => $_details['plugin'], 'controller' => $_details['controller'], 'action' => 'view', ${$singularVar}[$_alias][$_details['primaryKey']]), 
					'size' => 'xs'
				));
				break;
			}
		}
	}
	if ($isKey !== true) {
		$valueHtmlArr[Inflector::humanize($_field)] = h(${$singularVar}[$modelClass][$_field]);
	}
}
$colsHtml[] = $this->Bootstrap->panel(
	array(
		'body' => $this->Bootstrap->lists(
			$valueHtmlArr, 
			array(
				'type' => 'horizontal-description'
			)
		), 
		'footer' => $this->Bootstrap->buttons(array(
			array(
				'label' => __d('cake', 'Edit %s', $singularHumanName), 
				'url' => array('action' => 'edit', ${$singularVar}[$modelClass][$primaryKey]), 
				'icon' => 'pencil'
			), 
			array(
				'label' => __d('cake', 'Delete %s', $singularHumanName), 
				'url' => array('action' => 'delete', ${$singularVar}[$modelClass][$primaryKey]), 
				'confirm' => __d('cake', 'Are you sure you want to delete # %s?', ${$singularVar}[$modelClass][$primaryKey]), 
				'icon' => 'trash', 
				'color' => 'danger'
			)
		))
	), 
	array(
		'color' => 'primary'
	)
);

$actions = array();
$actions[] = array(
	'label' => $pluralHumanName, 
	'url' => array('action' => 'index'), 
	'active' => true, 
	'url' => array('action' => 'index'), 
	'dropdown' => array(
		array(
			'label' => __d('cake', 'List %s', $pluralHumanName), 
			'icon' => 'list', 
			'url' => array('action' => 'index')
		), 
		'divider', 
		array(
			'label' => __d('cake', 'New %s', $singularHumanName), 
			'icon' => 'plus', 
			'url' => array('action' => 'add')
		)
	)
);
$done = array();
foreach ($associations as $_type => $_data) {
	foreach ($_data as $_alias => $_details) {
		if ($_details['controller'] != $this->name && !in_array($_details['controller'], $done)) {
			$actions[] = array(
				'label' => Inflector::humanize($_details['controller']), 
				'url' => array('plugin' => $_details['plugin'], 'controller' => $_details['controller'], 'action' => 'index'), 
				'dropdown' => array(
					array(
						'label' => __d('cake', 'List %s', Inflector::humanize($_details['controller'])), 
						'icon' => 'list', 
						'url' => array('plugin' => $_details['plugin'], 'controller' => $_details['controller'], 'action' => 'index')
					), 
					'divider', 
					array(
						'label' => __d('cake', 'New %s', Inflector::humanize(Inflector::underscore($_alias))), 
						'icon' => 'plus', 
						'url' => array('plugin' => $_details['plugin'], 'controller' => $_details['controller'], 'action' => 'add')
					)
				)
			);
			$done[] = $_details['controller'];
		}
	}
}

$hasOneHtmlArr = null;

if (!empty($associations['hasOne'])) {
	foreach ($associations['hasOne'] as $_alias => $_details) {
		if (!empty(${$singularVar}[$_alias])) {
			$otherFields = array_keys(${$singularVar}[$_alias]);
			foreach ($otherFields as $_field) {
				$hasOneHtmlArr[Inflector::humanize($_field)] = ${$singularVar}[$_alias][$_field];
			}
		}
		
		$colsHtml[] = $this->Bootstrap->panel(
			array(
				'heading' => $this->Bootstrap->typo(__d('cake', "Related %s", Inflector::humanize($_details['controller'])), array('type' => 'strong')) . ' ' . 
				$this->Bootstrap->button(array(
					'label' => __d('cake', 'Edit %s', Inflector::humanize(Inflector::underscore($_alias))), 
					'url' => array('plugin' => $_details['plugin'], 'controller' => $_details['controller'], 'action' => 'edit', ${$singularVar}[$_alias][$_details['primaryKey']]), 
					'icon' => 'pencil', 
					'size' => 'xs'
				)), 
				'body' => $this->Bootstrap->lists(
					$hasOneHtmlArr, 
					array(
						'type' => 'horizontal-description'
					)
				)
			)
		);
	
	}
}

echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->nav(
			$actions, 
			array(
				'type' => 'pills', 
				'split' => true, 
				'justified' => false
			)
		) . $this->Bootstrap->br() . $this->Bootstrap->br()
	)
);

echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$colsHtml, 
		array(
			'size' => 6
		)
	)
);
/*
echo $this->Bootstrap->row(
	$this->Bootstrap->col(
		$this->Bootstrap->typo(__d('cake', 'Actions'), array('type' => 'h3')) . 
		$this->Bootstrap->listgroup($actions), 
		array(
			'size' => 3
		)
	)
);
*/

if (empty($associations['hasMany'])) {
	$associations['hasMany'] = array();
}
if (empty($associations['hasAndBelongsToMany'])) {
	$associations['hasAndBelongsToMany'] = array();
}
$relations = array_merge($associations['hasMany'], $associations['hasAndBelongsToMany']);
$i = 0;
foreach ($relations as $_alias => $_details) {
	$otherSingularVar = Inflector::variable($_alias);
	if (!empty(${$singularVar}[$_alias])) {
		$otherFields = array_keys(${$singularVar}[$_alias][0]);
		if (isset($_details['with'])) {
			$index = array_search($_details['with'], $otherFields);
			unset($otherFields[$index]);
		}

		$i = 0;
		$table = array();
		foreach (${$singularVar}[$_alias] as ${$otherSingularVar}):

			$table[$i]['Actions'] = $this->Bootstrap->buttons(
				array(
					array(
/* 						'label' => __d('cake', 'View'), */
						'url' => array('plugin' => $_details['plugin'], 'controller' => $_details['controller'], 'action' => 'view', ${$otherSingularVar}[$_details['primaryKey']]), 
						'icon' => 'eye-open'
					), 
					array(
/* 						'label' => __d('cake', 'Edit'), */
						'url' => array('plugin' => $_details['plugin'], 'controller' => $_details['controller'], 'action' => 'edit', ${$otherSingularVar}[$_details['primaryKey']]), 
						'icon' => 'pencil'
					), 
					array(
/* 						'label' => __d('cake', 'Delete'), */
						'url' => array('plugin' => $_details['plugin'], 'controller' => $_details['controller'], 'action' => 'delete', ${$otherSingularVar}[$_details['primaryKey']]),
						'confirm' => __d('cake', 'Are you sure you want to delete # %s?', ${$otherSingularVar}[$_details['primaryKey']]), 
						'icon' => 'trash', 
						'color' => 'danger'
					)
				), 
				array(
					'size' => 'xs'
				)
			);

			foreach ($otherFields as $_field) {
				$table[$i][Inflector::humanize($_field)] = String::truncate(
					${$otherSingularVar}[$_field], 
					50, 
					array(
						'ellipsis' => '...', 
						'exact' => false, 
						'html' => true
					)
				);
			}

			$i++;
		endforeach;

		if (!empty($table)) {
			echo $this->Bootstrap->panel(
				array(
					'heading' => $this->Bootstrap->typo(__d('cake', "Related %s", Inflector::humanize($_details['controller'])), array('type' => 'strong')) . ' ' . 
					$this->Bootstrap->button(array(
						'label' => __d('cake', "New %s", Inflector::humanize(Inflector::underscore($_alias))),
						'url' => array('plugin' => $_details['plugin'], 'controller' => $_details['controller'], 'action' => 'add'), 
						'icon' => 'plus', 
						'size' => 'xs'
					)), 
					$this->Bootstrap->table(
						$table, 
						array(
							'hover' => true, 
							'bordered' => true, 
							'striped' => true, 
							'ignore' => array('Created', 'Modified', 'Updated')
						)
					)
				), 
				array(
				)
				
			);
			}
		

	}
}

