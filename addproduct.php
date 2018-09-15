<html>
<head>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>
<form method="POST" enctype= 'multipart/form-data' >
	<label>select main category</label>
	<select name="cat_id" id="cat_id">
		<option>--select category--</option>
		<?php
		foreach ($allcat as $data) { ?>
		 		<option value="<?php echo $data->cat_id; ?>"><?php echo $data->category_name; ?></option>
		<?php } 
		?>
	</select><br>
	<label>select sub category</label>
	<select name="sub_id" id="sub_id">
		<option>--select sub category--</option>
		
	</select><br>
<lable>Add product name</lable>
<input type="text" name="p_name" > <br>
<lable>Add product price</lable>
<input type="text" name="p_price" > <br>
<lable>Add product image</lable>
<input type="file" name="p_image" > <br>
<lable>Add product details</lable>
 <textarea name="p_details"></textarea>
<input type="submit" name="product" value="Add product Here">

</form>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){

		$('#cat_id').change(function(){

			var cat_id = $('#cat_id').val();
			//alert(cat_id);

			$.ajax({
				type:'POST',
				url:'filter_sub',
				data:{cat_id:cat_id},
				success:function(data)
				{
					$('#sub_id').html(data);

				}


			});
		});
	});

</script>