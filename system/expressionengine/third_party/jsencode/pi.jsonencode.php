<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$plugin_info = array(
	'pi_name' => 'JS Encode',
	'pi_version' => '1.0.0',
	'pi_author' => 'Bryan Burgers',
	'pi_author_url' => 'http://clickrain.com/',
	'pi_description' => 'Encode strings for inclusion in javascript files.',
	'pi_usage' => Jsencode::usage()
);

/**
 * Mah_eencode Class
 *
 * @package         ExpressionEngine
 * @category        Plugin
 * @author          Bryan Burgers
 * @link            http://clickrain.com/
 */

class Jsencode {

	public $return_data = '';

	/**
	 * Constructor
	 *
	 * @access	public
	 * @return	void
	 */

	function Jsencode($str = '')
	{
		$this->EE =& get_instance();
	}

	function string($str = '')
	{
		// Get the string that they want to escape from the template data
		$str = ($str == '') ? $this->EE->TMPL->tagdata : $str;

		// Encode the string
		$encoded = json_encode($str);

		// Remove the leading and trailing quotation mark.
		$stripped = substr($encoded, 1, strlen($encoded) - 2);

		// Yep, that's all there is to it.
		return $stripped;
	}

	// --------------------------------------------------------------------

	/**
	 * Usage
	 *
	 * Plugin Usage
	 *
	 * @access	public
	 * @return	string
	 */

	public function usage()
	{

		ob_start();

		?>

		About:

			Enable outputting a tag as a JSON-compatible string.

		-----

		Usage example:

			{exp:jsencode:string}Nothing to escape{/exp:jsencode:string}
			=> Nothing to escape

			{exp:jsencode:string}/image/bridge.jpg{/exp:jsencode:string}
			=> \/image\/bridge.jpg

			{exp:jsencode:string}He said, "That's not true."{/exp:jsencode:string}
			=> He said, \"That's not true.\"

		-----

		Changelog:

			Version 1.0.0
			2013/02/01: Initial release.

		<?php

		$buffer = ob_get_contents();

		ob_end_clean();

		return $buffer;

	}

	// --------------------------------------------------------------------

}

/* End of file pi.jsencode.php */
/* Location: ./system/expressionengine/third_party/jsencode/pi.jsencode.php */
