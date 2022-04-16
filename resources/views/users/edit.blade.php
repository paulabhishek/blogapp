
    <h1>Edit User</h1>

    <form method="POST" action="
        {{ action('UserController@update',$user->id ) }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <label for="role">Role</label>
        <select name="role">
                <option value="admin">admin</option>
            <option value="author">author</option>
            <option value="subscriber">Subscriber</option>

        </select><br>
        <input type="submit" value="Update"><br>
    </form>
