@extends('layouts.app')

@section('cover')

<div class='top'>
        
         
  <section class="main-top">
   　<p class="site-title-sub">SmartGoal管理アプリ</p>
    <h1 class="site-title">     Welcome to SmartGoals</h1>
     
    <div class="buttons">
      <a class="button button-showy" href="{{ route('signup.get') }}">SIGN UP</a>
    </div>
  </section>
  
  <!--<section class="about" id="about">-->
    <!--<h2 class="heading">ABOUT THIS PRODUCT</h2>-->
    <!--<p class="about-text">-->
    <!-- みなさんは毎日どのようなSmartGoalを設定していますか？<br>-->
  　　<!--毎日違うスマートゴールを考えるのが億劫、同期がどんなゴールを目標にしているのか気になる…<br>-->
  　　<!--そんなあなたの悩みを解決するアプリケーション-->
    <!--</p>-->
    <!--<p class="about-text">-->
    <!--  このアプリは皆さんの目標設定と目標管理をお手伝いさせていただくツールです。<br>-->
    <!--  このアプリを使うことで毎日の日報制作が効率的に、また、生産性のある目標を立てることができます。-->
    <!--</p>-->
  <!--</section>-->

  <section class="skills">
    <h2 class="heading">HOW TO USE</h2>
    <h3><strong>スマートゴールを追加したら．．．</strong></h3>
    <div class="skills-wrapper">
      <div class="skill-box">
        
        <div class="skill-title">STEP1. REVIEW</div>
        <p class="skill-text">
          前日のSmartGoalを振り返り<br>
          達成率などを入力<br>
          出力されたテンプレートで日報を作成しましょう！
        </p>
    
      </div>
      
       <div class="skill-box">
        <span class = "glyphicon glyphicon-arrow-right" style="font-size:50px" area-hidden="true">
        </span>
       </div>   
      
      <div class="skill-box">
        <div class="skill-title">STEP2. CHECK</div>
        <p class="skill-text">
        過去の達成度と<br>
        同期のSmartGoalを参考に<br> 
         今日のSmartGoalを<br>
         考えよう！
        </p>
      </div>
   <div class="skill-box">
         <span class = "glyphicon glyphicon-arrow-right" style="font-size:50px" area-hidden="true">
         </span>
   </div>  
       
        <div class="skill-title">SREP3. ADD</div>
        <p class="skill-text">
         SmartGoalを追加して<br>
          スムーズに日報作成<br>
          出力されたテンプレートで日報完成！
         
        </p>
      </div>
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