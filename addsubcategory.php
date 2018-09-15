<html>
<head>
</head>
<body>
<form method="POST" >
	<label>select main category</label>
	<select name="cat_id">
		<option>--select category--</option>
		<?php
		foreach ($allcat as $data) { ?>
		 		<option value="<?php echo $data->cat_id; ?>"><?php echo $data->category_name; ?></option>
		<?php } 
		?>
	</select>
<lable>sub category name</lable>
<input type="text" name="sub_category" > <br>
<input type="submit" name="sub_cat" value="Add Sub Category">

</form>
</body>
</html>