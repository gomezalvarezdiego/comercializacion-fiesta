<script language="JavaScript">
function doPrint(){
document.all.item("noprint").style.visibility='hidden';
document.getElementById("btnImprimir").style.display='none';
document.getElementById("footer").style.display='none';
document.getElementById("header").style.display='none';
// document.getElementById("closesesion").style.display='none';
window.print();
}
</script>
<div class="inscripciones" id="carta">
<?php //echo $this->Html->image('/img/banner-aplicativo4.jpg', array('border' => '0'))?>
<!--  <a href="javascript:window.print()"> imprimir </a>-->
<?php echo $this->Form->create('Inscripcion'); 
 
		$user_level= $this->Session->read('Auth.User.permission_level');
		if ($user_level == '1'){
?>			
			<div id="closesesion">
			<?php
				echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); 
			?>	  
			</div>
<?php			
		 }
?>
   
    <div id="cartafiesta">
		<table>
				<tr>
					<h2 align="center"></h2>	
					
			<?php	
					//echo $digitovers;
				
					echo 'Medellín, '.$fecha;
					echo "</br>";
					echo "</br>";
					echo "</br>";
					echo "</br>";
					echo $razon_social;
					echo "</br>";
					//echo $nitc;
					echo "</br>";
					echo "</br>";
				   	echo "Apreciado postulante";
				   	echo "</br>";
				   	echo "</br>";
				   	echo "Agradecemos su interés en hacer parte de la Fiesta del libro y la cultura, encuentro cultural de la ciudad organizado por la Secretaría de Cultura Ciudadana de la Alcaldía de Medellín.";
				   	echo "</br>";
				   	echo "</br>";
				   	echo "</br>";
				   	if($citacionn!=''){
				   	echo "De acuerdo a la convocatoria diligenciada anteriormente se asignarán citas para la adjudicación de stands, según su categoría y el orden de inscripción del formulario.";		
				   	echo "</br>";
				   	echo "</br>";
				   	echo "Este documento es el comprobante de que su cita fue asignada de la siguiente manera:";
				   	echo "</br>";
				   	echo "</br>";
					echo "<b>Fecha y hora de su cita:</b> \n";
					echo $this->Time->format($citacionn, '%B %e, %Y %I:%M %p');
					echo "</br>";
					echo "</br>";
					echo '<b>Lugar:</b> Oficina  de Los Eventos del Libro, Casa del Patrimonio, Carrera 50 No 59 – 06 en Prado, Centro.';
					echo "</br>";
					echo "</br>";
					echo '<b>Su cita será atendida por:</b> Pablo López y Liliana Afanador';
					echo "</br>";
					echo "</br>";
					echo 'Recuerde adjuntar por este medio todos los documentos solicitados para hacer válida la asignación de su stand.';
					echo "</br>";
					echo "</br>";
					echo "•	Cámara de comercio, renovada a 2016, con una vigencia de 30 días.";
					echo "</br>";
					echo "•	RUT (actualizado de 2013 en adelante)";
					echo "</br>";
					echo "•	Cédula representante legal";
					echo "</br>";
					echo "</br>";
					echo 'Esperamos contar con su presencia en la 10a Fiesta del libro y la cultura. Agradecemos su participación, colaboración y puntualidad en las citas. En caso de no asistir a su cita o incumplir el horario de esta, su cupo será liberado y se asignará a otro postulante.'; 
					echo "</br>";
					echo "</br>";
					if($attached1!='' && $attached2!='' && $attached3!=''){
					echo "Sus archivos ya han sido adjuntados:";
					echo "</br>";
					echo "</br>";
					echo $attached1;
					echo "</br>";
					echo "</br>";
					echo $attached2;
					echo "</br>";
					echo "</br>";
					echo $attached3;
					}
					}else{
					echo 'De acuerdo a la convocatoria diligenciada anteriormente, fueron asignadas las citas para la adjudicación de stands, teniendo en cuenta la categoría y el orden de inscripción. A partir de estos parámetros se entregaron los cupos disponibles y, finalmente, se generó una lista de espera. '; 
					echo "</br>";
					echo "</br>";
					echo 'Actualmente según su inscripción, su entidad queda en la lista de espera.';
					echo "</br>";
					echo "</br>";
					echo 'En caso de resultar cupos disponibles después de atendidas las citas agendadas con quienes alcanzaron uno de los cupos, comenzaremos a asignar stands en el orden de los turnos.';
					echo "</br>";
					echo "</br>";
					echo 'Agradecemos su interés.';
					}
					echo "</br>";
					echo "</br>";
					echo 'Cordialmente';
					echo "</br>";
					echo "</br>";
					echo '<b>Pablo López Londoño</b>';
					echo "</br>";
					echo 'Coordinador Comercial Eventos del Libro';
					echo "</br>";
					echo 'comercializacion@fiestadellibroylacultura.com';
					echo "</br>";
					echo 'Teléfono: (034) 322 09 97 – Ext. 109';
					echo "</br>";
					echo 'Celular: 314 798 45 67';
					echo "</br>";
					echo "</br>";
				?>
				</tr>			
		</table>
	</div>	
	<div id=noprint>
	    <div class="actions option indexinscription" align="left">
	    <?php if($citacionn!=''){ ?>
			<?php if($attached1=='' || $attached2=='' || $attached3==''){
					echo $this->Html->link(__('Adjuntar archivos'), array('controller' => 'Inscriptions', 'action' => 'attached_add',$nitc)); 
			?>	
						<input type="submit" id="btnImprimir" name="imprimir" value="Imprimir" onclick="window.doPrint();">
						<?php //echo $this->Html->link(__('Adjuntar archivos'), array('controller' => 'Inscriptions', 'action' => 'attached_add',$nitc)); ?>
			<?php  } ?>
		<?php } ?>
		
		</div>
		<!--<div class="submit actions option imprimir" style="padding:24px ">
		<input type="submit" id="btnImprimir" name="imprimir" value="Imprimir" onclick="window.doPrint();">
		<?php //echo $this->Html->link(__('Adjuntar archivos'), array('controller' => 'Inscriptions', 'action' => 'attached_add',$nitc)); ?>
		</div>-->
   </div>
</div>
