<?php

include_once '../../config.php'; 

include_once CORE_PATH.'/connect.php'; 

// Sql Statment
$sql = "CREATE TABLE IF NOT EXISTS `abouts` (
    `id` int(11) unsigned not null auto_increment primary key,
    `title` varchar(50) not null,
    `description` text not null,
    `link` varchar(255) not null,
    `image` varchar(255) not null,
    `video_link` varchar(255) not null,
    `is_show` tinyint(1) not null default 0
    )";

// Excute Sql Statment
$result = mysqli_query($connection,$sql);

?>