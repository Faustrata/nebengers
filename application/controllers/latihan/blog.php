<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog extends CI_Controller {
	
        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }

        public function index()
        {
                echo 'Hello World!';
        }
        public function ujicoba()
        {
                echo 'ini uji coba!';
        }
        public function shoes($sandals, $id)
        {
                echo $sandals;
                echo $id;
        }
        public function _rahasia()
        {
                echo $sandals;
                echo $id;
        }

}