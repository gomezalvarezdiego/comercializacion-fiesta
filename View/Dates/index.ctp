<div class="dates index">
	<h2><?php echo __('Dates'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('date_name'); ?></th>
			<th><?php echo $this->Paginator->sort('estado'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('inscription_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dates as $date): ?>
	<tr>
		<td><?php echo h($date['Date']['date_name']); ?>&nbsp;</td>
		<td><?php echo h($date['Date']['date_state']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($date['Category']['category_name'], array('controller' => 'categories', 'action' => 'view', $date['Category']['id_category'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($date['Inscription']['trade_name'], array('controller' => 'inscriptions', 'action' => 'view', $date['Inscription']['nit'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $date['Date']['id_date'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $date['Date']['id_date'])); ?>
			<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $date['Date']['id_date']), null, __('Are you sure you want to delete # %s?', $date['Date']['id_date'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	//echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));
	echo $this->Paginator->counter(array('format' => __('Pagina {:page} de {:pages}, mostrados {:current} registros de {:count} en total, comenzando con el registro {:start}, finalizando en {:end}')));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main menu'), array('controller' => 'inscriptions', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('New Date'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Inscriptions'), array('controller' => 'inscriptions', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Inscription'), array('controller' => 'inscriptions', 'action' => 'add')); ?> </li>
	</ul>
</div>
