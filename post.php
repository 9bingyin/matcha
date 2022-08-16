<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('includes/header.php'); ?>

<div class="col-12" id="main" role="main">
    <article class="post post-atpage" itemscope itemtype="http://schema.org/BlogPosting">
        <h1 class="post-title post-title-atpage" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        <ul class="post-meta post-meta-atpage">
            <li><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
            <li><?php $this->category(','); ?></li>
            <?php if($this->user->hasLogin()):?>
            <li><a href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $this->cid;?>">编辑</a></li>
            <?php endif ?>
        </ul>
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>

        <?php if (if($this->tags)): ?>
        <p itemprop="keywords" class="tags-list post-tags-list"><span class="tags-title iconfont">&#xe7ae;</span> <?php $this->tags(' ', true, ''); ?></p>
        <?php endif; ?>
    </article>

    <?php $this->need('includes/comments.php'); ?>
</div><!-- end #main-->

<?php $this->need('includes/footer.php'); ?>