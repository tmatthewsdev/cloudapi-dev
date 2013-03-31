<?php

namespace Rackspace;

class Rackspace
{
	protected $user_id;
	protected $token;
	protected $token_expires;

	/**
	 *
	 */
	public function __construct()
	{
		$this->user_id       = \Session::get('rs_user_id');
		$this->token         = \Session::get('rs_token');
		$this->token_expires = \Session::get('rs_token_expires');

		$is_expired = strtotime($this->token_expires) < time();

		if (empty($this->user_id) or empty($this->token) or $is_expired)
		{
			$this->authenticate();
		}
	}


	/**
	 *
	 */
	public function api_request($method, $uri, $headers = null, $data = null)
	{
		if (is_array($headers))
		{
			$headers = array_merge($headers, array(
				'X-Auth-Token' => $this->token
			));
		}
		else
		{
			$headers = array('X-Auth-Token' => $this->token);
		}

		switch (strtoupper($method))
		{
			case 'GET':
				$response = $this->http_client()->get($uri, $headers, $data)->send();
				break;

			case 'POST':
				$response = $this->http_client()->post($uri, $headers, $data)->send();
				break;

			default:
				throw new Exception("Invalid HTTP Method");
		}
		
		return json_decode($response->getBody(true));
	}


	/**
	 *
	 */
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

		\Session::set('rs_user_id', $this->user_id);
		\Session::set('rs_token', $this->token);
		\Session::set('rs_token_expires', $this->token_expires);

	}


	/**
	 *
	 */
	private function http_client()
	{
		return new \Guzzle\Http\Client('https://dfw.servers.api.rackspacecloud.com/v2/{account}', array(
		    'account' => $this->user_id
		));
	}
}