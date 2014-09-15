
<?foreach ($tags as $tag):?><a href="#"><span class="label label-info"><?=$tag['tag_name']?></span></a> <?endforeach?>
<div class="background"></div>

<div id="post" class="col-xs-offset-1 col-xs-11 col-sm-offset-5 col-sm-6 col-md-offset-3 col-md-5">
    <article id="post-1001" class="active">
        <h1 class="title">
            <?=$post['post_subject']?>
            <button type="button" class="close" aria-hidden="true">×</button>
        </h1>
        <div class="post">
            <img class="post-img" src="http://d.gr-assets.com/books/1358275334l/2767052.jpg" alt="The Hunger Games">

            <p>
                <?=$post['post_text']?>
            </p>
        </div>
    </article>
</div>
<? foreach ($comments as $comment): ?>
<div class="commentBox">
    <ul class="commentList">
        <li>
            <div class="commenterImage">
                <img src="http://lorempixel.com/50/50/people/6" />
            </div>
            <div class="commentText">
                <?=$comment['comment_created']?>
                <?=$comment['comment_author']?>
                <p><?=$comment['comment_text']?></p>
            </div>
        </li>
    </ul>
    <form class="form-inline" method="post" role="form">
                <div class="form-group">
            <input class="form-control" type="text" placeholder="Your comments" name="data[comment_text]"/>
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">Add</button>
        </div>
    </form>
</div>

<? endforeach ?>
<?php  //Start the Session
2
session_start();
3
 require('connect.php');
4
//3. If the form is submitted or not.
5
//3.1 If the form is submitted
6
if (isset($_POST['username']) and isset($_POST['password'])){
    7
//3.1.1 Assigning posted values to variables.
8
$username = $_POST['username'];
9
$password = $_POST['password'];
10
//3.1.2 Checking the values are existing in the database or not
11
$query = "SELECT * FROM `user` WHERE username='$username' and password='$password'";
12

13
$result = mysql_query($query) or die(mysql_error());
14
$count = mysql_num_rows($result);
15
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
16
if ($count == 1){
    17
$_SESSION['username'] = $username;
18
}else{
    19
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
20
echo "Invalid Login Credentials.";
21
}
22
}
23
//3.1.4 if the user is logged in Greets the user with message
24
if (isset($_SESSION['username'])){
    25
$username = $_SESSION['username'];
26
echo "Hai " . $username . "
27
";
28
echo "This is the Members Area
29
";
30
echo "<a href='logout.php'>Logout</a>";
31

32
}else{
33
//3.2 When the user visits the page first time, simple login form will be displayed.
34
?>
