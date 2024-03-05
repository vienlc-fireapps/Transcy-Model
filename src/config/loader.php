<?php

$configPath = __DIR__;

// Lấy danh sách tất cả các file trong thư mục cấu hình
$files = glob("{$configPath}/*.php");

foreach ($files as $file) {
    // Require từng file để load cấu hình
    require_once $file;
}
