<?php

class HomeController extends BaseController {

	protected $layout = 'base.layout.column1';

	public function getIndex()
	{
        
        $posts = BlogPost::take(20)->get();
        
        foreach ($posts as $post) {
            echo '<p>'.$post->title.'</p>';
        }
        
		$this->layout->content = 300;
	}

}