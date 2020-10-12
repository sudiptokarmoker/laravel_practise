<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use App\Models\JobSalary;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $model = Jobs::find(5)->delete();
        /*
        $model = new Jobs();
        $model->job_title = 'Web developer';
        $model->save();

        $modelJobSalary = new JobSalary();
        $modelJobSalary->job_id = $model->id;
        $modelJobSalary->job_salary = 10000;
        $modelJobSalary->save();

        return $model;
        //$model->
        */
    }
}
