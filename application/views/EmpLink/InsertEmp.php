<h3>Add Data</h3>
         
         <?php 
            echo form_open('Employee/saveEmp');
            
            echo form_label('employeeNumber'); 
            echo form_input(array('class'=>'form-control','name'=>'employeeNumber')); 
            echo "<br/>"; 
            
            echo form_label('lastName'); 
            echo form_input(array('class'=>'form-control','name'=>'lastName')); 
            echo "<br/>"; 
            echo form_label('firstName'); 
            echo form_input(array('class'=>'form-control','name'=>'firstName')); 
            echo "<br/>"; 
            echo form_label('extension'); 
            echo form_input(array('class'=>'form-control','name'=>'extension')); 
            echo "<br/>"; 
            echo form_label('email'); 
            echo form_input(array('class'=>'form-control','name'=>'email')); 
            echo "<br/>"; 
            echo form_label('officeCode'); 
            echo form_input(array('class'=>'form-control','name'=>'officeCode')); 
            echo "<br/>"; 
            echo form_label('reportsTo'); 
            echo form_input(array('class'=>'form-control','name'=>'reportsTo')); 
            echo "<br/>"; 
            echo form_label('jobTitle'); 
            echo form_input(array('class'=>'form-control','name'=>'jobTitle')); 
            echo "<br/>"; 
            
            echo form_submit(array('id'=>'submit','value'=>'Add','class'=>'btn btn-success')); 
            
            echo anchor(base_url().'index.php/Employee', 'Back',array('class'=>'btn btn-default'));
            
            echo form_close(); 
         ?>