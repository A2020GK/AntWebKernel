<?php
namespace App\Controllers;

use System\Controller;
use System\Http\Request;

class Home extends Controller {
    public function index(Request $request, array $args=[]) {
        return $this->renderTemplate("home");
    }
}