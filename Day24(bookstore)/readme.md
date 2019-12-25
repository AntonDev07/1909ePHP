# tóm tắt dự án
# tên project bookstore ( bán sách )
## tên cơ sở dữ liệu : bookstore

# các bảng trong cơ sở dữ liệu
### bảng users ( để quản lý admins )
## gồm các trường dữ liệu sau :
### id ( khóa chính ) auto_increment int
### username ( tên đăng nhập ) varchar
### avatar ( ảnh đại diện ) varchar
### useremail ( email ) varchar
### password ( mật khẩu ) varchar
### created ( thời gian tạo ) TIMESTAMP
### updated ( thời gian sửa lần gần nhất ) TIMESTAMP

# bảng books ( bảng chứa sách )
### id ( khóa chính ) int 
### book_name ( tên sách ) varchar
### book_intro ( giới thiệu ngắn ) varchar
### book_thumbnail ( ảnh đại diện ) text
### book_images ( các ảnh của sách ) text
### book_price ( giá niêm yết ) int
### book_sell ( giá bán ) int
### book_author ( tên tác giả ) varchar
### book_publisher ( nhà xuất bản ) varchar
### created ( thời gian tạo ) TIMESTAMP
### updated ( thời gian sửa ) TIMESTAMP
### book_hit ( số lần đọc )  int
### book_buy ( số lượt bán thành công ) int
### book_status ( trạng thái cuốn sách ) int
### book_desc ( mô tả ) text

# bảng buyer ( đơn hàng mua sách )
### id ( khóa chính ) int
### buy_name ( tên người mua) varchar
### buy_email ( email người mua ) varchar
### buy_phone ( số điện thoại ) varchar
### buy_address ( địa chỉ người mua ) varchar
### quantity ( số lượng sách trong đơn hàng) int
### price ( giá bán sách ) int
### total_price ( tổng tiền )  int
### book_id ( id của cuốn sách người dùng mua ) int
### created ( thời gian đặt hàng ) TIMESTAMP
### status ( trạng thái đơn hàng ) int 


