    <!DOCTYPE html>
<html>
<head>
<title>Display Records</title>
</head>
 
<body>

  
<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>Id</th>
    <th>Frist Name</th>
    <th>Last Name</th>
    <th>Birthday</th>
    <th>Mobile no</th>
    <th>Email</th>
    <th>Password</th>
    <th>Gender</th>
  </tr>


 <?php 
  $i=1; 
 foreach($posts as $row){?>
     <tr>
         <td><?php echo $row->id;?></td>
         <td><?php echo $row->f_name;?></td>
         <td><?php echo $row->l_name;?></td>
         <td><?php echo $row->dob;?></td>
         <td><?php echo $row->m_no;?></td>
         <td><?php echo $row->email;?></td>
         <td><?php echo $row->pass;?></td>
        <td><?php echo $row->gender;?></td>
        <!--<td class='btn btn-circle btn-icon-only red'><a href='edit?id=".$post->id."'>edit</a></td>-->
        <td><a href="<?php echo base_url(); ?>welcome/update?edit=page&id=<?php echo $row->id; ?>">edit</a></td>
       
        <td><a href="<?php echo base_url(); ?>welcome/delete?delete=page&id=<?php echo $row->id; ?>">Delete</a></td>
      </tr>     
     <?php }?> 
       </table>
       
       
                                                    

</body>
</html>