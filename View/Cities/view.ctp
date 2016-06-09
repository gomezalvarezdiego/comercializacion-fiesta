<div class="cities view">
<h2><?php echo __('City'); ?></h2>
	<dl>
		<!--  <dt><?php //echo __('Id City'); ?></dt>
		<dd>
			<?php //echo h($city['City']['id_city']); ?>
			&nbsp;
		</dd>-->
		<dt><?php echo __('City Name'); ?></dt>
		<dd>
			<?php echo h($city['City']['city_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City State'); ?></dt>
		<dd>
			<?php echo h($city['City']['city_state']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main menu'), array('controller' => 'inscriptions', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('New City'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Edit City'), array('action' => 'edit', $city['City']['id_city'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete City'), array('action' => 'delete', $city['City']['id_city']), null, __('Are you sure you want to delete # %s?', $city['City']['id_city'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
	</ul>
</div>
