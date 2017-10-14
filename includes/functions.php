<?php
	/**
	 * Helpers functions
	 * @author Webcraftic <wordpress.webraftic@gmail.com>
	 * @copyright (c) 2017 Webraftic Ltd
	 * @version 1.0
	 */

	/**
	 * Merge arrays, inserting $arr2 into $arr1 before/after certain key
	 *
	 * @param array $arr Modifyed array
	 * @param array $inserted Inserted array
	 * @param string $position 'before' / 'after' / 'top' / 'bottom'
	 * @param string $key Associative key of $arr1 for before/after insertion
	 *
	 * @return array
	 */
	function wbcr_factory_array_merge_insert(array $arr, array $inserted, $position = 'bottom', $key = null)
	{
		if( $position == 'top' ) {
			return array_merge($inserted, $arr);
		}
		$key_position = ($key === null)
			? false
			: array_search($key, array_keys($arr));
		if( $key_position === false OR ($position != 'before' AND $position != 'after') ) {
			return array_merge($arr, $inserted);
		}
		if( $position == 'after' ) {
			$key_position++;
		}

		return array_merge(array_slice($arr, 0, $key_position, true), $inserted, array_slice($arr, $key_position, null, true));
	}

	/**
	 * Try to get variable from JSON-encoded post variable
	 *
	 * Note: we pass some params via json-encoded variables, as via pure post some data (ex empty array) will be absent
	 *
	 * @param string $name $_POST's variable name
	 *
	 * @return array
	 */
	function wbcr_factory_maybe_get_post_json($name)
	{
		if( isset($_POST[$name]) AND is_string($_POST[$name]) ) {
			$result = json_decode(stripslashes($_POST[$name]), true);
			if( !is_array($result) ) {
				$result = array();
			}

			return $result;
		} else {
			return array();
		}
	}

	/**
	 * Escape json data
	 * @param  array $data
	 * @return string escaped json string
	 */
	function wbcr_factory_get_escape_json(array $data)
	{
		return htmlspecialchars(json_encode($data), ENT_QUOTES, 'UTF-8');
	}

