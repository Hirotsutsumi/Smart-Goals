<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; // add
use App\Goal;

class UsersController extends Controller
{
   public function index()
    {
        $users = User::paginate(10);
        
        return view('users.index', [
            'users' => $users,
        ]);
    }
    
    
    public function show($id)
    {
        $data = [];
        $auth = \Auth::user();
        if($auth->id == $id){
            $user = User::find($id);
            $study = \DB::table('goals')->where('user_id', $id)->where('category', '0')->orderBy('id', 'DESC')->take(10)->get();
            $private = \DB::table('goals')->where('user_id', $id)->where('category', '1')->orderBy('id', 'DESC')->take(10)->get();
            $communication = \DB::table('goals')->where('user_id', $id)->where('category', '2')->orderBy('id', 'DESC')->take(10)->get();
            $health = \DB::table('goals')->where('user_id', $id)->where('category', '3')->orderBy('id', 'DESC')->take(10)->get();
            $work = \DB::table('goals')->where('user_id', $id)->where('category', '4')->orderBy('id', 'DESC')->take(10)->get();
            //今週の
            $avg_study_this = $user->avg_this(0, $user->id);
            $avg_private_this = $user->avg_this(1, $user->id);
            $avg_communication_this = $user->avg_this(2, $user->id);
            $avg_health_this = $user->avg_this(3, $user->id);
            $avg_work_this = $user->avg_this(4, $user->id);
            //先週の
            $avg_study_last = $user->avg_last(0, $user->id);
            $avg_private_last = $user->avg_last(1, $user->id);
            $avg_communication_last = $user->avg_last(2, $user->id);
            $avg_health_last = $user->avg_last(3, $user->id);
            $avg_work_last = $user->avg_last(4, $user->id);
            //前回立てた目標
            $query2 = Goal::query();
            $latest = \DB::table('goals')->where('user_id', $user->id)->max('created_at'); //日付の取得（文字列）
            $latest_date = date("Y-m-d",strtotime($latest)); //strtotimeで変換さらに日付のみにする
            $today = $query2->where('user_id', $user->id)->whereDate('created_at', $latest_date)->get();
            $today_null = $query2->where('user_id', $user->id)->whereNull('rate')->whereDate('created_at', $latest_date)->get();
            
            
            
            $data = [
                    'user' => $user,
                    'study' => $study,
                    'private' => $private,
                    'communication' => $communication,
                    'health' => $health,
                    'work' => $work,
                    'avg_study_this' => $avg_study_this,
                    'avg_private_this' => $avg_private_this,
                    'avg_communication_this' => $avg_communication_this,
                    'avg_health_this' => $avg_health_this,
                    'avg_work_this' => $avg_work_this,
                    'avg_study_last' => $avg_study_last,
                    'avg_private_last' => $avg_private_last,
                    'avg_communication_last' => $avg_communication_last,
                    'avg_health_last' => $avg_health_last,
                    'avg_work_last' => $avg_work_last,
                    'today' => $today,
                    'today_null'=> $today_null,
                ];
            
            $data += $this->counts($user);
    
            return view('users.show', $data);
        }
    
        else{
            return redirect("/");
        }
    }
    
    public function followings($id)
    {
        $user = User::find($id);
        $followings = $user->followings()->paginate(10);

        $data = [
            'user' => $user,
            'users' => $followings,
        ];

        $data += $this->counts($user);

        return view('users.followings', $data);
    }

    public function followers($id)
    {
        $user = User::find($id);
        $followers = $user->followers()->paginate(15);

        $data = [
            'user' => $user,
            'users' => $followers,
        ];

        $data += $this->counts($user);

        return view('users.followers', $data);
    }
    
    public function collection()
    {
        $user = \Auth::user();
        $data = $user->goals_collection();
        
        $data1 = $data['data1'];
        $data2 = $data['data2'];
        $data3 = $data['data3'];
        
        $keepdata = $user->keeps_collection();
    
        return view('users.collection', [
            'data1' => $data1,
            'data2' => $data2,
            'data3' => $data3,
            'keepdata' => $keepdata,
            'user' => $user,
            ]);
        
    }

    
    public function profile(Request $request){
        
        $this->validate($request, [
            'image' => 'required',
        ]);
        $user = \Auth::user();
        
        $user = User::find($user->id);
        $user->image = $request->image;
        $user->save();
        
        return redirect('/');
    }


    public function howto()
    {
        $user = \Auth::user();
        return view('users.howto');
    }
}