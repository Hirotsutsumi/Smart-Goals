<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Goal;    // add

class GoalsController extends Controller
{
   public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $goals = $user->goals()->orderBy('created_at', 'desc')->paginate(10);

            $data = [
                'user' => $user,
                'goals' => $goals,
            ];
            $data += $this->counts($user);
            return view('users.show', $data);
        }else {
            return view('welcome');
        }
    }
    
    public function create()
    {
        $goal = new Goal;
        $user = \Auth::user();
        $keeps = \DB::table('good_user')->join('goals', 'good_user.goal_id', '=', 'goals.id')->select('goals.*')->where('good_user.user_id', $user->id)->groupBy('goals.id', 'goals.created_at', 'goals.updated_at','goals.user_id','goals.content','goals.rate','goals.category')->get();
        
        $query = Goal::query();
        $recommends = $query->select('content')->groupBy('content')->inRandomOrder()->take(10)->get();
        
        $query2 = Goal::query();
        $latest = \DB::table('goals')->where('user_id', $user->id)->max('created_at');
        $previous = $query2->where('user_id', $user->id)->where('created_at', $latest)->get();
        
        return view('goals.create', [
            'goal' => $goal,
            'keeps' => $keeps,
            'recommends' => $recommends,
            'previous' => $previous,
        ]);
        
    }
    
     public function store(Request $request)
    {
        if (\Auth::check()) {
        $user = \Auth::user();
        
        //長くなってしまった申し訳ない。工夫は考えます
        $this->validate($request, [
            'content' => 'required|max:191',
            'category' => 'required',
        ]);
        
        //二個目のフォームに何か一つでも入れられていたらValidate発動
        if(!(!isset($request->content2) && !isset($request->category2)))
        {
           $this->validate($request, [
            'content2' => 'required|max:191',
            'category2' => 'required',
        ]); 
        }
        
        //三個目のフォームに何か一つでも入れられていたらValidate発動
        if(!(!isset($request->content3) && !isset($request->category3)))
        {
           $this->validate($request, [
            'content3' => 'required|max:191',
            'category3' => 'required',
        ]); 
        }
        

        $request->user()->goals()->create([
            'content' => $request->content,
            'category' => $request->category,
        ]);
        
        $data = [
        'content' => $request->content,
        'user' => $user
        ];
        
        //二個目のフォームに全部入っていたら保存
        if(isset($request->content2) && isset($request->category2))
        {
            $request->user()->goals()->create([
            'content' => $request->content2,
            'category' => $request->category2,
        ]); 
            $data += ['content2' => $request->content2,];
        }

        //三個目のフォームに全部入っていたら保存        
        if(isset($request->content3) && isset($request->category3))
        {
            $request->user()->goals()->create([
            'content' => $request->content3,
            'category' => $request->category3,
        ]); 
            $data += ['content3' => $request->content3,];
        }
        $why = '';
        $why2 = '';
        $why3 = '';
        
        if(isset($request->why)){
            $why = $request->why;
        }
        if(isset($request->why2)){
            $why2 = $request->why2;
        }
        if(isset($request->why3)){
            $why3 = $request->why3;
        }
        
        $data += [
            'why' => $request->why,
            'why2' => $request->why2,
            'why3' => $request->why3,
            ];
        }
        
        return view('goals.template', $data);
        }
    
    public function review()
    {
        if (\Auth::check()) {
            $user = \Auth::user();
            $query = Goal::query();
            $latest = \DB::table('goals')->where('user_id', $user->id)->max('created_at');
            $goals = $query->where('user_id', $user->id)->where('created_at', $latest)->get();
           
            
        

        
            return view('goals.review', [
                'goals' => $goals,
            ]);
        }
    }

    public function reviewed(Request $request)
    {
        $this->validate($request, [
            'rate.*' => 'required|numeric',
        ]);
        
        if(isset($request['rate'])){
        foreach($request['rate'] as $key => $rate){
            $id = $request['id'][$key];
            
            $review = $request['review'][$key];
            $step = $request['step'][$key];
            
            $goal = Goal::find($id);
            $goal->rate = $rate;    // add
            $goal->save();
            
            $goals[] = $goal;
            
            $reviews[] = $review;
            $steps[] = $step;
        }
        
        
        return view('goals.review-template', [
            'goals' => $goals,
            'reviews' => $reviews,
            'steps' => $steps,           
            ]);
        }
        
        else{
            return redirect('/');
            //あとでエラーページに差し替え
        }
            
    }
    
     public function destroy($id)
    {
        $goal = \App\Goal::find($id);

        if (\Auth::id() === $goal->user_id) {
            $goal->delete();
        }

        return redirect()->back();
    }
    
    public function search(Request $request)
    {
        //キーワードなど受け取り
        $keyword = $request->keyword;
        $category = $request->category;
        $day = $request->day;
        $relate2 = $request->relate2;
        $user_name = $request->user_name;
        #クエリ生成
        $query = Goal::query();
        //もしキーワードがあったら
        if(!empty($keyword))
        {
            $query->where('content','like','%'.$keyword.'%');
        }
        //もしuser_nameがあったら
        if(!empty($user_name))
        {
            $user_id = \DB::table('users')->where('name', $user_name)->value('id');
            
            $query->where('user_id', $user_id);
        }
        //もしカテゴリがあったら
        if(!empty($category))
        {
            $query->where('category', $category);
        }
        //もし日付があったら
        if(!empty($day))
        {
            if($relate2 == '0'){
                $query->where('created_at', $day);
            }
            if($relate2 == '1'){
                $query->where('created_at', '>=', $day);
            }
            if($relate2 == '2'){
                $query->where('created_at', '<=', $day);
            }
        }
        
        //ページネーション
        $goals = $query->orderBy('created_at','desc')->paginate(30);
        return view('goals.search')->with('goals',$goals)
        ->with('keyword',$keyword)
        ->with('message','検索結果');
    }
}
