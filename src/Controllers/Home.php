<?php
namespace App\Controllers;

use Antwk\Controller;
use Antwk\Http\Request;

class Home extends Controller {
    public function index(Request $request, array $args=[]) {
        return $this->renderTemplate("home");
    }
}