<?php
//サイトナビゲーション用
register_nav_menus(array('nav' => 'ナビゲーション'));
register_sidebar( array(
'name' => 'サイドバーウィジェット-1',
'id' => 'sidebar-1',
'description' => 'サイドバーのウィジェットエリアです。',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
) );
?>