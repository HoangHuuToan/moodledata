<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Local language pack from http://localhost/pmc-training
 *
 * @package    core
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['administrationsite'] = 'Quản trị trang web';
$string['courseoverview'] = 'Tổng quan về khoá học';
$string['defaulthomepageuser'] = 'Trang chủ';
$string['defaulthomepageuser_help'] = 'Trang chủ của bạn là đường dẫn đầu tiên trong điều hướng';
$string['emailconfirmsent'] = '<p>Một bức thư điện tử đã được gửi đến cho bạn tại địa chỉ sau: <b>{$a}</b></p> <p>Trong thư này có các hướng dẫn giúp bạn hoàn tất việc đăng ký thành viên.</p> <p>Nếu vẫn gặp khó khăn, hãy liên hệ với Quản trị viên của hệ thống.</p>';
$string['emaildisableclick'] = 'Nhấn vào đây để tắt chức năng gửi thư tới địa chỉ này';
$string['emailmustbereal'] = 'Chú ý: bạn phải khai báo một địa chỉ thư có thật';
$string['emailnotallowed'] = 'Không được sử dụng các địa chỉ thư mang tên miền: {$a}';
$string['emailnotfound'] = 'Không tìm thấy địa chỉ thư này trong cơ sở dữ liệu';
$string['emailonlyallowed'] = 'Địa chỉ thư này không nằm trong danh sách được cho phép ({$a})';
$string['emailpasswordconfirmation'] = 'Xin chào {$a->firstname}, Có người (nhiều khả năng là bạn) đã yêu cầu gửi lại mật khẩu đăng nhập tài khoản của bạn tại \'{$a->sitename}\'. Để xác nhận điều này và sau đó nhận được mật khẩu mới qua thư, xin vui lòng truy cập địa chỉ sau: {$a->link} Thông thường, địa chỉ này màu xanh và có thể nhấn lên để mở ra được trong trình duyệt mạng. Nếu không được, bạn có thể cắt và dán địa chỉ này vào ô địa chỉ trên đầu cửa sổ trình duyệt. Nếu cần giúp đỡ, xin vui lòng liên hệ với quản trị viên, {$a->admin}';
$string['emailpasswordconfirmmaybesent'] = '<p>Nếu bạn đã khai báo chính xác kí danh hoặc địa chỉ thư, bạn sẽ nhanh chóng nhận được thư thông báo.</p> <p>Trong thư có những hướng dẫn đơn giản giúp bạn xác nhận và hoàn tất việc thay đổi mật khẩu này. Nếu vẫn gặp khó khăn, xin vui lòng liên hệ với quản trị viên.</p>';
$string['emailpasswordconfirmsent'] = 'Một bức thư đã được gửi tới địa chỉ của bạn tại <b>{$a}</b>. <br />Trong thư có những hướng dẫn đơn giản giúp bạn xác nhận và hoàn tất việc thay đổi mật khẩu này. Nếu vẫn gặp khó khăn, xin vui lòng liên hệ với quản trị viên.';
$string['emailpasswordsent'] = 'Cảm ơn bạn đã xác nhận việc thay đổi mật khẩu. Một bức thư mang mật khẩu mới đã được gửi tới địa chỉ của bạn tại <br /><b>{$a->email}</b>.<br /> Mật khẩu mới được chương trình xuất tự động. Có lễ bạn sẽ cần <a href="{$a->link}">đổi lại mật khẩu</a> cho dễ nhớ hơn.';
$string['enteremailaddress'] = 'Cho biết địa chỉ thư để đổi mật khẩu và nhận thư thông báo mật khẩu mới.';
$string['errorwhenconfirming'] = 'Đã có lỗi xảy ra nên tài khoản của bạn chưa được xác nhận. Nếu bạn truy cập vào đây bằng cách nhấn lên đường liên kết trong thư, hãy kiểm tra lại xem liên kết này có bị đứt đoạn hay không. Nếu là bị đứt đoạn, bạn cần phải dùng các thao tác cắt và dán để có được địa chỉ chính xác.';
$string['favourites'] = 'Có gắn dấu sao';
$string['firstname'] = 'Họ và tên đệm';
$string['lastname'] = 'Tên';
$string['lastnamephonetic'] = 'Tên - phát âm';
$string['loginsteps'] = 'Xin chào! Để có thể truy cập vào các khoá học, bạn cần phải đăng kí một tài khoản thành viên. Mỗi khoá học còn có thể có thêm khóa truy cập riêng, mà sau này bạn sẽ cần đến. Các bước cần làm là như sau: <ol> <li>Điền mẫu <a href="{$a}">đăng kí thành viên</a> với đầy đủ các thông tin cần thiết.</li> <li>Hệ thống sẽ gửi một bức thư tới địa chỉ thư của bạn.</li> <li>Đọc thư này và mở đường liên kết có trong thư.</li> <li>Tài khoản của bạn sẽ được xác nhận; từ đó bạn có thể đăng nhập vào hệ thống.</li> <li>Tiếp theo, chọn khoá học mà bạn muốn tham gia.</li> <li>Nếu khoá học ấy cần mật khẩu truy cập thì bạn phải khai báo mật khẩu mà giáo viên đã cung cấp. Như thế bạn sẽ được ghi danh vào khoá học.</li> <li>Đến lúc này bạn sẽ có quyền truy cập đầy đủ trong khoá học. Cũng từ khi đó, bạn có thể ghi danh và theo học các khoá học khác trên hệ thống này mà không cần phải đăng kí thành viên nữa. Mỗi lượt truy cập bạn đều phải sử dụng kí danh và mật khẩu đã đăng kí như trên.</li> </ol>';
$string['missingemail'] = 'Xin cho biết địa chỉ thư';
$string['missinglastname'] = 'Xin cho biết tên';
$string['nocourses'] = 'Không có khóa học';
$string['noreplybouncemessage'] = 'Bạn đã trả lời thư cho một địa chỉ thư "không hồi đáp". Nếu muốn trả lời một bài viết trên diễn đàn, xin hãy đăng nhập và sử dụng các diễn đàn {$a}. Sau đây là nội dung thư của bạn:';
$string['nosuchemail'] = 'Không có địa chỉ thư này';
$string['passwordforgotteninstructions'] = 'Các thông tin về bạn phải đúng với dữ liệu đã lưu trong hệ thống. Xin vui lòng khai báo kí danh <strong>hoặc</strong> địa chỉ thư vào các ô tương ứng. Không cần thiết phải khai báo cả hai.';
$string['passwordsenttext'] = '<p>Một bức thư đã được gửi cho bạn tại địa chỉ {$a->email}.</p> <p><b>Vui lòng đọc thư để biết được mật khẩu mới</b></p> <p>Mật khẩu này được xuất tự động, do đó bạn nên <a href="{$a->link}">đổi lại cho dễ nhớ</a>.</p>';
$string['registrationemail'] = 'Thông báo qua thư';
$string['registrationinfo'] = '<p>Trang này dùng để giúp bạn đăng kí hệ thống Moodle của mình với moodle.org. Việc đăng kí này hoàn toàn miễn phí. Khi đăng kí, lợi ích chính là bạn sẽ được đưa vào một danh sách gửi thư (mailing list), qua đó bạn có thể nhận được các thông báo quan trọng về những vấn đề bảo mật hoặc về các phiên bản mới của Moodle.</p> <p>Thông tin của bạn mặc nhiên sẽ được giữ bí mật, không được tiết lộ cho bất kì ai khác. Lí do duy nhất của việc thu thập thông tin cá nhân của bạn là nhằm hướng đến các mục tiêu hỗ trợ kĩ thuật cũng như là tăng cường các số liệu thống kê về toàn thể cộng đồng Moodle.</p> <p>Nếu muốn, bạn có thể cho công khai tên hệ thống của bạn cùng quốc gia và địa chỉ mạng (URL) để được đưa vào danh sách các hệ thống Moodle trên toàn thế giới.</p> <p>Tất cả các phiếu đăng kí mới đều được kiểm tra thủ công trước khi đưa vào danh sách. Tuy nhiên, sau khi được công bố, bạn sẽ có thể cập nhật và sửa đổi thông tin về hệ thống của mình bất cứ khi nào bạn muốn, bằng cách dùng lại mẫu đăng kí lại.</p>';
$string['registrationno'] = 'Không, tôi không muốn nhận thư';
$string['resetcomponent'] = 'Thành phần';
