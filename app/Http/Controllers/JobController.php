<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    public function show(Job $job)
    {

        return view('jobs.show', [
            'job' => $job
        ]);
    }

    public function index()
    {
        return view('jobs.index', [
            'jobs' => Job::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }
    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        $formFields= $request->validate([
            'title'=>'required',
            'company'=>['required',Rule::unique('jobs','company')],
            'location'=>'required',
            'tags'=>'required',
            'descriptiption'=>'required',
            'website'=>'required',
            'email'=>['required','email']
        ]);
        return redirect();
    }
}

