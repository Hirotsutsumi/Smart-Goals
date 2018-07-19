<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Goal;

class RankingController extends Controller
{
    public function good()
    {
        $user = \Auth::user();
        // 自分のsmart goal
        $mygoals = \DB::table('good_user')->join('goals', 'good_user.goal_id', '=', 'goals.id')->select('goals.*')->where('goals.user_id', $user->id)->where('good_user.user_id', $user->id)->groupBy('goals.id', 'goals.created_at', 'goals.updated_at','user_id','goals.content','goals.rate','goals.category')->get();
        // 他人のsmart goal
        $othersgoals = \DB::table('good_user')->join('goals', 'good_user.goal_id', '=', 'goals.id')->select('goals.*')->whereNotIn('goals.user_id', [$user->id])->where('good_user.user_id', $user->id)->groupBy('goals.id', 'goals.created_at', 'goals.updated_at','user_id','goals.content','goals.rate','goals.category')->get();
        
        return view('ranking.good', [
            'mygoals' => $mygoals,
            'othersgoals' => $othersgoals,
        ]);
    }
}