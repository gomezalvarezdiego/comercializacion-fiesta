<div class="inscriptions index">
	<h2><?php echo __('Inscriptions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('nit'); ?></th>
			<th><?php echo $this->Paginator->sort('company_name'); ?></th>
			<th><?php echo $this->Paginator->sort('representative_name'); ?></th>
			<th><?php echo $this->Paginator->sort('representative_document'); ?></th>
			<th><?php echo $this->Paginator->sort('representative_city'); ?></th>
			<th><?php echo $this->Paginator->sort('representative_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('representative_cellphone'); ?></th>
			<th><?php echo $this->Paginator->sort('representative_mail'); ?></th>
			<th><?php echo $this->Paginator->sort('trade_name'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_document'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_city'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('cellphone'); ?></th>
			<th><?php echo $this->Paginator->sort('contanct_mail'); ?></th>
			<th><?php echo $this->Paginator->sort('attached1'); ?></th>
			<th><?php echo $this->Paginator->sort('attached2'); ?></th>
			<th><?php echo $this->Paginator->sort('attached3'); ?></th>
			<th><?php echo $this->Paginator->sort('date_assignment'); ?></th>
			<th><?php echo $this->Paginator->sort('date_name'); ?></th>
			<th><?php echo $this->Paginator->sort('category_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($inscriptions as $inscription): ?>
	<tr>
		<td><?php echo h($inscription['Inscription']['nit']); ?>&nbsp;</td>
		<td><?php echo h($inscription['Inscription']['company_name']); ?>&nbsp;</td>
		<td><?php echo h($inscription['Inscription']['representative_name']); ?>&nbsp;</td>
		<td><?php echo h($inscription['Inscription']['representative_document']); ?>&nbsp;</td>
		<td><?php echo h($inscription['Inscription']['representative_city']); ?>&nbsp;</td>
		<td><?php echo h($inscription['Inscription']['representative_phone']); ?>&nbsp;</td>
		<td><?php echo h($inscription['Inscription']['representative_cellphone']); ?>&nbsp;</td>
		<td><?php echo h($inscription['Inscription']['representative_mail']); ?>&nbsp;</td>
		<td><?php echo h($inscription['Inscription']['trade_name']); ?>&nbsp;</td>
		<td><?php echo h($inscription['Inscription']['contact_document']); ?>&nbsp;</td>
		<td><?php echo h($inscription['Inscription']['contact_city']); ?>&nbsp;</td>
		<td><?php echo h($inscription['Inscription']['contact_phone']); ?>&nbsp;</td>
		<td><?php echo h($inscription['Inscription']['cellphone']); ?>&nbsp;</td>
		<td><?php echo h($inscription['Inscription']['contanct_mail']); ?>&nbsp;</td>
		<!--  <td><?php //echo h($inscription['Inscription']['attached1']); ?>&nbsp;</td>-->
		<td><?php echo  $this->Html->link($inscription['Inscription']['attached1'],array('controller' => 'webroot','action' => '/uploads/inscription/attached1/'.'/'.$inscription['Inscription']['attached1'])); ?>&nbsp;</td>
		<!--<td><?php //echo h($inscription['Inscription']['attached2']); ?>&nbsp;</td>-->
		<td><?php echo  $this->Html->link($inscription['Inscription']['attached2'],array('controller' => 'webroot','action' => '/uploads/inscription/attached2/'.'/'.$inscription['Inscription']['attached2'])); ?>&nbsp;</td>
		<!--<td><?php //echo h($inscription['Inscription']['attached3']); ?>&nbsp;</td>-->
		<td><?php echo  $this->Html->link($inscription['Inscription']['attached3'],array('controller' => 'webroot','action' => '/uploads/inscription/attached3/'.'/'.$inscription['Inscription']['attached3'])); ?>&nbsp;</td>
		<?php $date_assignment=$inscription['Date']['date_assignment'];
			if($date_assignment==""){ 
		?>
				<td><?php echo h($inscription['Inscription']['date_backup']); ?>&nbsp;</td>
		<?php
			}else{ 
        ?>
				<td><?php echo h($inscription['Date']['date_assignment']); ?>&nbsp;</td>
        <?php
			}
		?>
		<?php $category_name='';?>
		<?php foreach ($categories as $category): ?>
			<?php if ($category['Category']['id_category']==$inscription['Date']['category_id']){ ?>
				<td><?php echo h($inscription['Date']['date_name']); ?>&nbsp;</td>
				<td><?php echo h($category['Category']['category_name']); ?>&nbsp;</td>
				<?php $category_name=$category['Category']['category_name'];?>
			<?php }?>	
		<?php endforeach; ?>
		<?php
		if($category_name==''){ ?>
			<td>Se encuentra en lista de espera</td>
			<td><?php echo h($inscription['Inscription']['category_name']); ?></td>	
			<?php }?>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $inscription['Inscription']['nit'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $inscription['Inscription']['nit'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $inscription['Inscription']['nit']), null, __('Are you sure you want to delete # %s?', $inscription['Inscription']['nit'])); ?>
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
	</br>
	</br>
	<!-- 
	<form id="form1" name="form1" method="post" action="http://localhost/book_party_merchandising/inscriptions/index_excel"/>
  		<table align="center" width="600" border="0" cellspacing="0" cellpadding="0" height="60px" style="padding-left:220px;">
  			<tr>
   				<td valign="middle" align="center" style="padding-right:220px">
    				<input type="image" value="Exportar a Excel" src="bt-exportar.png"/>
   				</td>
  			</tr> 
		 </table>  
 	</form> 
 	-->
 	<?php echo $this->Form->create('Exportar'); ?>
	<?php echo $this->Form->end(__('Exportar a excel')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Inscription'), array('action' => 'add_admin')); ?></li>
		<li><?php //echo $this->Html->link(__('List Dates'), array('controller' => 'dates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Date'), array('controller' => 'dates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
	</ul>
</div>
