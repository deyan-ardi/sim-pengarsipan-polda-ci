<?php
<<<<<<< HEAD
=======

>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2019, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2019, British Columbia Institute of Technology (https://bcit.ca/)
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
<<<<<<< HEAD
defined('BASEPATH') OR exit('No direct script access allowed');
=======
defined('BASEPATH') or exit('No direct script access allowed');
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937

/**
 * Common Functions
 *
 * Loads the base classes and executes the request.
 *
 * @package		CodeIgniter
 * @subpackage	CodeIgniter
 * @category	Common Functions
 * @author		EllisLab Dev Team
 * @link		https://codeigniter.com/user_guide/
 */

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('is_php'))
{
=======
if (!function_exists('is_php')) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
	/**
	 * Determines if the current version of PHP is equal to or greater than the supplied value
	 *
	 * @param	string
	 * @return	bool	TRUE if the current version is $version or higher
	 */
	function is_php($version)
	{
		static $_is_php;
		$version = (string) $version;

<<<<<<< HEAD
		if ( ! isset($_is_php[$version]))
		{
=======
		if (!isset($_is_php[$version])) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
			$_is_php[$version] = version_compare(PHP_VERSION, $version, '>=');
		}

		return $_is_php[$version];
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('is_really_writable'))
{
=======
if (!function_exists('is_really_writable')) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
	/**
	 * Tests for file writability
	 *
	 * is_writable() returns TRUE on Windows servers when you really can't write to
	 * the file, based on the read-only attribute. is_writable() is also unreliable
	 * on Unix servers if safe_mode is on.
	 *
	 * @link	https://bugs.php.net/bug.php?id=54709
	 * @param	string
	 * @return	bool
	 */
	function is_really_writable($file)
	{
		// If we're on a Unix server with safe_mode off we call is_writable
<<<<<<< HEAD
		if (DIRECTORY_SEPARATOR === '/' && (is_php('5.4') OR ! ini_get('safe_mode')))
		{
=======
		if (DIRECTORY_SEPARATOR === '/' && (is_php('5.4') or !ini_get('safe_mode'))) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
			return is_writable($file);
		}

		/* For Windows servers and safe_mode "on" installations we'll actually
		 * write a file then read it. Bah...
		 */
<<<<<<< HEAD
		if (is_dir($file))
		{
			$file = rtrim($file, '/').'/'.md5(mt_rand());
			if (($fp = @fopen($file, 'ab')) === FALSE)
			{
=======
		if (is_dir($file)) {
			$file = rtrim($file, '/') . '/' . md5(mt_rand());
			if (($fp = @fopen($file, 'ab')) === FALSE) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
				return FALSE;
			}

			fclose($fp);
			@chmod($file, 0777);
			@unlink($file);
			return TRUE;
<<<<<<< HEAD
		}
		elseif ( ! is_file($file) OR ($fp = @fopen($file, 'ab')) === FALSE)
		{
=======
		} elseif (!is_file($file) or ($fp = @fopen($file, 'ab')) === FALSE) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
			return FALSE;
		}

		fclose($fp);
		return TRUE;
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('load_class'))
{
=======
if (!function_exists('load_class')) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
	/**
	 * Class registry
	 *
	 * This function acts as a singleton. If the requested class does not
	 * exist it is instantiated and set to a static variable. If it has
	 * previously been instantiated the variable is returned.
	 *
	 * @param	string	the class name being requested
	 * @param	string	the directory where the class should be found
	 * @param	mixed	an optional argument to pass to the class constructor
	 * @return	object
	 */
	function &load_class($class, $directory = 'libraries', $param = NULL)
	{
		static $_classes = array();

		// Does the class exist? If so, we're done...
<<<<<<< HEAD
		if (isset($_classes[$class]))
		{
=======
		if (isset($_classes[$class])) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
			return $_classes[$class];
		}

		$name = FALSE;

		// Look for the class first in the local application/libraries folder
		// then in the native system/libraries folder
<<<<<<< HEAD
		foreach (array(APPPATH, BASEPATH) as $path)
		{
			if (file_exists($path.$directory.'/'.$class.'.php'))
			{
				$name = 'CI_'.$class;

				if (class_exists($name, FALSE) === FALSE)
				{
					require_once($path.$directory.'/'.$class.'.php');
=======
		foreach (array(APPPATH, BASEPATH) as $path) {
			if (file_exists($path . $directory . '/' . $class . '.php')) {
				$name = 'CI_' . $class;

				if (class_exists($name, FALSE) === FALSE) {
					require_once($path . $directory . '/' . $class . '.php');
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
				}

				break;
			}
		}

		// Is the request a class extension? If so we load it too
<<<<<<< HEAD
		if (file_exists(APPPATH.$directory.'/'.config_item('subclass_prefix').$class.'.php'))
		{
			$name = config_item('subclass_prefix').$class;

			if (class_exists($name, FALSE) === FALSE)
			{
				require_once(APPPATH.$directory.'/'.$name.'.php');
=======
		if (file_exists(APPPATH . $directory . '/' . config_item('subclass_prefix') . $class . '.php')) {
			$name = config_item('subclass_prefix') . $class;

			if (class_exists($name, FALSE) === FALSE) {
				require_once(APPPATH . $directory . '/' . $name . '.php');
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
			}
		}

		// Did we find the class?
<<<<<<< HEAD
		if ($name === FALSE)
		{
			// Note: We use exit() rather than show_error() in order to avoid a
			// self-referencing loop with the Exceptions class
			set_status_header(503);
			echo 'Unable to locate the specified class: '.$class.'.php';
=======
		if ($name === FALSE) {
			// Note: We use exit() rather than show_error() in order to avoid a
			// self-referencing loop with the Exceptions class
			set_status_header(503);
			echo 'Unable to locate the specified class: ' . $class . '.php';
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
			exit(5); // EXIT_UNK_CLASS
		}

		// Keep track of what we just loaded
		is_loaded($class);

		$_classes[$class] = isset($param)
			? new $name($param)
			: new $name();
		return $_classes[$class];
	}
}

// --------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('is_loaded'))
{
=======
if (!function_exists('is_loaded')) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
	/**
	 * Keeps track of which libraries have been loaded. This function is
	 * called by the load_class() function above
	 *
	 * @param	string
	 * @return	array
	 */
	function &is_loaded($class = '')
	{
		static $_is_loaded = array();

<<<<<<< HEAD
		if ($class !== '')
		{
=======
		if ($class !== '') {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
			$_is_loaded[strtolower($class)] = $class;
		}

		return $_is_loaded;
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('get_config'))
{
=======
if (!function_exists('get_config')) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
	/**
	 * Loads the main config.php file
	 *
	 * This function lets us grab the config file even if the Config class
	 * hasn't been instantiated yet
	 *
	 * @param	array
	 * @return	array
	 */
<<<<<<< HEAD
	function &get_config(Array $replace = array())
	{
		static $config;

		if (empty($config))
		{
			$file_path = APPPATH.'config/config.php';
			$found = FALSE;
			if (file_exists($file_path))
			{
=======
	function &get_config(array $replace = array())
	{
		static $config;

		if (empty($config)) {
			$file_path = APPPATH . 'config/config.php';
			$found = FALSE;
			if (file_exists($file_path)) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
				$found = TRUE;
				require($file_path);
			}

			// Is the config file in the environment folder?
<<<<<<< HEAD
			if (file_exists($file_path = APPPATH.'config/'.ENVIRONMENT.'/config.php'))
			{
				require($file_path);
			}
			elseif ( ! $found)
			{
=======
			if (file_exists($file_path = APPPATH . 'config/' . ENVIRONMENT . '/config.php')) {
				require($file_path);
			} elseif (!$found) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
				set_status_header(503);
				echo 'The configuration file does not exist.';
				exit(3); // EXIT_CONFIG
			}

			// Does the $config array exist in the file?
<<<<<<< HEAD
			if ( ! isset($config) OR ! is_array($config))
			{
=======
			if (!isset($config) or !is_array($config)) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
				set_status_header(503);
				echo 'Your config file does not appear to be formatted correctly.';
				exit(3); // EXIT_CONFIG
			}
		}

		// Are any values being dynamically added or replaced?
<<<<<<< HEAD
		foreach ($replace as $key => $val)
		{
=======
		foreach ($replace as $key => $val) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
			$config[$key] = $val;
		}

		return $config;
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('config_item'))
{
=======
if (!function_exists('config_item')) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
	/**
	 * Returns the specified config item
	 *
	 * @param	string
	 * @return	mixed
	 */
	function config_item($item)
	{
		static $_config;

<<<<<<< HEAD
		if (empty($_config))
		{
			// references cannot be directly assigned to static variables, so we use an array
			$_config[0] =& get_config();
=======
		if (empty($_config)) {
			// references cannot be directly assigned to static variables, so we use an array
			$_config[0] = &get_config();
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
		}

		return isset($_config[0][$item]) ? $_config[0][$item] : NULL;
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('get_mimes'))
{
=======
if (!function_exists('get_mimes')) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
	/**
	 * Returns the MIME types array from config/mimes.php
	 *
	 * @return	array
	 */
	function &get_mimes()
	{
		static $_mimes;

<<<<<<< HEAD
		if (empty($_mimes))
		{
			$_mimes = file_exists(APPPATH.'config/mimes.php')
				? include(APPPATH.'config/mimes.php')
				: array();

			if (file_exists(APPPATH.'config/'.ENVIRONMENT.'/mimes.php'))
			{
				$_mimes = array_merge($_mimes, include(APPPATH.'config/'.ENVIRONMENT.'/mimes.php'));
=======
		if (empty($_mimes)) {
			$_mimes = file_exists(APPPATH . 'config/mimes.php')
				? include(APPPATH . 'config/mimes.php')
				: array();

			if (file_exists(APPPATH . 'config/' . ENVIRONMENT . '/mimes.php')) {
				$_mimes = array_merge($_mimes, include(APPPATH . 'config/' . ENVIRONMENT . '/mimes.php'));
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
			}
		}

		return $_mimes;
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('is_https'))
{
=======
if (!function_exists('is_https')) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
	/**
	 * Is HTTPS?
	 *
	 * Determines if the application is accessed via an encrypted
	 * (HTTPS) connection.
	 *
	 * @return	bool
	 */
	function is_https()
	{
<<<<<<< HEAD
		if ( ! empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off')
		{
			return TRUE;
		}
		elseif (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strtolower($_SERVER['HTTP_X_FORWARDED_PROTO']) === 'https')
		{
			return TRUE;
		}
		elseif ( ! empty($_SERVER['HTTP_FRONT_END_HTTPS']) && strtolower($_SERVER['HTTP_FRONT_END_HTTPS']) !== 'off')
		{
=======
		if (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off') {
			return TRUE;
		} elseif (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strtolower($_SERVER['HTTP_X_FORWARDED_PROTO']) === 'https') {
			return TRUE;
		} elseif (!empty($_SERVER['HTTP_FRONT_END_HTTPS']) && strtolower($_SERVER['HTTP_FRONT_END_HTTPS']) !== 'off') {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
			return TRUE;
		}

		return FALSE;
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('is_cli'))
{
=======
if (!function_exists('is_cli')) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937

	/**
	 * Is CLI?
	 *
	 * Test to see if a request was made from the command line.
	 *
	 * @return 	bool
	 */
	function is_cli()
	{
<<<<<<< HEAD
		return (PHP_SAPI === 'cli' OR defined('STDIN'));
=======
		return (PHP_SAPI === 'cli' or defined('STDIN'));
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('show_error'))
{
=======
if (!function_exists('show_error')) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
	/**
	 * Error Handler
	 *
	 * This function lets us invoke the exception class and
	 * display errors using the standard error template located
	 * in application/views/errors/error_general.php
	 * This function will send the error page directly to the
	 * browser and exit.
	 *
	 * @param	string
	 * @param	int
	 * @param	string
	 * @return	void
	 */
	function show_error($message, $status_code = 500, $heading = 'An Error Was Encountered')
	{
		$status_code = abs($status_code);
<<<<<<< HEAD
		if ($status_code < 100)
		{
			$exit_status = $status_code + 9; // 9 is EXIT__AUTO_MIN
			$status_code = 500;
		}
		else
		{
			$exit_status = 1; // EXIT_ERROR
		}

		$_error =& load_class('Exceptions', 'core');
=======
		if ($status_code < 100) {
			$exit_status = $status_code + 9; // 9 is EXIT__AUTO_MIN
			$status_code = 500;
		} else {
			$exit_status = 1; // EXIT_ERROR
		}

		$_error = &load_class('Exceptions', 'core');
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
		echo $_error->show_error($heading, $message, 'error_general', $status_code);
		exit($exit_status);
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('show_404'))
{
=======
if (!function_exists('show_404')) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
	/**
	 * 404 Page Handler
	 *
	 * This function is similar to the show_error() function above
	 * However, instead of the standard error template it displays
	 * 404 errors.
	 *
	 * @param	string
	 * @param	bool
	 * @return	void
	 */
<<<<<<< HEAD
	function show_404($page = '', $log_error = TRUE)
	{
		$_error =& load_class('Exceptions', 'core');
		$_error->show_404($page, $log_error);
		exit(4); // EXIT_UNKNOWN_FILE
=======
	function show_404($page = '')
	{
		redirect("notfound");
		exit; // EXIT_UNKNOWN_FILE
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('log_message'))
{
=======
if (!function_exists('log_message')) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
	/**
	 * Error Logging Interface
	 *
	 * We use this as a simple mechanism to access the logging
	 * class and send messages to be logged.
	 *
	 * @param	string	the error level: 'error', 'debug' or 'info'
	 * @param	string	the error message
	 * @return	void
	 */
	function log_message($level, $message)
	{
		static $_log;

<<<<<<< HEAD
		if ($_log === NULL)
		{
			// references cannot be directly assigned to static variables, so we use an array
			$_log[0] =& load_class('Log', 'core');
=======
		if ($_log === NULL) {
			// references cannot be directly assigned to static variables, so we use an array
			$_log[0] = &load_class('Log', 'core');
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
		}

		$_log[0]->write_log($level, $message);
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('set_status_header'))
{
=======
if (!function_exists('set_status_header')) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
	/**
	 * Set HTTP Status Header
	 *
	 * @param	int	the status code
	 * @param	string
	 * @return	void
	 */
	function set_status_header($code = 200, $text = '')
	{
<<<<<<< HEAD
		if (is_cli())
		{
			return;
		}

		if (empty($code) OR ! is_numeric($code))
		{
			show_error('Status codes must be numeric', 500);
		}

		if (empty($text))
		{
			is_int($code) OR $code = (int) $code;
=======
		if (is_cli()) {
			return;
		}

		if (empty($code) or !is_numeric($code)) {
			show_error('Status codes must be numeric', 500);
		}

		if (empty($text)) {
			is_int($code) or $code = (int) $code;
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
			$stati = array(
				100	=> 'Continue',
				101	=> 'Switching Protocols',

				200	=> 'OK',
				201	=> 'Created',
				202	=> 'Accepted',
				203	=> 'Non-Authoritative Information',
				204	=> 'No Content',
				205	=> 'Reset Content',
				206	=> 'Partial Content',

				300	=> 'Multiple Choices',
				301	=> 'Moved Permanently',
				302	=> 'Found',
				303	=> 'See Other',
				304	=> 'Not Modified',
				305	=> 'Use Proxy',
				307	=> 'Temporary Redirect',

				400	=> 'Bad Request',
				401	=> 'Unauthorized',
				402	=> 'Payment Required',
				403	=> 'Forbidden',
				404	=> 'Not Found',
				405	=> 'Method Not Allowed',
				406	=> 'Not Acceptable',
				407	=> 'Proxy Authentication Required',
				408	=> 'Request Timeout',
				409	=> 'Conflict',
				410	=> 'Gone',
				411	=> 'Length Required',
				412	=> 'Precondition Failed',
				413	=> 'Request Entity Too Large',
				414	=> 'Request-URI Too Long',
				415	=> 'Unsupported Media Type',
				416	=> 'Requested Range Not Satisfiable',
				417	=> 'Expectation Failed',
				422	=> 'Unprocessable Entity',
				426	=> 'Upgrade Required',
				428	=> 'Precondition Required',
				429	=> 'Too Many Requests',
				431	=> 'Request Header Fields Too Large',

				500	=> 'Internal Server Error',
				501	=> 'Not Implemented',
				502	=> 'Bad Gateway',
				503	=> 'Service Unavailable',
				504	=> 'Gateway Timeout',
				505	=> 'HTTP Version Not Supported',
				511	=> 'Network Authentication Required',
			);

<<<<<<< HEAD
			if (isset($stati[$code]))
			{
				$text = $stati[$code];
			}
			else
			{
=======
			if (isset($stati[$code])) {
				$text = $stati[$code];
			} else {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
				show_error('No status text available. Please check your status code number or supply your own message text.', 500);
			}
		}

<<<<<<< HEAD
		if (strpos(PHP_SAPI, 'cgi') === 0)
		{
			header('Status: '.$code.' '.$text, TRUE);
=======
		if (strpos(PHP_SAPI, 'cgi') === 0) {
			header('Status: ' . $code . ' ' . $text, TRUE);
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
			return;
		}

		$server_protocol = (isset($_SERVER['SERVER_PROTOCOL']) && in_array($_SERVER['SERVER_PROTOCOL'], array('HTTP/1.0', 'HTTP/1.1', 'HTTP/2'), TRUE))
			? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.1';
<<<<<<< HEAD
		header($server_protocol.' '.$code.' '.$text, TRUE, $code);
=======
		header($server_protocol . ' ' . $code . ' ' . $text, TRUE, $code);
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
	}
}

// --------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('_error_handler'))
{
=======
if (!function_exists('_error_handler')) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
	/**
	 * Error Handler
	 *
	 * This is the custom error handler that is declared at the (relative)
	 * top of CodeIgniter.php. The main reason we use this is to permit
	 * PHP errors to be logged in our own log files since the user may
	 * not have access to server logs. Since this function effectively
	 * intercepts PHP errors, however, we also need to display errors
	 * based on the current error_reporting level.
	 * We do that with the use of a PHP error template.
	 *
	 * @param	int	$severity
	 * @param	string	$message
	 * @param	string	$filepath
	 * @param	int	$line
	 * @return	void
	 */
	function _error_handler($severity, $message, $filepath, $line)
	{
		$is_error = (((E_ERROR | E_PARSE | E_COMPILE_ERROR | E_CORE_ERROR | E_USER_ERROR) & $severity) === $severity);

		// When an error occurred, set the status header to '500 Internal Server Error'
		// to indicate to the client something went wrong.
		// This can't be done within the $_error->show_php_error method because
		// it is only called when the display_errors flag is set (which isn't usually
		// the case in a production environment) or when errors are ignored because
		// they are above the error_reporting threshold.
<<<<<<< HEAD
		if ($is_error)
		{
=======
		if ($is_error) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
			set_status_header(500);
		}

		// Should we ignore the error? We'll get the current error_reporting
		// level and add its bits with the severity bits to find out.
<<<<<<< HEAD
		if (($severity & error_reporting()) !== $severity)
		{
			return;
		}

		$_error =& load_class('Exceptions', 'core');
		$_error->log_exception($severity, $message, $filepath, $line);

		// Should we display the error?
		if (str_ireplace(array('off', 'none', 'no', 'false', 'null'), '', ini_get('display_errors')))
		{
=======
		if (($severity & error_reporting()) !== $severity) {
			return;
		}

		$_error = &load_class('Exceptions', 'core');
		$_error->log_exception($severity, $message, $filepath, $line);

		// Should we display the error?
		if (str_ireplace(array('off', 'none', 'no', 'false', 'null'), '', ini_get('display_errors'))) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
			$_error->show_php_error($severity, $message, $filepath, $line);
		}

		// If the error is fatal, the execution of the script should be stopped because
		// errors can't be recovered from. Halting the script conforms with PHP's
		// default error handling. See http://www.php.net/manual/en/errorfunc.constants.php
<<<<<<< HEAD
		if ($is_error)
		{
=======
		if ($is_error) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
			exit(1); // EXIT_ERROR
		}
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('_exception_handler'))
{
=======
if (!function_exists('_exception_handler')) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
	/**
	 * Exception Handler
	 *
	 * Sends uncaught exceptions to the logger and displays them
	 * only if display_errors is On so that they don't show up in
	 * production environments.
	 *
	 * @param	Exception	$exception
	 * @return	void
	 */
	function _exception_handler($exception)
	{
<<<<<<< HEAD
		$_error =& load_class('Exceptions', 'core');
		$_error->log_exception('error', 'Exception: '.$exception->getMessage(), $exception->getFile(), $exception->getLine());

		is_cli() OR set_status_header(500);
		// Should we display the error?
		if (str_ireplace(array('off', 'none', 'no', 'false', 'null'), '', ini_get('display_errors')))
		{
=======
		$_error = &load_class('Exceptions', 'core');
		$_error->log_exception('error', 'Exception: ' . $exception->getMessage(), $exception->getFile(), $exception->getLine());

		is_cli() or set_status_header(500);
		// Should we display the error?
		if (str_ireplace(array('off', 'none', 'no', 'false', 'null'), '', ini_get('display_errors'))) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
			$_error->show_exception($exception);
		}

		exit(1); // EXIT_ERROR
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('_shutdown_handler'))
{
=======
if (!function_exists('_shutdown_handler')) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
	/**
	 * Shutdown Handler
	 *
	 * This is the shutdown handler that is declared at the top
	 * of CodeIgniter.php. The main reason we use this is to simulate
	 * a complete custom exception handler.
	 *
	 * E_STRICT is purposively neglected because such events may have
	 * been caught. Duplication or none? None is preferred for now.
	 *
	 * @link	http://insomanic.me.uk/post/229851073/php-trick-catching-fatal-errors-e-error-with-a
	 * @return	void
	 */
	function _shutdown_handler()
	{
		$last_error = error_get_last();
<<<<<<< HEAD
		if (isset($last_error) &&
			($last_error['type'] & (E_ERROR | E_PARSE | E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_COMPILE_WARNING)))
		{
=======
		if (
			isset($last_error) &&
			($last_error['type'] & (E_ERROR | E_PARSE | E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_COMPILE_WARNING))
		) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
			_error_handler($last_error['type'], $last_error['message'], $last_error['file'], $last_error['line']);
		}
	}
}

// --------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('remove_invisible_characters'))
{
=======
if (!function_exists('remove_invisible_characters')) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
	/**
	 * Remove Invisible Characters
	 *
	 * This prevents sandwiching null characters
	 * between ascii characters, like Java\0script.
	 *
	 * @param	string
	 * @param	bool
	 * @return	string
	 */
	function remove_invisible_characters($str, $url_encoded = TRUE)
	{
		$non_displayables = array();

		// every control character except newline (dec 10),
		// carriage return (dec 13) and horizontal tab (dec 09)
<<<<<<< HEAD
		if ($url_encoded)
		{
=======
		if ($url_encoded) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
			$non_displayables[] = '/%0[0-8bcef]/i';	// url encoded 00-08, 11, 12, 14, 15
			$non_displayables[] = '/%1[0-9a-f]/i';	// url encoded 16-31
			$non_displayables[] = '/%7f/i';	// url encoded 127
		}

		$non_displayables[] = '/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]+/S';	// 00-08, 11, 12, 14-31, 127

<<<<<<< HEAD
		do
		{
			$str = preg_replace($non_displayables, '', $str, -1, $count);
		}
		while ($count);
=======
		do {
			$str = preg_replace($non_displayables, '', $str, -1, $count);
		} while ($count);
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937

		return $str;
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('html_escape'))
{
=======
if (!function_exists('html_escape')) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
	/**
	 * Returns HTML escaped variable.
	 *
	 * @param	mixed	$var		The input string or array of strings to be escaped.
	 * @param	bool	$double_encode	$double_encode set to FALSE prevents escaping twice.
	 * @return	mixed			The escaped string or array of strings as a result.
	 */
	function html_escape($var, $double_encode = TRUE)
	{
<<<<<<< HEAD
		if (empty($var))
		{
			return $var;
		}

		if (is_array($var))
		{
			foreach (array_keys($var) as $key)
			{
=======
		if (empty($var)) {
			return $var;
		}

		if (is_array($var)) {
			foreach (array_keys($var) as $key) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
				$var[$key] = html_escape($var[$key], $double_encode);
			}

			return $var;
		}

		return htmlspecialchars($var, ENT_QUOTES, config_item('charset'), $double_encode);
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('_stringify_attributes'))
{
=======
if (!function_exists('_stringify_attributes')) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
	/**
	 * Stringify attributes for use in HTML tags.
	 *
	 * Helper function used to convert a string, array, or object
	 * of attributes to a string.
	 *
	 * @param	mixed	string, array, object
	 * @param	bool
	 * @return	string
	 */
	function _stringify_attributes($attributes, $js = FALSE)
	{
		$atts = NULL;

<<<<<<< HEAD
		if (empty($attributes))
		{
			return $atts;
		}

		if (is_string($attributes))
		{
			return ' '.$attributes;
=======
		if (empty($attributes)) {
			return $atts;
		}

		if (is_string($attributes)) {
			return ' ' . $attributes;
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
		}

		$attributes = (array) $attributes;

<<<<<<< HEAD
		foreach ($attributes as $key => $val)
		{
			$atts .= ($js) ? $key.'='.$val.',' : ' '.$key.'="'.$val.'"';
=======
		foreach ($attributes as $key => $val) {
			$atts .= ($js) ? $key . '=' . $val . ',' : ' ' . $key . '="' . $val . '"';
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
		}

		return rtrim($atts, ',');
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('function_usable'))
{
=======
if (!function_exists('function_usable')) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
	/**
	 * Function usable
	 *
	 * Executes a function_exists() check, and if the Suhosin PHP
	 * extension is loaded - checks whether the function that is
	 * checked might be disabled in there as well.
	 *
	 * This is useful as function_exists() will return FALSE for
	 * functions disabled via the *disable_functions* php.ini
	 * setting, but not for *suhosin.executor.func.blacklist* and
	 * *suhosin.executor.disable_eval*. These settings will just
	 * terminate script execution if a disabled function is executed.
	 *
	 * The above described behavior turned out to be a bug in Suhosin,
	 * but even though a fix was committed for 0.9.34 on 2012-02-12,
	 * that version is yet to be released. This function will therefore
	 * be just temporary, but would probably be kept for a few years.
	 *
	 * @link	http://www.hardened-php.net/suhosin/
	 * @param	string	$function_name	Function to check for
	 * @return	bool	TRUE if the function exists and is safe to call,
	 *			FALSE otherwise.
	 */
	function function_usable($function_name)
	{
		static $_suhosin_func_blacklist;

<<<<<<< HEAD
		if (function_exists($function_name))
		{
			if ( ! isset($_suhosin_func_blacklist))
			{
=======
		if (function_exists($function_name)) {
			if (!isset($_suhosin_func_blacklist)) {
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
				$_suhosin_func_blacklist = extension_loaded('suhosin')
					? explode(',', trim(ini_get('suhosin.executor.func.blacklist')))
					: array();
			}

<<<<<<< HEAD
			return ! in_array($function_name, $_suhosin_func_blacklist, TRUE);
=======
			return !in_array($function_name, $_suhosin_func_blacklist, TRUE);
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
		}

		return FALSE;
	}
<<<<<<< HEAD
}
=======
}
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
