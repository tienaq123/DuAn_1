<?php
session_start();

// Hủy tất cả các session
session_destroy();

// Chuyển hướng người dùng đến trang đăng nhập 
header("Location: logout.php");
exit();
