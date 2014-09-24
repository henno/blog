<h1>User '<?= $user['username'] ?>'</h1>
<form id="form" method="post">
    <table class="table table-bordered">
        <tr>
            <th>Username</th>
            <td><input type="text" name="data[username]" value="<?= $user['username'] ?>"/></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input type="text" name="data[password]" value="<?= $user['password'] ?>"/></td>
        </tr>
        <tr>
            <th>Active</th>
            <td><input type="checkbox" name="data[active]" <?= $user['active'] != 0 ? 'checked="checked"' : '' ?>/>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="text" name="data[email]" value="<?= $user['email'] ?>">
        </tr>
    </table>
</form>

<!-- EDIT BUTTON -->
<div class="pull-right">
    <button class="btn btn-default" onclick="window.location.href = 'users/view/<?= $user['user_id'] ?>/<?= $user['username'] ?>'">
        Cancel
    </button>
    <button class="btn btn-danger" onclick="delete_user(<?=$user['user_id']?>)">
        Delete
    </button>
    <button class="btn btn-primary" onclick="$('#form').submit()">
        Save
    </button>
</div>

<script>
    function delete_user(user_id){
        $.post("users/delete", {user_id: <?=$user['user_id']?>}, function (data) {
            if(data == '1'){
                window.location.href = 'users';
            }else{
                alert('Fail');
            }
        });
    }
</script>