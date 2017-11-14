<?php 
class Cms59a5af361ee11082750393_4917371202ec75e4a67d5b28e38dd719Class extends \Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
