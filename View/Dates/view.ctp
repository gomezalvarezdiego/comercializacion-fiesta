<div class="dates view">
<h2><?php echo __('Date'); ?></h2>
	<dl>
		<!-- <dt><?php //echo __('Id Date'); ?></dt>
		<dd>
			<?php //echo h($date['Date']['id_date']); ?>
			&nbsp;
		</dd>-->
		<dt><?php echo __('Date Name'); ?></dt>
		<dd>
			<?php echo h($date['Date']['date_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($date['Date']['date_state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($date['Category']['id_category'], array('controller' => 'categories', 'action' => 'view', $date['Category']['id_category'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inscription'); ?></dt>
		<dd>
			<?php echo $this->Html->link($date['Inscription']['nit'], array('controller' => 'inscriptions', 'action' => 'view', $date['Inscription']['nit'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main menu'), array('controller' => 'inscriptions', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('New Date'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Edit Date'), array('action' => 'edit', $date['Date']['id_date'])); ?> </li>
		<li><?php //echo $this->Form->postLink(__('Delete Date'), array('action' => 'delete', $date['Date']['id_date']), null, __('Are you sure you want to delete # %s?', $date['Date']['id_date'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dates'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Inscriptions'), array('controller' => 'inscriptions', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Inscription'), array('controller' => 'inscriptions', 'action' => 'add')); ?> </li>
	</ul>
</div>
