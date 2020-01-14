<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <div class="col-mb-12 col-8" id="main" role="main">
        <h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h3>
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
            <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
			<h1 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
                <div class="post-content" itemprop="articleBody">
        			<?php $this->content('Read more...'); ?>
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
    	<?php endwhile; ?>
        <?php else: ?>
            <article class="post">
                <h2 class="post-title"><?php _e('Nothing found.'); ?></h2>
            </article>
        <?php endif; ?>

        <div class="pagination">
        <span class="page-item"><span class="page-link"><?php $this->pageLink('Next &raquo;','next'); ?></span></span>
        <span class="page-item"><span class="page-link"><?php $this->pageLink('&laquo; Previous'); ?></span></span>
    </div>
    </div><!-- end #main -->

	<?php //$this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>

