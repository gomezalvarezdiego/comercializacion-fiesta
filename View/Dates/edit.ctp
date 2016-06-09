<div class="dates form mde-form-category">
<?php echo $this->Form->create('Date'); ?>
	<fieldset>
		<legend><?php echo __('Edit Date'); ?></legend>
	<?php
		echo $this->Form->input('id_date');
		echo $this->Form->input('date_name');
		echo $this->Form->input('category_id');
		echo $this->Form->input('date_state',array ('options' => array ('Reservado'=>'Reservado','Disponible'=>'Disponible')));
		//echo $this->Form->input('inscription_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main menu'), array('controller' => 'inscriptions', 'action' => 'index')); ?></li>
		<li><?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Date.id_date')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Date.id_date'))); ?></li>
		<li><?php echo $this->Html->link(__('List Dates'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Inscriptions'), array('controller' => 'inscriptions', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Inscription'), array('controller' => 'inscriptions', 'action' => 'add')); ?> </li>
	</ul>
</div>
