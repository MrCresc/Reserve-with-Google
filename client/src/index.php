<?php

use Zttp\Zttp;

require '../vendor/autoload.php';

$start = new Client_Reservations();
$start->getReservations(2);

class Client_Reservations
{
	public function __construct()
	{

    }

	public function getReservations($id = null)
	{
        $url = 'http://test.local/wp-json/wp/v2/wpo_bookly_appointments/'.$id;
        
        $response = Zttp::withHeaders(['Authorization' => 'Basic ' . base64_encode( 'Cresc:pippo123' )])->get($url);
        
        print_r($response->json());
    }

    public function getCustomers($id = null)
	{
        $url = 'http://test.local/wp-json/wp/v2/wpo_bookly_customers/'.$id;
        
        $response = Zttp::withHeaders(['Authorization' => 'Basic ' . base64_encode( 'Cresc:pippo123' )])->get($url);
        
        print_r($response->json());
    }
    
    
	
}