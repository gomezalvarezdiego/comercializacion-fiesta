<div class="categories view">
<h2><?php echo __('Category'); ?></h2>
	<dl>
		<!--  <dt><?php //echo __('Id Category'); ?></dt>
		<dd>
			<?php //echo h($category['Category']['id_category']); ?>
			&nbsp;
		</dd>-->
		<dt><?php echo __('Category Name'); ?></dt>
		<dd>
			<?php echo h($category['Category']['category_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category Initiation'); ?></dt>
		<dd>
			<?php echo h($category['Category']['category_initiation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category End'); ?></dt>
		<dd>
			<?php echo h($category['Category']['category_end']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main menu'), array('controller' => 'inscriptions', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['id_category'])); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?> </li>
		<li><?php //echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['id_category']), null, __('Are you sure you want to delete # %s?', $category['Category']['id_category'])); ?> </li>
		
		<li><?php //echo $this->Html->link(__('List Dates'), array('controller' => 'dates', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Date'), array('controller' => 'dates', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Dates'); ?></h3>
	<?php if (!empty($category['Date'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php //echo __('Id Date'); ?></th>
		<th><?php echo __('Date Name'); ?></th>
		<th><?php //echo __('Category Id'); ?></th>
		<th><?php //echo __('Inscription Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($category['Date'] as $date): ?>
		<tr>
			<td><?php //echo $date['id_date']; ?></td>
			<td><?php echo $date['date_name']; ?></td>
			<td><?php //echo $date['category_id']; ?></td>
			<td><?php //echo $date['inscription_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dates', 'action' => 'view', $date['id_date'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dates', 'action' => 'edit', $date['id_date'])); ?>
				<?php //echo $this->Form->postLink(__('Delete'), array('controller' => 'dates', 'action' => 'delete', $date['id_date']), null, __('Are you sure you want to delete # %s?', $date['id_date'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php //echo $this->Html->link(__('Main menu'), array('controller' => 'inscriptions', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New Date'), array('controller' => 'dates', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
		</ul>
	</div>
</div>
