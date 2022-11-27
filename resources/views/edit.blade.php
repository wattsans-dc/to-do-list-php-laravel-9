
   <form action="/edit" method="POST" >

    @csrf
    <input type="text" name="tache" id="tache" value="{{ $todolist['tache'] }}"> <br> <br>
    <input type="hidden" name="id" value="{{ $todolist['id'] }}">


    <button type="submit">Update</button>


</form>
