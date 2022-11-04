<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PasswordReset;
use Illuminate\Http\Request;

class ForgotPasswordUsers extends BackendController
{
    function index(){
            return view('admin.pages.forgot',[
                'pageName'=>"Resetovane lozinke",
            ]);
        }
    function search(Request $request)
    {
       if($request->ajax()){
            $output='';
            $query=$request->get('query');
            if($query!=''){
                $data=PasswordReset::where('email','like','%'.$query.'%')->get();
            }
            else{
                $data=PasswordReset::all();
            }
            $total_row=$data->count();
            if($total_row>0){
                foreach($data as $key=>$row){
                    $output.='<tr>
                     <td>'.++$key. '</td>
                    <td>'.$row->email.'</td>
                    <td>'.$row->created_at.'</td>
                    </tr>';
                }
            }
            else
            {
                $output='<tr>
                        <td><strong>Nema rezultata pretrage</strong></td></tr>';
            }
            $data=array('table_data'=>$output, 'total_data'=>$total_row);
            echo json_encode($data);
       }
    }
}
