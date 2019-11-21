<!DOCTYPE html>
<html>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>

<div class="w3-container">
  <h2>Table Employees</h2>

  <a href="http://localhost/ProjectCI/index.php/employee/addEmp/"  class="btn btn-success">ADD</a><br><br>
  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-black">
      <th class="w3-pink">EmployeeNumber</th>
      <th class="w3-pink">FirstName</th>
      <th class="w3-pink">LastName</th>
      <th class="w3-pink">Extension</th>
      <th class="w3-pink">Email</th>
      <th class="w3-pink">>OfficeCode</th>
      <th class="w3-pink">ReportsTo</th>
      <th class="w3-pink">JobTitle</th>
      <th class="w3-pink">EDIT</th>
      <th class="w3-pink">>DELETE</th>
      </tr>
    </thead>
    
	<?php  foreach ($emplist->result() as $row) { ?>
		<tr class="w3-hover-Aqua">
                <td><?=$row->employeeNumber ?></td>
                <td><?=$row->firstName ?></td>
                <td><?=$row->lastName ?></td>
                <td><?=$row->extension ?></td>
				        <td><?=$row->email ?></td>
                <td><?=$row->officeCode ?></td>
                <td><?=$row->reportsTo ?></td>
                <td><?=$row->jobTitle ?></td>
				       
                <?="<td><a href='".base_url()."index.php/Employee/edit_form_Emp/" .$row->employeeNumber."' class='btn btn-warning'>Edit</a></td>";?>
                <?="<td><a href='" .base_url()."index.php/Employee/deleter_Emp/".$row->employeeNumber."' class='btn btn-danger'>Delete</a></td>";?>
                
				
            </tr>
            <?php  }  ?>
    </tr>
   
  </table>
</div>

</body>
</html> 
