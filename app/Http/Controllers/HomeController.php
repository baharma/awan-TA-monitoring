<?php

namespace App\Http\Controllers;

use App\Models\ApiRequest;
use Illuminate\Http\Request;

class HomeController extends Controller
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
    public function getAllData(){
        $data = ApiRequest::latest('created_at')->first();
        return response()->json($data);
    }
    public function getHistory(){
        $data = ApiRequest::latest()->paginate(7);
        return view('history', compact('data'));

    }
}
