<?php

$configPath = __DIR__;

// Lấy danh sách tất cả các file trong thư mục cấu hình
$files = glob("{$configPath}/*.php");

foreach ($files as $file) {
    // Require từng file để load cấu hình
    require_once $file;

    // Sử dụng namespace nếu cần thiết
    if (file_exists($file . '.php')) {
        require_once $file . '.php';
    }
}
