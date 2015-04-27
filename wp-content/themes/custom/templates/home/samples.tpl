<!-- SAMPLES -->
<div class="container">
    <div class="center">
        <h2>Portfolio Samples</h2>
    </div>
    <div class="row">
        {foreach $posts.samples as $sample}
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <a href="#">
                     <img src="{$sample.image.url}" alt="{$sample.image.alt}" class="thumbnail img-responsive">
                </a>
            </div>
        {/foreach}
      </div>
      <div class="center">
        <hr>
    </div>
</div>

<!-- END SAMPLE -->