<?php include "include/header.php";?>


<?php

if(isset($_POST['uplaud'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $img = $_FILES['img']['name'];
    $tmp_img = $_FILES['img'] ['tmp_name'];

    $target_file = "layout/images/$img";

    move_uploaded_file($tmp_img, $target_file);


    if(empty($name) || empty($pass) || empty($img)){
        
        $worning = "<div class='alert-danger'><p style='text-align: center;padding: 5px;'>ادخل جميع الحقول</p></div>";
    }
	else{
        $insert ="INSERT INTO `admin1`(`id`, `name`,`email`, `pass`, `img`) VALUES 
		('',
		'$name',
        '$email',
		'$pass',
		'$img')";
        $run = mysqli_query($con, $insert);

        if(isset($run)){
			header("location:index.php");
            // $success= "<div class='alert-success'><p style='text-align: center;padding: 5px;'>تم رفع البيانات</p></div>";
        }
     }
}
?>


                <!-- ==========start profile =============== -->
				<div class="col-md-12 top-me">
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
									<input type="text" id="name" name="name" class="form-control" placeholder="اسم المستخدم">
								</div>
							</div>
                            <div class="row form-group">
								<div class="col-md-12">
								<input type="email" id="name" name="email" class="form-control" placeholder="الريد الالكتروني">
								</div>
							</div>
                            <div class="row form-group">
								<div class="col-md-12">
									<input type="password" name="pass" id="name" class="form-control" placeholder="كلمة المرور">
								</div>
							</div>
                            <div class="row form-group">
								<div class="col-md-12">
                                <label class="pull-left">صورة</label>
									<input type="file" name="img" id="name" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<input type="submit" name="uplaud" value="تسجيل" class="btn btn-primary">
							</div>
	
						</form>	
					</div>
				</div>
				<!-- ==========end profile=============== -->
			</div>
		</div>
	</div>

	<div class="gtco-section">
		<div class="gtco-container">

		</div>
	</div>

	
	<!-- =========== start footer =============== -->

	<?php include "include/footer.php";?>

