<?php
App::uses('Component', 'Controller');
class Select2Component extends Component {

	public function encodeList ($data, $options = array()) {
		$options = array_merge(
			array(
				'key' => 'id', 
				'field' => 'text'
			), 
			$options
		);

		$newdata = array();
		foreach ($data as $key => $value) {
			$newdata[] = array(
				($options['key']) => $key, 
				($options['field']) => $value
			);
		}

		return json_encode($newdata);
	}

	public function reformatTags(Controller $controller, $options = array()) {
		$options = array_merge(
			array(
				'model' => false, 
				'separator' => ',', 
				'field' => 'label', 
				'defaultFields' => false
			), 
			$options
		);
		$assocModel = $options['model'];

    	if ($assocModel && Hash::check($controller->request->data, ($assocModel . '.' . $assocModel) ) && is_string($controller->request->data[$assocModel][$assocModel])) {

    		$values = explode($options['separator'], $controller->request->data[$assocModel][$assocModel]);

    		$newRecords = array();
    		$existingRecords = array();
	    	foreach ($values as $value) {

	    		$record_id = null;
		    	if(!is_numeric($value) && !empty($value)) {

		    		$modelRecord = $controller->$assocModel->find('first', array(
		    			'conditions' => array(
		    				$options['field'] => $value
		    			)
		    		));

		    		if (Hash::check( $modelRecord, ($assocModel . '.id') ) ) {

			    		$record_id = $modelRecord[$assocModel]['id'];
			    		$existingRecords[] = $record_id;

			    	} else {

				    	$newRecords[] = array(
				    		$assocModel => array_merge(
					    		array(
					    			$options['field'] => $value
					    		), 
					    		( $options['defaultFields'] ? $options['defaultFields'] : array() )
					    	)
				    	);

			    	}

		    	} elseif(is_numeric($value) && !empty($value)) {

			    	$record_id = $value;
			    	$existingRecords[] = $record_id;

		    	}

	    	}
	    	if (!empty($newRecords)) {
		    	$controller->$assocModel->saveMany($newRecords);
		    	$newRecords = $controller->$assocModel->find('all', array(
		    		'fields' => array(
		    			'id', 
		    			$options['field']
		    		), 
		    		'conditions' => array(
		    			$options['field'] => Hash::extract($newRecords, ( '{n}.' . $assocModel . '.' . $options['field'] ) )
		    		)
		    	));
		    	foreach ($newRecords as $new ) {
			    	foreach ($values as $i => $value) {
				    	if (!is_numeric($value) && !empty($value) && ($value === $new[$assocModel][$options['field']]) ) {
				 		   	$values[$i] = $new[$assocModel]['id'];
				    	}
			    	}
			    }
	    	}
	    	$controller->request->data[$assocModel][$assocModel] = $values;
    	}

		return $controller->request->data;
	}

}
