<?php session_start();
if(isset($_SESSION['userdata']->reg_id))
{
  $reg_id = $_SESSION['userdata']->reg_id;
}

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
  
  <?php include('menubar.php'); ?>

</head>
<body>

<div class="container">
  <h2>Basic Table</h2><table class="table">
    <thead>
      <tr>
        <th> image </tH>
        <th>product_name</th>
        <th>product price</th>
        <th>Product details</th>
        <th>action </th>
      </tr>
    </thead>
    <tbody>
      <?php  foreach ($sql as $product) { ?>
      <form>
       <tr>
        <td> <img src="http://localhost/ketul_mvc/product/<?php echo $product->p_image; ?>" height=100px; width=100px;>  </td>
        <td><?php echo $product->p_name; ?></td>
        <td><?php echo $product->p_price; ?></td>
        <td><?php echo $product->p_details; ?></td>

       <!--  <td> <?php if(isset($_SESSION['userdata'])){ ?> <a href="add_to_cart?reg_id=<?php echo  $reg_id; ?>&&p_id=<?php echo $product->p_id;?>"> Add to cart </a> <?php   } else { ?> <a href="">login</a> <?php  } ?> </tD> -->
          <td> <button type="button" onclick="addtocart(<?php echo $product->p_id; ?>,<?php echo $reg_id; ?>,<?php echo $product->p_price ?>)">Add to cart</button> </td>
           
          
      </tr>
       </form>
     <?php  } ?>
     
     
    </tbody>
  </table>
</div>

</body>
<script type="text/javascript">
function addtocart(p_id,user_id,p_price)
{
     var product_id = p_id;
     var user_id = user_id;
     var p_price = p_price;
    //alert(p_id);
   $.ajax({

      type: 'post',
      url:'add_to_cart',
      data:{product_id:product_id,user_id:user_id,p_price:p_price},
      success:function(data)
      {
        window.location.href = "http://localhost/ketul_mvc/cart_controller.php/showcart";
      }

  });
    

}

</script>
</html>


