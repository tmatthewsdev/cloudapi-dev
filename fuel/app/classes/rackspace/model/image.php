<?php

namespace Rackspace\Model;

/**
 * 
 *
 *
 *
 * List Images API Documentation
 * http://docs.rackspace.com/servers/api/v2/cs-devguide/content/Images-d1e4427.html
 *
 */

class Image
{

	private $_image_info;

	public function __construct($image_info)
	{
		$this->_image_info = $image_info;
	}


	public function name()
	{
		return $this->_image_info->name;
	}

	public function diskConfig()
	{
		//return $this->_image_info['OS-DCF:diskConfig'];
	}

	public function created()
	{
		return $this->_image_info->created;
	}

	public function id()
	{
		return $this->_image_info->id;
	}


	// "image": {
	//     "links": [
	//         {
	//             "href": "https://dfw.servers.api.rackspacecloud.com/v2/010101/images/3afe97b2-26dc-49c5-a2cc-a2fc8d80c001", 
	//             "rel": "self"
	//         }, 
	//         {
	//             "href": "https://dfw.servers.api.rackspacecloud.com/010101/images/3afe97b2-26dc-49c5-a2cc-a2fc8d80c001", 
	//             "rel": "bookmark"
	//         }, 
	//         {
	//             "href": "https://dfw.servers.api.rackspacecloud.com/010101/images/3afe97b2-26dc-49c5-a2cc-a2fc8d80c001", 
	//             "rel": "alternate", 
	//             "type": "application/vnd.openstack.image"
	//         }
	//     ], 
	//	}
	public function links()
	{
		throw new Exception("method not implemented");
		return $this->_image_info->links;
	}


	// "image": {
	//     "metadata": {
	//         "arch": "x86-64", 
	//         "auto_disk_config": "True", 
	//         "com.rackspace__1__build_core": "1", 
	//         "com.rackspace__1__build_managed": "0", 
	//         "com.rackspace__1__build_rackconnect": "0", 
	//         "com.rackspace__1__options": "0", 
	//         "com.rackspace__1__visible_core": "1", 
	//         "com.rackspace__1__visible_managed": "0", 
	//         "com.rackspace__1__visible_rackconnect": "0", 
	//         "image_type": "base", 
	//         "org.openstack__1__architecture": "x64", 
	//         "org.openstack__1__os_distro": "org.ubuntu", 
	//         "org.openstack__1__os_version": "11.10", 
	//         "os_distro": "ubuntu", 
	//         "os_type": "linux", 
	//         "os_version": "11.10", 
	//         "rax_managed": "false", 
	//         "rax_options": "0"
	//     }, 
	//	}
	public function metadata()
	{
		throw new Exception("method not implemented");
		return $this->_image_info->metadata;
	}

	public function minDisk()
	{
		return $this->_image_info->minDisk;
	}

	public function minRam()
	{
		return $this->_image_info->minRam;
	}

	public function progress()
	{
		return $this->_image_info->progress;
	}

	public function status()
	{
		return $this->_image_info->status;
	}

	public function updated()
	{
		return $this->_image_info->updated;
	}

}