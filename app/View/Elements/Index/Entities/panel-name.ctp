<div class="row-fluid">
    <div class="box box-bordered">
        <div style="border-top: 2px solid #E5E5E5;" class="box-content nopadding">
            <!-- Nome -->
            <?php echo $this->AppForm->create($modelClass, array('defaultSize' => 'input-xlarge', 'classForm' => 'form-horizontal form-bordered'))?>
                <?php echo $this->form->hidden('q', array('value' => $requestHandler));?>
                <div class="control-group">
                    <label class="control-label" for="textfield"><?php echo __('Type Name')?></label>
                    <div class="controls">
                        <?php $name = isset($this->params['named']['name']) && !empty($this->params['named']['name'])?$this->params['named']['name']:''?>
                        <?php echo $this->AppForm->input('name', array('template' => 'form-input-clean', 'class' => 'input-block-level msk-alpha', 'value' => $name, 'placeholder' => __('type name')))?>
                    </div>
                </div>
                <?php echo $this->AppForm->btn('Search', array('template' => '/Entities/form-input-btn'));?>
            <?php echo $this->AppForm->end()?>
        </div>
    </div>
</div>