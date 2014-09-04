<?foreach( $posts as $post ):?>
<div class="background"></div>

<a id="fullscreen" href="http://bootsnipp.com/iframe/846vX">Looks Best In Fullscreen (Click Here)</a>

<div id="posts" class="col-xs-11 col-sm-4 col-md-3">
    <a href="#post-1001">
        <img class="col-xs-4" src="http://d.gr-assets.com/books/1358275334l/2767052.jpg" alt="The Hunger Games">
        The Hunger Games
        <div class="clearfix"></div>
    </a>
</div>

<div id="toggle_posts">
    <h1>
        <span class="glyphicon arrow-left glyphicon-chevron-up"></span>
        <span>POSTS</span>
        <span class="glyphicon arrow-right glyphicon-chevron-up"></span>
    </h1>
</div>

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
    <div class="info">
        <a href="#comments-1001"> <span class="glyphicon glyphicon-comment"></span> Comments (3) </a>
        <a href="#date-09-14-2008"> <span class="glyphicon glyphicon-time"></span> 09-14-2008 </a>
        <div class="clearfix"></div>
    </div>
</article>
</div>

<div id="comments" class="col-xs-offset-1 col-xs-11 col-sm-6 col-md-4">
    <h1 class="title">
        Comments
        <button type="button" class="close" aria-hidden="true">×</button>
    </h1>
    <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'bootsnipp'; // required: replace example with your forum shortname
        var disqus_identifier = '4l0k2';
        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
</div>
<?endforeach?>