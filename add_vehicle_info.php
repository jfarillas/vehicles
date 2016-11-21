<?php
/**
 * @file add_vehicle_info.php
 * @brief Vehicle info registration with engine displacement and power
 * @author ludivina.halog
 * @{
 * 
 */
include_once(dirname(__FILE__)."/vehicle_defs.php");
?>

<div>
	<form id='add' action='add_vehicle_info.php' method='post' 
		accept-charset='UTF-8'>
	<fieldset>
	<legend>Vehicle Info</legend>
	<input type='hidden' name='submitted' id='submitted' value='1'/>
	<table width="70%" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td>
			
				<label for='vehCode' >Vehicle Code: </label>
				<input type='text' name='vehCode' id='vehCode' maxlength="50" />
			</td>
		</tr>
		<tr>
			<td>
				<label for='vehType' >Vehicle Type*:
				<select name="vehType" width="200" style="width:200px">
					<option value="<?php echo CAR; ?>" <?php if($vehType == CAR) echo "selected";?>>&nbsp;<?php echo Car; ?>&nbsp;</option>
					<option value="<?php echo BUS; ?>" <?php if($vehType == BUS) echo "selected";?>>&nbsp;<?php echo Bus; ?>&nbsp;</option>
					<option value="<?php echo TRUCK; ?>" <?php if($vehType == TRUCK) echo "selected"; ?>>&nbsp;<?php echo Truck; ?>&nbsp;</option>
					<option value="<?php echo MOTORCYCLE; ?>" <?php if($vehType == MOTORCYCLE) echo "selected"; ?>>&nbsp;<?php echo Motorcycle; ?>&nbsp;</option>
					<!--<option value="<?php echo E_MOTORCYCLE; ?>" <?php if($vehType == E_MOTORCYCLE) echo "selected"; ?>>&nbsp;<?php echo E-Motorcycle; ?>&nbsp;</option>-->
				</select>
				</label>
			</td>
		</tr>
		<tr>
			<td>
				<label for='vehName' >Vehicle Name*:</label>
				<input type='text' name='vehName' id='vehName' maxlength="50" />
			</td>
		</tr>
	</table>
	</fieldset>
	<fieldset>
		<legend>Engine Displacement</legend>
		<table width="70%" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td>			
					<label for='displacementUOM' >Measurement Unit*:</label>
					<select name="displacementUOM" width="200" style="width:200px">
						<option value="<?php echo CUBICCENTIMETER; ?>" <?php if($displacementUOM == CUBICCENTIMETER) echo "selected";?>>&nbsp;<?php echo CC; ?>&nbsp;</option>
						<option value="<?php echo CUBICINCHES; ?>" <?php if($displacementUOM == CUBICINCHES) echo "selected";?>>&nbsp;<?php echo CI; ?>&nbsp;</option>
						<option value="<?php echo LITER; ?>" <?php if($displacementUOM == LITER) echo "selected"; ?>>&nbsp;<?php echo Liter; ?>&nbsp;</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<label for='bore' >Bore*:</label>
					<input type='text' name='bore' id='bore' maxlength="50" />	
					<label>(display MU selected)</label>		
				</td>
			</tr>
			<tr>
				<td>
					<label for='stroke' >Stroke*:</label>
					<input type='text' name='stroke' id='stroke' maxlength="50" />
					<label>(display MU selected)</label>	
				</td>
			</tr>
			<tr>
				<td>
					<label for='numOfCylinder' >Number of Cylinders*:</label>
					<input type='text' name='numOfCylinder' id='numOfCylinder' maxlength="50" />		
				</td>
			</tr>
		</table>
	</fieldset>
	<fieldset>
		<legend>Engine Power</legend>
		<table width="70%" border="0" cellpadding="0" cellspacing="0">		
			<tr>
				<td>
					<label for='vehWeight' >Vehicle Weight*:</label>
					<input type='text' name='vehWeight' id='vehWeight' maxlength="50" />
					<select name="weightUOM" width="200" style="width:200px">
						<option value="<?php echo POUND; ?>" <?php if($weightUOM == POUND) echo "selected";?>>&nbsp;<?php echo Pound; ?>&nbsp;</option>
						<option value="<?php echo KILOGRAM; ?>" <?php if($weightUOM == KILOGRAM) echo "selected";?>>&nbsp;<?php echo Kilogram; ?>&nbsp;</option>
					</select>

				</td>
			</tr>
			<tr>
				<td>
					<label for='vehSpeedVel' >Speed or Velocity*:</label>
					<input type='text' name='vehSpeedVel' id='vehSpeedVel' maxlength="50" />
					<select name="speedUOM" width="200" style="width:200px">
						<option value="<?php echo MILEPERHR; ?>" <?php if($speedUOM == MILEPERHR) echo "selected";?>>&nbsp;<?php echo MilePerHour; ?>&nbsp;</option>
						<option value="<?php echo MILEPERSEC; ?>" <?php if($speedUOM == MILEPERSEC) echo "selected";?>>&nbsp;<?php echo mile/sec; ?>&nbsp;</option>
						<option value="<?php echo KILOMETERPERHR; ?>" <?php if($speedUOM == KILOMETERPERHR) echo "selected"; ?>>&nbsp;<?php echo k/sec; ?>&nbsp;</option>
						<option value="<?php echo METERPERSEC; ?>" <?php if($speedUOM == METERPERSEC) echo "selected"; ?>>&nbsp;<?php echo meter/sec; ?>&nbsp;</option>
					</select>
				</label>
				</td>
			</tr>
			
		</table>
	</fieldset>
	<p>&nbsp;</p>

	<div align="center" class="submit-size">
		<input type='submit' name='Submit' class="form-submit-button" value='Save' /></td>
	</div>
	</form>

</div>