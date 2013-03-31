<?php

namespace Rackspace;

use \Rackspace\Model\Flavor;

class Flavors extends Rackspace
{
	/**
	 *
	 */
	public function get_flavors()
	{
		$response = $this->api_request('GET', "flavors/detail");

		$flavors = array();
		foreach ($response->flavors as $flavor_info)
		{
			$flavor = new Flavor($flavor_info);
			array_push($flavors, $flavor);
		}
		return $flavors;
	}


	
}