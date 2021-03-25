<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Главная страница</title>
</head>
<body>
<div id="container">
    <header><h1>Список дел</h1></header>
    <nav>
        <p><a href="{{route('todo.create')}}">Создать зпись</a></p>
    </nav>
</div>
<table border="2">
    <tr>
        <th>ID</th>
        <th>Название</th>
        <th>Описание</th>
        <th>Время создания</th>
        <th>Время изменения</th>
    </tr>

    @foreach($todoArray as $todo)
        <tr>
            <td>{{$todo->id}}</td>
            <td>{{$todo->name}}</td>
            <td>{{$todo->description}}</td>
            <td>{{$todo->created_at}}</td>
            <td>{{$todo->updated_at}}</td>
            <td><p><a href="/todo/{{$todo->id}}/edit">Изменить зпись</a></p></td>
            <td>
                <form action="{{route('todo.destroy',['todo'=>$todo->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Удалить</button>
                </form>
            </td>
        </tr>
    @endforeach

</table>
</body>
</html>
