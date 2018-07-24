    <div class="panel-body index-box">
        <table class="table table_goals_index">
		    <thead>
		        <tr>
			        <th>Date</th>
		        	<th>Smart Goal</th></th>
			        <th>Achievement Rate</th>
	                <th>Keep</th>
	                <th>Delete</th>
	            </tr>
	       </thead>
	       <tbody>
	           <?php foreach($goals as $goal): ?>
                <tr>
                    <?php $date = substr($goal->created_at,0,10); ?>
                    <td>{{ $date }}</td>
                    <td>{{ $goal->content }}</td>
                    <td>{{ $goal->rate }}%</td>
                    <td>@include('good_user.good_button')</td>
                    @if (Auth::user()->id == $goal->user_id)
                    <td>
                        {!! Form::open(['route' => ['goals.destroy', $goal->id], 'method' => 'delete']) !!}
                            <button type="submit" class="btn btn-original"><span class='glyphicon glyphicon-trash'></span></button>
                        {!! Form::close() !!}
                    </td>
                    @endif
                </tr>
                <?php endforeach; ?>
	        </tbody>
	   </table>
    </div>