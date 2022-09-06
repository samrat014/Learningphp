
<title> view todo </title>

<table border='2px' >
    
    <tr>
        <td>id</td>
        <td>name</td>
        <td>note</td>
        <td>action</td>

    </tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr><a href="addtodo">Add</a> </tr>


@foreach($todoArr as $todo)
    <tr>
        <td>{{$todo->id}}</td>
        <td>{{$todo->name}}</td>
        <td>{{$todo->note}}</td>
        <td> <a href="todo_delete/{{$todo->id}}">delete</a> </td>
    </tr>

  @endforeach


</table>