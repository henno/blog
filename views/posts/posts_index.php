
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


