<?php
	function get_register_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"blood");
		$blood_count = "";
		$query = "select count(*) as register_count from register";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$register_count = $row['register_count'];
		}
		return($register_count);
    }

    function get_donar_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"blood");
		$donar_count = "";
		$query = "select count(*) as donar_count from donar";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$donar_count = $row['donar_count'];
		}
		return($donar_count);
    }

    function get_blood_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"blood");
		$blood_count = "";
		$query = "select count(*) as blood_count from store";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$blood_count = $row['blood_count'];
		}
		return($blood_count);
    }

    function get_request_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"blood");
		$request_count = "";
		$query = "select count(*) as request_count from request";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$request_count = $row['request_count'];
		}
		return($request_count);
	}
	
	function get_ap_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"blood");
		$blood_count = "";
		$query = "select count(*) as blood_count from store where b_g = 'A+'";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$blood_count = $row['blood_count'];
		}
		return($blood_count);
    }

	function get_an_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"blood");
		$b_count = "";
		$query = "select count(*) as b_count from store where b_g = 'A-'";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$b_count = $row['b_count'];
		}
		return($b_count);
	}
	
	function get_bp_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"blood");
		$blood_count = "";
		$query = "select count(*) as blood_count from store where b_g = 'B+'";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$blood_count = $row['blood_count'];
		}
		return($blood_count);
	}
	
	function get_bn_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"blood");
		$blood_count = "";
		$query = "select count(*) as blood_count from store where b_g = 'B-'";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$blood_count = $row['blood_count'];
		}
		return($blood_count);
	}
	
	function get_op_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"blood");
		$blood_count = "";
		$query = "select count(*) as blood_count from store where b_g = 'O+'";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$blood_count = $row['blood_count'];
		}
		return($blood_count);
	}
	
	function get_on_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"blood");
		$blood_count = "";
		$query = "select count(*) as blood_count from store where b_g = 'O-'";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$blood_count = $row['blood_count'];
		}
		return($blood_count);
	}
	
	function get_abp_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"blood");
		$blood_count = "";
		$query = "select count(*) as blood_count from store where b_g = 'AB+'";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$blood_count = $row['blood_count'];
		}
		return($blood_count);
	}
	
	function get_abn_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"blood");
		$blood_count = "";
		$query = "select count(*) as blood_count from store where b_g = 'AB-'";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$blood_count = $row['blood_count'];
		}
		return($blood_count);
    }
?>