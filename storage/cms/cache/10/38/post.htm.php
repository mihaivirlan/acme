<?php 
class Cms59a69b66ba18e351987104_0d8fa173960418b8864640bf3ac0dfa5Class extends \Cms\Classes\PageCode
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
