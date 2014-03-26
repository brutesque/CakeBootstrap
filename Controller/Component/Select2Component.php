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

	public function reformatTags(Controller $model, $options = array()) {
		$options = array_merge(
			array(
				'model' => false, 
				'separator' => ',', 
				'field' => 'label'
			), 
			$options
		);
		$assocModel = $options['model'];

    	if ($assocModel && Hash::check($model->request->data, ($assocModel . '.' . $assocModel) ) && is_string($model->request->data[$assocModel][$assocModel])) {

    		$values = explode($options['separator'], $model->request->data[$assocModel][$assocModel]);

    		$newRecords = array();
    		$existingRecords = array();
	    	foreach ($values as $value) {

	    		$record_id = null;
		    	if(!is_numeric($value) && !empty($value)) {

		    		$slug = Inflector::slug($value, '-');
					$url_friendly_value = strtolower($slug);

		    		$modelRecord = $model->$assocModel->find('first', array(
		    			'conditions' => array(
		    				$options['field'] => $value
		    			)
		    		));

		    		if (Hash::check( $modelRecord, ($assocModel . '.id') ) ) {

			    		$record_id = $modelRecord[$assocModel]['id'];
			    		$existingRecords[] = $record_id;

			    	} else {

				    	$newRecords[] = array(
				    		$assocModel => array(
				    			$options['field'] => $value
				    		)
				    	);

			    	}

		    	} elseif(is_numeric($value) && !empty($value)) {

			    	$record_id = $value;
			    	$existingRecords[] = $record_id;

		    	}

	    	}
	    	if (!empty($newRecords)) {
		    	$model->$assocModel->saveMany($newRecords);
		    	$newRecords = $model->$assocModel->find('all', array(
		    		'fields' => array(
		    			'id'
		    		), 
		    		'conditions' => array(
		    			$options['field'] => Hash::extract($newRecords, ( '{n}.' . $assocModel . '.' . $options['field'] ) )
		    		)
		    	));
		    	foreach ($newRecords as $new) {
			    	$existingRecords[] = $new[$assocModel]['id'];
		    	}
	    	}
	    	$model->request->data[$assocModel][$assocModel] = (isset($existingRecords) ? $existingRecords : array());
    	}


		return $model->request->data;
	}


}
