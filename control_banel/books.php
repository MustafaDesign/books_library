   
      <?php
       include "include/header.php";

       if(!isset($_SESSION['admin'])){
        header("location:index.php");
      }
      else{
       ?>
	    <!-- fetch data from books -->
      <?php
	    if(isset($_GET['page'])){
        $page=$_GET['page'];
      }else{
        $page = 1;
      }
      $limit = 4;
      $start = ($page - 1)* $limit;
      $select_book ="SELECT * FROM `books` ORDER BY id DESC LIMIT $start , $limit";
      $result_book = mysqli_query($con , $select_book);

      ?>
      
      <!-- ==========delete books============= -->
      <?php
      if(isset($_GET['id'])){
        $id =$_GET['id'];
        $delete = "DELETE FROM `books` WHERE id ='$id'";
        mysqli_query($con, $delete);
        // header('REFRESH:0.5');
      }
      ?>
      <!-- ==========end  delete books============= -->

      
   				<!-- ============start books=========== -->

				<div class="col-md-9 top-me">
					<div class="price-box">
						<div class="bg-green">الكتب</div>
                        <table class="table direc-me">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">الرقم</th>
                                <th scope="col">اسم الكتاب</th>
                                <th scope="col">اسم الكاتب</th>
                                <th scope="col">تاريخ الاضافة</th>
                                <th scope="col">العمليات</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php 
                              $number =0; 
                              while($row_book= mysqli_fetch_assoc($result_book)){ 
                                $number++;
                              ?>
                              <tr>
                                <th><?php echo $number; ?></th>
                                <td><?php echo $row_book['name_book']; ?></td>
                                <td><?php echo $row_book['author_book']; ?></td>
                                <td><?php echo $row_book['date_book']; ?></td>
                                <td class="me-l">
                                    <a href="books.php?id=<?php echo $row_book['id']; ?>" class="btn btn-danger ptn-me confirm">Delete</a>
                                    <a href="#"class="btn btn-info ptn-me"> Update</button></a>
                                </td>
                              </tr>
                            <?php }  ?>
                            </tbody>
                        </table>
                        <hr>
                        <!-- ======start pagination =========== -->
                        <?php
                            $select_book_p ="SELECT * FROM `books`";
                            $run_book_p = mysqli_query($con , $select_book_p);
                            $total_book = mysqli_num_rows($run_book_p);
                            $total_pages = ceil($total_book/$limit);
                            //  echo $total_pages;
                        ?>
                        <nav aria-label="Page navigation example">
                          <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="books.php?page=<?php if(($page-1)>0){echo $page-1;}else{echo $page=1;} ?>">السابق</a></li>
                            <?php
                            for($i = 1; $i <= $total_pages; $i++){
                            ?>
                            <li class="page-item"><a class="page-link" href="books.php?page=<?php echo $i;?>"><?php echo $i;?></a></li>
                            <?php
                            }
                            ?>
                            
                            <li class="page-item"><a class="page-link" href="books.php?page=<?php if(($page+1)< $total_pages){echo $page+1;}elseif(($page+1)){echo $total_pages;} ?>">التالي</a></li>
                          </ul>
                        </nav>
                        <!-- =======end pagination============= -->
						<a href="add_book.php" class="btn btn-default btn-sm bg-green">اضافة كتاب</a>
					</div>
				</div>
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
<?php } ?>