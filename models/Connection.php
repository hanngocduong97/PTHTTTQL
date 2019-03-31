<?php

	class Connection
	{
		var $conn;
		function __construct()
		{
			$serverName = "DESKTOP-US2G2KM";
			$connectionInfo = array( "Database"=>"SieuThi2", "UID"=>"sa", "PWD"=>"123456");
			
			$this->conn= sqlsrv_connect( $serverName, $connectionInfo);
			// Kiá»ƒm tra káº¿t ná»‘i
			if (!$this->conn) {
				 die( print_r( sqlsrv_errors(), true));
			}
		}
	}

?>