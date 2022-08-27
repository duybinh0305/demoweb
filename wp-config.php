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
define( 'DB_NAME', 'testwordpress' );

/** Username của database */
define( 'DB_USER', 'testwordpress' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '.mdcd_&39oUo++{s`6quxam6E.$I;Yop72Ah)]lf8kBebL31v|S_;`nmoBER+f(r' );
define( 'SECURE_AUTH_KEY',  '6/i[,,doQYip@^]Z2aN%o|]><XsfnB{wFSpV?hGX/*pY}ydH]kp?[FM*n4se$LN%' );
define( 'LOGGED_IN_KEY',    'JTRm/p(>@xHoL.snxkBWlT&gu!l*Zbr!tWP%LY@G^ii~fp!L=M*5f/R<vENPmbz{' );
define( 'NONCE_KEY',        'nX|?umlS;f}J%o9Gbv&x)K$uMVVg`D*er^Ahvn{[tFh3+-U[en(d(r6%1g3k:<Ll' );
define( 'AUTH_SALT',        'gu=rua_D`>@6o_M<%{_H2jmvJ!A1O2^CP@aCR^Zch-@WiY1/;tB0aVEoF-R=gh8N' );
define( 'SECURE_AUTH_SALT', 'puiQMrv8s4/0a/2.|p:0%Clxb:n/ WU8MIcI?ToKWk$qo6XXE~o_I$b(#{UH7=FK' );
define( 'LOGGED_IN_SALT',   '[y:&#E,xdaD$@(#7i?hw#Tjg$fSL%#[?*kLz)KPBdjuQhv(/BHB|e8Lkb[DF{nIe' );
define( 'NONCE_SALT',       'Hn=}$~0MB)=h^rO|P|On:9rOOV-N<!&;[)V;o6CQeey$x- )v.)f7Mv)9R8MH4mV' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

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
