<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="sidebar" class="sidebar-journal" role="complementary">
  <section class="widget widget-nav sidebar-nav">
    <header id="header" class="header-journal"><?php Matcha::siteName(); ?></header>
    <ul class="widget-list"><?php Matcha::pageNav($this, "li"); ?></ul>
  </section>
  <!-- 版权信息 -->
	<section class="widget sidebar-foot">
    <ul class="widget-list">
      <li>Theme <a rel="nofollow" target="_blank" href="https://github.com/BigCoke233/matcha" class="no-linkTarget">Matcha</a> by <a  target="_blank" href="https://https://github.com/BigCoke233/" class="no-linkTarget">Eltrac</a></li>
      <li>Powered by <a rel="nofollow" target="_blank" href="http://www.typecho.org" class="no-linkTarget">Typecho</a></li>
    </ul>
  </section>
</div>

<!-- 返回顶部按钮 -->
<div id="gotop">
    <button id="back2top"><span class="iconfont">&#xe749;</span></button>
</div>