<? foreach ($tags as $tag): ?><a href="#"><span class="label label-info"><?= $tag['tag_name'] ?></span>
    </a> <? endforeach ?>
<div class="background"></div>

<article id="post-1001" class="active">
    <h1 class="title">
        <?= $post['post_subject'] ?>
    </h1>
    <div class="post">

        <p>
            <?= $post['post_text'] ?>
        </p>
    </div>
</article>
<div class="commentBox">
    <ul class="commentList">
        <? foreach ($comments as $comment): ?>
            <li>
                <div class="commenterImage">
                    <img src="http://lorempixel.com/50/50/people/6"/>
                </div>
                <div class="commentText">
                    <?= $comment['comment_created'] ?>
                    <?= $comment['comment_author'] ?>
                    <p><?= $comment['comment_text'] ?></p>
                </div>
            </li>
        <? endforeach ?>
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

