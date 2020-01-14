<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="col-mb-12 col-8" id="main" role="main">
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <h1 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        <!--
        <ul class="post-meta">
            <li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('Author: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
            <li><?php _e('Date: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
            <li><?php _e('Category: '); ?><?php $this->category(','); ?></li>
        </ul>
-->
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
    </article>
    <footer class="post-header">
		<ul class="post-meta">
    				<li><?php _e('Category: '); ?><?php $this->category(','); ?></li>
                    <li><?php _e('Tags: '); ?><?php $this->tags(', ', true, 'none'); ?></li>
				<!--
				<li itemprop="interactionCount"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('Comment', '1 comment', '%d comments'); ?></a></li>
				-->
    			</ul>
          <p class="meta">
		  <?php _e('Published on '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time><?php _e(' by '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a>
          </p>
        </footer>
        <hr>
    <?php $this->need('comments.php'); ?>
<hr>
    <ul class="post-near">
        <li>Previous: <?php $this->thePrev('%s','No more...'); ?></li>
        <li>Next: <?php $this->theNext('%s','Nothing yet...'); ?></li>
    </ul>
</div><!-- end #main-->

<?php //$this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
