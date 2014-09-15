<div class="register-form">
    2
    <?php
    3
    if(isset($msg) & !empty($msg)){
        4
        echo $msg;
5
    }
6
 ?>
    7
    <h1>Login</h1>
    8
    <form action="register.php" method="POST">
        9
        <p><label>User Name : </label>
            10
            <input id="username" type="text" name="username" placeholder="username" /></p>
        11

        12
        <p><label>Password&nbsp;&nbsp; : </label>
            13
            <input id="password" type="password" name="password" placeholder="password" /></p>
        14

        15
        <a class="btn" href="register.php">Signup</a>
        16
        <input class="btn register" type="submit" name="submit" value="Login" />
        17
    </form>
    18
</div>
19
<?php } ?>

<?foreach( $posts as $post ):?>


    <div class="background"></div>

    <div id="post" class="col-xs-offset-1 col-xs-11 col-sm-offset-5 col-sm-6 col-md-offset-3 col-md-5">
    <article id="post-1001" class="active">
    <h1 class="title">
        <a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><?=$post['post_subject']?></a>
        <button type="button" class="close" aria-hidden="true">×</button>
    </h1>
    <div class="post">
        <img class="post-img" src="http://d.gr-assets.com/books/1358275334l/2767052.jpg" alt="The Hunger Games">

        <p>
            <?=$post['post_text']?>
        </p>
        <?foreach ($tags[$post['post_id']] as $tag):?>
            <a href="#"><span class="label" style="background-color: #5bc0de"><?=$tag?></span></a> <?endforeach?>
    </div>
</article>
</div>

<?endforeach?>


