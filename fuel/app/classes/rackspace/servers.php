<?php

namespace Rackspace;

use \Rackspace\Model\Server;

class Servers extends Rackspace
{
	/**
	 *
	 * Keep Absolute Limits in mind when creating a server
	 * http://docs.rackspace.com/servers/api/v2/cs-devguide/content/Absolute_Limits-d1e994.html
	 */
	public function create_server($name, $imageRef, $flavorRef)
	{
		$response = $this->api_request('POST', "servers/detail", null, array(
			'server' => array(
				'name'      => $name,
				'imageRef'  => $imageRef,
				'flavorRef' => $flavorRef,
				//'networks'  => array(array('uuid' => '11111111-1111-1111-1111-111111111111'), ),
				//'OS-DCF:diskConfig' => 'AUTO|MANUAL'
				//'metadata'
				//'personality'
			)
		));

		return new Server($response->server);
	}


	/**
	 *
	 */
	public function list_servers()
	{
		$response = $this->api_request('GET', "servers/detail");

		$servers = array();
		foreach ($response->servers as $server_info)
		{
			$server = new Server($server_info);
			array_push($servers, $server);
		}
		return $servers;
	}


	/**
	 *
	 */
	public function server_details($id)
	{
		$response = $this->api_request('GET', "servers/{$id}");
		return new Server($response->server);
	}
}