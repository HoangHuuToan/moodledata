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
 * @package    enrol
 * @subpackage ldap
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['course_idnumber'] = 'Thuộc tính LDAP để lấy mã số ID khóa học. Thường là \'cn\' hoặc \'uid\'.';
$string['course_idnumber_key'] = 'Mã số ID';
$string['idnumber_attribute'] = 'Nếu thành viên nhóm chứa các tên phân biệt, hãy chỉ định cùng một thuộc tính mà bạn đã sử dụng cho ánh xạ \'Mã số ID\' của người dùng trong cài đặt xác thực LDAP.';
$string['idnumber_attribute_key'] = 'Thuộc tính mã số ID';
$string['user_attribute'] = 'Nếu thành viên nhóm chứa các tên phân biệt, hãy chỉ định thuộc tính được sử dụng để đặt tên/tìm kiếm người dùng. Nếu bạn đang sử dụng xác thực LDAP, giá trị này phải khớp với thuộc tính được chỉ định trong ánh xạ \'Mã số ID\' trong plugin xác thực LDAP.';
$string['user_attribute_key'] = 'Thuộc tính mã số ID';
