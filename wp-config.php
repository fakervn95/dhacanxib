<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'dhac_db' );

/** Username của database */
define( 'DB_USER', 'dhac_db' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'o2Nau91Gpg#u1b!a' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'HY|N?kn$4Yg(31;<GYWQvmO$SNW8$k^-[.$zhkeI<uRCIXi&y`v!SI[fA]!!4^Dj' );
define( 'SECURE_AUTH_KEY',  'Th6.~[!Ww[Ww R#FV;;`[5&.y6uOpq6G3w#*8~O2?g)8>c({Ze|mc{aB VUH?~=1' );
define( 'LOGGED_IN_KEY',    '(=328|!u~EBO6WxV`<hxC&0WM2n[.w960&Ls)3yujY@7-Sk8LxEvA/993hWMc44<' );
define( 'NONCE_KEY',        'uXAepw%%Xs-HR;k2Kr:%8g1I<~2ql[r54u_`an8cGnB2F(z :9 5XnZ3zRhXlB|^' );
define( 'AUTH_SALT',        'yr?[3,J)qT!ZcsG t!^an*,Hu~|oaw,X`U<qCTslZh_Af%A;P)bwZ$ 7{YhizhQi' );
define( 'SECURE_AUTH_SALT', 'L]Wg aH0O~TK1:w12KCz;0i,9RR?PCRQK(sbEu{)2cCXue}QQ7@<ai{E}HI2KCTU' );
define( 'LOGGED_IN_SALT',   '!(EUR:._k2h` 6Q$myw#tiY..u9^8t6$EaEShfNFk<o7VB^OHs<1Jv2)DUw;H ~J' );
define( 'NONCE_SALT',       '4,,q1Sn5!v+$i<J}&l61l/Fv48<;4Cg^X>%!I*|S9 !1glcHq8]<0<_![2+~p=h_' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
