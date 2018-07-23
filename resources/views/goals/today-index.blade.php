<ul class="media-list">
    <li class="media">
        <div class="media-body">
            <div class="panel panel-original" style="word-break:break-all; height:210px;">
                <div class="panel-heading">
                    <h3 class="panel-title">Today's Goal</h3>
                </div>
                <div class="panel-body previous-index-box">
                    <table class="table table-hover">
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
                </div>
            </div>
        </div>
    </li>
</ul>