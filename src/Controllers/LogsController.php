<?php

namespace Encone\Logs\Controllers;

use Encone\Logs\Models\Logs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class LogsController extends Controller
{
    public function index(){
        $data = ['admin_user_id'=>1,'route'=>'/','method'=>'get','description'=>'test','ip'=>'127.0.0.1'];
        dd(Logs::createLog($data));
    }
}
