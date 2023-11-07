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

    public function index(Request $request){
        $data = $request->all();
        $this->Api->create($data);
        return response()->json(['message' => 'API request created successfully']);
    }
}
