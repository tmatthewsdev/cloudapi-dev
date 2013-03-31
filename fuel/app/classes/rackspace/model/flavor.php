<?php

namespace Rackspace\Model;

/**
 * 
 *
 *
 *
 * List Servers API Documentation
 * http://docs.rackspace.com/servers/api/v2/cs-devguide/content/List_Servers-d1e2078.html
 *
 */

class Flavor
{

	private $_flavor_info;

	public function __construct($flavor_info)
	{
		$this->_flavor_info = $flavor_info;
	}

	// methods to implement
	// OS-FLV-DISABLED:disabled


	public function name()
	{
		return $this->_flavor_info->name;
	}

	public function links()
	{
		// example response
		// 'links' => array ( 
		// 	0 => stdClass::__set_state(array(
		// 		'href' => 'https://dfw.servers.api.rackspacecloud.com/v2/707903/flavors/2',
		// 		'rel' => 'self', )), 
		// 	1 => stdClass::__set_state(array( 
		// 		'href' => 'https://dfw.servers.api.rackspacecloud.com/707903/flavors/2', 
		// 		'rel' => 'bookmark', )), ), 
		throw new Exception("method not implemented");
	}
	
	public function ram()
	{
		return $this->_flavor_info->ram;
	}
	
	public function vcpus()
	{
		return $this->_flavor_info->vcpus;
	}
	
	public function swap()
	{
		return $this->_flavor_info->swap;
	}
	
	public function rxtx_factor()
	{
		return $this->_flavor_info->rxtx_factor;
	}

	public function disk()
	{
		return $this->_flavor_info->disk;
	}

	public function id()
	{
		return $this->_flavor_info->id;
	}
}