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
    //for home page 
    public function index(Job $job)
    {
       return view ('index')->with('job',Job::where('job_stat', 1)->get(['id','job_title','job_desc','job_cat']));
    }

    //for fresher form
    public function fresher($id)
    {
     
      return view ('fresher',compact('id'));
     
    }

    //for jobposting form
    public function jobpost()
    {
      return view ('jobpost');
    }
    

    public function postedjobs(Job $job)
    {
       
        return view ('postedjobs')->with('job',Job::get());
       
    }


    //for experienced form
    public function exp($id)
    {
        $date=Carbon::now()->format('Y-m-d');
        return view ('exp',compact(['id','date']));
    }


    //for  fresher form validation
    public function store(Request $request,Job $job)
    {
        $validatedData = Validator::make($request->all(),
        [
        'name' => 'required|regex:/^[a-zA-ZÑñ\s]+$/',
        'Graduation' => 'required',
        'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10',
        'file' => 'required|mimes:pdf|max:10000',
        'lang' => 'required',
        'location' => 'required',
        'email' => 'required|email|unique:users'
        ]);
       
        if ($validatedData->fails()){
            return redirect('fresher')->witherrors($validatedData)->withInput();
        }
        else{
           
            $Fresher= new Fresher();
            //On left field name in DB and on right field name in Form/view
         
            $Fresher->name = $request->input('name');
            $Fresher->job_id = $request->input('hidden');
            $Fresher->Graduation = $request->input('Graduation');
            $Fresher->phone = $request->input('phone');
            $Fresher->file = $request->input('file')??'';
            $Fresher->location = ($request->input('location') !='on')?$request->input('location'):$request->input('other_location');
            $Fresher->lang = $request->input('lang');
            $Fresher->email = $request->input('email');
            $Fresher->save();
            return view ('index')->with('job',Job::where('job_stat', 1)->get());
        }
       
    }

    //for  experienced form validation
    public function experience(Request $request,Job $job)
    {

        $validatedData = Validator::make($request->all(),
        ['name' => 'required|regex:/^[a-zA-ZÑñ\s]+$/',
        'Current_Company_Name' => 'required',
        'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        'file' => 'required|mimes:pdf|max:10000',
        'email' => 'required|email',
        'date_from' => 'required',
        'currentctc' => 'required',
        'noticeperiod' => 'required'
        ]);
        if ($validatedData->fails()){
            
            return redirect('exp')->witherrors($validatedData)->withInput();
        }
        else{
            
            $Experienced= new Experienced();
            //On left field name in DB and on right field name in Form/view
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

    //for job posting form validation
    public function job(Request $request)
    {
        $validatedData = Validator::make($request->all(),
        ['job_title' => 'required',
        
        'job_cat' => 'required']);
       
        if ($validatedData->fails()){
           
            return redirect('jobpost')->witherrors($validatedData)->withInput();
        }
        else{
          
            Job::create($request->all());
            return redirect('admindash');
          
        }
    }

    //for admindashboard form 
    public function admindash()
    {
        //$record=[];
    $Fresher_records= Fresher::get()->toArray();
   
    foreach($Fresher_records as $record){
    $record["from"]="fresher";
    $record['posted_for']=Job::find($record["job_id"])->job_title;
    $test1[]=$record;
    }
   
    $Experienced_records=Experienced::get()->toArray();
    foreach($Experienced_records as $record){
        $record["from"]="Experience";
        $record['posted_for']=Job::find($record["job_id"])->job_title;
        $test2[]=$record;
        }

    $total_records=array_merge( $test1, $test2);
    //return $total_records;
     return view ('admindash')->with('total_records',$total_records);
    }

     //for adminlogin form 
    public function adminlogin()
    {
      
        return view ('adminlogin');
    }
    
   
    public function adlogin(Request $request)
    {
        $validatedData = Validator::make($request->all(),
        ['adminemail' => 'required|email|unique:users',
        'password' => 'required',
        
        ]);
        if ($validatedData->fails()){

            return redirect('adminlogin')->witherrors($validatedData)->withInput();
        }
        else{
            return redirect('admindash');
        }
       
    }
    public function destroy($id,$from) {
        if($from =='fresher'){
            DB::delete('delete from fresher  where id = ?',[$id]);
            echo "Record deleted successfully.<br/>";
            echo '<a href = "/admindash">Click Here</a> to go back.';
        }else{
            DB::delete('delete from experienced  where id = ?',[$id]);
            echo "Record deleted successfully.<br/>";
            echo '<a href = "/admindash">Click Here</a> to go back.';
        }
        
     }

     public function show($id)
     {
         $books = Book::find($id);
         return view('books.book')->with('books', $books);
     }
   
    
}
    
