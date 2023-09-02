<?php
// 设置目标 URL
$targetUrl = 'https://blog.linuschen.ink/index.php/feed/';

// 使用 file_get_contents 函数获取目标 URL 的内容
$content = file_get_contents($targetUrl);

// 设置响应头以允许跨域请求
header('Access-Control-Allow-Origin: *');

// 输出获取到的内容
echo $content;
?>