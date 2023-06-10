<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use InvalidArgumentException;

class ExceptionController extends Controller
{
    public function index(Request $request)
    {
        $id = (int) $request->route('id');

        if ($id === 0) {
            throw new InvalidArgumentException('invalid id.');
        }

        return [
            'message' => 'success',
            'data' => [
                'id' => $id
            ]
        ];
    }
}
