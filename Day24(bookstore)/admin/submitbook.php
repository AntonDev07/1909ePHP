<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <div class="container">
	  <h1>Tạo mới sách</h1>
	  <div class="row">
		  <div class="col-md-12">
			  <form name="submitbook" method="post" action="actionbook.php">
				  <input type="hidden" name="action" value="submit">
				  <div class="form-group">
					  <label>Tên sách</label>
					  <input type="text" class="form-control" name="book_name" value="">
				  </div>
				  <div class="form-group">
					  <label>Giới thiệu ngắn</label>
					  <input type="text" class="form-control" name="book_intro" value="">
				  </div>
				  <div class="form-group">
					  <label>Ảnh đại diện</label>
					  <input type="text" class="form-control" name="book_thumbnail" value="">
				  </div>
				  <div class="form-group">
					  <label>Ảnh sản phẩm</label>
					  <input type="text" class="form-control" name="book_image" value="">
				  </div>
				  <div class="form-group">
					  <label>Giá niêm yết</label>
					  <input type="text" class="form-control" name="book_price" value="">
				  </div>
				  <div class="form-group">
					  <label>Giá bán</label>
					  <input type="text" class="form-control" name="book_sell" value="">
				  </div>
				  <div class="form-group">
					  <label>Tác giả</label>
					  <input type="text" class="form-control" name="book_author" value="">
				  </div>
				  <div class="form-group">
					  <label>Nhà xuất bản</label>
					  <input type="text" class="form-control" name="book_publisher" value="">
				  </div>
				  <div class="form-group">
					  <label>Thời gian tạo</label>
					  <input type="text" class="form-control" name="created" value="">
				  </div>
				  <div class="form-group">
					  <label>Thời gian cập nhật</label>
					  <input type="text" class="form-control" name="updated" value="">
				  </div>
				  <div class="form-group">
					  <label>Số lần đọc</label>
					  <input type="text" class="form-control" name="book_hit" value="">
				  </div>
				  <div class="form-group">
					  <label>Số lượt mua</label>
					  <input type="text" class="form-control" name="book_buy" value="">
				  </div>
				  <div class="form-group">
					  <label>Trạng thái</label>
					  <input type="text" class="form-control" name="book_status" value="">
				  </div>
				  <div class="form-group">
					  <label>Mô tả</label>
					  <input type="text" class="form-control" name="book_desc" value="">
				  </div>

				  <button type="submit" class="btn btn-primary">Submit</button>
			  </form>
		  </div>
	  </div>
  </div>
</body>
</html>