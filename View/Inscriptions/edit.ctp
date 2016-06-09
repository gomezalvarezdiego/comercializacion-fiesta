<div class="inscriptions form">
<?php echo $this->Form->create('Inscription'); ?>
	<fieldset>
		<legend><?php echo __('Edit Inscription'); ?></legend>
	<?php
		echo $this->Form->input('nit');
		echo $this->Form->input('company_name');
		echo $this->Form->input('representative_name');
		echo $this->Form->input('representative_document');
		echo $this->Form->input('representative_city');
		echo $this->Form->input('representative_phone');
		echo $this->Form->input('representative_cellphone');
		echo $this->Form->input('representative_mail');
		echo $this->Form->input('trade_name');
		echo $this->Form->input('contact_document');
		echo $this->Form->input('contact_city');
		echo $this->Form->input('contact_phone');
		echo $this->Form->input('cellphone');
		echo $this->Form->input('contanct_mail');
		//echo $this->Form->input('attached1');
		//echo $this->Form->input('attached2');
		//echo $this->Form->input('attached3');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main menu'), array('controller' => 'inscriptions', 'action' => 'index')); ?></li>
		<li><?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Inscription.nit')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Inscription.nit'))); ?></li>
		<li><?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Inscriptions'), array('action' => 'index')); ?></li>
		<li><?php //echo $this->Html->link(__('List Dates'), array('controller' => 'dates', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Date'), array('controller' => 'dates', 'action' => 'add')); ?> </li>
	</ul>
</div>
