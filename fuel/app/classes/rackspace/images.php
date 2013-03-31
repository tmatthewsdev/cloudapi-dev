<?php

namespace Rackspace;

use \Rackspace\Model\Image;

class Images extends Rackspace
{
	/**
	 *
	 */
	public function get_images()
	{
		$response = $this->api_request('GET', "images/detail");

		$images = array();
		foreach ($response->images as $image_info)
		{
			//test: array_push($images, new Image($image_info));
			$image = new Image($image_info);
			array_push($images, $image);
		}
		return $images;
	}


	/**
	 *
	 */
	public function image_details($id)
	{
		throw new Exception("method not implemented");
	}

}