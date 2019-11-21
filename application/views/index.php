<html> 
   <head>  
      <title>Hello CodeIgniter</title>  
   </head> 
   <body>  
        <h2><?php echo $this->session->flashdata('item'); ?></h2>  
        <?php echo $str; ?>
        <a href="<?=base_url('index.php/form/create') ?>"><button>create</button></a>
        <table>
            <tr>
                <td>id</td>
                <td>username</td>
                <td>password</td>
                <td>email</td>
            </tr>


            <?php  foreach ($result->result() as $row) { ?>
            <tr>
                <td><?=$row->id ?></td>
                <td><?=$row->username ?></td>
                <td><?=$row->password ?></td>
                <td><?=$row->email ?></td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
            <?php  }  ?>
        </table>
</body> 