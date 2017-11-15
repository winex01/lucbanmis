<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cron extends CI_Controller {


	public function gitpull()
    {
         echo shell_exec("cd /var/www/lucbanmis/ && git pull");
    }

}
