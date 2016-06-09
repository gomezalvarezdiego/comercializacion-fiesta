<div class="descripcion-formularios">​INFORMAMOS QUE ​SUS DATOS PERSONALES SE ENCUENTRAN INCLUIDOS EN LA BASE DE DATOS DE LOS EVENTOS DEL LIBRO DE LA ALCALDÍA DE MEDELLÍN. 
	<?php echo "</br>"?>
<strong>Al postularse a esta convocatoria usted acepta que sus datos personales sean utilizados en la base de datos de los Eventos del Libro.</strong></div>
<div class="Category form mde-form">
<?php echo $this->Form->create('WorkshopSession'); ?>
	<fieldset>
		<legend>Categorías muestra comercial Fiesta del libro y la cultura</legend>
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
<?php
		}
?>