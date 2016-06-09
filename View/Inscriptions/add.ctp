<script type="text/javascript">
function goBack()
  {
  window.history.back()
  }
</script>
<script type="text/javascript">
 function validarEmail(valor) {
	 var filter=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(valor)){
  } else {
   alert("La dirección de correo es incorrecta.");
   document.getElementById("InscriptionRepresentativeMail").focus();
   return false;
  }
  return true;
}
 </script> 
 <script type="text/javascript">
 function validarCorreo(valor) {
	 var filter=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(valor)){
  } else {
   alert("La dirección de correo es incorrecta.");
   document.getElementById("InscriptionContanctMail").focus();
   return false;
  }
  return true;
}
 </script> 
<script type="text/javascript">
function telefonor(valor)
{
	if (/^[0-9]+-+[0-9]/.test(valor))
	{} else {
   alert("El teléfono del representate legal es incorrecto debe ir codigo del Área-teléfono ej. 4-4440000.");
   document.getElementById("InscriptionRepresentativePhone").focus();	
	}	
}
</script>
<script type="text/javascript">
function telefonoc(valor)
{
	if (/^[0-9]+-+[0-9]/.test(valor))
	{} else {
   alert("El teléfono del representate legal es incorrecto debe ir codigo del Área-teléfono ej. 4-4440000.");
   document.getElementById("InscriptionContactPhone").focus();	
	}	
}
</script>
<script type="text/javascript">
function conMayusculas(field) 
{
  field.value = field.value.toUpperCase();
}
</script>
<script type="text/javascript">
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
 
         return true;
      }
</script>
<script type="text/javascript">
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " abcdefghijklmnopqrstuvwxyzñáéíóú";
       especiales = [8,37,39,46];

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>
 <script type="text/javascript">
 function checkSubmit() {
	  
	 //alert("El formulario ya se esta enviando...");
	var objfrm = document;

	 if (/^[0-9]+-+[0-9]/.test(objfrm.getElementById("InscriptionRepresentativePhone").value))
		{} else {
	   alert("El teléfono del contacto es incorrecto debe ir codigo del área-teléfono ej. 4-4440000.");
	   document.getElementById("InscriptionRepresentativePhone").focus();	
	   return false;
	}

	 if (/^[0-9]+-+[0-9]/.test(objfrm.getElementById("InscriptionContactPhone").value))
		{} else {
	   alert("El teléfono del contacto es incorrecto debe ir codigo del área-teléfono ej. 4-4440000.");
	   document.getElementById("InscriptionContactPhone").focus();	
	   return false;
	}
	
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(objfrm.getElementById("InscriptionRepresentativeMail").value)){
	  } else {
	   alert("La dirección de correo es incorrecta.");
	   document.getElementById("InscriptionRepresentativeMail").focus();	
	   return false;
	 }  


	 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(objfrm.getElementById("InscriptionContanctMail").value)){
	  } else {
		alert("La dirección de correo es incorrecta.");
		document.getElementById("InscriptionContanctMail").focus();	
	    return false;
	}

	 if(objfrm.getElementById("representative_city").selectedIndex == 0) {
		 document.getElementById("representative_city").focus();	
		 alert('Por favor elija la ciudad del representante');
		 return false; 
	 }
	 if(objfrm.getElementById("contact_city").selectedIndex == 0) {
		 document.getElementById("contact_city").focus();	
		 alert('Por favor elija la ciudad del contacto');
		 return false; 
	 }  
	 
	 	
	 document.all.item("noprint").style.visibility='hidden';
	 document.all.item("print").style.visibility='visible';
	 return true;

} 
 </script> 
<div class="inscriptions mde-form-add">
<?php echo $this->Form->create('Inscription',array('type'=>'file','onsubmit'=>'return checkSubmit()')); ?>
<fieldset>
	<!--<legend><?php //echo __('Información de la entidad'); ?></legend>-->
	<fieldset>
		<legend><b><?php echo __('Información de la entidad'); ?></b></legend>
	<?php
		//echo $idcategorian;
	?>	
	<div class="input text required" ><label id="nitfp">Nit:</label>
		<input  name="data[Inscription][nit]" id="InscriptionNit" maxlength="11" onkeypress="return isNumberKey(event)" type="text"  size="5" title="El nit va sin el signo (-) y sin puntos (.)" required="required"/> -
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
	</div>
	<label class="sugge">El nit va sin el signo (-) y sin puntos (.)</label>
	<br/>
	<?php 
		//echo $this->Form->input('nit',array('type'=>'text','label'=>'Nit:','maxLength'=>'11','rule'=>'alphaNumeric','div'=>'nombre_div'));?>
	<b>
	<?php 
		/*echo $this->Form->input('digitoverificacion',array('div'=>'nombre_div','label'=>'Dígito de verificación:<span style="color: #EE3222">*</span>',
		'options' => array ('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9')));*/
	?>
	
	</b>

	<?php 	
		echo '<div class="input text required" ><label id="ciudadfp">Ciudad:</label>';
		echo '<select name="data[Inscription][representative_city]" id="representative_city"><option value="0">Seleccionar la ciudad</option>'.$listadociudadesn.'</select></div>';
	?>
		<br/>
	<?php 
		//echo $this->Form->input('accompaniment_type',array ('options' => array ($listadociudad)));
	
		echo $this->Form->input('company_name',array('label'=>'Razón Social:','onchange'=>'conMayusculas(this)'));
	?>
		<br/>
	<?php 
		echo $this->Form->input('trade_name',array('label'=>'Nombre Comercial:','onchange'=>'conMayusculas(this)'));
	?>
	 	<label class="sugge">Escriba el nombre como va a aparecer en el stand</label>
		<br/>
	</fieldset>
	<fieldset>
		<legend><b><?php echo __('Información del representante legal'); ?></b></legend>
		<?php 
		echo $this->Form->input('representative_name',array('label'=>'Nombre y apellido:','onchange'=>'conMayusculas(this)','onkeypress'=>'return soloLetras(event)'));
		?>
		<br/>
		<?php 
		echo $this->Form->input('representative_document',array('label'=>'Cédula:','maxLength'=>'10','onkeypress'=>'return isNumberKey(event)'));
		?>
		<label class="sugge">La cédula va sin puntos (.)</label>
		<br/>
		<?php
		//echo $this->Form->input('representative_city');
		echo $this->Form->input('representative_phone',array('label'=>'Teléfono:','maxLength'=>'9','onchange'=>'telefonor(this.value)'));
		?>
		<label class="sugge">Ingresar el indicativo y teléfono donde se encuentra ejemplo: 4-4440000</label>
		<br/>
		<?php 
		echo $this->Form->input('representative_cellphone',array('label'=>'Celular:','maxLength'=>'10','onkeypress'=>'return isNumberKey(event)'));
		?>
		<br/>
		<?php
		echo $this->Form->input('representative_mail',array('label'=>'Correo:','type'=>'email','onchange'=>'validarEmail(this.value)'));
		?>
		<label class="sugge">El correo debe ir completo nombre@xxxxxxxx.xxx</label>
		<br/>
	</fieldset>
	<fieldset>
		<legend><b><?php echo __('Información del contacto'); ?></b></legend>
		<?php 
		echo $this->Form->input('contact_name',array('label'=>'Nombre y apellido:','onchange'=>'conMayusculas(this)'));
		?>
		<br/>
		<?php 
		echo $this->Form->input('contact_document',array('label'=>'Cédula:','maxLength'=>'10','onkeypress'=>'return isNumberKey(event)'));
		?>
		<label class="sugge">La cédula va sin puntos (.)</label>
		<br/>
		<?php 
		//echo $this->Form->input('contact_city',array('label'=>'Ciudad:'));
		echo $this->Form->input('contact_phone',array('label'=>'Teléfono:','maxLength'=>'9','onchange'=>'telefonoc(this.value)'));
		?>
		<label class="sugge">Ingresar el indicativo y teléfono donde se encuentra ejemplo: 4-4440000</label>
		<br/>
		<?php 
		echo $this->Form->input('cellphone',array('label'=>'Celular:','maxLength'=>'10','onkeypress'=>'return isNumberKey(event)'));
		?>
		<br/>
		<?php 
		echo $this->Form->input('contanct_mail',array('label'=>'Correo:','type'=>'email','onchange'=>'validarCorreo(this.value)'));?>
		<label class="sugge">El correo debe ir completo nombre@xxxxxxxx.xxx</label>
		<br/>
		<?php
		echo '<div class="input text required"><label id="ciudadcontfp">Ciudad:</label>';
		echo '<select name="data[Inscription][contact_city]" id="contact_city"><option value="0">Seleccionar la ciudad</option>'.$listadociudadesn.'</select></div>';
		//echo $this->Form->input('attached1',array('type'=>'file'));
		//echo $this->Form->input('attached2',array('type'=>'file'));
		//echo $this->Form->input('attached3',array('type'=>'file'));
		?>
			<div id=print style="visibility: hidden;">
				<h2><?php echo'El formulario se esta enviando...'?></h2>
			</div>	
			<div id=noprint>
				<?php echo $this->Form->end(__('Submit'));?>
			</div>	
	</fieldset>
 </fieldset>
 	
	
</div>
		<?php
		$user_level= $this->Session->read('Auth.User.permission_level');
		if ($user_level == '1'){
		?>

<?php
		}
?>
