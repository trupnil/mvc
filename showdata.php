<?php //echo "<pre>"; print_r($all_data);  echo "</pre>";

//foreach ($all_data as $data) {
 // echo "<pre>"; print_r($data);  echo "</pre>";

 //print_r($data->reg_id); 
//}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Basic Table</h2>
       <form method = "post">  
  <table class="table">
    <thead>
      <tr>
        <th>#</tH>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>city</th>
        <th colspan="2">Action</tH>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($all_data as $data) { ?>

      <tr>
        <td> <input type="checkbox" name="chk[]" value = "<?php echo $data->reg_id; ?>">   </td>
        <td> <?php echo $data->reg_fname; ?> </td>
        <td> <?php echo $data->reg_lname; ?> </td>
        <td> <?php echo $data->reg_email; ?> </td>
        <td>  <?php echo $data->city_name; ?></td>
        <td> <a href="delete_data?id=<?php echo base64_encode($data->reg_id); ?>">Delete</a> </td>
         <td> <a href="edit_data?id=<?php echo $data->reg_id; ?>">Edit</a> </td>
      </tr>
       
     <?php  } ?>
     <tr> <tH> <input type="submit" name="delete_all" value="Delete_selected">  </tH> </tr>
      
 
     
      
    </tbody>
  </table>
</form>
</div>

</body>
</html>
