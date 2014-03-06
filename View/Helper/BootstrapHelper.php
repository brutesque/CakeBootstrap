<?php
App::import('Helper', 'Html') ;

class BootstrapHelper extends AppHelper {
	public $helpers = array('Html', 'Form');
	

	private $sizeSteps = array('xs', 'sm', 'md', 'lg');
	private $colWidth = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
	private $bodyParams = array();


	public function __construct(View $view, $settings = array()) {
        $settings = Hash::merge(
        	array(
/*         		'theme' => false */
/*         		'theme' => 'CakeBootstrap./bootstrap/css/bootstrap-theme.min' */
/*         		'theme' => 'CakeBootstrap./bootswatch/amelia/bootstrap.min' */
/*         		'theme' => 'CakeBootstrap./bootswatch/cerulean/bootstrap.min' */
/*         		'theme' => 'CakeBootstrap./bootswatch/cosmo/bootstrap.min' */
/*         		'theme' => 'CakeBootstrap./bootswatch/cyborg/bootstrap.min' */
/*         		'theme' => 'CakeBootstrap./bootswatch/flatly/bootstrap.min' */
/*         		'theme' => 'CakeBootstrap./bootswatch/journal/bootstrap.min' */
/*         		'theme' => 'CakeBootstrap./bootswatch/lumen/bootstrap.min' */
/*         		'theme' => 'CakeBootstrap./bootswatch/readable/bootstrap.min' */
/*         		'theme' => 'CakeBootstrap./bootswatch/simplex/bootstrap.min' */
/*         		'theme' => 'CakeBootstrap./bootswatch/slate/bootstrap.min' */
/*         		'theme' => 'CakeBootstrap./bootswatch/spacelab/bootstrap.min' */
/*         		'theme' => 'CakeBootstrap./bootswatch/superhero/bootstrap.min' */
/*         		'theme' => 'CakeBootstrap./bootswatch/united/bootstrap.min' */
/*         		'theme' => 'CakeBootstrap./bootswatch/yeti/bootstrap.min' */

        	), 
        	$settings
        );
        parent::__construct($view, $settings);
    }


	//	Containers
	//	Easily center a page's contents by wrapping its contents in a .container. 
	//	Containers set max-width at various media query breakpoints to match our grid system.	
	public function container ( $content = null, $params = array(), $options = array() ) {
		
		$html = $this->Html->div(
			'container', 
			$content, 
			$options
		);
		
		return $html;
	}
	
	//	Responsive images
	//	Images in Bootstrap 3 can be made responsive-friendly via the addition of the .img-responsive class. 
	//	This applies max-width: 100%; and height: auto; to the image so that it scales nicely to the parent element.
	public function image ( $path, $params = array(), $options = array() ) {
		$params = array_merge(
			array(
				'responsive' => true, 
				'border' => false, // rounded, circle, thumbnail
				'grow' => true
			), 
			$params
		);
		
		$options['class'] = implode(' ', array_filter(array(
			(isset($options['class'])?$options['class']:null), 
			($params['responsive']?'img-responsive':null), 
			($params['border']?('img-' . $params['border']):null)
		)));
		$options['style'] = (($params['grow'])?$this->Html->style(array(
			'width' => '100%'
		)):false);

		$html = $this->Html->image(
			$path, 
			$options
		);
		
		return $html;
	}

	public function row ( $content = null, $params = array(), $options = array() ) {
		$html = $this->Html->div(
			'row', 
			$content, 
			$options
		);
		return $html;
	}

	public function col ( $content = null, $params = array(), $options = array() ) {
		$params = array_merge(
			array(
				'size' => 12, 
				'offset' => 0
			),
			$params
		);
		$sizeClasses = $this->parseSizeToClass( $params['size'], $params['offset'] );

		$html = '';
		if (is_array($content)) {
			foreach($content as $contentChunk) {
				$contentChunkArr = (array)$contentChunk;
				$html .= $this->col(
					(isset($contentChunkArr[0])?$contentChunkArr[0]:null), 
					(isset($contentChunkArr[1])?$contentChunkArr[1]:$params), 
					(isset($contentChunkArr[2])?$contentChunkArr[2]:$options)
				);
			}
		} else {
			$html = $this->Html->div(
				$sizeClasses, 
				$content, 
				$options
			);
		}

		return $html;
	}
	
	public function typo ( $content = null, $params = array(), $options = array()) {
		$params = array_merge(
			array(
				'tag' => 'p', 
				'type' => false, // h1, h2, h3, h4, h5, h6, lead, blockquote, strong, small, em, code, pre
				'align' => false, // left, center, right
				'color' => false, // muted, primary, success, info, warning, danger
				'wrap' => false, 
				'pre-scrollable' => false
			), 
			$params
		);
		switch($params['type']) {
			case ('h1') :
				$params['tag'] = 'h1';
				break;
			case ('h2') :
				$params['tag'] = 'h2';
				break;
			case ('h3') :
				$params['tag'] = 'h3';
				break;
			case ('h4') :
				$params['tag'] = 'h4';
				break;
			case ('h5') :
				$params['tag'] = 'h5';
				break;
			case ('h6') :
				$params['tag'] = 'h6';
				break;
			case ('blockquote') :
				$params['wrap'] = 'blockquote';
				$params['wrapClass'] = (($params['align']=='right')?'pull-right':null);
				break;
			case ('lead') :
				$options['class'] = 'lead';
				break;
			case ('small') :
				$params['tag'] = 'small';
				break;
			case ('strong') :
				$params['tag'] = 'strong';
				break;
			case ('em') :
				$params['tag'] = 'em';
				break;
			case ('code') :
				$params['tag'] = 'code';
				break;
			case ('pre') :
				$params['tag'] = 'pre';
				$options['class'] = implode(' ', array_filter(array(
					($params['pre-scrollable']?'pre-scrollable':null), 
					(isset($options['class'])?$options['class']:null)
				)));
				break;
			default:
				$params['tag'] = ( ($params['type']) ? $params['type'] : $params['tag'] );
				break;
		}
		$options['class'] = implode(' ', array_filter(array(
			( $params['align'] ? ('text-' . $params['align']) : null ), 
			( $params['color'] ? ('text-' . $params['color']) : null ), 
			( isset($options['class']) ? $options['class'] : null )
		)));
		
		$html = '';
		if (is_array($content)) {
			foreach ($content as $contentChunk) {
				$contentChunk = (array)$contentChunk;
				$html .= $this->typo(
					$contentChunk[0], 
					(isset($contentChunk[1])?$contentChunk[1]:array())
				);
			}
		} else {
			$html = $this->Html->tag(
				$params['tag'], 
				$content, 
				$options
			);
		}
		
		if ($params['wrap']) {
			$html = $this->Html->tag(
				$params['wrap'], 
				$html, 
				array(
					'class' => $params['wrapClass']
				)
			);
		}
		
		return $html;
	}
	
	public function lists ($content, $params = array(), $options = array()) {
		$params = array_merge(
			array(
				'type' => 'unordered', // unordered, ordered, unstyled, inline, description, horizontal-description
				'nestedlist' => false
			), 
			$params
		);

		switch ( $params['type'] ) {
			case ('unordered') :
				$params['nestedlist'] = true;
				$params['tag'] = 'ul';
				break;
			case ('ordered') :
				$params['nestedlist'] = true;
				$params['tag'] = 'ol';
				break;
			case ('unstyled') :
				$params['nestedlist'] = true;
				$params['tag'] = 'ul';
				$options['class'] = implode(' ', array_filter(array(
					'list-unstyled', 
					(isset($options['class'])?$options['class']:null)
				)));
				break;
			case ('inline') :
				$params['nestedlist'] = true;
				$params['tag'] = 'ul';
				$options['class'] = implode(' ', array_filter(array(
					'list-inline', 
					(isset($options['class'])?$options['class']:null)
				)));
				break;
			case ('description') :
				$params['nestedlist'] = false;
				$params['tag'] = 'dl';
				break;
			case ('horizontal-description') :
				$params['nestedlist'] = false;
				$params['tag'] = 'dl';
				$options['class'] = implode(' ', array_filter(array(
					'dl-horizontal', 
					(isset($options['class'])?$options['class']:null)
				)));
				break;
		}

		$html = '';
		if ($params['nestedlist']) {
			$html = $this->Html->nestedList($content, $options, null, $params['tag']);
		} else {
			foreach ($content as $key => $value) {
				if (is_array($value)) {
					$html .= $this->Html->tag('dt', $key) . 
					$this->Html->tag('dd', $this->lists($value, $params, $options));
				} else {
					$html .= $this->Html->tag('dt', $key) . 
					$this->Html->tag('dd', ( !empty($value) ? $value : '&nbsp;' ));
				}
			}
			$html = $this->Html->tag(
				$params['tag'], 
				$html, 
				$options
			);
		}
		
		return $html;
	}

	public function table ($content = null, $params = array(), $options = array()) {
		$content = (array)$content;
		$params = array_merge(
			array(
				'responsive' => true, 
				'striped' => false, 
				'bordered' => false, 
				'hover' => false, 
				'condensed' => true, 
				'ignore' => false
			), 
			$params
		);
		
		$html = '';
		if (!empty($content) && isset($content[0])) {
			$tableHeadArr = array_keys($content[0]);
			unset($tableHeadArr['rowcolor']);
			foreach ($content[0] as $cellKey => $cellValue ) {
				if ( !$params['ignore'] || !in_array($cellKey, $params['ignore']) ) {
					$contentKeys[] = $cellKey;
				}
			}
			$theadHtml = $this->Html->tag(
				'thead', 
				$this->Html->tableHeaders(
					$contentKeys
				)
			);
			$rowHtml = null;
			foreach ($content as $contentRow) {
				$cellsHtml = null;
				foreach ($contentRow as $cellKey => $cellValue) {
					if ( !$params['ignore'] || !in_array($cellKey, $params['ignore']) ) {
						if (is_array($cellValue)) {
							$cellsHtml .= (!in_array($cellKey, array('rowcolor'))?$this->Html->tag(
								'td', 
								$cellValue[0], 
								array(
									'class' => (isset($cellValue[1]['cellcolor'])?$cellValue[1]['cellcolor']:false)
								)
							):null);
						} else {
							$cellsHtml .= (!in_array($cellKey, array('rowcolor'))?$this->Html->tag(
								'td', 
								$cellValue
							):null);
						}
					}
				}
				$rowHtml .= $this->Html->tag(
					'tr', 
					$cellsHtml, 
					array(
						'class' => (isset($contentRow['rowcolor'])?$contentRow['rowcolor']:false)
					)
				);
			}
			$tbodyHtml = $this->Html->tag(
				'tbody', 
				$rowHtml
			);
						
			$html .= $this->Html->tag(
				'table', 
				$theadHtml . 
				$tbodyHtml, 
				array(
					'class' => implode(' ', array_filter(array(
						'table', 
						($params['striped']?'table-striped':null), 
						($params['bordered']?'table-bordered':null), 
						($params['hover']?'table-hover':null), 
						($params['condensed']?'table-condensed':null)
					)))
				)
			);
			
			if ($params['responsive']) {
				$html = $this->Html->div(
					'table-responsive', 
					$html
				);
			}
		}
		
		return $html;
	}
	
	private function _fields( $fields, $params = array(), $options = array() ) {
		$fields = array_merge(
			array(
			), 
			$fields
		);
		$params = array_merge(
			array(
			), 
			$params
		);
		
		$options = array_merge(
			array(
			), 
			$options
		);
		
		$html = '';
		
		foreach ( $fields as $field ) {
			
			if (is_array($field)) {
				$html .= $this->_field($field, $params);
			} else {
				$html .= $this->Html->tag(
					'span', 
					$field, 
					array(
						'class' => 'input-group-addon'
					)
				);
			}
			
		}

		$html = $this->Html->div(
			implode (' ', array_filter(array(
				'input-group', 
				( isset($params['height']) ? ( 'input-group' . '-' . $params['height'] ) : null ), 
				( isset($options['class']) ? $options['class'] : null )
			))), 
			$html
		);
		
		return $html;
	}

	private function _field ( $input = array(), $params = array(), $options = array() ) {
		$input = array_merge(
			array(
				'field' => uniqid(), 
				'type' => 'text', 
				'placeholder' => false, 
				'disabled' => false, 
				'options' => null, 
				'empty' => null, 
				'multiple' => false, 
				'rows' => null, 
				'class' => false, 
				'height' => false,  // false, lg or sm
				'model' => false
			), 
			$input
		);
		$options = array_merge(
			array(
				'placeholder' => $input['placeholder'], 
				'type' => $input['type'], 
				'label' => false, 
				'div' => false, 
				'class' => implode(' ', array(
					( !in_array($input['type'], array('checkbox', 'file', 'radio')) ? 'form-control' : false ), 
					( $input['height'] ? ('input-' . $input['height']) : false ), 
					( $input['class'] ? $input['class'] : false )
				)), 
				'disabled' => ( $input['disabled'] ? true : false ), 
				'options' => $input['options'], 
				'empty' => $input['empty'], 
				'multiple' => $input['multiple'], 
				'rows' => $input['rows']
			), 
			$options
		);

		$html = '';
		$html .= $this->Form->input(
			( $input['model'] ? ($input['model'] . '.') : '' ) . $input['field'], 
			$options
		);
		
		
		return $html;
	}

	public function input ( $input, $params = array(), $options = array() ) {
		if (!is_array($input)) {
			$input = array(
				'field' => $input
			);
		}
		$input = array_merge(
			array(
				'field' => '', 
				'type' => null, 
				'label' => null, 
				'help' => false, 
				'color' => false,  // success, warning, danger
				'size' => $params['size'], 
				'model' => $params['model'], 
				'class' => false, 
				'height' => false // false, sm or lg
			), 
			$input
		);
		$params = array_merge(
			array(
				'labelSize' => 3, 
				'size' => false, 
				'inline' => false, 
				'horizontal' => false, 
				'ignore' => false, 
/* 				'model' => $input['model'] */
			), 
			$params
		);
		$options = array_merge(
			array(
				'type' => $input['type'], 
				'label' => false, 
				'div' => false, 
				'class' => 'form-control'
			), 
			$options
		);

		$html = '';
		if ( !($params['ignore'] && in_array($input['field'], $params['ignore'])) ) {
			if ( !$params['inline'] && ($input['type'] !== 'checkbox') ) {
				$html .= $this->Form->label(
					( !is_array($input['field']) ? ( ( $input['model'] ? ( $input['model'] . '.' ) : '' ) . $input['field'] ) : null ), 
					( !is_array($input['field']) ? $input['label'] : (!empty($input['label']) ? $input['label'] : null ) ), 
					array(
						'class' => implode(' ', array_filter(array(
							( $params['inline'] ? 'sr-only' : null ), 
							( $params['horizontal'] ? ( $this->parseSizeToClass($params['labelSize']) . ' control-label' ) : null )
						)))
					)
				);
			}

			$inputHtml = null;
			if (is_array($input['field'])) {
				$inputHtml .= $this->_fields(
					$input['field'], 
					array_merge(
						array(
							'height' => $input['height']
						), 
						$params
					), 
					array(
						'class' => ( isset($input['class']) ? $input['class'] : false )
					)
				);
			} else {
				$inputHtml .= $this->_field(
					$input, 
					( ($input['type'] !== 'checkbox') ? $params : array(
						'model' => $input['model']
					) )
				);
			}
			
	
			if ($input['help']) {
				$inputHtml .= $this->typo(
					$input['help'], 
					array(), 
					array(
						'class' => 'help-block'
					)
				);
			}
			if ( ($input['type'] == 'checkbox')  && $params['horizontal'] ) {
				$html .= $this->Html->div(
					$this->parseSizeToClass( ($input['size'] ? $input['size'] : (12 - $params['labelSize'])), $params['labelSize'] ), 
					$this->Form->label(
						$input['model'] . '.' . $input['field'], 
						$inputHtml . ' ' . $input['label'], 
						array()
					)
				);
			}elseif ($input['type'] == 'checkbox') {
				$html .= $this->Form->label(
					$input['model'] . '.' . $input['field'], 
					$inputHtml . ' ' . $input['label'], 
					array()
				);
			} elseif ($params['horizontal']) {
				$html .= $this->Html->div(
					$this->parseSizeToClass( $input['size'] ? $input['size'] : (12 - $params['labelSize']) ), 
					$inputHtml
				);
/*
			} elseif ($input['size']) {
				$html .= $this->Html->div(
					$this->parseSizeToClass( $input['size'] ), 
					$inputHtml
				);
*/
			} else {
				$html .= $inputHtml;
			}
			
			$html = $this->Html->div(
				implode(' ', array_filter(array(
					( ($input['type'] == 'checkbox') && !$params['horizontal'] ? 'checkbox' : ( $input['size'] ? $this->parseSizeToClass( $input['size'] ) : 'form-group' ) ), 
					( $input['color'] ? ('has-' . $input['color']) : null )
				))), 
				$html
			);
		}

		return $html . ' ';
	}

	public function inputs ( $inputs, $params = array(), $options = array() ) {
		$html = '';
		
		foreach ($inputs as $input) {
			if (!empty($input)) {
				$html .= $this->input($input, $params, $options);
			}
		}

		return $html;
	} 

	public function formcreate ($model = false, $params = array(), $options = array() ) {
		$params = array_merge(
			array(
				'model' => null, 
				'type' => 'post' // post, get, file, put, delete
			), 
			$params
		);
		$options = array_merge(
			array(
				'type' => $params['type'], 
				'role' => 'form'
			), 
			$options
		);
		$html = '';
		
		$html .= $this->Form->create(
			$model, 
			$options
		);
		
		return $html;
	}
	
	public function formend ($buttons, $params = array(), $options = array()) {
		$html = null;
		$params = array_merge(
			array(
				'horizontal' => false, 
				'labelSize' => 2, 
				'size' => false
			),
			$params
		);
		
		if ($buttons) {
			if ($params['horizontal']) {
				$params['size'] = ($params['size'] ? $params['size'] : (12 - $params['labelSize']));
				$html .= $this->Html->div(
					'form-group', 
					$this->col(
						$this->buttons($buttons, $params, $options), 
						array(
							'size' => $params['size'], 
							'offset' => $params['labelSize']
						)
					)
				);
			} else {
				$html .= $this->buttons($buttons, $params, $options);
			}
		}

		$html .= $this->Form->end();
		
		return $html;
	}

	public function form ( $inputs, $params = array(), $options = array() ) {
		$params = array_merge(
			array(
				'model' => false, 
				'buttons' => false, 
				'inline' => false, 
				'horizontal' => false, 
				'navbar-form' => false, 
				'labelSize' => 2,  // only for horizontal form
				'size' => false, 
				'ignore' => false, 
				'role' => 'form', 
				'right' => false
			), 
			$params
		);
		$options = array_merge(
			array(
				'role' => $params['role'], 
				'class' => implode(' ', array_filter(array(
					( $params['navbar-form'] ? ('navbar-form navbar-' . ($params['right']?'right':'left')) : null ), 
					( $params['horizontal'] ? 'form-horizontal' : null ), 
					( $params['inline'] ? 'form-inline' : null )
				)))
			), 
			$options
		);
		$html = '';
		
		$html .= $this->formcreate( $params['model'], $params, $options);

		$html .= $this->inputs(
			$inputs, 
			array(
				'model' => $params['model'], 
				'ignore' => $params['ignore'], 
				'horizontal' => $params['horizontal'], 
				'inline' => ($params['inline']||$params['navbar-form']), 
				'size' => $params['size'], 
				'labelSize' => $params['labelSize']
			)
		);

		$html .= $this->formend(
			$params['buttons'] ? $params['buttons'] : array(
				array(
					'label' => 'Submit', 
					'tag' => 'submit', 
					'type' => 'submit'
				)
			), 
			$params
		);
		
		return $html;
	} 

	public function _input ( $params = array(), $options = array() ) {
		$params = array_merge(
			array(
				'type' => 'text', 
				'field' => uniqid(), 
				'placeholder' => 'test', 
				'label' => false, 
				'size' => false
			), 
			$params
		);
		$options = array_merge(
			array(
				'class' => ( !in_array($params['type'], array('checkbox', 'radio', 'file')) ? 'form-control' : '' ), 
/* 				'div' => ( in_array($params['type'], array('checkbox', 'radio')) ? $params['type'] : 'form-group' ),  */
/* 				'div' => $params['div'],  */
				'type' => $params['type'], 
				'placeholder' => $params['placeholder'], 
				'label' => false, 
				'div' => false
			), 
			$options
		);

		$labelHtml = null;
		if ( is_array($params['label']) ) {
			$labeltext = $params['label']['text'];
			unset($params['label']['text']);
			$labelHtml .= $this->Form->label(
				$params['field'], 
				$labeltext, 
				$params['label']
			);
		} else {
			$labelHtml .= $this->Form->label(
				$params['field'], 
				$params['label']
			);
		}

		$html = '';
		$html .= ( !in_array($params['type'], array('checkbox')) ? $labelHtml : null );
		if ($params['size']) {
			$html .= $this->Html->div(
				$this->parseSizeToClass($params['size']), 
				$this->Form->input(
					$params['field'], 
					$options
				)
			);
		} else {
			$html .= $this->Form->input(
				$params['field'], 
				$options
			);
		}
		$html .= ( in_array($params['type'], array('checkbox')) ? $labelHtml : null );

		$html = $this->Html->div(
			'form-group', 
/* 			( in_array($params['type'], array('checkbox', 'radio')) ? $params['type'] : 'form-group' ),  */
			$html
		);
		
		
		return $html;
	}

	public function _form ( $inputs, $params = array(), $options = array() ) {
		$params = array_merge(
			array(
				'model' => false, 
				'buttons' => array(
					array(
						'label' => 'Submit', 
						'tag' => 'submit'
					)
				), 
				'inline' => false, 
				'horizontal' => false, 
				'labelSize' => 2,  // only for horizontal form
				'size' => false
			), 
			$params
		);
		$options = array_merge(
			array(
				'role' => 'form', 
				'class' => implode(' ', array_filter(array(
					( $params['inline'] ? 'form-inline' : null ), 
					( $params['horizontal'] ? 'form-horizontal' : null )
				)))
			), 
			$options
		);
		
		$html = '';
		
		$html .= $this->Form->create(
			$params['model'], 
			$options
		);
		
		foreach($inputs as $input) {
			if ($params['inline']) {
				$input['label'] = array(
					'class' => 'sr-only', 
					'text' => $input['label']
				);
			} elseif ($params['horizontal']) {
				$input['label'] = array(
					'class' => implode(' ', array_filter(array(
						$this->parseSizeToClass($params['labelSize']), 
						'control-label'
					))), 
					'text' => $input['label']
				);
				$input['size'] = 10;
			}
		
			$html .= $this->input($input);
		}

		$html .= $this->buttons($params['buttons']);
		$html .= $this->Form->end();
		
		return $html;
	}

	public function buttons ( $buttons, $params = array(), $options = array() ) {
		$params = array_merge(
			array(
				'size' => false,  // xs, sm, md or lg
				'navbar-btn' => false
			), 
			$params
		);
		
		$html = '';
		
		$buttonArr = array();
		foreach ($buttons as $button) {
			$button = array_merge(
				$params, 
				$button
			);
			$buttonsArr[] = $this->button($button);
		}
		
		$html = (!empty($buttonsArr) ? implode(' ', $buttonsArr) : $html );

		return $html;
	}

	public function button ( $button ) {
		$button = array_merge(
			array(
				'label' => '', 
				'size' => false, // xs, sm, md or lg
				'color' => 'default', // default, primary, success, info, warning, danger, link
				'tag' => 'button',  // 'button', 'a', 'input' or 'submit'
				'confirm' => false, 
				'active' => false, 
				'disabled' => false, 
				'icon' => false, 
				'block' => false, 
				'url' => false, 
				'dropdown' => false, 
				'split' => false, 
				'pull-right' => false, 
				'dropup' => false, 
				'id' => false, 
				'role' => 'button', 
				'type' => 'button', 
				'navbar-btn' => false, 
				'target' => false
			), 
			$button
		);
		
		if ($button['dropdown'] && !$button['split']) {
			$button['tag'] = 'button';
		}

		if ($button['url']) {
			$button['tag'] = 'a';
		}

		$buttonData = array();
		if (isset($button['data'])) {
			foreach ($button['data'] as $key => $value) {
				$buttonData[('data-' . $key)] = $value;
			}
		}

		$html = '';
		$buttonLabel = implode('&nbsp;', array_filter(array(
			( $button['icon'] ? $this->icon($button['icon']) : null ), 
			$button['label'], 
			( ($button['dropdown'] && !$button['split']) ? $this->caret() : null )
		)));
		$buttonOptions = array_merge(
			(($button['tag'] == 'a')?array( 'escape' => false ):array()), 
			array(
				'id' => ( $button['id'] ? $button['id'] : false ), 
				'type' => $button['type'], 
				'role' => $button['role'], 
				'tabindex' => ( ($button['role'] == 'menuitem') ? '-1' : false ), 
				'class' => implode(' ', array_filter(array(
					( ($button['role'] !== 'menuitem') ? 'btn' : null ), 
					( ($button['role'] !== 'menuitem') ? ( 'btn-' . $button['color'] ) : null ), 
					( $button['size'] ? ( 'btn-' . $button['size'] ) : null ), 
					( $button['block'] ? ( 'btn-block' ) : null ), 
					( $button['navbar-btn'] ? ( 'navbar-btn' ) : null ), 
					( ($button['dropdown'] && !$button['split']) ? ( 'dropdown-toggle' ) : null ), 
					( $button['active'] && (in_array($button['tag'], array('button', 'a'))) ? ( 'active' ) : null )
				))), 
				'disabled' => ( $button['disabled'] ? 'disabled' : false ), 
				( $button['active'] && ($button['tag'] !== 'button') ? 'active' : null ), 
				'data-toggle' => ( ($button['dropdown'] && !$button['split']) ? ( 'dropdown' ) : false ), 
				'target' => ( $button['target'] ? $button['target'] : null )
			), 
			$buttonData
		);

		switch( $button['tag'] ) {
			case ( 'button') :
				$html = $this->Html->tag(
					'button', 
					$buttonLabel, 
					$buttonOptions
				);
				break;
			case ( 'a') :
				if ($button['confirm']) {
					$html = $this->Form->postlink(
						$buttonLabel, 
						( $button['url'] ? $button['url'] : '#' ), 
						$buttonOptions, 
						$button['confirm']
					);
				} else {
					$html = $this->Html->link(
						$buttonLabel, 
						( $button['url'] ? $button['url'] : '#' ), 
						$buttonOptions
					);
				}
				break;
			case ( 'input') :
				$html = $this->Form->button(
					$buttonLabel, 
					$buttonOptions
				);
				break;
			case ( 'submit') :
				$html = $this->Form->submit(
					$buttonLabel, 
					array_merge(
						$buttonOptions, 
						array(
							'div' => false
						)
					)
				);
				break;
		}
		
		if ($button['dropdown']) {
			if ($button['split']) {
				$html .= $this->Html->tag(
					'button', 
					$this->caret() . 
					$this->Html->tag(
						'span', 
						'Toggle Dropdown', 
						array(
							'class' => 'sr-only'
						)
					), 
					array(
						'id' => ( $button['id'] ? $button['id'] : false ), 
						'type' => $button['role'], 
						'class' => implode(' ', array_filter(array(
							'btn', 
							( 'btn-' . $button['color'] ), 
							( $button['size'] ? ( 'btn-' . $button['size'] ) : null ), 
							( $button['block'] ? ( 'btn-block' ) : null ), 
							( $button['dropdown'] ? ( 'dropdown-toggle' ) : null ), 
							( $button['active'] ? ( 'active' ) : null )
						))), 
						'disabled' => ( $button['disabled'] ? 'disabled' : false ), 
						'data-toggle' => 'dropdown'
					)
				);
			}
			$html .= $this->dropdown( $button['dropdown'], array('pull-right' => $button['pull-right'], 'aria-labelledby' => $button['id']) );
			$html = $this->Html->div(
				implode(' ', array_filter(array(
					'btn-group', 
					( $button['dropup'] ? 'dropup' : null )
				))), 
				$html
			);
		}
		
		
		return $html;
	}

	public function btn ($buttons, $params = array()) {
		$params = array_merge(
			array(
				'group' => false, 
				'size' => false, 
				'vertical' => false, 
				'justified' => false
			), 
			$params
		);
		

		if (!is_array($buttons[0])) {
			$buttons[] = $buttons;
		}

		foreach ($buttons as $button) {
			$button = array_merge(
				array(
					'label' => '', 
					'tag' => 'button', 
					'size' => false, 
					'type' => 'default', 
					'block' => false, 
					'active' => false, 
					'disabled' => false, 
					'icon' => false
				), 
				$button
			);
			if ($params['justified']) {
				$button['tag'] = 'a';
			}
			if ( isset($button['tag']) ) {
				switch ($button['tag']) {
					case ('submit') :
						break;
					case ('input') :
						break;
					case ('a') :
						$buttonsArr[] = $this->Html->link(
							$button['label'], 
							'#', 
							array(
								'role' => 'button', 
								'class' => implode(' ', array_filter(array(
									'btn', 
									( 'btn-' . $button['type'] ), 
									( 'btn-' . $button['size'] ), 
									( $button['block'] ? 'btn-block' : null ), 
									( $button['active'] ? 'active' : null ), 
								))), 
								'disabled' => ( $button['disabled'] ? 'disabled' : false ), 
							)
						);
						break;
					default:
					case ('button') :
						$buttonsArr[] = $this->Html->tag(
							'button', 
							($button['icon']?($this->icon($button['icon']) . '&nbsp;'):'') . 
							$button['label'], 
							array(
								'type' => 'button', 
								'class' => implode(' ', array_filter(array(
									'btn', 
									( 'btn-' . $button['type'] ), 
									( $button['size'] ? ( 'btn-group-' . $button['size'] ) : null ), 
									( $button['block'] ? 'btn-block' : null ), 
									( $button['active'] ? 'active' : null ), 
								))), 
								'disabled' => ( $button['disabled'] ? 'disabled' : false ), 
							)
						);
						break;
				}
			}
		}
		$html = implode(' ', $buttonsArr);
		
		if ($params['group']) {
			$html = $this->Html->div(
				implode(' ', array_filter(array(
					'btn-group', 
					( $params['size'] ? ( 'btn-group-' . $params['size'] ) : null ), 
					( $params['vertical'] ? 'btn-group-vertical' : null ), 
					( $params['justified'] ? 'btn-group-justified' : null )
				))), 
				$html
			);
		}
		
		return $html;
	}

	public function closeIcon ( $params = array() ) {
	
		$params = array_merge(
			array(
				'data-dismiss' => false
			), 
			$params
		);

		$html = $this->Html->tag(
			'button', 
			'&times;', 
			array(
				'type' => 'button', 
				'class' => 'close', 
				'aria-hidden' => true, 
				'data-dismiss' => $params['data-dismiss']
			)
		);
		
		return $html;
	}

	public function caret () {

		$html = $this->Html->tag('span', '', array('class' => 'caret'));
		
		return $html;
	}

	public function center ( $content = null ) {

		$html = $this->Html->div(
			'center-block', 
			$content
		);
		
		return $html;
	}

	public function clearfix () {
		return $this->Html->div(
			'clearfix', 
			''
		);
	}


	// Components
	public function icon ($icon) {
		if (!empty($icon)) {
			$html = $this->Html->tag(
				'span', 
				'', 
				array(
					'class' => ( 'glyphicon glyphicon-' . $icon )
				)
			);
		} else {
			$html = '';
		}
		return $html;
	}

	public function buttonGroup ( $buttons, $params = array(), $options = array() ) {
	
		$params = array_merge(
			array(
				'size' => false,  // xs, sm, md or lg
				'vertical' => false, 
				'justified' => false
			), 
			$params
		);
		
		$html = '';
		
		$buttonArr = array();
		foreach ($buttons as $button) {
			if ($params['justified']) {
				$button['tag'] = 'a';
			}
			$buttonsArr[] = $this->button($button);
		}
		$html = implode(' ', $buttonsArr);

		$html = $this->Html->div(
			implode(' ', array_filter(array(
				( 'btn-group' . ( $params['vertical'] ? '-vertical' : null ) ), 
				( $params['size'] ? ( 'btn-group-' . $params['size'] ) : null ), 
				( $params['justified'] ? ( 'btn-group-justified' ) : null )
			))), 
			$html, 
			$options
		);
		
		return $html;
	}
	
	public function buttonToolbar ( $buttonGroups, $params = array(), $options = array() ) {
		
		$options = array_merge(
			array(
				'role' => 'toolbar'
			), 
			$options
		);
		
		$html = '';
		foreach ($buttonGroups as $buttons) {
			$html .= $this->buttonGroup($buttons);
		}
		
		$html = $this->Html->div(
			'btn-toolbar', 
			$html, 
			$options
		);
		
		return $html;
	}

	public function dropdown ( $dropdownMenu, $params = array() ) {
		$params = array_merge(
			array(
				'aria-labelledby' => false, 
				'pull-right' => false, 
				'class' => false
			), 
			$params
		);
	
		$html = '';
		
		foreach ($dropdownMenu as $key => $menuItem) {
			$menuItemHtml = null;
			if (is_array($menuItem)) {
				$linkParams = array_merge(
					$menuItem, 
					array(
						'tag' => 'a', 
						'role' => 'menuitem', 
						'disabled' => false
					)
				);
				$params['class'] = false;
				$menuItemHtml = $this->button($linkParams);
			} else {
				switch ($menuItem) {
					case ( 'divider' ) :
						$params['class'] = 'divider';
						$menuItemHtml = '';
						break;
					default :
						$params['class'] = 'dropdown-header';
						$menuItemHtml = $menuItem;
						break;
				}
			}
			$html .= $this->Html->tag(
				'li', 
				$menuItemHtml, 
				array(
					'role' => 'presentation', 
					'class' => implode(' ', array_filter(array(
						$params['class'], 
						( (isset($menuItem['disabled']) && $menuItem['disabled']) ? 'disabled' : null )
					)))
				)
			);
		}

		$html = $this->Html->tag(
			'ul', 
			$html, 
			array(
				'class' => implode(' ', array_filter(array(
					'dropdown-menu', 
					( $params['pull-right'] ? 'pull-right' : null)
				))), 
				'role' => 'menu', 
				'aria-labelledby' => $params['aria-labelledby']
			)
		);
		
/*
		$html = '
<div class="btn-group">
  <button type="button" class="btn btn-default">1</button>
  <button type="button" class="btn btn-default">2</button>

  <div class="btn-group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
      Dropdown
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
      <li><a href="#">Dropdown link</a></li>
      <li><a href="#">Dropdown link</a></li>
    </ul>
  </div>
</div>
<div class="dropdown">
	<button class="btn dropdown-toggle sr-only" type="button" id="dropdownMenu1" data-toggle="dropdown">
		Dropdown
		<span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
		<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
		<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
		<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
		<li role="presentation" class="divider"></li>
		<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
	</ul>
</div>

		';
*/
		
		return $html;
	}

	public function toolbar ($buttonsGroups) {
		$html = $this->Html->div(
			'btn-toolbar', 
			implode(null, $buttonsGroups), 
			array(
				'role' => 'toolbar'
			)
		);
		return $html;
	}

	public function nav ( $content, $params = array(), $options = array() ) {
		$params = array_merge(
			array(
				'type' => 'tabs',  // tabs, pills, breadcrumbs, navbar
				'stacked' => false, 
				'justified' => false, 
				'tag' => 'ul', 
				'navbar' => false, 
				'right' => false
			), 
			$params
		);
		if ($params['type'] === 'breadcrumbs') {
			$params['tag'] = 'ol';
		}
		if ($params['type'] === 'navbar') {
			$params['navbar'] = true;
		}
		
		$html = '';
		
		foreach ($content as $value) {
			$value = array_merge(
				array(
					'url' => '#', 
					'active' => false, 
					'disabled' => false, 
					'dropdown' => false
				), 
				$value
			);
			
			$html .= $this->Html->tag(
				'li', 
				$this->Html->link(
					( isset($value['icon']) ? ($this->icon($value['icon']) . ' ') : '' ) . 
					$value['label'] . 
					( $value['dropdown'] ? ( '&nbsp;' . $this->caret() ) : null), 
					$value['url'], 
					array(
						'escape' => false, 
						'class' => ( $value['dropdown'] ? 'dropdown-toggle' : false), 
						'data-toggle' => ( $value['dropdown'] ? 'dropdown' : false )
					)
				) . 
				( $value['dropdown'] ? $this->dropdown($value['dropdown']) : null ), 
				array(
					'class' => implode(' ', array_filter(array(
						( $value['active'] ? 'active' : null ), 
						( $value['disabled'] ? 'disabled' : null ), 
						( $value['dropdown'] ? 'dropdown' : null)
					)))
				)
			);
		}
		
		$html = $this->Html->tag(
			$params['tag'], 
			$html, 
			array(
				'class' => implode(' ', array_filter(array(
					( ($params['type'] === 'breadcrumbs') ? 'breadcrumb' : 'nav' ), 
					( ($params['type'] !== 'breadcrumbs') ? ( $params['navbar'] ? 'navbar-nav' : ('nav' . '-' . $params['type']) ) : null ), 
					( $params['right'] ? 'navbar-right' : null ), 
					( $params['stacked'] ? 'nav-stacked' : null ), 
					( $params['justified'] ? 'nav-justified' : null )
				)))
			)
		);
		
		return $html;
	}
	
	public function navbar ( $content, $params = array(), $options = array() ) {
		$params = array_merge(
			array(
				'brand' => false, 
				'url' => '#', 
				'type' => false,  // fixed, static 
				'position' => 'top', // top, bottom
				'color' => 'default' // default, inverse
			), 
			$params
		);
		
		if ( ($params['type'] === 'fixed') && ($params['position'] === 'top') ) {
			$this->bodyParams['padding-top'] = '70px';
		} elseif ( ($params['type'] === 'fixed') && ($params['position'] === 'bottom') ) {
			$this->bodyParams['padding-bottom'] = '70px';
		}


		$contentHtml = '';
		foreach ($content as $key => $value) {
			if (is_numeric($key)) {
				$contentHtml .= $this->nav(
					$value, 
					array(
						'type' => 'navbar'
					)
				);
			} elseif ($key === 'form') {
				$value[1] = array_merge(
					array(
						'model' => false, 
						'buttons' => array(
							array(
								'label' => 'Submit', 
								'type' => 'submit'
							)
						)
					), 
					(isset($value[1])?$value[1]:array())
				);
				$contentHtml .= $this->form(
					$value[0], 
					Hash::merge(
						$value[1], 
						array(
							'navbar-form' => true
						)
					)
				);
			} elseif ($key === 'right') {
				$contentHtml .= $this->nav(
					$value, 
					array(
						'type' => 'navbar', 
						'right' => true
					)
				);
			} elseif ($key === 'button') {
				$contentHtml .= $this->button(
					array_merge(
						array(
							'navbar-btn' => true
						), 
						$value
					)
				);
			} elseif ($key === 'buttons') {
				$contentHtml .= $this->buttons(
					$value, 
					array(
						'navbar-btn' => true
					)
				);
			} elseif ( $key === 'text') {
				$contentHtml .= $this->typo($value, array(), array('class' => 'navbar-text'));
			}
		}
		
		$html = $this->Html->tag(
			'nav', 
			$this->Html->div(
				'navbar-header', 
				$this->navbarToggle('navbar-collapse') . 
				($params['brand']?$this->Html->link(
					$params['brand'], 
					$params['url'], 
					array(
						'class' => 'navbar-brand'
					)
				):'')
			) . 
			$this->Html->div(
				'collapse navbar-collapse', 
				$contentHtml, 
				array(
					'id' => 'navbar-collapse'
				)
			), 
			array(
				'class' => implode(' ', array_filter(array(
					'navbar', 
					'navbar-' . $params['color'], 
					( $params['type'] ? ('navbar-' . $params['type'] . '-' . $params['position']) : null )
				))), 
				'role' => 'navigation'
			)
		);

		return $html;
	}

	private function navbarToggle ( $target ) {
		return $this->Html->tag(
			'button', 
			$this->Html->tag( 'span', 'Toggle navigation', array('class' => 'sr-only') ) . 
			$this->Html->tag( 'span', '', array( 'class' => 'icon-bar' ) ) . 
			$this->Html->tag( 'span', '', array('class' => 'icon-bar') ) . 
			$this->Html->tag( 'span', '', array('class' => 'icon-bar') ), 
			array(
				'type' => 'button', 
				'class' => 'navbar-toggle', 
				'data-toggle' => 'collapse', 
				'data-target' => ('#' . $target)
			)
		);
	}

	public function labelheader ( $header = null, $label = null, $params = array(), $options = array() ) {
	
		$params = array_merge(
			array(
				'type' => 'h1'
			), 
			$params
		);

		$html = $this->typo(
			$header . 
			' ' . 
			( (!empty($label)) ? $this->label(
				$label, 
				$params
			) : null ), 
			array(
				'type' => $params['type']
			), 
			$options
		);
		
		return $html;
	}
	
	public function label ( $content, $params = array(), $options = array() ) {
		
		$params = array_merge(
			array(
				'color' => 'default'
			), 
			$params
		);
		$html = '';
		if ($content) {
			$html .= $this->Html->tag(
				'span', 
				$content, 
				array(
					'class' => implode(' ', array_filter(array(
						'label', 
						( 'label-' . $params['color'] )
					)))
				)
			);
		}
		
		return $html;
	}
	
	public function badge ( $badge = '', $params = array(), $options = array() ) {
	
		$options = array_merge(
			$options, 
			array(
				'class' => 'badge'
			)
		);
		
		$html = $this->Html->tag(
			'span',
			$badge,  
			$options
		);
		
		return $html;
	}
	
	public function jumbotron ($content = array(), $params = array(), $options = array()) {

		$content = (array)$content;
		if ( isset($content[0]) ) {
			$content['header'] = $content[0];
			unset($content[0]);
		}
		$content = array_merge(
			array(
				'background-image' => false
			), 
			$content
		);
		$params = array_merge(
			array(
				'size' => false, 
				'offset' => false, 
				'width' => 100, 
				'height' => 50
			), 
			$params
		);
		$options = Hash::merge(
			( $content['background-image'] ? array(
				'style' => $this->Html->style(array(
					'background-size' => 'cover', 
					'background-position' => '50% 50%', 
					'background-image' => ( 'url(' . $content['background-image'] . ')' ), 
/* 					'min-height' => (1140 / 2) . 'px',  */
/* 					'width' => '100%',  */
					'height' => '50%'
				))
			) : array() ), 
			array(), 
			$options
		);

		$contentHtml = null;
		foreach( $content as $contentKey => $contentChunk) {
			switch ($contentKey) {
				case ('header') :
					if ( !is_array($content[$contentKey]) ) {
						$content[$contentKey] = (array)($content[$contentKey]);
					}
					$content[$contentKey] = array_merge(
						array(
							'type' => 'h1'
						), 
						$content[$contentKey]
					);
					$contentHtml .= $this->typo( $content[$contentKey][0], $content[$contentKey] );
					break;
				case ('buttons') :
					$contentHtml .= $this->typo( $this->buttons( $content[$contentKey] ) );
					break;
				default:
				case ('text') :
					$contentHtml .= $this->typo( $content[$contentKey] );
					break;
				case('background-image') :
					break;
				case('image') :
					$contentHtml .= $this->image( $content[$contentKey] );
					break;
			}
		}
		if ($params['size']) {
			$contentHtml = $this->row($this->col(
				$contentHtml, 
				array(
					'size' => $params['size'], 
					'offset' => $params['offset']
				)) . 
				$this->clearfix()
			);
		}
		$html = $this->Html->div(
			'jumbotron',
			$contentHtml, 
			$options
		);

		return $html;
	}

	public function pageheader ( $pageheader = null, $subtext = null, $params = array(), $options = array() ) {

		$params = array_merge(
			array(
				'type' => 'h1'
			), 
			$params
		);

		$html = $this->Html->div(
			'page-header', 
			$this->typo(
				$pageheader . 
				' ' . 
				( (!empty($subtext)) ? $this->typo(
					$subtext, 
					array(
						'type' => 'small'
					)
				) : null ), 
				array(
					'type' => $params['type']
				)
			), 
			$options
		);
		
		return $html;
	}
	
	public function thumbnail ( $content, $params = array(), $options = array() ) {
		$content = (array)$content;
		
		if (count($content) === 1) {
			if (isset($content[0])) {
				$content['image'] = $content[0];
				unset($content[0]);
			}
		}
		
		$html = '';
		$html .= $this->Html->div(
			'thumbnail', 
			$this->image(
				$content['image']
			) . 
			( (count($content) > 1) ?
			$this->Html->div(
				'caption', 
				( isset($content['caption']) ? $this->typo( $content['caption'], array( 'type' => 'h3' ) ) : null ) . 
				( isset($content['description']) ? $this->typo( $content['description'] ) : null ) . 
				( isset($content['buttons']) ? $this->typo( $this->btn( $content['buttons'] ) ) : null )
			) :
			null)
		);
		
		return $html;
	}

	public function alert ( $content, $params = array(), $options = array() ) {
		$params = array_merge(
			array(
				'color' => 'warning', // success, info, warning, danger
				'dismissable' => true
			),
			$params
		);
	
		$html = '';
		
		$html = $this->Html->div(
			implode(' ', array_filter(array(
				'alert', 
				( 'alert-' . $params['color'] ), 
				( $params['dismissable'] ? 'alert-dismissable' : null )
			))), 
			( $params['dismissable'] ? $this->closeIcon(array('data-dismiss' => 'alert')) : null ) . 
			$content, 
			$options	
		);
		
		return $html;
	}

	public function progress ( $progress, $params = array(), $options = array() ) {
		$params = array_merge(
			array(
				'min' => 0, 
				'max' => 100, 
				'color' => false, 
				'striped' => false, 
				'active' => false
			), 
			$params
		);
		$progress = (array)$progress;
		
		$progressHtml = null;
		$i = 0;
		foreach ( $progress as $progressChunk ) {
			$progressHtml .= $this->Html->div(
				implode(' ', array_filter(array(
					'progress-bar', 
					( $params['color'] ? 'progress-bar-' . ( is_array($params['color']) ? $params['color'][$i] : $params['color'] ) : null )
				))), 
				$this->Html->tag(
					'span', 
					( $progressChunk . '% Complete' ), 
					array(
						'class' => 'sr-only'
					)
				), 
				array(
					'role' => 'progressbar', 
					'aria-valuenow' => $progressChunk, 
					'aria-valuemin' => $params['min'], 
					'aria-valuemax' => $params['max'], 
					'style' => $this->Html->style(array(
						'width' => ( $progressChunk . '%' )
					))
				)
			);
			$i++;
		}

		
		$html = $this->Html->div(
			implode(' ', array_filter(array(
				'progress', 
				( $params['striped'] ? 'progress-striped' : null ), 
				( $params['active'] ? 'active' : null )
			))), 
			$progressHtml, 
			array(
			)
		);
		
		return $html;
	}

	public function media ( $content, $params = array(), $options = array() ) {
	
		$params = array_merge(
			array(
				'pull-right' => false
			), 
			$params
		);

		$html = '';

/* 		foreach ($content as $value) { */
/* $value = $content; */
			$nested = null;
			if ( isset($content['nested']) ) {
				if (!isset($content['nested'][0])) {
					$content['nested'] = array($content['nested']);
				}
				$nested .= $this->mediaList( $content['nested'], $params, $options );
			}
			$html .= $this->Html->div(
				'media', 
				$this->Html->link(
					$this->image(
						$content['image'], 
						array(
							'grow' => false
						)
					), 
					$content['url'], 
					array(
						'escape' => false, 
						'class' => ( 'pull-' . ( $params['pull-right'] ? 'right' : 'left' ) )
					)
				) . 
				$this->Html->div(
					'media-body', 
					$this->typo( $content['heading'], array('type' => 'h4'), array('class' => 'media-heading') ) . 
					$content['body'] . 
					$nested
				)
			);
/* 		} */

		return $html;
	}

	public function mediaList ( $content, $params = array(), $options = array() ) {

		$html = '';
		
		foreach ($content as $value) {
			$html .= $this->media($value, $params, $options);
		}
		$html = $this->Html->div(
			'media-list', 
			$html
		);

		return $html;
	}

	public function listGroup ( $content ) {
		$content = (array)$content;
	
		$html = '';
		
		foreach ($content as $value) {
			if (!is_array($value)) {
				$value = array(
					'label' => $value
				);
			}
			if (isset($value['url'])) {
				$html .= $this->Html->link(
					( isset($value['badge']) ? $this->badge($value['badge']) : null ) . 
					( isset($value['icon']) ? ($this->icon($value['icon']) . '&nbsp;') : null ) . 
					$value['label'], 
					$value['url'], 
					array(
						'escape' => false, 
						'class' => implode(' ', array_filter(array(
							'list-group-item', 
							( (isset($value['active']) && $value['active']) ? 'active' : null )
						)))
					)
				);
			} else {
				$html .= $this->Html->tag(
					'div', 
					( isset($value['badge']) ? $this->badge($value['badge']) : null ) . 
					(isset($value['icon']) ? ($this->icon($value['icon']) . ' ') : null ) . $value['label'], 
					array(
						'class' => 'list-group-item'
					)
				);
			}
		}
		$html = $this->Html->tag(
			'div', 
			$html, 
			array(
				'class' => 'list-group'
			)
		);
	
		return $html;
	}
	
	public function panel ( $content, $params = array(), $options = array() ) {
	
		$params = array_merge(
			array(
				'color' => 'default'
			), 
			$params
		);
	
		$html = '';
		
		if (is_array($content)) {
			foreach ( $content as $key => $value ) {
				if ($key === 'title') {
					$html .= $this->Html->div(
						'panel-heading', 
						$this->typo(
							$value, 
							array(
								'type' => 'h3'
							), 
							array(
								'class' => 'panel-title'
							)
						)
					);
				} elseif ($this->startsWith($key, 'body')) {
					$html .= $this->Html->div(
						( 'panel-' . 'body' ), 
						$value
					);
				} elseif (!is_numeric($key)) {
					$html .= $this->Html->div(
						( 'panel-' . $key ), 
						$value
					);
				} else {
					$html .= $value;
				}
			}
		} else {
			$html = $this->Html->div(
				( 'panel-body' ), 
				$content
			);
		}
		
		$html = $this->Html->div(
			implode(' ', array_filter(array(
				'panel', 
				'panel-' . $params['color']
			))), 
			$html, 
			$options
		);
		
		return $html;
	}

	public function well ($content, $params = array(), $options = array()) {
		$params = array_merge(
			array(
				'size' => false
			), 
			$params
		);
		
		$html = $this->Html->div(
			implode(' ', array_filter(array(
				'well', 
				(($params['size'])?( 'well-' . $params['size'] ):null)
			))), 
			$content, 
			$options
		);
		
		return $html;
	}

	public function modal ( $content, $params = array(), $options = array() ) {
		$params = array_merge(
			array(
				'fade' => true
			), 
			$params
		);
		
		$html = '';
		
		foreach ( $content as $key => $value) {
			if ( $key === 'header' ) {
				$html .= $this->Html->div(
					'modal-header', 
					$this->closeIcon(array('data-dismiss' => 'modal')) . 
					$this->typo( $value, array('type' => 'h4'), array( 'class' => 'modal-title', 'id' => ($params['name'] . 'Label') ) )
				);
			} else {
				$html .= $this->Html->div(
					( 'modal-' . $key ), 
					$value
				);
			}
		}
		
		$html = $this->Html->div(
			implode(' ', array_filter(array(
				'modal', 
				( $params['fade'] ? 'fade' : null )
			))), 
			$this->Html->div(
				'modal-dialog', 
				$this->Html->div(
					'modal-content', 
					$html
				)
			), 
			array(
				'id' => $params['name'], 
				'tabindex' => -1, 
				'role' => 'dialog', 
				'aria-labelledby' => ( $params['name'] . 'Label' ), 
				'aria-hidden' => true, 
				'style' => $this->Html->style(array(
					'display' => 'none'
				)), 
				'data-backdrop' => false
			)
		);
		
		return $html;
	}

	private function parseSizeToClass ($param = null, $offset = null) {
		$sizeSteps = $this->sizeSteps;
		
		if ($param) {
			$i = 0;
			$sizeClasses = array();
			$size = null;
			foreach ( $sizeSteps as $sizeStep) {
				if (isset($param[$sizeStep])) {
					$size = $param[$sizeStep];
				} elseif (isset($param[$i])) {
					$size = $param[$i];
				} elseif (is_integer($param)) {
					$size = $param;
				} elseif (empty($param)) {
					$size = 12;
				}
				$stepClass = ('col-' . $sizeStep . '-' . $size);
				$sizeClasses[] = $stepClass;
				$i++;
			}
			$result = implode(' ', $sizeClasses);
			
		} else {
			$result = '';
		}
		if ($offset) {
			$i = 0;
			$offsetClasses = array();
			$size = null;
			foreach ( $sizeSteps as $sizeStep) {
				if (isset($offset[$sizeStep])) {
					$size = $offset[$sizeStep];
				} elseif (isset($offset[$i])) {
					$size = $offset[$i];
				} elseif (is_integer($offset)) {
					$size = $offset;
				} elseif (empty($offset)) {
					$size = 12;
				}
				$stepClass = ('col-' . $sizeStep . '-offset-' . $size);
				$sizeClasses[] = $stepClass;
				$i++;
			}
			$result = $result . ' ' . implode(' ', $sizeClasses);
			
		}
		return $result;
	}

	// Convenience wrappers
	
	public function br () {
		return $this->Html->tag('br');
	}

	public function html ($content) {
		$html = $this->Html->docType('html5') . $this->Html->tag(
			'html', 
			$content, 
			array(
				'lang' => 'en'
			)
		);
		
		return $html;
	}

	public function head ($content) {
		return $this->Html->tag(
			'head', 
			$content
		);	
	}

	public function body ($content, $params = array()) {
		$params = array_merge(
			array(
				'padding-top' => false, 
				'padding-bottom' => false
			), 
			$params, 
			$this->bodyParams
		);
		$options = array_filter(array(
			'style' => $this->Html->style(array_filter(array(
				'padding-top' => $params['padding-top'], 
				'padding-bottom' => $params['padding-bottom']
			)))
		));

		return $this->Html->tag(
			'body', 
			$content, 
			$options
		);
	}
	
	private function startsWith($haystack, $needle) {
		return $needle === "" || strpos($haystack, $needle) === 0;
	}

}
