   
      <?php 
      include "include/header.php";
      
      if(!isset($_SESSION['admin'])){
        header("location:index.php");
      }
      else{
      ?>
	  <?php
	 	if(isset($_POST['upload'])){
			 $name_cat = $_POST['name_cat'];
			 if(empty($name_cat)){
				$worning = "<div class='alert-danger'><p style='text-align: center;padding: 5px;'>الحقل فارع</p></div>";
			 }
			 else{
				 $insert = "INSERT INTO `categories`(name_cat) VALUES ('$name_cat')";
				 $run = mysqli_query($con , $insert);
				 if(isset($run)){
					
					$success= "<div class='alert-success'><p style='text-align: center;padding: 5px;'>تم رفع البيانات</p></div>";
					 header('REFRESH:1');
				}
			 }
		 } 
	  ?>
                <!-- ==========category=============== -->
				<div class="col-md-9 top-me">
				<?php
					if(isset($worning)){
						echo $worning;
					}elseif(isset($success)){
						echo $success;
					};
					?>
					<div class="price-box">
						<div class="bg-green">اضافة التصنيفات</div>

						<form action="" method="POST">
                            <br>
							<div class="row form-group">
								<div class="col-md-12">
									<input type="text" name="name_cat" id="name" class="form-control" placeholder="اسم التصنيف">
								</div>
								
							</div>
							<div class="form-group">
							<input type="submit" name="upload" value="اضافة" class="btn btn-primary">
							</div>
	
						</form>	
					</div>
				</div>
				<!-- ==========end category=============== -->


				<!-- =========all controll ===============-->
				<?php include "include/allControll.php";?>
				<!-- =========End all controll ===============-->
			</div>
		</div>
	</div>

	<div class="gtco-section">
		<div class="gtco-container">

		</div>
	</div>

	
	<!-- =========== start footer =============== -->

	<?php include "include/footer.php";?>

<?php } ?>