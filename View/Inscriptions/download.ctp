<?php
//$line= $inscriptions[0]['Inscription'];
/* $line= array_merge($line, array('nit'=>"",'company_name'=>"",'representative_name'=>"",'representative_city'=>"",'representative_cellphone'=>"",'representative_mail'=>"",'trade_name'=>"",'contact_name'=>"",
 		'contact_document'=>"",'contact_city'=>"",'contact_phone'=>"",'cellphone'=>"",'contanct_mail'=>"",'attached1'=>"",'attached2'=>"",
 		'attached3'=>"",'dir'=>"",'category_name'=>"",'date_assignment'=>"",'date_name'=>""));*/
 
$line= (array('nit'=>"",'company_name'=>"",'representative_name'=>"",'representative_city'=>"",'representative_cellphone'=>"",'representative_mail'=>"",'trade_name'=>"",'contact_name'=>"",
		'contact_document'=>"",'contact_city'=>"",'contact_phone'=>"",'cellphone'=>"",'contanct_mail'=>"",'attached1'=>"",'attached2'=>"",
		'attached3'=>"",'dir'=>"",'category_name'=>"",'date_assignment'=>"",'date_name'=>""));
 $line['nit']='Nit';
 $line['company_name']='Nonmbre Empresa';
 $line['representative_name']='Razón Social';
 $line['representative_city']='Ciudad Representante';
 $line['representative_cellphone']='Celular Representante';
 $line['representative_mail']='Correo Representante';
 $line['trade_name']='Nombre Comercial';
 $line['contact_name']='Nombre Contacto';
 $line['contact_document']='Cédula Contacto';
 $line['contact_city']='Ciudad Contacto';
 $line['contact_phone']='Teléfono Contacto';
 $line['cellphone']='Celular Contacto';
 $line['contanct_mail']='Corrreo Contacto';
 $line['attached1']='Adjunto 1';
 $line['attached2']='Adjunto 2';
 $line['attached3']='Adjunto 3';
 $line['dir']='Direccíon';
 $line['category_name']='Nombre Categoría';
 $line['date_assignment']='Fecha Registro';
 $line['date_name']='Fecha Cita';
 
 $this->Csv->addRow($line);
 //$this->Csv->addRow(array_keys($line));
 
 
 
 foreach ($inscriptions as $inscription)
 {
 	
 	$line['nit']=$inscription['Inscription']['nit'];
 	$line['company_name']=$inscription['Inscription']['company_name'];
 	$line['representative_name']=$inscription['Inscription']['representative_name'];
 	$line['representative_city']=$inscription['Inscription']['representative_city'];
 	$line['representative_cellphone']=$inscription['Inscription']['representative_cellphone'];
 	$line['representative_mail']=$inscription['Inscription']['representative_mail'];
 	$line['trade_name']=$inscription['Inscription']['trade_name'];
 	$line['contact_name']=$inscription['Inscription']['contact_name'];
 	$line['contact_document']=$inscription['Inscription']['contact_document'];
 	$line['contact_city']=$inscription['Inscription']['contact_city'];
 	$line['contact_phone']=$inscription['Inscription']['contact_phone'];
 	$line['cellphone']=$inscription['Inscription']['cellphone'];
 	$line['contanct_mail']=$inscription['Inscription']['contanct_mail'];
 	$line['attached1']=$inscription['Inscription']['attached1'];
 	$line['attached2']=$inscription['Inscription']['attached2'];
 	$line['attached3']=$inscription['Inscription']['attached3'];
 	$line['dir']=$inscription['Inscription']['dir'];
 	//$line['category_name']=$inscription['Date']['category_name'];
  $date_assignment=$inscription['Date']['date_assignment'];
    if(!$date_assignment==""){ 
      $line['date_assignment']=$inscription['Date']['date_assignment'];
    }
    else{
      $line['date_assignment']=$inscription['Inscription']['date_backup'];
    }
 	
 	$line['date_name']=$inscription['Date']['date_name'];

      //$line = $inscription['Inscription'];
      //$line = array_merge($line, array('category_name'=>"",'date_assignment'=>"",'date_name'=>""));
      
      //$date_assigment=$inscription['Date']['date_assignment'];
      //$date_name=$inscription['Date']['date_name'];
      
      //$line['date_assignment']=$date_assigment;
      //$line['date_name']=$date_name;
      

      if(!($inscription['Date']['category_id'])==''){

        foreach ($categories as $category){
        	if ($category['Category']['id_category']==$inscription['Date']['category_id']){
        		$category_name=$category['Category']['category_name'];
        		
        		$line['category_name']=$category_name;
        		
        	}
        }
      } 
      else
      {
        $line['category_name']='';
      }
      
      //debug($line);
       $line=recursiveSanitize($line);
       $this->Csv->addRow($line);
       //debug($inscription);
 }
 
 $filename='inscriptions';
 echo  $this->Csv->render($filename);
?>