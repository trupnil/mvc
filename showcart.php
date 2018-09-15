<!DOCTYPE html>
<html lang="en">
<head>
  <title>Show cart</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <?php include('menubar.php'); ?>
</head>
<body>

<div class="container">
  <h2>Your Cart</h2><table class="table">
    <thead>
      <tr>
        
        <th>product_name</th>
        <th>product price</th>
       
       
      </tr>
    </thead>
    <tbody>
     
     <?php foreach ($scart as $items) { ?>
      <tr>
        <td> <?php echo $items->p_name; ?> </td>
         <td> <?php echo $items->p_price; ?> </td>
         
          
          
      </tr>
       
     <?php  } ?>
      
       
   
     
    </tbody>
  </table>
  <form method="post">
    <label>id</label>
    <input type="text" readonly name="reg_id" value="<?php echo $_SESSION['userdata']->reg_id; ?>"><br>
    <label>name</label>

    <input type="text" name="name" ><br>
    <label> address </label>
    <textarea name="address"></textarea><br>
    <label>payment method</label><br>
    <input type="radio" name="payment" value="cod">Cash on delivery
    <input type="radio" name="payment" value="online">online <br>
    <input type="submit" name="submit" value="Place order">
    

  </form>
</div>

</body>
</html>


