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


