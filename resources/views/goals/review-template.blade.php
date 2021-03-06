@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="text-center">
                    <h1 class='page_title'>Smart Goals Template</h1>
                        <div class="panel panel-original">
                            <div class="panel-heading">
                                <h2 class="panel-title">Your Smart Goals</h2>
                            </div>
                            <div class="panel-body">
                                <div class="goals_template">
                                    <p class="text-left" id='targetID'>
                                        <?php foreach($goals as $key => $goal){ ?>
                                        {{ $key+1 }}. Goal: {{$goal->content}}<br/>
                                        ・Accomplishment: {{$goal->rate}}%<br/>
                                        ・Review: {{$reviews[$key]}} <br/>
                                        ・Next Steps: {{$steps[$key]}} <br/>
                                        <br/>
                                        <?php } ?>
                                    </p>
                                </div>
                                <div class='text-right'>
                                     <button id='btnCopy' class="btn"><span class='glyphicon glyphicon-copy'>copy</span></button>
                                     <a class="btn btn-register btn" href="/"><span class="glyphicon glyphicon-home"> Home</span></a>
                                </div>
                            </div>
                        </div>
                </div>
                <div class=text-center>
                    <div class="buttons">
                          <a class="btn button-showw button-block" href="{{ route('goals.create') }}">
                          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                          Create Goals
                          </a>
                   
                         <a class="btn button-showw button-block" href= "{{ route('goals.search')}}" >
                         <span class = "glyphicon glyphicon-search" area-hidden="true"></span>
                         Search Goals
                         </a>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    
    <!--コピーのscript-->
    <script>
        document.querySelector('#btnCopy').addEventListener("click", function(){
          var element = document.querySelector('#targetID');
          var selection = window.getSelection();
          var range = document.createRange();
          range.selectNodeContents(element);
          selection.removeAllRanges();
          selection.addRange(range);
          //console.log('選択された文字列: ', selection.toString());
          var succeeded = document.execCommand('copy');
          if (succeeded) {
              alert('コピーが成功しました！');
          } else {
              alert('コピーが失敗しました!');
          }
          selection.removeAllRanges();
        
        });
    </script>
@endsection('content')