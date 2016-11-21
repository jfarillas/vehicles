<?php
/**
 * @filesource db_connect.php
 * @brief Database connection class
 * @author ludivina.halog
 */

include_once(dirname(__FILE__)."/db_config.php");


/**
 * Class DBConnect
 */
class DBConnect 
{
	// $conn - Database connection variable
	public $conn;
	
	// DBConnect constructor
	public function _construct() 
	{
		$this->connect_VehicleDB();
	}
	
	/**
	 * Connect to the vehicle database as defined from configuration file
	 * @param host [in] Database hostname
	 * @param user [in] Database username
	 * @param passwrd [in] Database password
	 * @param db [in] Database name
	 * @param port [in] Database port
	 * @return connection value
	 */
	public function connect_VehicleDB($host='', $user='', $passwrd='', $db='', $port=0) {
		try {
			$conn = new PDO('mysql:host='.$host.';dbname='.$db,$user,$passwrd);
			//@todo to add emulate for 
		}
		catch (Exception $e) {
			echo "Failed : " .$e->getMessage();
			$conn->rollBack();
		}
		return $conn;	
	}//prepareConn
	
		/**
	 * Disconnect from the database as defined from configuration file
	 * @param conn - existing connection
	 * @return 1
	 * @see connect_VehicleDB
	 */
	public function close_VehicleDB($conn) {
		return 1;
	}//closeConn
	
	/**
	 * This function returns sqlerror <br>
	 * @return error number 
	 */
	public function get_db_error() {
		return mysql_errno();
	}
	
	/**
	 * This function returns sqlerror string <br>
	 * @param id [in] error id
	 * @return string
	 */
	public function get_db_error_str($id) {
		return mysql_error();
	}

}//class

?>