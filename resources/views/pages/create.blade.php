<!DOCTYPE html>
<HTML>
<header>
    <meta charset="utf-8">
</header>
<body>
<form action="{{route('todo.store')}}" method="post">
    <input type="text" name="name" value="Название задачи">
    <br>
    <input type="text" name="description" value="Описание задачи">
    <br>
    @csrf
    <button type="submit">ЗАПИСАТЬ</button>
</form>
</body>
</HTML>
