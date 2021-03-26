<!DOCTYPE html>
<HTML>
<header>
    <meta charset="utf-8">
</header>
<body>
<form action="{{route('todo.update',['todo'=>$todo->id])}}" method="post">
    @csrf
    @method('PATCH')
    <input type="text" name="name" value="{{$todo->name}}">
    <br>
    <input type="text" name="description" value="{{$todo->description}}">
    <br>
    <button type="submit">ИЗМЕНИТЬ</button>
</form>
</body>
</HTML>
