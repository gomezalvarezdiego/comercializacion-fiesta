<?php
 
// Importamos la clase PHPExcel
App::import('Vendor', 'PHPExcel');
        
$objPHPExcel = new PHPExcel();
 
$objPHPExcel->getProperties()->setCreator("Leidy Johana Jaramillo")
                             ->setLastModifiedBy("Leidy Johana Jaramillo")
                             ->setTitle("Office 2007 XLSX Test Document")
                             ->setSubject("Office 2007 XLSX Test Document")
                             ->setDescription("Integracion cakephp 2.x y phpExcel.")
                             ->setKeywords("office 2007 openxml php")
                             ->setCategory("Test result file");

//agregamos los datos
$i=1;
$objPHPExcel->setActiveSheetIndex(0)
->setCellValue('A'.$i, 'Nit')
->setCellValue('B'.$i, 'Razon social')
->setCellValue('C'.$i, 'Nombre del representante')
->setCellValue('D'.$i, 'Documento del representante')
->setCellValue('E'.$i, 'Ciudad del representante')
->setCellValue('F'.$i, 'Telefono del representante')
->setCellValue('G'.$i, 'Celular del representante')
->setCellValue('H'.$i, 'Correo del representante')
->setCellValue('I'.$i, 'Nombre comercial')
->setCellValue('J'.$i, 'Nombre del contacto')
->setCellValue('K'.$i, 'Documento del contacto')
->setCellValue('L'.$i, 'Ciudad del contacto')
->setCellValue('M'.$i, 'Telefono del contacto')
->setCellValue('N'.$i, 'Celular del contacto')
->setCellValue('O'.$i, 'Correo del contacto')
->setCellValue('P'.$i, 'Camara de comercio')
->setCellValue('Q'.$i, 'Rut')
->setCellValue('R'.$i, 'Cedula')
->setCellValue('S'.$i, 'Fecha y hora de registro')
->setCellValue('T'.$i, 'Fecha y hora de la cita')
->setCellValue('U'.$i, 'Categoria');


foreach ($inscriptions as $inscription){
	 $i++;
  $objPHPExcel->setActiveSheetIndex(0)
              ->setCellValue('A'.$i, $inscription['Inscription']['nit'])
              ->setCellValue('B'.$i, $inscription['Inscription']['company_name'])
  			  ->setCellValue('C'.$i, $inscription['Inscription']['representative_name'])
 			  ->setCellValue('D'.$i, $inscription['Inscription']['representative_document'])
 			  ->setCellValue('E'.$i, $inscription['Inscription']['representative_city'])
 			  ->setCellValue('F'.$i, $inscription['Inscription']['representative_phone'])
 			  ->setCellValue('G'.$i, $inscription['Inscription']['representative_cellphone'])
 			  ->setCellValue('H'.$i, $inscription['Inscription']['representative_mail'])
 			  ->setCellValue('I'.$i, $inscription['Inscription']['trade_name'])
 			  ->setCellValue('J'.$i, $inscription['Inscription']['contact_name'])
 			  ->setCellValue('K'.$i, $inscription['Inscription']['contact_document'])
 			  ->setCellValue('L'.$i, $inscription['Inscription']['contact_city'])
 			  ->setCellValue('M'.$i, $inscription['Inscription']['contact_phone'])
 			  ->setCellValue('N'.$i, $inscription['Inscription']['cellphone'])
 			  ->setCellValue('O'.$i, $inscription['Inscription']['contanct_mail'])
 			  ->setCellValue('P'.$i, $inscription['Inscription']['attached1'])
 			  ->setCellValue('Q'.$i, $inscription['Inscription']['attached2'])
 			  ->setCellValue('R'.$i, $inscription['Inscription']['attached3'])
 			  ->setCellValue('S'.$i, $inscription['Date']['date_assignment'])
  			  ->setCellValue('T'.$i, $inscription['Date']['date_name']);
   
   $category_name='';
   foreach ($categories as $category){
  		if ($category['Category']['id_category']==$inscription['Date']['category_id']){ 
  			$objPHPExcel->setActiveSheetIndex(0)
  			->setCellValue('U'.$i,$category['Category']['category_name']);
  			$category_name=$category['Category']['category_name'];
  		}		
   }
  	
  if($category_name==''){
  $objPHPExcel->setActiveSheetIndex(0)
   ->setCellValue('U'.$i,'se encuentra en lista de espera');
   }

}
 
$objPHPExcel->getActiveSheet()->setTitle('Inscripciones comercializacion');
$objPHPExcel->setActiveSheetIndex(0);
 
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="inscripciones_comercializacion.xlsx"');
header('Cache-Control: max-age=0');
header('Pragma: public');
header('last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');//HTTP/1.1
header('Cache-Control: pre-check=0, post-check=0, max-age=0');//HTTP/1.1
header('Pragma: no-cache');
header('Expires: 0');
header('Content-Transfer-Enconding: none');
header('Content-Type: application/vnd.msexcel');//This should work for IE y Opera
header('Content-Type: application/x-msexcel');//This should work for the rest

 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;
?>
