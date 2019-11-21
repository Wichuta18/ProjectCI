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
  <h2>Table Offices</h2>  
  <a href="http://localhost/ProjectCI/index.php/offices/addOff/" class="btn btn-success">ADD</a><br><br>

  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-black">
        <th class="w3-blue">OfficeCode</th>
        <th class="w3-blue">City</th>
		    <th class="w3-blue">Phone</th>
		    <th class="w3-blue">>AddressLine1</th>
	    	<th class="w3-blue">AddressLine2</th>
        <th class="w3-blue">EDIT</th>
        <th class="w3-blue">DELETE</th>
      </tr>
    </thead>
    
	<?php  foreach ($officelist->result() as $row) { ?>
		<tr class="w3-hover-Sand">
                <td><?=$row->officeCode ?></td>
                <td><?=$row->city ?></td>
                <td><?=$row->phone?></td>
                <td><?=$row->addressLine1 ?></td>
				<td><?=$row->addressLine2 ?></td>
        <?= "<td><a href='".base_url()."index.php/offices/edit_form_Off/".$row->officeCode."' class='btn btn-warning'>Edit</a></td>";?>
        <?=" <td><a href='".base_url()."index.php/offices/deleter_Off/".$row->officeCode."' class='btn btn-danger'>Delete</a></td>";?>
      
            </tr>
            <?php  }  ?>
    </tr>
   
  </table>
</div>

</body>

</html> 
