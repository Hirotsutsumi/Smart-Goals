<ul class="media-list">
    <li class="media">
        <div class="media-body">
            <div class="panel panel-original" style="word-break:break-all;">
                <div class="panel-heading">
                    <h3 class="panel-title">Today's Goal</h3>
                </div>
                <div class="panel-body previous-index-box">
                    <?php if(!isset($goals[0]->rate)){ //2番目だけ入れるとかは無理なのでとりあえずこれでいいか?> 
                    <table class="table">
	                    <thead>
	                        <tr>
		                    	<th>Smart Goal</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($goals as $goal): ?>
                            <tr>
                                <td>{{ $goal->content }}</td>
                            </tr>
                        <?php endforeach; ?>
            	        </tbody>
        	        </table>
        	        <a class="btn btn-register btn-block" href="{{ route('goals.review') }}">Review Today's Goals</a>
        	        <?php }else{ ?>
                    <table class="table table_previous_index">
	                    <thead>
	                        <tr>
		                    	<th>Smart Goal</th>
		                    	<th>Achievement rate</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($goals as $goal): ?>
                            <tr>
                                <td>{{ $goal->content }}</td>
                                <td>{{ $goal->rate }}%</td>
                            </tr>
                        <?php endforeach; ?>
            	        </tbody>
        	        </table>
        	        <a class="btn btn-register btn-block" href="{{ route('goals.create') }}">Create Next Goals</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </li>
</ul>