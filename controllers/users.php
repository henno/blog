<?php

/**
 * Created by PhpStorm.
 * User: Maile
 * Date: 17.09.14
 * Time: 18:19
 */
class users extends Controller
{
    public $requires_auth = true;

    function index()
    {
        $this->users = get_all("SELECT * FROM user");

    }

    function view()
    {
        $user_id = $this->params[0];
        $this->user = get_first("SELECT * FROM user WHERE user_id = '$user_id'");

    }
    function edit_post(){
        $data = $_POST['data'];
        $data['user_id'] = $this->params[0];
        $data['active'] = isset($data['active']) ? 1 : 0;
        insert('user', $data);
        header('Location: '.BASE_URL .'users/view/'.$this->params[0]);
    }
    function edit(){
        $user_id = $this->params[0];
        $this->user = get_first("SELECT * FROM user WHERE user_id = '$user_id'");
    }

} 