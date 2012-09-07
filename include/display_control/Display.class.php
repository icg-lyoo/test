<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Display
 *
 * @author equemuel
 */
class Display
{

	//var $num_displays;
	var $comport;

	//var $id;

	function __construct(/* $num_displays, */$comport = 1)
	{
		//$this->num_displays = $num_displays;
		$this->comport = $comport;
	}

	function asc2bin($ascii, $cr = true)#syntax - asc2bin("text to convert");
	{
		if (is_array($ascii))
		{
			foreach ($ascii as $key => $in)
			{
				$out = '';
				$len = strlen($in);

				for ($i = 0; $i < $len; $i++)
				{
					$temp = '';
					$temp = chr(ord(substr($in, $i, 1)));
					$out .= $temp;
				}
				//carriage return needs to be added for matrix to know the end of message
				if($cr)
				{
					$out .= chr(13);
				}
				$ascii[$key] = $out;
			}


			return $ascii;
		}
		else
		{
			$out = '';
			$len = strlen($ascii);

			for ($i = 0; $i < $len; $i++)
			{
				$temp = '';
				$temp = chr(ord(substr($ascii, $i, 1)));
				$out .= $temp;
			}
			//carriage return needs to be added for matrix to know the end of message
			if($cr)
			{
				$out .= chr(13);
			}
			$ascii = $out;



			return $ascii;
		}
	}

	function add_checksum($values)
	{
		//format string into 08022201000111
		$number_of_bytes = substr_count($values, '0x');

		//Total 8 0x for 8bytes
		$values = str_replace('0x', '', $values);

		//Total 7 commas for 8 bytes
		$values = str_replace(', ', '', $values);

		$stra = substr($values, 0, 2);
		$i = 2;
		eval("\$a = 0x$stra;");
		while ($i < strlen($values))
		{
			$strb = substr($values, $i, 2);
			$i+=2;
			eval("\$b = 0x$strb;");
			$c = $a ^ $b;
			$a = $c;
		}
		$a = strtoupper(dechex($a));

		//check if the checksum is already in the input string
		if ($a == '0')
		{
//			echo 'checksum already attached';
			return $a;
		}

		//pad zero if single hex
		if (strlen($a) == 1)
		{
			$a = '0' . $a;
		}

		$values .= $a;

		$final_string = '';
		$byte_length = strlen($values);
		//add 0x and commas back
		for ($i = 0; $i < $byte_length; $i+=2)
		{

			if (($i + 2 < $byte_length) == true)
			{
				$showString_i = mb_substr($values, $i, 2);
				$final_string .= '0x' . $showString_i . ',';
			}
			//last character
			else
			{
				$showString_i = mb_substr($values, $i, 2);
				$final_string .= '0x' . $showString_i;
			}
		}


		return $final_string;
	}

	function strToHex($string)
	{
		$hex = '';
		for ($i = 0; $i < strlen($string); $i++)
		{
			$hex .= '0x' . dechex(ord($string[$i]));
			if ($i != (strlen($string) - 1))
			{
				$hex .= ', ';
			}
		}
		return $hex;
	}
	
	function hexToStr($hex)
	{
		$string='';
		for ($i=0; $i < strlen($hex)-1; $i+=2)
		{
			$string .= chr(hexdec($hex[$i].$hex[$i+1]));
		}
		return $string;
	}

	function send_msg($serial_msg, $baud = 9600)
	{
		$com = 'COM' . $this->comport;
		//$com = 'COM5';
		`mode $com: BAUD=$baud PARITY=N data=8 stop=1 xon=off`;

		$fp = fopen($com, "w+");
		//$fp = true;
		if (!$fp)
		{
//			echo "Port is not opened. Please check configuration.<br/>";
			return false;
		}


		//$ascii = set_screen_command($matrix_config);
		//$serial_msg = asc2bin($ascii);

//		echo 'matrix<br/>';
//		print_r($serial_msg);

		if (is_array($serial_msg))
		{
			foreach ($serial_msg as $key => $binmsg)
			{
				//fix for windows-based systems using up alot of CPU while running usleep function
				set_time_limit(0);

				$fputs_check = fputs($fp, $binmsg);
				//$fputs_check = true;
				if (!$fputs_check)
				{
//					echo "Could not write message.<br/>";
					return false;
				}


//				echo "Command sent successfully<br/>";

				if ($key == 0)
				{
					//sleep for 10 seconds until screens initialize and turn on
					sleep(5);
				}
				else
				{
					//sleep for 0.5s or 500 milliseconds or 500,000 micro seconds
					sleep(1);
				}
			}
		} //end of if 
		else
		{
			set_time_limit(0);

			$fputs_check = fputs($fp, $serial_msg);
			//$fputs_check = true;
			if (!$fputs_check)
			{
//				echo "Could not write message.<br/>";
				return false;
			}


//			echo "Command sent successfully<br/>";
		}

		$fclose_check = fclose($fp);
		//$fclose_check = true;
		if (!$fclose_check)
		{
//			echo "Could not close port.<br/>";
			return false;
		}

		return true;
	}

	// Converts a Hex string into binary data or Hex string array into an array of binary data
	// @para: string, string array
	// @return: chr value, array of chr
	function hex2bin($hex_string)
	{

		//if for a single string or single serial command
		if (is_array($hex_string) !== true)
		{

			$explodedPacket = explode(",", $hex_string);

			$sumOfArray = 0;

			for ($i = 0; $i < sizeof($explodedPacket); $i++)
			{
				$sumOfArray += $explodedPacket[$i];
			}

			$binary_value = "";

			for ($i = 0; $i < sizeof($explodedPacket); $i++)
			{
				$temp = hexdec($explodedPacket[$i]);
				$binary_value .= chr($temp);
			}

			return $binary_value;
		}
		//else for an array of string or sequence of serial commands
		else
		{
			$explodedPacket = array();

			foreach ($hex_string as $key => $row)
			{
				$explodedPacket[] = explode(",", $row);
			}

			// echo "<pre>";
			// print_r($explodedPacket);
			// echo "</pre>";

			$binary_value = '';

			foreach ($explodedPacket as $key => $row)
			{

				$binary_value = null;
//				echo sizeof($row);
				for ($i = 0; $i < sizeof($row); $i++)
				{
					$temp = hexdec($row[$i]);
					$binary_value .= chr($temp);
				}

				$explodedPacket[$key] = $binary_value;
			}

//			echo "<pre>";
//			print_r($explodedPacket);
//			echo "</pre>";

			return $explodedPacket;
		}
	}

//end of hex2bin function
}

?>
