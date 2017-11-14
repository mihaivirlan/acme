<?php 
class Cms59a5acce48590462762736_7dac796783fa69695cd32497eea9df2aClass extends \Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
