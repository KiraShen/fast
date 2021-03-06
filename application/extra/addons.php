<?php

return array (
  'autoload' => false,
  'hooks' => 
  array (
    'user_sidenav_after' => 
    array (
      0 => 'cms',
    ),
  ),
  'route' => 
  array (
    '/blog$' => 'blog/index/index',
    '/blog/p/[:id]' => 'blog/index/post',
    '/blog/c/[:id]' => 'blog/index/category',
    '/blog/archieve' => 'blog/index/archieve',
    '/cms/$' => 'cms/index/index',
    '/cms/a/[:diyname]' => 'cms/archives/index',
    '/cms/t/[:name]' => 'cms/tags/index',
    '/cms/p/[:diyname]' => 'cms/page/index',
    '/cms/s' => 'cms/search/index',
    '/cms/c/[:diyname]' => 'cms/channel/index',
    '/cms/d/[:diyname]' => 'cms/diyform/index',
  ),
);