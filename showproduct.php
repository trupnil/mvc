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
  <h2>Basic Table</h2><table class="table">
    <thead>
      <tr>
        <th> image </tH>
        <th>product_name</th>
        <th>product price</th>
        <th>Product details</th>
      </tr>
    </thead>
    <tbody>
      <?php  foreach ($sql as $product) { ?>
       <tr>
        <td> <img src="product/<?php echo $product->p_image; ?>">  </td>
        <td><?php echo $product->p_name; ?></td>
        <td><?php echo $product->p_price; ?></td>
        <td><?php echo $product->p_details; ?></td>
      </tr>
       
     <?php  } ?>
     
     
    </tbody>
  </table>
</div>

</body>
</html>
