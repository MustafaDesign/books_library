   
      <?php 

      
      include "include/header.php";
      
      if(isset($_SESSION['admin'])){
          header('Location:index.php');
      }else{

      
      
      ?>

      <?php

if(isset($_POST['login'])){
    $Admininfo = $_POST['name'];
    $pass = $_POST['pass'];


    if(empty($Admininfo) || empty($pass)){
        
        $worning = "<div class='alert-danger'><p style='text-align: center;padding: 5px;'>ادخل جميع الحقول</p></div>";
    }
	else{
        $select ="SELECT * FROM `admin1` WHERE (name='$Admininfo' OR email='$Admininfo') AND pass='$pass'";
        $result = mysqli_query($con , $select);
        $row = mysqli_num_rows($result);

        if($row > 0){
            $_SESSION['admin']=$Admininfo;
            header('Location:dashboared.php');
        }
        else{
            $worning2 = "<div class='alert-danger'><p style='text-align: center;padding: 5px;'>البيانات غير متطابقة</p></div>";
        }
     }
}
?>

<!-- ================= start login ========== -->
<div class="col-md-12 col-sm-12 col-xs-12 top-me">
                    <?php
					if(isset($worning)){
						echo $worning;
					}
                     elseif(isset($worning2)){
						echo $worning2;
					};
					?>
    <div class="price-box">
        <div class="bg-green">سجل دخولك للذهاب للموقع</div>

        <form action="" method="POST">
            <br>
            <div class="row form-group">
                <div class="col-md-12">
                    <label class="pull-left">اسم المستخدم او البريد الالكتروني</label>
                    <input type="text" id="name"name="name" class="form-control" placeholder="اسم المستخدم او البريد الالكتروني">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12">
                <label class="pull-left">كلمة المرور</label>
                    <input type="password"name="pass" id="subject" class="form-control" placeholder="password">
                </div>
            </div>

            <div class="form-group">
                <input type="submit" name="login" value="تسجيل الدخول" class="btn btn-primary">
            </div>
            <a href="regester.php">التسجيل</a>

        </form>	
    </div>
</div>
<!-- ============end login =============-->

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