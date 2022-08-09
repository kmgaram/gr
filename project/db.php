<?php
    create table members(
        num int not null auto_increment,
        name char(20) not null,
        email char(20) not null,
        pass char(20) not null,
        primary key(num)
    );
?>