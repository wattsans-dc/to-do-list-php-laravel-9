<form action="{{ url('modifier') }}" method="post">
    <div>
    @csrf

    <input type="text" name="name" value="{{ $todolist['tache'] }}" placeholder="Modifier">

<button name="req" type="submit">Modifier</button>
</div>
</form>
