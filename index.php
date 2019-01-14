<html>
 <head>
 <meta name="viewport" content="width=device-width" />
 <title>Robot Car</title>
 </head>
<style>	
	
		table.hide {
    	border-width:5px;  
    	border-style:initial;
		}
		
		td.hide {
    	border-width:5px;  
    	border-style:initial;
		}

        td.left input[type=submit]
        {
        background : url("DCRobotCarControlOverWifi/LEFT.png") no-repeat center center;
        width : 64px;
        height :64px;
        border : none;
        color : transparent;
        font-size : 0
        }

        td.forward input[type=submit]
        {
        background : url("DCRobotCarControlOverWifi/UP.png") no-repeat center center;
        width : 64px;
        height :64px;
        border : none;
        color : transparent;
        font-size : 0
        }

        td.backward input[type=submit]
        {
        background : url("DCRobotCarControlOverWifi/DOWN.png") no-repeat center center;
        width : 64px;
        height :64px;
        border : none;
        color : transparent;
		font-size : 0
        }
        td.stop input[type=submit]
        {
        background : url("DCRobotCarControlOverWifi/STOP.png") no-repeat center center;
        width : 64px;
        height :64px;
        border : none;
        color : transparent;
        font-size : 0
        }
        td.right input[type=submit]
        {
        background : url("DCRobotCarControlOverWifi/RIGHT.png") no-repeat center center;
        width : 64px;
        height :64px;
        border : none;
		color : transparent;
        font-size : 0
        }
		td.check input[type=submit]
        {
        background : url("DCRobotCarControlOverWifi/CHECK.png") no-repeat center center;
        width : 64px;
        height :64px;
        border : none;
		color : transparent;
        font-size : 0
        }
		td.on input[type=submit]
        {
        background : url("DCRobotCarControlOverWifi/LIGHTON.png") no-repeat center center;
        width : 64px;
        height :64px;
        border : none;
		color : transparent;
        font-size : 0
        }
		td.off input[type=submit]
        {
        background : url("DCRobotCarControlOverWifi/LIGHTOFF.png") no-repeat center center;
        width : 64px;
        height :64px;
        border : none;
		color : transparent;
        font-size : 0
        }
</style>

         <body>
			 <div>
         <form method="post">
  <table class="hide" width="689" height="31" align="center">
    <tbody>
      <tr>
        <td width="569" height="25"><h1 style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; font-size: 15.4px; text-align: center; font-style: normal; color: #BB972E">First, you have to choose a speed for the car ! Then you can start moving the CarRobot ! Enjoy!</h1></td>
      </tr>
    </tbody>
  </table>
  
  <table width="691" height="336" border="1" align="center">
        <tbody>
          <tr>
			  
            <td width="64" height="60">&nbsp;</td>
            <td width="64" class="forward"><input name="forward" type="submit" id="forward" value=""></td>
            <td width="64">&nbsp;</td>
            <td width="265" rowspan="3">
				<table width="200" class="hide" align="center">
			<tbody>
			  <tr>
				<td><input type="image" name="med" id="imageField6" src="DCRobotCarControlOverWifi/SPEEDMED.png"></td>
				<td><input type="image" name="low" id="imageField7" src="DCRobotCarControlOverWifi/SPEEDLOW.png"></td>
				<td><input type="image" name="high" id="imageField8" src="DCRobotCarControlOverWifi/SPEEDHIGH.png"></td>
			  </tr>
			</tbody>
			 </table>
			<table width="213" border="1" align="center">
			  <tbody>
				<tr>
				  <td width="63" style="text-align: center"><input type="radio" name="speed" id="low" value="L"></td>
				  <td width="61" style="text-align: center"><input type="radio" name="speed" id="med" value="M"></td>
				  <td width="67" style="text-align: center"><input type="radio" name="speed" id="high" value="H"></td>
				</tr>
			  </tbody>
			</table>
	
		    </td>
            <td width="200" rowspan="3"><h1 style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; font-size: 15px; text-align: center; font-style: normal;">Use the icons below to turn the light on and off!</h1>
			<table width="200" class="hide" align="center">
			<tbody>
			<tr>
			  <td class="on" style="text-align: center"><input type="submit" name="on" id="on" value=""></td>
			  <td class="off" style="text-align: center"><input type="submit" name="off" id="off" value=""></td>
			</tr>
			</tbody>
			</table>
			  <h1 style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; font-size: 18px; text-align: center; font-style: normal; color:red;"><?php
	if (isset($_POST['on'])) {
	shell_exec("sudo python ./LS/ON.py");
	echo "Light is on !";}
	else if (isset($_POST['off'])) {
	shell_exec("sudo python ./LS/OFF.py");
	echo "Light is off !";}
	?></h1>
			  </td>
          </tr>
          <tr>
            <td height="47" class="left"><input type="submit" name="left" id="left" value=""></td>
            <td class="stop"><p>
              <input type="submit" name="stop" id="stop" value="">
            </p></td>
            <td class="right"><input type="submit" name="right" id="right" value=""></td>
          </tr>
          <tr>
            <td height="68">&nbsp;</td>
            <td class="backward"><input type="submit" name="backward" id="backward" value=""></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="120" colspan="5"><h1 style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; font-size: 16px; text-align: center; font-style: normal;">Click the icon to update light status outside!</h1>
	<table width="587" class="hide" align="center">
	  <tbody>
	    <tr>
	      <td width="64" class="check"><input name="check" type="submit" id="check" value=""></td>
	      <td width="507" class="hide"><h1 style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; font-size: 18px; text-align: center; font-style: normal; color:red; "> <?php
	
	$output = shell_exec("sudo python ./LS/ls.py");
	ob_start();
	if($output == 1){
	echo("It is dark outside! I think you need to turn the light on!");}
	else if($output == 0){
	echo("There is light outside! No need for the light!");}
	
	if (isset($_POST['check'])) {
	ob_clean();
	$output = shell_exec("sudo python ./LS/ls.py");
	if($output == 1){
		echo("It is dark outside! I think you need to turn the light on!");}
	else if($output == 0){
		echo("There is light outside! No need for the light!");}}
	
	?> </h1></td>
			
			
        </tr>
      </tbody>
  	</table>
  
	</td>
          </tr>
    </tbody>
      </table>
  
	
</form>
			 </div>
<?php

function clean(){
	shell_exec("sudo python ./RobotCarPython/STOP.py");
	shell_exec("sudo pkill -9 -f FORWARD90.py");
	shell_exec("sudo pkill -9 -f FORWARD50.py");
	shell_exec("sudo pkill -9 -f FORWARD30.py");
	shell_exec("sudo pkill -9 -f BACKWARD90.py");
	shell_exec("sudo pkill -9 -f BACKWARD50.py");
	shell_exec("sudo pkill -9 -f BACKWARD30.py");
	shell_exec("sudo pkill -9 -f RIGHT90.py");
	shell_exec("sudo pkill -9 -f RIGHT50.py");
	shell_exec("sudo pkill -9 -f RIGHT30.py");
	shell_exec("sudo pkill -9 -f LEFT90.py");
	shell_exec("sudo pkill -9 -f LEFT50.py");
	shell_exec("sudo pkill -9 -f LEFT30.py");
}

	 
			 
//FORWARD
if (isset($_POST['forward'])) {
clean();
if(isset($_POST['speed']))
{
//echo "You have selected :".$_POST['speed'];  //  Displaying Selected Value
$speed = $_POST['speed'] ;
}
if($speed == 'H'){
clean();
shell_exec("sudo python ./PythonScripts/FORWARD90.py");}
else if($speed == 'M'){
clean();
shell_exec("sudo python ./PythonScripts/FORWARD50.py");}
else if($speed == 'L'){
clean();
shell_exec("sudo python ./PythonScripts/FORWARD30.py");}		
}
// BACKWARD
if (isset($_POST['backward'])) {
clean();
if(isset($_POST['speed']))
{
//echo "You have selected :".$_POST['speed'];  //  Displaying Selected Value
$speed = $_POST['speed'] ;
}
if($speed == 'H'){
clean();
shell_exec("sudo python ./PythonScripts/BACKWARD90.py");}
else if($speed == 'M'){
clean();
shell_exec("sudo python ./PythonScripts/BACKWARD50.py");}
else if($speed == 'L'){
clean();
shell_exec("sudo python ./PythonScripts/BACKWARD30.py");}		
}
			 
// LEFT
if (isset($_POST['left'])) {
clean();
if(isset($_POST['speed']))
{
//echo "You have selected :".$_POST['speed'];  //  Displaying Selected Value
$speed = $_POST['speed'] ;
}
if($speed == 'H'){
clean();
shell_exec("sudo python ./PythonScripts/LEFT90.py");}
else if($speed == 'M'){
clean();
shell_exec("sudo python ./PythonScripts/LEFT50.py");}
else if($speed == 'L'){
clean();
shell_exec("sudo python ./PythonScripts/LEFT30.py");}		
}
			 
// RIGHT
if (isset($_POST['right'])) {
clean();
if(isset($_POST['speed']))
{
//echo "You have selected :".$_POST['speed'];  //  Displaying Selected Value
$speed = $_POST['speed'] ;
}
if($speed == 'H'){
clean();
shell_exec("sudo python ./PythonScripts/RIGHT90.py");}
else if($speed == 'M'){
clean();
shell_exec("sudo python ./PythonScripts/RIGHT50.py");}
else if($speed == 'L'){
clean();
shell_exec("sudo python ./PythonScripts/RIGHT30.py");}		
}			 
// STOP
if (isset($_POST['stop'])) {
clean();
shell_exec("sudo python ./PythonScripts/STOP.py");
if(isset($_POST['speed']))
{
//echo "You have selected :".$_POST['speed'];  //  Displaying Selected Value
$speed = $_POST['speed'] ;
}
if($speed == 'H'){
clean();
shell_exec("sudo python ./PythonScripts/STOP.py");}
else if($speed == 'M'){
clean();
shell_exec("sudo python ./PythonScripts/STOP.py");}
else if($speed == 'L'){
clean();
shell_exec("sudo python ./PythonScripts/STOP.py");}		
}			 
			 ?>
                  

	
         </body>
 </html>




