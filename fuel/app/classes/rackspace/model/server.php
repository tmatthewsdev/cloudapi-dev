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

class Server
{

	private $_server_info;

	public function __construct($server_info)
	{
		$this->_server_info = $server_info;
	}


	// methods to implement

	// ["OS-DCF:diskConfig"] => string(4) "AUTO|MANUAL"

	//["rax-bandwidth:bandwidth"] => array(0) {}

	// ["OS-EXT-STS:task_state"] => NULL
	// ["OS-EXT-STS:vm_state"] => string(6) "active"
	// ["OS-EXT-STS:power_state"] => int(1)

	// addresses
	// flavor
	// image
	// links
	// metadata




	public function status()
	{
		return $this->_server_info->status;
	}

	public function updated()
	{
		return $this->_server_info->updated;
	}

	public function hostId()
	{
		return $this->_server_info->hostId;
	}

	public function id()
	{
		return $this->_server_info->id;
	}

	public function user_id()
	{
		return $this->_server_info->user_id;
	}

	public function name()
	{
		return $this->_server_info->name;
	}

	public function created()
	{
		return $this->_server_info->created;
	}

	public function tenant_id()
	{
		return $this->_server_info->tenant_id;
	}

	public function accessIPv4()
	{
		return $this->_server_info->accessIPv4;
	}

	public function accessIPv6()
	{
		return $this->_server_info->accessIPv6;
	}

	public function progress()
	{
		return $this->_server_info->progress;
	}


}