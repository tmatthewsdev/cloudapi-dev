<?php

class Controller_Servers extends Controller_Base
{
	public function get_index()
	{
		// curl -s https://identity.api.rackspacecloud.com/v2.0/tokens -X 'POST' \
		//      -d '{"auth":{"RAX-KSKEY:apiKeyCredentials":{"username":"theUserName", "apiKey":"0000000000000000000"}}}' \
		//      -H "Content-Type: application/json" | python -m json.tool
		
		$rs = new Model_Rackspace;

		return Response::forge(View::forge('servers/index', ['servers' => $rs->list_servers()]));

		// $client = new Client('http://www.example.com/api/v1/key/{{key}}', array(
		//     'key' => '***'
		// ));

		// // Issue a path using a relative URL to the client's base URL
		// // Sends to http://www.example.com/api/v1/key/***/users
		// $request = $client->get('users');
		// $response = $request->send();

		// // Relative URL that overwrites the path of the base URL
		// $request = $client->get('/test/123.php?a=b');

		// // Issue a head request on the base URL
		// $response = $client->head()->send();
		// // Delete user 123
		// $response = $client->delete('users/123')->send();

		// // Send a PUT request with custom headers
		// $response = $client->put('upload/text', array(
		//     'X-Header' => 'My Header'
		// ), 'body of the request')->send();

		// // Send a PUT request using the contents of a PHP stream as the body
		// // Send using an absolute URL (overrides the base URL)
		// $response = $client->put('http://www.example.com/upload', array(
		//     'X-Header' => 'My Header'
		// ), fopen('http://www.test.com/', 'r'));

		// // Create a POST request with a file upload (notice the @ symbol):
		// $request = $client->post('http://localhost:8983/solr/update', null, array (
		//     'custom_field' => 'my value',
		//     'file' => '@/path/to/documents.xml'
		// ));

		// // Create a POST request and add the POST files manually
		// $request = $client->post('http://localhost:8983/solr/update')
		//     ->addPostFiles(array(
		//         'file' => '/path/to/documents.xml'
		//     ));
	}


	public function get_details($id)
	{
		$rs = new Model_Rackspace;

		return Response::forge(View::forge('servers/details', ['server' => $rs->server_details($id)]));
	}


	public function get_flavors()
	{
		$rs = new Model_Rackspace;

		return Response::forge(View::forge('flavors/index', ['flavors' => $rs->get_flavors()]));
	}


	

}