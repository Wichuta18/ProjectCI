
        <h3>Edit Data</h3>
         
         <?php 
         
            echo form_open('offices/save_edit_Off');
            
            echo form_hidden('officeCode'); 
                
            
            echo form_label('officeCode'); 
            echo form_input(array('class'=>'form-control','name'=>'officeCode')); 
            echo "<br/>"; 
            
            echo form_label('city'); 
            echo form_input(array('class'=>'form-control','name'=>'city')); 
            echo "<br/>"; 
            echo form_label('phone'); 
            echo form_input(array('class'=>'form-control','name'=>'phone')); 
            echo "<br/>"; 
            echo form_label('addressLine1'); 
            echo form_input(array('class'=>'form-control','name'=>'addressLine1')); 
            echo "<br/>"; 
            echo form_label('addressLine2'); 
            echo form_input(array('class'=>'form-control','name'=>'addressLine2')); 
            echo "<br/>"; 
            echo form_label('state'); 
            echo form_input(array('class'=>'form-control','name'=>'state')); 
            echo "<br/>"; 
            echo form_label('country'); 
            echo form_input(array('class'=>'form-control','name'=>'country')); 
            echo "<br/>"; 
            echo form_label('postalCode'); 
            echo form_input(array('class'=>'form-control','name'=>'postalCode')); 
            echo "<br/>"; 
            echo form_label('territory'); 
            echo form_input(array('class'=>'form-control','name'=>'territory')); 
            echo "<br/>"; 
            echo form_submit(array('id'=>'submit','value'=>'Save Edit','class'=>'btn btn-warning')); 
            
            echo anchor(base_url().'index.php/offices', 'Back',array('class'=>'btn btn-default'));
 
            echo form_close(); 
         ?>