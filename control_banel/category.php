   
      <?php 
      include "include/header.php";
      
      if(!isset($_SESSION['admin'])){
        header("location:index.php");
      }
      else{
      ?>
	    <!-- fetch data from categories -->
      <?php
	    if(isset($_GET['page'])){
        $page=$_GET['page'];
      }else{
        $page = 1;
      }
      $limit = 4;
      $start = ($page - 1)* $limit;
      $select_cat ="SELECT * FROM `categories` ORDER BY id DESC LIMIT $start , $limit";
      $run_cat = mysqli_query($con , $select_cat);

      ?>

      <!-- ==========delete category============= -->
      <?php
      if(isset($_GET['id'])){
        $id =$_GET['id'];
        $delete = "DELETE FROM `categories` WHERE id ='$id'";
        mysqli_query($con, $delete);
      }
      ?>
      <!-- ==========end  delete category============= -->
				<div class="col-md-9 top-me">
					<div class="price-box">
						<div class="bg-green">التصنيفات</div>
                        <table class="table direc-me">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">الرقم</th>
                                <th scope="col">اسم التصنيف</th>
                                <th scope="col">تاريخ الاضافة</th>
                                <th scope="col">العمليات</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $numper = 0;
                              while($fetch_cat = mysqli_fetch_assoc($run_cat)){
                                $numper++;
                              ?>
                              <tr>
                                <th><?php echo $numper; ?></th>
                                <td><?php echo $fetch_cat['name_cat']; ?></td>
                                <td><?php echo $fetch_cat['date_cat']; ?></td>
                                <td class="me-l">
                                    <a href="category.php?id=<?php echo $fetch_cat['id']; ?>" class="btn btn-danger ptn-me confirm">Delete</a>
                                    <a href="edit_cat.php?id=<?php echo $fetch_cat['id']; ?>"class="btn btn-info ptn-me"> Update</button></a>
                                </td>
                              </tr>
                              <?php } ?>
                            </tbody>
                        </table>
                        <hr>
                        <!-- ======start pagination =========== -->
                        <?php
                            $select_cat_p ="SELECT * FROM `categories`";
                            $run_cat_p = mysqli_query($con , $select_cat_p);
                            $total_cat = mysqli_num_rows($run_cat_p);
                            $total_pages = ceil($total_cat/$limit);
                            // echo $total_pages;
                        ?>
                        <nav aria-label="Page navigation example">
                          <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="category.php?page=<?php if(($page-1)>0){echo $page-1;}else{echo $page=1;} ?>">السابق</a></li>
                            <?php
                            for($i = 1; $i <= $total_pages; $i++){
                            ?>
                            <li class="page-item"><a class="page-link" href="category.php?page=<?php echo $i;?>"><?php echo $i;?></a></li>
                            <?php
                            }
                            ?>
                            
                            <li class="page-item"><a class="page-link" href="category.php?page=<?php if(($page+1)< $total_pages){echo $page+1;}elseif(($page+1)){echo $total_pages;} ?>">التالي</a></li>
                          </ul>
                        </nav>
                        <!-- =======end pagination============= -->
						<a href="add_cat.php" class="btn btn-default btn-sm bg-green">اضافة كتاب</a>
					</div>
				</div>

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