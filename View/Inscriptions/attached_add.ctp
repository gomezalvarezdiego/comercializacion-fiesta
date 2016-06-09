<script type="text/javascript">
 function checkSubmit() {
 	
	 document.all.item("noprint").style.visibility='hidden';
	 document.all.item("print").style.visibility='visible';
	 return true;

} 
 </script> 
<div class="inscriptions form mde-form">
<?php echo $this->Form->create('Inscription',array('type'=>'file','onsubmit'=>'return checkSubmit()')); ?>
	<fieldset>
		<legend><?php echo __('Adjuntar archivos'); ?></legend>
		<div id="b"><?php echo 'El tamaño máximo permitido es de 2 megas.'?></div>
	<?php
		echo $this->Form->input('attached1',array('type'=>'file'));
		echo $this->Form->input('attached2',array('type'=>'file'));
		echo $this->Form->input('attached3',array('type'=>'file'));
		
		echo $this->Form->input('dir',array('type'=>'hidden'));
		echo $this->Form->input('company_name',array('type'=>'hidden'));
	?>
	</fieldset>
<div id=print style="visibility: hidden;">
		<h2><?php echo'Cargando...'?></h2>
	</div>	
	<div id=noprint>
		<?php echo $this->Form->end(__('Submit'));?>
	</div>
	
</div>
<?php
	$user_level= $this->Session->read('Auth.User.permission_level');
	if ($user_level == '1'){
?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Main menu'), array('controller' => 'inscriptions', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
	</ul>
</div>
<?php
	}
?>