<form action="todo_submit" method="POST">
@csrf
    <table>
        @error('name')
             {{$message}}
            @enderror
            <input type="text" placeholder="name" name="name" ><br>
            @error('note')
                 {{$message}}
                @enderror
        
        <input type="text"  placeholder="note" name="note"><br>
        <br>
        <input type="submit" value="Insert">
    
    </table>
    <a href="todo_show">back</a>
</form>