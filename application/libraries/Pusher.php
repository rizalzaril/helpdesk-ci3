

<?php

use Pusher\Pusher;

defined('BASEPATH') or exit('No direct script access allowed');

class Pusher_lib
{

	private $pusher;

	public function __construct()
	{
		// Load Composer autoloader
		require_once(APPPATH . 'vendor/autoload.php');

		$options = array(
			'cluster' => 'ap1',  // Replace with your cluster
			'useTLS' => true,
		);

		$this->pusher = new Pusher(
			'acc9e27d6590e8054d65', // app_id
			'5323a31ae25a4bce6f90', // app_key
			'1936362',              // app_secret
			$options
		);
	}

	public function trigger($channel, $event, $data)
	{
		return $this->pusher->trigger($channel, $event, $data);
	}
}
