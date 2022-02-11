<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
Use \Carbon\Carbon;
use App\Job;
use App\Fresher;
use App\Experienced;
use DB;

class InterviewController extends Controller
            {
               //for index view page
               public function index(Job $job)
                {
                    $job = Job::where('job_stat', 1)->orderBy('id', 'DESC')->get();
                   return view ('index')->with('job',$job);
                }

               //for fresher viw page
                public function fresher($id)
                {

                    $jobdata=Job::where('id', $id)->get(['id','job_desc','short_desc','skills']);
                    $skill_set=$jobdata[0]->skills;
                    $skills= explode(",",$skill_set);
                    return view ('fresher')->with('jobdata',$jobdata)->with('skills',$skills);
                
                }

                //for jobposting view form
                public function jobpost()
                {
                     return view ('jobpost');
                }

                //for detail view
                public function details($id)
                {
                  
                    $test1=[];  
                    $test2=[];  
                    $skill=[];
                    $Fresher_records= Fresher::where('id', $id)->get();
                
                    if(!empty($Fresher_records))
                    {
                        
                        foreach($Fresher_records as $record)
                        {
                                $skill=unserialize($Fresher_records[0]->lang);
                                $record["from"]="fresher";
                                $record['posted_for']=Job::find($record["job_id"])->job_title;
                                $test1[]=$record;
                        }
                
                    }

                   $Experienced_records=Experienced::where('id', $id)->get();
                     
                    if(!empty( $Experienced_records))
                     {
                        foreach($Experienced_records as $record)
                        {
                                $record["from"]="Experience";
                                $record['posted_for']=Job::find($record["job_id"])->job_title;
                                $test2[]=$record;
                         }
                    }
                    $total_records=collect(array_merge( $test1, $test2));
                    
                     return view ('details')->with('total_records',$total_records)->with('skill',$skill);
                }
            

                 //for admin postedjobs view form
                public function postedjobs(Job $job)

                {
                    $job = Job::orderBy('id', 'DESC')->get();
                    return view ('postedjobs')->with('job',$job);
                
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
                    'name' => 'required|regex:/^[a-zA-ZÃ‘Ã±\s]+$/',
                    'Graduation' => 'required|regex:/^[A-Za-z. -]+$/',
                    'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10|',
                    'file' => 'required|mimes:pdf,docx|max:2500',
                    'skill' => 'required',
                    'location' => 'required',
                    'email' => 'required|email|unique:users|max:40|regex:/(.+)@(.+)\.(.+)/i'
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

                        $fileName = $request->file->getClientOriginalName();
                        $register['filename']= $fileName;
                        $Fresher->file =  $request->file->move('uploads', $fileName);
 
                        $Fresher->location = ($request->input('location') !='on')?$request->input('location'):$request->input('other_location');
                        $Fresher->pg = $request->input('pg')??'';
                        $Fresher->lang= serialize($request->input('skill'));
                        $Fresher->email = $request->input('email');
                        $Fresher->save();
                        return redirect()->route('index')->with('job',Job::where('job_stat', 1)->get())->with('success', 'Application Submitted Successfully !!!');
                    }
                
                }

                //for  experienced store form validation
                public function experience(Request $request,Job $job)
                {

                    $validatedData = Validator::make($request->all(),
                    ['name' => 'required|regex:/^[a-zA-ZÃ‘Ã±\s]+$/',
                    'Current_Company_Name' => 'required|regex:/^[a-zA-ZÃ‘Ã±\s]+$/|max:30',
                    'phonenumber' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                    'file' => 'required|mimes:pdf|max:2500',
                    'email' => 'required|email|unique:users|max:40|regex:/(.+)@(.+)\.(.+)/i',
                    'date_from' => 'required',
                    'currentctc' => 'required|numeric',
                    'expectedctc' => 'required|numeric',
                    'noticeperiod' => 'required|numeric'
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
                        $Experienced->phone = $request->input('phonenumber');
                        $Experienced->currentctc = $request->input('currentctc');
                        $Experienced->expctc = $request->input('expectedctc');
                        $Experienced->noticeperiod = $request->input('noticeperiod');
                        $Experienced->exp = ($request->input('exp')!= 'on')?$request->input('exp') :$request->input('exp_others') ;
                        
                        $fileName = $request->file->getClientOriginalName();
                        $register['filename']= $fileName;
                        $Experienced->file =  $request->file->move('uploads', $fileName);

                        $Experienced->save();
                        
                        return redirect()->route('index')->with('job',Job::where('job_stat', 1)->get(['job_title','job_desc','job_cat']))->with('success', 'Application Submitted Successfully !!!');
                    }
                }

                //for jobposting form validation
                public function job(Request $request)
                {
                
                    $validatedData = Validator::make($request->all(),
                    ['job_title' => 'required',
                    'job_catagory' => 'required',
                    'job_status' => 'required',
                    'short_description' => 'required',
                    'job_description' => 'required',
                     ]);
                
                    if ($validatedData->fails())
                    {
                        return redirect('jobpost')->witherrors($validatedData)->withInput();
                    }
                    else
                    {
                        $job= new Job();
                        $job->job_title= $request->input('job_title');
                        $job->job_desc = $request->input('job_description');
                        $job->job_cat = $request->input('job_catagory');
                        $job->job_stat = $request->input('job_status');
                        $job->short_desc= $request->input('short_description')??'';
                        $job->skills = $request->input('skills')??'';
                       
                        $job->save();  
                       
                        return redirect()->back()->with('message', 'Successfully Posted !!!');
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
                    $total_records=collect(array_merge( $test1, $test2));
                    
                    return view ('admindash')->with('total_records',$total_records);

                }

                //for edit view form 
                public function edit($id,Job $job)
                {
                    $job = DB::table('jobs')->where('id', $id)->first();
                    return view ('edit',compact('job'));
                  
                }

                //for  view form 
                public function view($id)
                {
                    $test1=[];  
                    $test2=[];  
                    $Fresher_records= Fresher::where('job_id',$id)->orderBy('created_at','DESC')->get()->toArray();

                    if(!empty($Fresher_records))
                    {
                        foreach($Fresher_records as $record)
                        {
                                $record["from"]="fresher";
                                $record['posted_for']=Job::find($record["job_id"])->job_title;
                                $test1[]=$record;
                        }
                
                    }

                   $Experienced_records=Experienced::where('job_id',$id)->orderBy('created_at','DESC')->get()->toArray();

                    if(!empty( $Experienced_records))
                     {
                        foreach($Experienced_records as $record)
                        {
                                $record["from"]="Experience";
                                $record['posted_for']=Job::find($record["job_id"])->job_title;
                                $test2[]=$record;
                         }
                    }
                    $total_records=collect(array_merge( $test1, $test2));

                    
                    return view ('view')->with('total_records',$total_records);

                }

                //for dashboard listing delete 
                public function destroy($id,$from) 
                {
                    if($from =='fresher')
                    {
                        DB::delete('delete from fresher  where id = ?',[$id]);
                        return redirect()->back();
                    }
                    else
                    {
                        DB::delete('delete from experienced  where id = ?',[$id]);
                        echo "Record deleted successfully.<br/>";
                        return redirect()->back();
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
                   
                    return redirect()->back();
                
                    
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
                        return redirect()->back()->with('message', 'Updated Successfully!!!');
                    }  
                
                   
    }
    
