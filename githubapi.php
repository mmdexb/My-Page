<?php
$token = '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';
$url = 'https://api.github.com/users/mmdexb/events';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . $token,
    'User-Agent: mmdexb' // 替换为你的应用程序名称
]);

$content = curl_exec($ch);

if ($content !== false) {
    file_put_contents('events.json', $content);
    echo '文件下载成功！';
} else {
    echo '文件下载失败！';
}

curl_close($ch);
?>