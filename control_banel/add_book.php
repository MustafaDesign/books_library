   
      <?php 
	  
	 include "include/header.php";
	 
	 if(!isset($_SESSION['admin'])){
		 header("location:index.php");
	 }
	 else{

	
	 ?>

     <?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name_book = $_POST['name'];
    $cat_book = $_POST['cat'];
    $author_book = $_POST['author'];
    $content_book = $_POST['content'];
    $img_book = $_FILES['img']['name'];
    $tmp_img = $_FILES['img'] ['tmp_name'];
    $pdf_book = $_FILES['pdf']['name'];
    $tmp_pdf = $_FILES['pdf'] ['tmp_name'];

    $target_img = "../layout/img_book/$img_book";
    $target_pdf = "../layout/pdf/$pdf_book";
    
    move_uploaded_file($tmp_img, $target_img);
    move_uploaded_file($tmp_pdf, $target_pdf);


    if(empty($name_book) || empty($cat_book) || empty($author_book) || empty($content_book) || empty($img_book) || empty($pdf_book)){
        
        $worning = "<div class='alert-danger'><p style='text-align: center;padding: 5px;'>ادخل جميع الحقول</p></div>";
    }
	else{
        $insert_book ="INSERT INTO `books`(`id`, `name_book`, `cat_book`, `author_book`, `img_book`, `pdf_book`, `content_book`) VALUES
		('',
		'$name_book',
		'$cat_book',
		'$author_book',
		'$img_book',
		'$pdf_book',
		'$content_book')";
        $run_book = mysqli_query($con, $insert_book);

        if(isset($run_book)){
			
            $success= "<div class='alert-success'><p style='text-align: center;padding: 5px;'>تم رفع البيانات</p></div>";
			header("REFRESH:1");
			// header("location:dashboared.php");
        }
     }
}
?>

<!-- ===== start fetch category======= -->
<?php
      $select_cat ="SELECT * FROM `categories`";
      $run_cat = mysqli_query($con , $select_cat);
?>
<!-- end fetch category -->

        	    <!-- ================= add the books========== -->
				<div class="col-md-9 top-me">
				<?php
				if(isset($worning)){
					echo $worning;
				}elseif(isset($success)){
					echo $success;
				};
				?>
					<div class="price-box">
						<div class="bg-green">اضافة كتاب</div>

						<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
							<br>
							<div class="row form-group">
								<div class="col-md-12">
									<input type="text" id="name"name="name" class="form-control" placeholder="اسم الكتاب">
								</div>
							</div>
	
							<div class="row form-group">
								<div class="col-md-12">
									<select class="form-control" name="cat" id="exampleFormControlSelect1">
										<!-- ====Categories supplement====== -->
										<option selected>اختر تصنيف</option>
                                        <?php while($row_cat = mysqli_fetch_assoc($run_cat)){ ?>

										<option><?php echo $row_cat['name_cat'];?></option>

                                        <?php } ?>
									  </select>
								</div>
							</div>
	
							<div class="row form-group">
								<div class="col-md-12">
									<input type="text"name="author" id="subject" class="form-control" placeholder="الكاتب">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12">
									<label class="pull-left">صورة</label>
									<input type="file"name="img" id="subject" class="form-control" value="اختر صورة">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12">
									<label class="pull-left" for="subject">ملف الكتاب</label>
									<input type="file"name="pdf" id="subject" class="form-control">
								</div>
							</div>
	
							<div class="row form-group">
								<div class="col-md-12">
									<textarea name="content" id="message" cols="30" rows="3" class="form-control" placeholder="نبذة عن الكتاب"></textarea>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" name="ubload_book" value="اضافة" class="btn btn-primary">
							</div>
	
						</form>	
					</div>
				</div>
		        <!-- ============end add the books =============-->
                
				<!-- =========all controll ===============-->
				<?php include "include/allControll.php";?>
				<!-- =========End all controll ===============-->
			</div>
		</div>
	</div>

	<!-- <div class="gtco-section">
		<div class="gtco-container">

		</div>
	</div> -->

	<!-- =========== start footer =============== -->

	<?php include "include/footer.php";?>

	<?php
	 }
	?>