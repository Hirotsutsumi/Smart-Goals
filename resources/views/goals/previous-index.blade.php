    <div id="collapse0" class="panel-body index-box panel-collapse collapse in">
        <table class="table table-hover">
		    <thead>
		        <tr>
		        	<th>Smart Goal</th>
		        	<th>Achievement Rate</th>
	            </tr>
	       </thead>
	       <tbody>
	           <?php foreach($goals as $goal): ?>
                <tr>
                    <?php $date = substr($goal->created_at,0,10); ?>
                    <td>{{ $goal->content }}</td>
                    <td>{{ $goal->rate }}%</td>
                </tr>
                <?php endforeach; ?>
	        </tbody>
	   </table>
    </div>