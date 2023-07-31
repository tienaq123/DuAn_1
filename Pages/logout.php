<?php
session_start();

// Hủy tất cả các session
session_destroy();

// Chuyển hướng người dùng đến trang chủ
header("Location: /Duan1");
exit();
