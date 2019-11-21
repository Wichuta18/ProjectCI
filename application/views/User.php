<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
  <h2>Table User</h2>


  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-blue">
      <th class="w3-green">ID User</th>
      <th class="w3-green">Username</th>
      <th class="w3-green">Password</th>
      <th class="w3-green">Firstname</th>
      <th class="w3-green">Lastname</th>

      </tr>
    </thead>
    
	<?php  foreach ($userlist->result() as $row) { ?>
		<tr class="w3-hover-Lime">
                <td><?=$row->id ?></td>
                <td><?=$row->username ?></td>
                <td><?=$row->password ?></td>
                <td><?=$row->firstname ?></td>
				        <td><?=$row->lastname ?></td>
            </tr>
            <?php  }  ?>
    </tr>
   
  </table>
</div>

</body>
</html> 
