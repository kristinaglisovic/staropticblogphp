<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserActivityLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataRangeActivityController extends BackendController
{
    public function activity(){
        $activity=UserActivityLog::all();
        return view('admin.pages.activity',[
            'pageName'=>"Aktivnosti korisnika",
            'activity'=>$activity
        ]);
    }

    function fetch_data(Request $request){

        if($request->ajax()){
            if($request->from_date !='' && $request->to_date!=''){
                $data=UserActivityLog::whereBetween('created_at',[$request->from_date,  $request->to_date])->get();
            }
            else{
                $data=UserActivityLog::orderBy('created_at','desc')->get();
            }
            echo json_encode($data);
        }

    }

    public function truncateActivity(){
        DB::table('user_activity_logs')->truncate();
        return redirect(route('admin.activity'))->with([
            'msg'=>'Aktivnosti su uspešno obrisane',
        ]);
    }

}
