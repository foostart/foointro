<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-4011">
    <div class="menu-chitiet">
        <nav class="navbar">
            <ul>
                <li class="prevacti">
                    <a href="#Overview">Tổng quan</a></li>
                <li><a href="#Specifications">Thông số kỹ thuật</a></li>
                <li><a href="#downloads">tải</a></li>
                <li><a href="#Features">Tính năng, đặc điểm</a></li>
                <li><a href="#Benefits">Lợi ích</a></li>
                <li><a href="#Contacts">Liên hệ</a></li>
                <li><a href="#Insights">Insights</a></li>
            </ul>
        </nav>
    </div>
</div>