<?php

function connect(){
	$link=mysql_connect("127.0.0.1","root","xspyyer")or die("���ݿ�����ʧ��Error:".mysql_errno().":".mysql_error());
	mysql_set_charset("gb2312");
	mysql_select_db("shop_go") or die("ָ�����ݿ��ʧ�ܣ�");
	return $link;
}

function insert($table,$array){
	$keys=join(",", array_keys($array));
	$vals="'".join("','", array_values($array))."'";
	$sql="insert {$table}($keys) values ({$vals})";
	mysql_query($sql);
	return mysql_insert_id();
}

function update($table,$array,$where=NULL){
	foreach ($array as $key=>$val){
		if ($str==null){
			$sep="";
		}else {
			$sep=",";
		}
		$str.=$sep.$key."='".$val."'";
	}
	
	$sql="update {$table} set {$str}".($where==null?null:"where ".$where);
	mysql_query($sql);
	return mysql_affected_rows();
}

function delete($table,$where=NULL){
	$where=$where==null?null:"where ".$where;
	$sql="delete from {$table} {$where}";
	mysql_query($sql);
	return mysql_affected_rows();
}

//��ѯ
function fetchOne($sql,$result_type=MYSQL_ASSOC){
	$result=mysql_query($sql);
	$row = mysql_fetch_array($result,$result_type);
	return $row;
}

function fetchAll($sql,$result_type=MYSQL_ASSOC){
	$result=mysql_query($sql);
	while (@$row=mysql_fetch_array($result,$result_type)){
		$rows[]=$row;
	}
	return $rows;
}

//���ؽ��������
function getResultNum($sql){
	$result=mysql_query($sql);
	return mysql_num_rows($result);
}

//�õ���һ�������¼��ID
function getInsertId(){
	return mysql_insert_id();
}
