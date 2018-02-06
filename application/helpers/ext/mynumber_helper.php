<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

// ------------------------------------------------------------------------

/**
 * Formats a numbers separator decimal = ',' separator ribuan = '.' decimal digit = 4
 *
 * @access	public
 * @param	mixed	// will be cast as int
 * @return	string
 */
if ( ! function_exists('mynumber_helper_format1'))
{
	function mynumber_helper_format1($num)
	{
		$CI =& get_instance();
		//$CI->lang->load('number');
		//$dt[0]['P_VALUE'] = number_format(float number,decimal place, dec separator, thous spp);
		
		//$val = number_format($num, 4, ",", ".");
		$val = number_format($num, 2, ",", ".");
		return $val;
	}	
	
	function mynumber_helper_format_d3($num)
	{
		$CI =& get_instance();
		//$CI->lang->load('number');
		//$dt[0]['P_VALUE'] = number_format(float number,decimal place, dec separator, thous spp);
		
		//$val = number_format($num, 4, ",", ".");
		$val = number_format($num, 3, ",", ".");
		return $val;
	}	
}

/* End of file mynumber_helper.php */
/* Location: ./system/helpers/number_helper.php */