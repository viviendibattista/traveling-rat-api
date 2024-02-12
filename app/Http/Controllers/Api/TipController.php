<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tip;
use Illuminate\Http\Request;

class TipController extends Controller
{
	public function index()
	{
		$tips = Tip::all();
		return response()->json($tips);
	}

	public function show($id)
	{
		$tip = Tip::findOrFail($id);
		return response()->json($tip);
	}
}
