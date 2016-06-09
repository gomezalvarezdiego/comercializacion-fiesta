<div class="Category-admin form mde-form">
<?php echo $this->Form->create('WorkshopSession'); ?>
	<fieldset>
	<!--<span>CATEGORÍAS DE FIESTA DEL LIBRO</span>-->
	
		<!--<legend><?php //echo __('Seleccionar Fecha'); ?></legend>-->
		<legend>CATEGORÍAS DE FIESTA DEL LIBRO</legend>
		<?php 
	 	//echo $fecha; 
		//echo $this->Form->input('workshop_day',array ('id' => 'datepicker'));

		?>
		<?php //echo '<label><select name="data[category][listacategorias]">'.$listadocategorian.'</select></label>'?>
		

	</fieldset>
	<?php
		if($listadocategorian!=''){
		echo '<label><select name="data[category][listacategorias]">'.$listadocategorian.'</select></label>';
 		echo $this->Form->end(__('Ingresar')); 
 		}
 		else{
 		echo 'Su categoría será activada a la hora asignada. Por favor actualice la página (presione F5)';	
 		}
 		
	?>
</div>
<?php
		$user_level= $this->Session->read('Auth.User.permission_level');
		if ($user_level == '1'){
		?>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<!--  <li><?php //echo $this->Html->link(__('Back to main menu'), array('controller' => 'Inscriptions', 'action' => 'option')); ?> </li>-->
		
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'inscriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
		
	</ul>
</div>
<?php
		}
?>