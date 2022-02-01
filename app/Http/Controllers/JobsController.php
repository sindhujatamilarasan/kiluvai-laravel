<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
Use \Carbon\Carbon;
use App\Job;
use App\Fresher;
use App\Experienced;
use DB;

class Jobscontroller extends Controller
            {
               //for index view page
               public function index(Job $job)
                {
                   return view ('index')->with('job',Job::where('job_stat', 1)->get(['id','job_title','job_desc','job_cat','short_desc']));
                }

               //for fresher viw page
                public function fresher($id)
                {
                    $jobdata=Job::where('id', $id)->get(['id','job_desc','short_desc']);
                    return view ('fresher',compact('jobdata'));
                
                }

                //for jobposting view form
                public function jobpost()
                {
                     return view ('jobpost');
                }

                 //for admin postedjobs view form
                public function postedjobs(Job $job)
                {
                    return view ('postedjobs')->with('job',Job::get());
                
                }

                //for experienced view form
                public function exp($id)
                {
                    $date=Carbon::now()->format('Y-m-d');
                    return view ('exp',compact(['id','date']));
                }


                //for  fresher store form validation
                public function store(Request $request,Job $job)
                {
                    $validatedData = Validator::make($request->all(),
                    [
                    'name' => 'required|regex:/^[a-zA-ZÑñ\s]+$/',
                    'Graduation' => 'required|regex:/^[a-zA-ZÑñ\s]+$/',
                    'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10|',
                    'file' => 'required|mimes:pdf,docx|max:2500',
                    'skill' => 'required',
                    'location' => 'required',
                    'email' => 'required|email|unique:users|max:40|min:25|regex:/(.+)@(.+)\.(.+)/i'
                    ]);
                
                    if ($validatedData->fails())
                    {
                        return redirect()->back()->witherrors($validatedData)->withInput();
                    }
                    else
                    {
                        
                       
                        $Fresher= new Fresher();
                        $Fresher->name = $request->input('name');
                        $Fresher->job_id = $request->input('hidden');
                        $Fresher->Graduation = $request->input('Graduation');
                        $Fresher->phone = $request->input('phone');
                        $Fresher->file = $request->input('file')??'';
                        $Fresher->location = ($request->input('location') !='on')?$request->input('location'):$request->input('other_location');
                        $Fresher->lang= $request->input('skill');
                        $Fresher->email = $request->input('email');
                        $Fresher->save();
                        return view ('index')->with('job',Job::where('job_stat', 1)->get());
                    }
                
                }

                //for  experienced store form validation
                public function experience(Request $request,Job $job)
                {

                    $validatedData = Validator::make($request->all(),
                    ['name' => 'required|regex:/^[a-zA-ZÑñ\s]+$/',
                    'Current_Company_Name' => 'required|regex:/^[a-zA-ZÑñ\s]+$/',
                    'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                    'file' => 'required|mimes:pdf|max:2500',
                    'email' => 'required|email|unique:users,email_address|max:40|min:25|regex:/@/(.+).com(.+)i',
                    'date_from' => 'required',
                    'currentctc' => 'required',
                    'noticeperiod' => 'required'
                    ]);
                    if ($validatedData->fails())
                    {
                        return redirect()->back()->witherrors($validatedData)->withInput();
                    }
                    else
                    {
                        
                        $Experienced= new Experienced();
                        $Experienced->name = $request->input('name');
                        $Experienced->job_id = $request->input('hidden');
                        $Experienced->email = $request->input('email');
                        $Experienced->Current_Company_Name = $request->input('Current_Company_Name');
                        $Experienced->date_from = $request->input('date_from');
                        $Experienced->location = ($request->input('location') !='on')?$request->input('location'):$request->input('other_location');
                        $Experienced->phone = $request->input('phone');
                        $Experienced->currentctc = $request->input('currentctc');
                        $Experienced->expctc = $request->input('expctc');
                        $Experienced->noticeperiod = $request->input('noticeperiod');
                        $Experienced->exp = ($request->input('exp')!= 'on')?$request->input('exp') :$request->input('exp_others') ;
                        $Experienced->file = $request->input('file')??'';
                        $Experienced->save();
                        
                        return redirect('index')->with('job',Job::where('job_stat', 1)->get(['job_title','job_desc','job_cat']));
                    }
                }

                //for jobposting form validation
                public function job(Request $request)
                {
                
                    $validatedData = Validator::make($request->all(),
                    ['job_title' => 'required',
                    'job_cat' => 'required',
                    'job_stat' => 'required',
                    'short_desc' => 'required',
                    'job_desc' => 'required',
                     ]);
                
                    if ($validatedData->fails())
                    {
                        return redirect('jobpost')->witherrors($validatedData)->withInput();
                    }
                    else
                    {
                    
                        Job::create($request->all());
                        return redirect('admindash');
                     }
                }

                //for admindashboard view form 
                public function admindash()
                {
                    $test1=[];  
                    $test2=[];  
                    $Fresher_records= Fresher::get()->toArray();

                    if(!empty($Fresher_records))
                    {
                        foreach($Fresher_records as $record)
                        {
                                $record["from"]="fresher";
                                $record['posted_for']=Job::find($record["job_id"])->job_title;
                                $test1[]=$record;
                        }
                
                    }

                   $Experienced_records=Experienced::get()->toArray();

                    if(!empty( $Experienced_records))
                     {
                        foreach($Experienced_records as $record)
                        {
                                $record["from"]="Experience";
                                $record['posted_for']=Job::find($record["job_id"])->job_title;
                                $test2[]=$record;
                         }
                    }
                    $total_records=array_merge( $test1, $test2); 
                    return view ('admindash')->with('total_records',$total_records);

                }

                //for edit view form 
                public function edit($id,Job $job)
                {
                    $job = DB::table('jobs')->where('id', $id)->first();
                    return view ('edit',compact('job'));
                
                }

                //for dashboard listing delete 
                public function destroy($id,$from) 
                {
                    if($from =='fresher')
                    {
                        DB::delete('delete from fresher  where id = ?',[$id]);
                        return redirect()->back() ->with('alert', 'Deleted successfully!');
                    }
                    else
                    {
                        DB::delete('delete from experienced  where id = ?',[$id]);
                        echo "Record deleted successfully.<br/>";
                        return redirect()->back() ->with('alert', 'Deleted successfully!');
                    }
                    
                }

                //for postedjobs listing delete 
                public function delete($id) 
                {
                
                    $adminDelete=DB::delete('delete from jobs  where id = ?',[$id]);

                    if($adminDelete)
                    {
                        $fresherDelete=DB::delete('delete from fresher  where job_id = ?',[$id]);
                        $experienceDelete=DB::delete('delete from experienced  where job_id = ?',[$id]);  
                    }
                   
                    return redirect()->back() ->with('alert', 'Deleted successfully!');
                
                    
                 }

                 //for postedjobs listing edit update 

                    public function update($id,Request $request)
                    {
                        $jobs = Job::find($id);
                        $jobs->job_title = $request->input('job_title');
                        $jobs->job_stat= $request->input('job_stat');
                        $jobs->job_desc = $request->input('job_desc');
                        $jobs->job_cat= $request->input('job_cat');
                        $jobs->short_desc = $request->input('short_desc');
                        $jobs->update();
                        return redirect('postedjobs');
                    }  
                

    }
    
