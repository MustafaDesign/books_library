                <div class="col-md-9 top-me">
					<div class="price-box">
						<div class="bg-green">اضافة كتاب</div>

						<form action="#" method="POST">
							<br>
							<div class="row form-group">
								<div class="col-md-12">
									<input type="text" id="name"name="name" class="form-control" placeholder="اسم الكتاب">
								</div>
							</div>
	
							<div class="row form-group">
								<div class="col-md-12">
									<select class="form-control" name="cat"id="exampleFormControlSelect1">
										<option selected>اختر تصنيف</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
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
									<label class="sr-only" for="message">Message</label>
									<textarea name="message"name="content" id="message" cols="30" rows="3" class="form-control" placeholder="نبذة عن الكتاب"></textarea>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" name="send" value="اضافة" class="btn btn-primary">
							</div>
	
						</form>	
					</div>
				</div>