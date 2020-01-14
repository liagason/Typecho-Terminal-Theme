<?php
/**
 * @package Typecho Terminal
 * @author Sotiris Liagas
 * @version 1.0
 * @link http://twitter.com/liagason
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="col-mb-12 col-8" id="main" role="main">
	<?php while($this->next()): ?>
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
			<h1 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
			<!--
			<ul class="post-meta">
				<li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('by '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
				<li><?php _e('Date: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
				<li><?php _e('Category: '); ?><?php $this->category(','); ?></li>
				<li><?php _e('Tags: '); ?><?php $this->tags(', ', true, 'none'); ?></li>
				
				<li itemprop="interactionCount"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('Comment', '1 comment', '%d comments'); ?></a></li>
				
			</ul>
	-->
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

    <div class="pagination">
        <span class="page-item"><span class="page-link"><?php $this->pageLink('Next &raquo;','next'); ?></span></span>
        <span class="page-item"><span class="page-link"><?php $this->pageLink('&laquo; Previous'); ?></span></span>
    </div>
	<?php //$this->pageNav('&laquo; Previous', 'Next &raquo;'); ?>


</div><!-- end #main-->

<?php //$this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
