<?php
 $line= $inscriptions[0]['Inscription'];
 $line= array_merge($line, array('category_name'=>""));
 $this->Csv->addRow(array_keys($line));
 foreach ($inscriptions as $inscription)
 {
      $line = $inscription['Inscription'];
      $line = array_merge($line, array('category_name'=>""));
      
      foreach ($categories as $category){
      	if ($category['Category']['id_category']==$inscription['Date']['category_id']){
      		$category_name=$category['Category']['category_name'];
      		$line['category_name']=$category_name;
      	}
      }
      
      //debug($line);
      
       $this->Csv->addRow($line);
       //debug($inscription);
 }
 
 $filename='inscriptions';
 echo  $this->Csv->render($filename);
?>