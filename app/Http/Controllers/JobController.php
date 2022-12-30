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
            'jobs' => Job::latest()->filter(request(['tag', 'search']))->paginate(4)
        ]);
    }
    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        $info = $request->validate([
            'company' => ['required', Rule::unique('jobs', 'company')],
            'title' => 'required',
            'location' => 'required',
            'email' => 'required', 'email',
            'website' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);
        if ($request->hasFile('logo')) {
            $info['logo'] = $request->file('logo')->store('logos', 'public');
        }
        Job::create($info);
        return redirect('/')->with('success', 'job created successfully');
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', [
            'job' => $job
        ]);
    }

    public function update(Request $request, Job $job)
    {
        $info = $request->validate([
            'company' => ['required'],
            'title' => 'required',
            'location' => 'required',
            'email' => 'required', 'email',
            'website' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);
        if ($request->hasFile('logo')) {
            $info['logo'] = $request->file('logo')->store('logos', 'public');
        }
        $job->update($info);
        return back()->with('success', 'job updated successfully');
    }

    public function destroy(Job $job){
        $job->delete();
        return redirect('/')->with('success','Job deleted');
    }

}
