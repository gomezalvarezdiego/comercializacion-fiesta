<script type="text/javascript">
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
 
         return true;
      }
</script>
<div class="inscriptions form mde-form forminstitution">
<?php echo $this->Form->create('Inscription'); ?>
	<fieldset>
		<div class="mde-form legendinsitution"><?php echo __('Busqueda por Nit'); ?></div>
		<label style="padding-left:26px">
			<input  name="data[Inscription][busqueda]" id="InscriptionBusqueda" maxlength="11" onkeypress="return isNumberKey(event)" type="text"  size="5" title="El nit va sin el signo (-) y sin puntos (.)"/> -
			<select name="data[Inscription][digitoverificacion]" id="InscriptionDigitoverificacion">
	             <option value="0">0</option>
	             <option value="1">1</option>
	             <option value="2">2</option>
	             <option value="3">3</option>
	             <option value="4">4</option>    
	             <option value="5">5</option>
	             <option value="6">6</option>    
	             <option value="7">7</option>
	             <option value="8">8</option>    
	             <option value="9">9</option>            
	    	</select>
	   </label>

	</fieldset>
	<?php
	
 		echo $this->Form->end(__('Ingresar')); 
	?>
</div>

<?php
	/*$user_level= $this->Session->read('Auth.User.permission_level');
	if ($user_level == '1'){*/
?>
<!--
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>	
		<li><?php //echo $this->Html->link(__('Back to main menu'), array('controller' => 'Inscriptions', 'action' => 'option')); ?> </li>	
		<li><?php echo $this->Html->link(__('Main menu'), array('controller' => 'inscriptions', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
	</ul>
</div>-->
<?php //}?>
