<div class="inscriptions view">
<h2><?php echo __('Inscription'); ?></h2>
	<dl>
		<dt><?php echo __('Nit'); ?></dt>
		<dd>
			<?php echo h($inscription['Inscription']['nit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company Name'); ?></dt>
		<dd>
			<?php echo h($inscription['Inscription']['company_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Representative Name'); ?></dt>
		<dd>
			<?php echo h($inscription['Inscription']['representative_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Representative Document'); ?></dt>
		<dd>
			<?php echo h($inscription['Inscription']['representative_document']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Representative City'); ?></dt>
		<dd>
			<?php echo h($inscription['Inscription']['representative_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Representative Phone'); ?></dt>
		<dd>
			<?php echo h($inscription['Inscription']['representative_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Representative Cellphone'); ?></dt>
		<dd>
			<?php echo h($inscription['Inscription']['representative_cellphone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Representative Mail'); ?></dt>
		<dd>
			<?php echo h($inscription['Inscription']['representative_mail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trade Name'); ?></dt>
		<dd>
			<?php echo h($inscription['Inscription']['trade_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Document'); ?></dt>
		<dd>
			<?php echo h($inscription['Inscription']['contact_document']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact City'); ?></dt>
		<dd>
			<?php echo h($inscription['Inscription']['contact_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Phone'); ?></dt>
		<dd>
			<?php echo h($inscription['Inscription']['contact_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cellphone'); ?></dt>
		<dd>
			<?php echo h($inscription['Inscription']['cellphone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contanct Mail'); ?></dt>
		<dd>
			<?php echo h($inscription['Inscription']['contanct_mail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attached1'); ?></dt>
		<dd>
			<?php echo h($inscription['Inscription']['attached1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attached2'); ?></dt>
		<dd>
			<?php echo h($inscription['Inscription']['attached2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attached3'); ?></dt>
		<dd>
			<?php echo h($inscription['Inscription']['attached3']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main menu'), array('controller' => 'inscriptions', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('New Inscription'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Edit Inscription'), array('action' => 'edit', $inscription['Inscription']['nit'])); ?> </li>
		<li><?php //echo $this->Form->postLink(__('Delete Inscription'), array('action' => 'delete', $inscription['Inscription']['nit']), null, __('Are you sure you want to delete # %s?', $inscription['Inscription']['nit'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscriptions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Dates'), array('controller' => 'dates', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Date'), array('controller' => 'dates', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Dates'); ?></h3>
	<?php if (!empty($inscription['Date'])): ?>
		<dl>
			<dt><?php echo __('Id Date'); ?></dt>
		<dd>
	<?php echo $inscription['Date']['id_date']; ?>
&nbsp;</dd>
		<dt><?php echo __('Date Name'); ?></dt>
		<dd>
	<?php echo $inscription['Date']['date_name']; ?>
&nbsp;</dd>
		<dt><?php echo __('Category Id'); ?></dt>
		<dd>
	<?php echo $inscription['Date']['category_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Inscription Id'); ?></dt>
		<dd>
	<?php echo $inscription['Date']['inscription_id']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Date'), array('controller' => 'dates', 'action' => 'edit', $inscription['Date']['id_date'])); ?></li>
			</ul>
		</div>
	</div>
	