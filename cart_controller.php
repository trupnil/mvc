<?php

include("Model.php");

class cart extends Model{


	public function __construct()
	{
		parent::__construct();

		switch($_SERVER['PATH_INFO'])
		{
			case '/addcategory':
			include('addcategory.php');
			if(isset($_REQUEST['submit']))
			{
				$category_name = $_POST['category'];
				echo $category_name;
				$data = array("category_name" => $category_name);
				$insert_cat = $this->insert("category",$data);
				if($insert_cat)
				{
					echo "category added";
				}
			}
			break;
			case '/addsubcategory':
			$allcat = $this->select_all("category");
			//print_r($allcat);
			include('addsubcategory.php');
			if(isset($_REQUEST['sub_cat']))
			{
				$cat_id = $_POST['cat_id'];
				$sub_name = $_POST['sub_category'];
				$data = array("sub_name" => $sub_name, "cat_id"=>$cat_id);
				$addsub = $this->insert("subcategory",$data);
				if($addsub)
				{
					echo "category added";
				}
			}
			break;
			case '/addproduct':
			$allcat = $this->select_all("category");
			$allsub = $this->select_all("subcategory");
			include('addproduct.php');
			if(isset($_POST['product']))
			{
				$c_id = $_POST['cat_id'];
				$s_id = $_POST['sub_id'];
				$p_name = $_POST['p_name'];
				$p_price = $_POST['p_price'];
				$p_details = $_POST['p_details'];

				$image_name = $_FILES['p_image']['name'];
				$image_type = $_FILES['p_image']['type'];
				$image_size = $_FILES['p_image']['size'];
				$tmp_name = $_FILES['p_image']['tmp_name'];
				$new_path = ('product/'.$image_name);
				move_uploaded_file($tmp_name, $new_path);
				$data = array(
					"p_name" =>$p_name,
					"p_price" => $p_price,
					"p_image"=>$image_name,
					"p_details" =>$p_details,
					"c_id" =>$c_id,
					"s_id" =>$s_id
                      );
				//print_r($data); exit();
				$p_insert = $this->insert("product",$data);

			}
			break;
			case'/filter_sub';

			if(isset($_POST['cat_id']))
			{
				$where =array("cat_id"=>$_POST['cat_id']);
				$sub = $this->select_where("subcategory",$where);
				
				foreach ($sub as $data) { ?>
		 		<option value="<?php echo $data->sub_id; ?>"><?php echo $data->sub_name; ?></option>


							<?php 	}
					
			}
			
			break;
			case '/showproduct':
			
			$sql = $this->join_three("product","category","subcategory","product.c_id= category.cat_id","product.s_id= subcategory.sub_id");

			//print_r($sql);
			//TODO image

			include('showproduct.php');
			break;

				case '/user_show';
				$sql = $this->join_three("product","category","subcategory","product.c_id= category.cat_id","product.s_id= subcategory.sub_id");
				include("user_show.php");
				break;

				case '/add_to_cart':
					
					//$reg_id = $_GET['reg_id'];
					//$p_id = $_GET['p_id'];
				    $p_id = $_POST['product_id'];
					$reg_id = $_POST['user_id'];
					$p_price = $_POST['p_price'];
			       // echo $p_id;
					$data = array("user_id"=>$reg_id,"product_id"=>$p_id,"p_price"=>$p_price);
					$cart_insert = $this->insert("cart",$data);
					if($cart_insert)
					{
						echo  "oke";
						//header('refresh:1;showcart');
					}


					
					break;

					case '/showcart':
                    
                     
						session_start();
					 $reg_id = $_SESSION['userdata']->reg_id;
					 //echo $reg_id;
					  $where = array("user_id"=>$reg_id,"status" => 0);
					  $scart = $this->join_three_where("cart","reg","product","`cart`.`user_id` = `reg`.`reg_id`","`cart`.`product_id` = `product`.`p_id`",$where);
					  include('showcart.php');

					  if(isset($_REQUEST['submit']))
					{

						
						$order_id = "ORD".rand();
				//echo $order_id;
				$reg = $_POST['reg_id'];
				$name= $_POST['name'];
				$address = $_POST['address'];
				$payment = $_POST['payment'];
				$where = array("user_id" =>$reg,"status"=>0);

				$data = array(
					"order_id" => $order_id,
					"name" => $name,
					"address" => $address,
					"payment" => $payment,
					"status" => 1 );
			$update_cart = $this->update_record("cart",$data,$where);

			}


			    
                        break;

					case '/uproduct':
				$sql = $this->join_three("product","category","subcategory","product.c_id= category.cat_id","product.s_id= subcategory.sub_id");
				include("uproduct.php");
				break;
				case '/save_order':
				 



				break;

				

		}

	}

}

$cart = new cart;

 ?>