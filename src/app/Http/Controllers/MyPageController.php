<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MyPageController extends Controller
{
    public function show(Request $request, MyPageService $service): JsonResponse
    {
        $id = $request->route('id');
        $result = $service->execute($id);

        return response()->json();
    }
}
