   
      <?php 
	  
	 include "include/header.php";
	 
	 if(!isset($_SESSION['admin'])){
		 header("location:index.php");
	 }
	 else{

	
	 ?>
        	    <!-- ================= add the books========== -->
				
				<?php
				// fetch number books 
				$query = "SELECT id FROM books";
				$result = mysqli_query($con, $query);
				$books_num = mysqli_num_rows($result);

				// fetch number category 
				$query = "SELECT id FROM categories";
				$result = mysqli_query($con, $query);
				$cat_num = mysqli_num_rows($result);

				?>
				<div class="col-md-9 top-me">
					<div class="price-box"style="background-image: url(layout/images/img_2.jpg);height:500px;">
					<div class="bg-green">عدد العناصر</div>
					<br>
					<div class="container">
						<div class="row">
							<div class="col col-md-3" style="background-color:#EEEEEE;border-radius: 5px;height: 100px;">
								<p>عدد الكتب</p>
								<h5><?php echo $books_num; ?></h5>
							</div>
							<div class="col col-md-1"></div>
							<div class="col col-md-3" style="background-color:#EEEEEE;border-radius: 5px;height: 100px;">
								<p>عددالتصنيفات</p>
								<h5><?php echo $cat_num; ?></h5>
							</div>
						</div>
					</div>
						<!-- <img src="layout/images/book.png"height="700px" alt=""> -->
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