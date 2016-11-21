<?php
/**
 * @package Vehicle
 * @brief Database functions
 * @author ludivina.halog
 */

include_once(dirname(__FILE__)."/db_connect.php");
include_once(dirname(__FILE__)."/functions.php");


/**
 * This function calls the database connection class
 */
function dbConn() 
{
	// dbconnect class object
	$dbCon = new DBConnect();
	// call connection configuration method
	$conn = $dbCon->connect_VehicleDB(HOST, USER, PASS, DB, PORT);
	return $conn;
}

/**** Add/Insert ****/

/**
 * This function will add/insert vehicle record into the database in the vehicle_registration table
 * @param veh_id [in] Vehicle Id is auto generated
 * @param veh_code [in] Vehicle Code is unique identifier for searching unique record
 * @param veh_type [in] Vehicle Type could be "Car", "Bus", "Truck", "Motorcycle", "Electric Motorcycle"
 * @param veh_name [in] Vehicle name
 * @param engine_disp [dec] Engine Replacement
 * @param engine_power [dec] Engine Power
 */
function Add_VehicleDtls($veh_id, $veh_code, $veh_type, $veh_name, $engine_disp, $engine_power) 
{
	global $conn;
	
	if(! $conn) 
	{
		//Call the db connection function
		$conn = dbConn();
	}
	//Check conenection database is null
	if($conn == null) return 0;
	
	//@todo Query Statement to add/insert vehicle details

}

/**
 * This function will add/insert engine displacement record into the database in the engine_displacement table
 * @param ed_id [in] Engine Displacement Id is auto generated
 * @param veh_id [in] Vehicle Id reference key
 * @param m_unit [in] Measurement Unit use to compute the engine displacement
 * @param bore [dec] Bore
 * @param bore_uom [dec] Bore unit of measurement use
 * @param stroke [dec] Stroke
 * @param stroke_uom [dec] Stroke unit of measurement use
 * @param no_cylinders [dec] Number of cylinders
 */
function Add_EngineDispDtls($ed_id, $veh_id, $m_unit, $bore, $bore_uom, $stroke, $stroke_uom, $no_cylinders) 
{
	global $conn;
	
	if(! $conn) 
	{
		//Call the db connection function
		$conn = dbConn();
	}
	//Check connection database is null
	if($conn == null) return 0;
	
	//@todo Query Statement to add/insert engine displacement details

}

/**
 * This function will add/insert engine power record into the database in the engine_power table
 * @param ep_id [in] Engine Power Id is auto generated
 * @param veh_id [in] Vehicle Id reference key
 * @param veh_weight [in] Weight of the vehicle which include the mass of the vehicle, driver and passenger
 * @param weight_uom [dec] Weight unit of measurement use
 * @param speed_vel [dec] Speed or velocity of a vehicle
 * @param speed_vel_uom [dec] Speed of Velocity unit of measurement use
 */
function Add_EngineDispDtls($ep_id, $veh_id, $veh_weight, $weight_uom, $speed_vel, $speed_vel_uom) 
{
	global $conn;
	
	if(! $conn) 
	{
		//Call the db connection function
		$conn = dbConn();
	}
	//Check connection database is null
	if($conn == null) return 0;
	
	//@todo Query Statement to add/insert engine displacement details

}

/**** Retrieve record(s) ****/

/**
 * This function will retrieve all vehicle records
 * @param veh_id [in]
 * @param arr_vehicle [in]
 * @return array of vehicles
 * arr_vehicle array has form:<br/>
 * arr_vehicle['vid']<br/>
 * arr_vehicle['vehCode']<br/> 
 * arr_vehicle['vehType']<br/>
 * arr_vehicle['vehName']<br/>
 * arr_vehicle['engineDisplacement']<br/>
 * arr_vehicle['enginePower']<br/>
 * arr_vehicle['createDate']<br/>
 */
function Get_AllVehicles($veh_id, &$arr_vehicle) 
{
	global $conn;
	
	if(! $conn) {
		//Call the db connection function
		$conn = dbConn();
	}
	
	if($conn == null) return 0;
	
	$sql = "SELECT `vid`, `veh_code`, `veh_type`, `v_name`, `engine_displacement`, `engine_power`, `create_date` ";
	$sql .= "FROM `vehicle_registration` WHERE custID=".strip_specials($veh_id);
	$stmt = $conn->prepare($sql);
	$results = $stmt->execute();
	$arr_customer= array();
	if($results) {
		$row = $stmt->fetch();
		$arr_vehicle['vid'] = $veh_id;
		$arr_vehicle['vehCode'] = $row['veh_code'];
		$arr_vehicle['vehType'] = $row['veh_type'];
		$arr_vehicle['vehName'] = $row['v_name'];
		$arr_vehicle['engineDisplacement'] = $row['engine_displacement'];
		$arr_vehicle['enginePower'] = $row['engine_power'];
		$arr_vehicle['createDate'] = $row['create_date'];
	}
	$stmt =NULL;
	return sizeof($arr_vehicle);
}

/**
 * This function will retrieve vehicle record by vehicle id
 * @param veh_id [in] Vehicle Id
 */
function Get_VehicleById($veh_id) 
{
	global $conn;
	
	if(! $conn) {
		//Call the db connection function
		$conn = dbConn();
	}
	
	if($conn == null) return 0;
	
	$sql = "SELECT COUNT(`vid`) AS vehid  FROM `vehicle_registration` WHERE `vid` = ".$veh_id;

	
	$stmt = $conn->prepare($sql);
	$res = $stmt->execute();
	
	if($res) {
		$row = $stmt->fetch();
		return $row['vehID'];
	}
	return 0;
}

/**
 * Retrieve the list of vehicles
 * @param vehicles [in] Vehicle details in array values
 */
function view_AllVehicles(&$vehicles) {
	global $conn;
	
	if(! $conn) {
		//Call the db connection function
		$conn = dbConn();
	}
	
	if($conn == null) return 0;
	//@todo
	$sql = "SELECT";
	$sql .= "FROM `";
	
	$stmt = $conn->prepare($sql);
	$res = $stmt->execute();
	$i = 0;
	if($res) {
		while($row = $stmt->fetch()) {
			//@todo
		}
	}
	
	return $i;
}//view_AllVehicles

?>