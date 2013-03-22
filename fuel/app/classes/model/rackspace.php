<?php

class Model_Rackspace extends Model
{

	public function __construct()
	{
		$token   = Session::get('rs_token_id');
		$expires = Session::get('rs_token_expires');

		$this->user_id       = Session::get('user_id');
		$this->token         = Session::get('token');
		$this->token_expires = Session::get('token_expires');

		$is_expired = strtotime($this->token_expires) > time();

		if (empty($this->user_id) or empty($this->token) or $is_expired)
		{
			$this->authenticate();
		}
	}

	private function authenticate()
	{
		$username = 'tmatthewsdev';
		$api_key  = 'ba7da150d82a02e9581c0674b8c911c3';

		$client = new \Guzzle\Http\Client('https://identity.api.rackspacecloud.com/v2.0');
		$body = '{"auth":{"RAX-KSKEY:apiKeyCredentials":{"username":"'. $username .'", "apiKey":"'. $api_key .'"}}}';

		$response = $client->post('tokens', array(
		    'Content-Type' => 'application/json'
		), $body)->send();

		$response_body = json_decode($response->getBody(true));
		
		$this->user_id       = $response_body->access->token->tenant->id;
		$this->token         = $response_body->access->token->id;
		$this->token_expires = $response_body->access->token->expires;

		Session::set('rs_user_id', $this->user_id);
		Session::set('rs_token_id', $this->token);
		Session::set('rs_token_expires', $this->token_expires);

	}

	private function http_client()
	{
		return new \Guzzle\Http\Client('https://dfw.servers.api.rackspacecloud.com/v2/{account}', array(
		    'account' => $this->user_id
		));
	}


	public function create_server()
	{	
		// curl https://dfw.servers.api.rackspacecloud.com/v2/$account/servers \
		//       -X POST \
		//       -H "X-Auth-Project-Id: $account" \
		//       -H "Content-Type: application/json" \
		//       -H "Accept: application/json" \
		//       -H "X-Auth-Token: $token" \
		//       -d '{"server": {"name": "my_server_with_network", "imageRef": "d42f821e-c2d1-4796-9f07-af5ed7912d0e", "flavorRef": "2", "max_count": 1, "min_count": 1, "networks": [{"uuid": "538a112a-34d1-47ff-bf1e-c40639e886e2"}, {"uuid": "00000000-0000-0000-0000-000000000000"}, {"uuid": "11111111-1111-1111-1111-111111111111"}]}}' \
		//      | python -m json.tool

	}

	public function list_servers()
	{
		$response = $this->http_client()->get('servers/detail', array(
			'X-Auth-Token' => $this->token,
		))->send();

		$response_body = json_decode($response->getBody(true));

		$servers = array();
		foreach ($response_body->servers as $server_info)
		{
			$server = new \Rackspace\Model\Server($server_info);
			array_push($servers, $server);
		}
		return $servers;
	}


	public function server_details($id)
	{
		$response = $this->http_client()->get("servers/{$id}", array(
			'X-Auth-Token' => $this->token,
		))->send();

		$response_body = json_decode($response->getBody(true));
		return new \Rackspace\Model\Server($response_body->server);
	}
}