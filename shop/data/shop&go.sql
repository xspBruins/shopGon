create database if not exists shop_go;
use shop_go;
--管理员表
drop table if exists shop_admin;
create table shop_admin(
id tinyint unsigned auto_increment key,
username varchar(20) not null unique,
password char(32) not null,
email varchar(50) not null
);

--分类表
drop table if exists shop_cate;
create table shop_cate(
id smallint unsigned auto_increment key,
cName varchar(50) unique
);

--商品表
drop table if exists shop_pro;
create table shop_pro(
id int unsigned auto_increment key,
pName varchar(50) not null unique,
--货号
pSn varchar(50) not null,
--数量
pNum int unsigned default 1,
--普通价格
mPrice decimal(10,2) not null,
--网站价格
iPrice decimal(10,2) not null,
--商品简介
pDesc text,
--商品图片
pImg varchar(50) not null,
pubTime int unsigned not null,
isShow tinyint(1) default 1,
isHot tinyint(1) default 0,
--代表哪个分类下的商品
cId smallint unsigned not null
);

--用户表
drop table if exists shop_user;
create table shop_user(
id int unsigned auto_increment key,
username varchar(20) not null unique,
password varchar(32) not null,
email varchar(50) not null,
mobile varchar(20) not null,
regTime varchar(50) not null
);

--相册表
drop table if exists shop_album;
create table shop_album(
id int unsigned auto_increment key,
pId int unsigned not null,
albumPath varchar(50) not null
);

