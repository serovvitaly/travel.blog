<?php

class BlogListController extends BaseController {

	protected $layout = 'base.layout.blog.list';

	public function getIndex()
	{        
        $this->layout->title = '';
        
		$this->layout->posts = BlogPost::take(20)->where('status', '=', 4)->get();
        
        $this->layout->content = '';
	}

}