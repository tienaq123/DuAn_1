<?php
session_start();

// Hủy tất cả các session
session_destroy();

// Chuyển hướng người dùng
header("Location: index.php");
exit();
