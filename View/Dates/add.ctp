<div class="dates form mde-form-category">
<?php echo $this->Form->create('Date'); ?>
	<fieldset>
		<legend><?php echo __('Add Date'); ?></legend>
	<?php
		echo $this->Form->input('date_name');
		echo $this->Form->input('category_id');
	    echo $this->Form->input('date_state',array ('options' => array ('Reservado'=>'Reservado','Disponible'=>'Disponible')));
	//echo $this->Form->input('inscription_id');
	?>
	
		<input name="data[Date][inscription_id]" value="0" id="DateInscriptionId" type="hidden"/>
	
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main menu'), array('controller' => 'inscriptions', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Dates'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php //cho $this->Html->link(__('List Inscriptions'), array('controller' => 'inscriptions', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Inscription'), array('controller' => 'inscriptions', 'action' => 'add')); ?> </li>
	</ul>
</div>
