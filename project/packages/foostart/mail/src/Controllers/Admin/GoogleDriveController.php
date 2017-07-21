<?php namespace Foostart\Mail\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use URL;
use Route,
    Redirect;
use Google_Client;
use Google_Service_Books;
use Google_Service_Drive;

class GoogleDriveController extends Controller {
	public function index(){
		// $client = new Google_Client();
		// $client->setAuthConfig(public_path().'/client_secret.json');
		// $client->setApplicationName("Client_Library_Examples");
		// $client->setDeveloperKey("3yPEIP0omkv7ps9bgdWXfWj_");
		// $client->setIncludeGrantedScopes(true);   // incremental auth
		// $client->addScope(Google_Service_Drive::DRIVE);
		// $client->addScope(Google_Service_Drive::DRIVE_METADATA_READONLY);
		// $client->setRedirectUri('http://' . $_SERVER['HTTP_HOST'] . '/oauth2callback.php');

		// $drive = new Google_Service_Drive($client);
		// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
		// $files = $drive->files->listFiles(array())->getItems();
		// $client->authenticate(public_path().'/client_secret.json');
		// $access_token = $client->getAccessToken();
		// var_dump($drive);
		// var_dump($client);
		// var_dump($files);
		// var_dump($access_token);
		// die();

		// $service = new Google_Service_Books($client);
		// var_dump($service);
		// $optParams = array('filter' => 'free-ebooks');
		// $results = $service->volumes->listVolumes('Henry David Thoreau', $optParams);

		// foreach ($results as $item) {
		//   echo $item['volumeInfo']['title'], "<br /> \n";
		// }

		var_dump('start');

		session_start();

		$client = new Google_Client();
		$client->setAuthConfig(public_path().'/client_secret.json');
		$client->addScope(Google_Service_Drive::DRIVE_METADATA_READONLY);
		$client->setAccessType("offline");

		if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
			$client->setAccessToken($_SESSION['access_token']);
			$drive = new Google_Service_Drive($client);
			$files = $drive->files->listFiles(array())->getItems();
			echo json_encode($files);
		} else {
			$redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/oauth2callback.php';
			header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
		}
	}
}