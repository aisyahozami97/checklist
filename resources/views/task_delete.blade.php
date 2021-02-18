<html>
<head>
<title>View Task List Records</title>
</head>
<body>
<table border = "1">
<tr>
<td>ID</td>
<td>Title</td>
<td>Description</td>
<td>Delete</td>
</tr> @foreach ($task as $task)
<tr>
<td>{{ $task->taskId }}</td>
<td>{{ $task->taskName }}</td>
<td>{{ $task->taskDesc }}</td>
<td>{{ $task->taskPriority }}</td>
<td>{{ $task->taskStatus}}</td>
<td><a href = 'delete/{{ $task->taskId }}'>Delete</a></td>
</tr> @endforeach
</table>
</body>
</html>