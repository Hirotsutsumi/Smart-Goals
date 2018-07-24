    <div class="panel-body search-box">
        <table class="table">
		    <thead>
		        <tr>
			        <th>User</th>
		        	<th>Smart Goal</th>
			        <th>Date</th>
			        <th>Keep</th>
			        <th>Delete</th>
	            </tr>
	       </thead>
	       <tbody>
	           <?php foreach($goals as $goal): ?>
                <tr>
                    <?php $user = $goal->user->name; ?>
                    <?php $date = substr($goal->created_at,0,10); ?>
                    <td>{{ $user }}</td>
                    <td>{{ $goal->content }}</td>
                    <td>{{ $date }}</td>
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
