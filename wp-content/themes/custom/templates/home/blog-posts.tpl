<!-- Blog Posts -->
<div class="container">
    <div class="center">
        <h2>Here's What I Have To Say...</h2>
    </div>
    <div class="row">
        {foreach $posts.blog_posts as $blog_post}
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <a href="#">
                     <img src="{$blog_post.image.url}" alt="{$blog_post.image.alt}" class="thumbnail img-responsive">
                </a>
            </div>
        {/foreach}
      </div>
    <div class="center">
        <hr>
    </div>
</div>
<!-- Eng Blog Posts -->