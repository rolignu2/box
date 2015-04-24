<?php


$api_key = 'nwv60huci6wgjiitowownynfqa1gwt1y';


include('api/library/BoxAPI.class.php');

	$client_id		= "nwv60huci6wgjiitowownynfqa1gwt1y";
	$client_secret          = 'lpcu7GSqbu4J0nrvyQQMMY5Tv3RTA9O5';
	$redirect_uri           = 'http://localhost/box/';
	
	$box = new Box_API($client_id, $client_secret, $redirect_uri);
	
	if(!$box->load_token()){
		if(isset($_GET['code'])){
			$token = $box->get_token($_GET['code'], true);
			if($box->write_token($token, 'file')){
				$box->load_token();
			}
		} else {
                    print_r($box->get_code());
		}
	}
        
        echo '<pre>';
        print_r($box->get_user());
        echo '</pre>';
        
        //$folders = $box->get_folder_collaborators('Tareas');
       // print_r($folders);
        
        echo '<pre>';
        print_r($box->create_folder('PRUEBA_FOLDER' , 'Tareas'));
         echo '</pre>';
        
        