<div id="login">
	<div class="users form">
		<?php echo $this->Session->flash('auth'); ?>
		<?php echo $this->Form->create('User',array('autocomplete' => 'off')); ?>
		    <fieldset>
		        <header>
		            <?php echo __('¡Bienvenido!'); ?>
		            <span><?php echo __('ingresa tu nombre de usuario y contraseña para poder ingresar'); ?>
		            </span>
		        </header>
			        <?php echo $this->Form->input('username',array('label'=>'Usuario'));
			         echo $this->Form->input('password',array('label'=>'Contraseña'));     
			        ?>		    
		    </fieldset>		   
		<?php echo $this->Form->end(__('Ingresar')); ?>
	</div>
</div>



