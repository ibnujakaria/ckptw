<table>
	<tr>
		<th>id</th>
		<th>username</th>
		<th>status</th>
		<th>comments</th>
		<th>loves</th>
		<th>created_at</th>
		<th>updated_at</th>
	</tr>
	@foreach($statuses as $status)
	<tr>
		<td>{{$status->id}}</td>
		<td>{{$status->username}}</td>
		<td>{{$status->status}}</td>
		<td>{{count($status->comments)}}</td>
		<td>{{count($status->loves)}}</td>
		<td>{{$status->created_at}}</td>
		<td>{{$status->updated_at}}</td>
	</tr>
	@endforeach
</table>