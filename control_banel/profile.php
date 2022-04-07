
	<?php 
	

	include "include/header.php";
	
	if(!isset($_SESSION['admin'])){
		header("location:index.php");

	}
	  else{
 
	 
	  ?>
<?php


if(isset($_POST['uplaud'])){
    $name = $_POST['name'];
	$email = $_POST['email'];
    $pass = $_POST['pass'];
    $img = $_FILES['img']['name'];
    $tmp_img = $_FILES['img'] ['tmp_name'];

    $target_file = "layout/images/$img";

    move_uploaded_file($tmp_img, $target_file);


    if(empty($name)|| empty($email) || empty($pass)){
        
        $worning = "<div class='alert-danger'><p style='text-align: center;padding: 5px;'>ادخل جميع الحقول</p></div>";
    }
	else{
        $update ="UPDATE admin1 SET 
		name='$name',
		email='$email',
		pass='$pass',
		img='$img' WHERE name = $user";
        $run = mysqli_query($con, $update);

        if(isset($run)){
      
            $success= "<div class='alert-success'><p style='text-align: center;padding: 5px;'>تم رفع البيانات</p></div>";
			header("REFRESH:2");
			header("location:logout.php");
        }
     }
}
?>


                <!-- ==========start profile =============== -->
				<div class="col-md-9 top-me">
					<?php
					if(isset($worning)){
						echo $worning;
					}elseif(isset($success)){
						echo $success;
					};
					?>
					<div class="price-box">
						<div class="bg-green">المدير</div>

						<form action="" method="POST" enctype="multipart/form-data">
                            <br>
							<div class="row form-group">
								<div class="col-md-12">
									<input type="text" id="name" name="name" class="form-control" placeholder="<?php echo $fetch['name'];?>">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12">
									<input type="email" id="name" name="email" class="form-control" placeholder="<?php echo $fetch['email'];?>">
								</div>
							</div>
                            <div class="row form-group">
								<div class="col-md-12">
									<input type="password" name="pass" id="name" class="form-control" placeholder="<?php echo $fetch['pass'];?>">
								</div>
							</div>
                            <div class="row form-group">
								<div class="col-md-12">
                                	<img style="width: 50px; height: 50px;border-radius: 50%;float:left;" src="layout/images/<?php echo $fetch['img'];?>">
									<input type="file" name="img" id="name" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<input type="submit" name="uplaud" value="تعديل" class="btn btn-primary">
							</div>
	
						</form>	
					</div>
				</div>
				<!-- ==========end profile=============== -->


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

<?php }?>