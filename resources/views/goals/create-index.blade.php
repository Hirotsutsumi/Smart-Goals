    <div class="panel-body index-box">
        <table class="table table-hover">
		    <thead>
		        <tr>
		        	<th>目標</th>
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