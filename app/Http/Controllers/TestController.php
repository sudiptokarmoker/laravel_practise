<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $permission_data = [
            [
                'group_name' => 'seekers',
                'permissions' => [
                    'seekers.profile',
                    'seekers.create_resume',
                    'seekers.share_resume'
                ]
            ],
            [
                'group_name' => 'vendor',
                'permissions' => [
                    'vendor.create',
                    'vendor.profile',
                    'vendor.list'
                ]
            ]
        ];
        for ($i = 0; $i < count($permission_data); $i++) {
            for ($j = 0; $j < count($permission_data[$i]['permissions']); $j++) {
                echo "\n permission list name : " . $permission_data[$i]['permissions'][$j]. ' Group Name : '.$permission_data[$i]['group_name'];
            }
        }
    }
}
