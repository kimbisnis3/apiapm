<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		
    }
    
    public function getUser()
	{
        echo(json_encode([
            "status"=> "buku berhasil ditambahkan"
            ]));
	}
}
