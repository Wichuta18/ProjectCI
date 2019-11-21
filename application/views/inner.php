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
  <h2>Join Table</h2>

  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-black">
      <th class="w3-orange">EmployeeNumber</th>
      <th class="w3-orange">FirstName</th>
      <th class="w3-orange">OfficeCode</th>
      <th class="w3-orange">ReportsTo</th>
      <th class="w3-orange">JobTitle</th>

      </tr>
    </thead>
    
	<?php  foreach ($result as $row) { ?>
		<tr class="w3-hover-Aqua">
                <td><?=$row->employeeNumber ?></td>
                <td><?=$row->firstName ?></td>
                <td><?=$row->officeCode ?></td>
                <td><?=$row->reportsTo ?></td>
                <td><?=$row->jobTitle ?></td>
			
            </tr>
            <?php  }  ?>
    </tr>
   
  </table>
</div>

</body>
</html> 
