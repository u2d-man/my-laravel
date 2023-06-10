<?php

namespace App\Http\Controllers;

use stdClass;

class ResponseCheckController extends Controller
{
    /**
     * auto type change to json
     *
     * @return stdClass
     */
    public function returnStdClass(): stdClass
    {


        return (object)[
            'message' => 'success',
            'data' => [
                [
                    'name' => 'Kate',
                    'age' => 26
                ],
                [
                    'name' => 'Allen',
                    'age' => 23
                ]
            ]
        ];
    }

    /**
     * auto type change to json
     *
     * @return array
     */
    public function returnArray(): array
    {
        return [
            'message' => 'success',
            'data' => [
                [
                    'name' => 'Kate',
                    'age' => 26,
                    'hobby' => 'programming'
                ],
                [
                    'name' => 'Allen',
                    'age' => 23,
                    'hobby' => 'video game'
                ]
            ]
        ];
    }
}
