<table>
	<tr>
		<th>id</th>
		<th>username</th>
		<th>status</th>
		<th>loves</th>
		<th>created_at</th>
		<th>updated_at</th>
	</tr>
	@foreach($comments as $comment)
	<tr>
		<td>{{$comment->id}}</td>
		<td>{{$comment->username}}</td>
		<td>{{$comment->comment}}</td>
		<td>{{count($comment->loves)}}</td>
		<td>{{$comment->created_at}}</td>
		<td>{{$comment->updated_at}}</td>
	</tr>
	@endforeach
</table>