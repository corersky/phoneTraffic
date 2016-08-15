<?php
class MySQL
{ 
	var $conn;
	/**
	构造函数
	*/
	function MySQL()
	{   
    	$this->conn = mysql_connect(DB_HOST,DB_USERNAME,DB_PWD) or die("error #1"); 
		mysql_select_db(DB_DATABASENAME,$this->conn) or die("error #2");
		mysql_query('set names gbk'); 		
	}
	/**
	执行一条sql语句
	*/
	function query($sql) 
	{   
		$res =mysql_query($sql,$this->conn) or mysql_error();
		return $res; 
	}
	/**
	返回一条查询结果
	*/
	function fetcharray($re) 
	{   
		$row = mysql_fetch_array($re,MYSQL_ASSOC);
		return $row; 
	}
	/**
	* insertabe
	* 插入一条数据
	* $tablename 表名
	* $arr 数据数组，数组名是列名，数组值是列值
	*/
	function insertabe($tablename,$arr){
		if(empty($tablename) || empty($arr) || !is_array($arr)){
			return false;
		}
		$sqlk="";
		$sqlv="";
		foreach($arr as $key=>$value){
			if(!empty($key)  && (!empty($value) || $value===0)){
				$sqlk.="`".$key."`,";
				$sqlv.="'".$value."',";
			}	
		}
		$sqlk=substr($sqlk,0,-1);
		$sqlv=substr($sqlv,0,-1);
		$sql="insert into `".$tablename."`(".$sqlk.") values(".$sqlv.")";
		//echo "sql:".$sql."<br>";
		$re=mysql_query($sql,$this->conn) or mysql_error();
		$retu=false;
		if($re){
		$retu=mysql_insert_id($this->conn);
		}
		
		return $retu;
	}
	/**
	* updatetabe
	* 更新一条数据
	* $tablename 表名
	* $arr 数据数组，数组名是列名，数组值是列值
	*/
	function updatetabe($tablename,$arr,$id,$wherestr="id"){
		if(empty($tablename) || empty($arr) || !is_array($arr) || empty($id) || empty($wherestr)){
			return false;
		}
		$str="";
		foreach($arr as $key=>$value){
			if(!empty($key)){
				$str.="`".$key."`='".$value."',";
			}
		}
		$str=substr($str,0,-1);
		$sql="update `".$tablename."` set ".$str." where $wherestr='".$id."'";
		//echo $sql;
		$re=mysql_query($sql,$this->conn) or mysql_error();
		return $re;
	}
	
	function closecon(){
		mysql_close($this->conn);
	}
	/**
	析构函数
	*/
	function __destruct()
	{
		mysql_close($this->conn);
	}
	
	
}
?>