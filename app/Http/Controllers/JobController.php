<?php

namespace App\Http\Controllers;

use App\Model\Job;
use Illuminate\Http\Request;
use Validator;
use Carbon\Carbon;


class JobController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['jobs'] = Job::latest()->get();
        return view('backend.jobs.view',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.jobs.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validator = Validator::make($request->all(), [
            'title'         => 'required',
            'position'      => 'required',
            'qualification' => 'required',
            'experice'      => 'required',
            'location'      => 'required',
            'dead_line'     => 'required',
            'status'        => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        else{

            $lastjobcount = Job::count();
            $lastjobid    = Job::orderBy('id','DESC')->first();

            $job = new Job();

            if($lastjobcount>0){
                $job->uid   = $lastjobid->uid+1;
            }
            else{
                $job->uid   = '2021001';
            }

            $job->title     = $request->title;
            $job->title     = $request->title;
            $job->position  = $request->position;
            $job->qualification = $request->qualification;
            $job->experice  = $request->experice;
            $job->location  = $request->location;
            $job->salary    = $request->salary;
            $job->dead_line = $request->dead_line;
            $job->vacancy   = $request->vacancy;
            $job->link      = $request->link;
            $job->status    = $request->status;
            $job->save();

            $notification = array(
                'message' => 'Job Create Successfully!',
                'alert-type' => 'success'
            );

            return redirect()->route('job.index')->with($notification);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['job'] = job::find($id);
        return view('backend.jobs.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title'         => 'required',
            'position'      => 'required',
            'qualification' => 'required',
            'experice'      => 'required',
            'location'      => 'required',
            'dead_line'     => 'required',
            'status'        => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        else{

            $job =  Job::find($id);
            $job->title     = $request->title;
            $job->position  = $request->position;
            $job->qualification = $request->qualification;
            $job->experice = $request->experice;
            $job->location = $request->location;
            $job->salary    = $request->salary;
            $job->dead_line = $request->dead_line;
            $job->vacancy   = $request->vacancy;
            $job->link      = $request->link;
            $job->status    = $request->status;
            $job->save();

            $notification = array(
                'message' => 'Job update Successfully!',
                'alert-type' => 'success'
            );

            return redirect()->route('job.index')->with($notification);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notics =  Job::find($id)->delete();

        $notification = array(
            'message' => 'Job Delete Successfully!',
            'alert-type' => 'danger'
        );

        return redirect()->route('job.index')->with($notification);
    }
}
