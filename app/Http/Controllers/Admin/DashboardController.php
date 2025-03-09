<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\UserRole;
use App\Http\Controllers\Controller;
use App\Job;
use App\Requisition;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $data['user'] = Auth::user();
            $where = [] ;
            if($data['user']->role_id == UserRole::DEPARTMENT){
                $where[] = ['section_id','=',$data['user']->section_id];
            }
            //return $where;
            $data['total_user'] = User::where($where)->count();
            $requisition = Requisition::where($where);
            $data['total_requisition'] = $requisition->count();
            $data['total_pending_requisition'] = $requisition->where('status','Pending')->count();

            $data['total_job'] = Job::count();
            if($data['user']->role_id == UserRole::DEPARTMENT){
                $data['total_job'] = Requisition::where($where)->whereNotNull('job_id')->count();
            }
            
            return view("admin.dashboard.index", $data);
        }
    }

    public function edit(Request $request)
    {
        $model = $request->table;
        $column = $request->column;
        $value = $request->value;
        $response = find($model, array($column => $value), $column, 'asc', 'first');
        return response()->json($response);
    }

    public function profile($name = '')
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('admin.users.profile', compact('user'));
        }
    }
}