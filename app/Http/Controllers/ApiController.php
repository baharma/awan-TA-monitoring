<?php

namespace App\Http\Controllers;

use App\Models\ApiRequest;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public $Api;

    public function __construct(ApiRequest $Api)
    {
        $this->Api = $Api;
    }

    public function index(){
        $data = $this->Api;
        return view('home',compact('data'));
    }
    public function statusHistory(){

    }
}
