
<?php include('include/header.php');?>

<?php
if(isset($_GET['author'])){
	$author = $_GET['author'];
}

$query_by_author = "SELECT * FROM books WHERE author_book = '$author'";
$result = mysqli_query($con , $query_by_author);

?>
			<!-- <div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Most Popular Destination</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div> -->
		</div>
	</div>
    <hr>
    <!-- =============== Related books =================-->

	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>كتب للمؤلف</h2>
				</div>
			</div>
			<div class="row">
                <?php
                if(mysqli_num_rows($result) > 0){
                    while ($row=mysqli_fetch_assoc($result)) {

                ?>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="book.php?id=<?php echo $row['id']; ?> &&category=<?php echo $row['cat_book']; ?>" class="fh5co-card-item">
						<figure>
							<div class="overlay"></div>
							<img src="layout/img_book/<?php echo $row['img_book']; ?>" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2><?php echo $row['name_book']; ?></h2>
							<p><?php echo mb_substr($row['content_book'],0,180,"UTF-8"); ?></p>
							<p><span class="btn btn-primary">تحميل الكتاب</span></p>
						</div>
					</a>
				</div>
                <?php 
                    }
                 }?>
			</div>
		</div>
	</div>
	

	<?php include('include/footer.php');?>