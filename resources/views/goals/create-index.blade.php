    <div id="collapse2" class="panel-body index-box panel-collapse collapse">
        <table class="table">
		    <thead>
		        <tr>
		        	<th>Smart Goal</th>
	            </tr>
	       </thead>
	       <tbody>
	           <?php foreach($goals as $goal): ?>
                <tr>
                    <?php $date = substr($goal->created_at,0,10); ?>
                    <td>{{ $goal->content }}</td>
                </tr>
                <?php endforeach; ?>
	        </tbody>
	   </table>
    </div>