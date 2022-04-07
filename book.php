
<?php include('include/header.php');?>

<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];
}

if(isset($_GET['category'])){
	$cat = $_GET['category'];
}

$query_by_id = "SELECT * FROM books WHERE id = '$id'";
$result = mysqli_query($con , $query_by_id);
$fetch = mysqli_fetch_assoc($result);

?>
			<!-- <div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Most Popular Destination</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div> -->
			<div class="row">

				<div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="fh5co-card-item">
                        <div class="fh5co-text col-lg-7 col-md-7 col-sm-12">
                            <h2><?php echo $fetch['name_book']; ?></h2>
                            <p><?php echo $fetch['content_book']; ?></p>
							<br><br><br><br>
							<div class="col-lg-3 col-md-3 col-sm-6">
							<a href="layout/pdf/<?php echo $fetch['pdf_book']; ?>" download ><span class="btn btn-primary">تحميل </span></a>
							</div>
							<div class="fh5co-text col-lg-6 col-md-6 col-sm-12">
								<span>المؤلف: <a href="author.php?author=<?php echo $fetch['author_book']; ?>"><?php echo $fetch['author_book']; ?></a></span>
								<span>___</span>
								<span>تاريخ الاضافة: <?php echo $fetch['date_book']; ?></span>
							</div>

                            
                        </div>

						<figure class="col-md-5 col-lg-5 col-sm-12">
							<div class="overlay"></div>
							<img src="layout/img_book/<?php echo $fetch['img_book']; ?>" alt="Image" class="img-responsive">
						</figure>
					</div>
				</div>
			</div>
		</div>
	</div>
    <hr>
    <!-- =============== Related books =================-->

	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>كتب ذات صلة</h2>
				</div>
			</div>
			<div class="row">
	<?php
	$query_by_cat = "SELECT * FROM books WHERE cat_book ='$cat'";
	$result_by_cat = mysqli_query($con , $query_by_cat);
	while($fetch_by_cat = mysqli_fetch_assoc($result_by_cat)){
	?>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="book.php?id=<?php echo $fetch_by_cat['id']; ?> &&category=<?php echo $fetch_by_cat['cat_book']; ?>" class="fh5co-card-item">
						<figure>
							<div class="overlay"></div>
							<img src="layout/img_book/<?php echo $fetch_by_cat['img_book']; ?>" class="img-responsive"/>
						</figure>
						<div class="fh5co-text">
							<h2><?php echo $fetch_by_cat['name_book']; ?></h2>
							<p><?php echo mb_substr($fetch_by_cat['content_book'],0,180,"UTF-8"); ?></p>
							<p><span class="btn btn-primary">تحميل الكتاب</span></p>
						</div>
					</a>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	

	<?php include('include/footer.php');?>