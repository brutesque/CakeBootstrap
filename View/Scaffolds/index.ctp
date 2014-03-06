<?php
echo $this->Bootstrap->pageheader(
	$pluralHumanName
);


$table = array();
$i = 0;
foreach (${$pluralVar} as ${$singularVar}):
	$row = array();
	$row[__d('cake', 'Actions')] =  $this->Bootstrap->buttons(
		array(
			array(
/* 				'label' => 'View',  */
				'icon' => 'eye-open', 
				'url' => array(
					'action' => 'view', 
					${$singularVar}[$modelClass][$primaryKey]
				)
			), 
			array(
/* 				'label' => 'Edit',  */
				'icon' => 'pencil', 
				'url' => array(
					'action' => 'edit', 
					${$singularVar}[$modelClass][$primaryKey]
				)
			), 
			array(
/* 				'label' => 'Delete',  */
				'icon' => 'trash', 
				'color' => 'danger', 
				'confirm' => __d('cake', 'Are you sure you want to delete # %s?', ${$singularVar}[$modelClass][$primaryKey]), 
				'url' => array(
					'action' => 'delete', 
					${$singularVar}[$modelClass][$primaryKey]
				)
			)
		), 
		array(
			'size' => 'xs'
		)
	);
	foreach ($scaffoldFields as $_field) {
		$isKey = false;
		if (!empty($associations['belongsTo'])) {
			foreach ($associations['belongsTo'] as $_alias => $_details) {
				if ($_field === $_details['foreignKey']) {
					$isKey = true;
					$row[$this->Paginator->sort($_field)] = $this->Html->link(${$singularVar}[$_alias][$_details['displayField']], array('controller' => $_details['controller'], 'action' => 'view', ${$singularVar}[$_alias][$_details['primaryKey']]));
					break;
				}
			}
		}
		if ($isKey !== true) {
			$row[$this->Paginator->sort($_field)] = h(${$singularVar}[$modelClass][$_field]);
		}
	}

	$table[] = $row;
	$i++;

endforeach;


$actions = array();
$actions[] = array(
	'label' => $pluralHumanName, 
	'active' => true, 
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

if (!empty($table)) {
	echo $this->Bootstrap->row(
		$this->Bootstrap->col(
			array(
				array(
					$this->Bootstrap->table(
						$table, 
						array(
							'striped' => true, 
							'hover' => true, 
							'bordered' => true, 
							'ignore' => array('created', 'modified', 'updated', 'password')
						)
					) . 
					$this->Bootstrap->typo(
						$this->Paginator->counter(array(
							'format' => __d('cake', 'Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
						))
					),
					array(
						'size' => 12
					)
				)
			)
		)
	);
}

?>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __d('cake', 'previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__d('cake', 'next') .' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>

<?php
