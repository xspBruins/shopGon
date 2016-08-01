create database if not exists shop_go;
use shop_go;
--����Ա��
drop table if exists shop_admin;
create table shop_admin(
id tinyint unsigned auto_increment key,
username varchar(20) not null unique,
password char(32) not null,
email varchar(50) not null
);

--�����
drop table if exists shop_cate;
create table shop_cate(
id smallint unsigned auto_increment key,
cName varchar(50) unique
);

--��Ʒ��
drop table if exists shop_pro;
create table shop_pro(
id int unsigned auto_increment key,
pName varchar(50) not null unique,
--����
pSn varchar(50) not null,
--����
pNum int unsigned default 1,
--��ͨ�۸�
mPrice decimal(10,2) not null,
--��վ�۸�
iPrice decimal(10,2) not null,
--��Ʒ���
pDesc text,
--��ƷͼƬ
pImg varchar(50) not null,
pubTime int unsigned not null,
isShow tinyint(1) default 1,
isHot tinyint(1) default 0,
--�����ĸ������µ���Ʒ
cId smallint unsigned not null
);

--�û���
drop table if exists shop_user;
create table shop_user(
id int unsigned auto_increment key,
username varchar(20) not null unique,
password varchar(32) not null,
email varchar(50) not null,
mobile varchar(20) not null,
regTime varchar(50) not null
);

--����
drop table if exists shop_album;
create table shop_album(
id int unsigned auto_increment key,
pId int unsigned not null,
albumPath varchar(50) not null
);

