<?php 
if(count($cities)){
	echo $this->Form->input("{$model}.city_id", array('label' => false, 'div' => false, 'empty' => 'Selecione', 'options' => $cities, 'class' => 'input-block-level chosen-select', 'template' => 'form-input-fk'));
}