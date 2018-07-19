@extends('layouts.app')

@section('cover')

<div class='top'>
        
         
  <section class="main-top">
   　<p class="site-title-sub">SmartGoal管理アプリ</p>
    <h1 class="site-title">     Welcome to SmartGoals</h1>
     
    <div class="buttons">
      <a class="button button-showy" href="#howtouse">HOW TO USE</a>
    </div>
  </section>
  

  <section class="skills" id="howtouse">
    <h2 class="heading">HOW TO USE</h2>
    
        <h3 class="Judy"><strong>初めての方はこちら</strong></h3>
  
    <div class="skills-wrapper">
        <div class="skill-box">
          <img src="{{ secure_asset("images/Temp.png") }}" alt="howtouse">
        </div>
        <div class="skill-box">  
         <div class="skill-title">STEP0. REGISTER</div>
          <p class="skill-text">
             まず今日のSmartGoalを登録しましょう。<br>
             目標達成してきのこを集めよう！<br>
             
          </p>
          <hr>
         </div>
       </div>
    </section>
    
　<section class="skills">　　　
        <h3 class="Judy"><strong>2回目以降の方はこちら</strong></h3>
   
    <div class="skills-wrapper">
      <div class="skill-box">  
        <div class="skill-title">STEP1. REVIEW</div>
        <p class="skill-text">
          今日のSmartGoalを振り返り
          達成率などを入力<br>
          出力されたテンプレートで日報を作成しましょう！
        </p>
      </div>
        <div class="skill-box">
          <img src="{{ secure_asset("images/Temp.png") }}" alt="howtouse">
        </div>
     </div>
  </section>
  
  <section class="skills">
       <div class="skills-wrapper">
        <div class="skill-box">
          <img src="{{ secure_asset("images/Temp.png") }}" alt="howtouse">
        </div>
        <div class="skill-box">  
         <div class="skill-title">STEP2. CHECK</div>
          <p class="skill-text">
             過去の達成度と
             同期のSmartGoalを参考に<br>
             明日のSmartGoalを考えよう！
          </p>
         </div>
       </div>
  </section>
  
  <section class="skills">
      <div class="skills-wrapper">
     <div class="skill-box">  
        <div class="skill-title">STEP3. ADD</div>
        <p class="skill-text">
          SmartGoalを追加してスムーズに日報作成<br>
          出力されたテンプレートで日報完成！
        </p>
      </div>
        <div class="skill-box">
          <img src="{{ secure_asset("images/Temp.png") }}" alt="howtouse">
        </div>
      </div>
      <div class="buttons">
      <a class="button button-showyy" href="{{ route('signup.get') }}">SIGN UP!</a>
    </div>
  </section>
  
  <section class="contact" id="contact">
    <h2 class="heading">ABOUT US</h2>
     <p class="contact-text">
       purple tribe<br>
       チームきりんさん<br>
       
       RYO　ISSEI　HIRO　SUE　KANAKO　ONOSHIN
    
    </p>
  
  </section>

</div>  

@endsection