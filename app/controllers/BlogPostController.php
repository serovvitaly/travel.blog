<?php

class BlogPostController extends BaseController {

	protected $layout = 'base.layout.blog.post';

	public function getIndex($id)
	{
        
        $post = BlogPost::find($id);
        
        $this->layout->post = $post;
        
		$this->layout->content = 300;
	}
    
    
    public function postList()
    {
        $this->layout = NULL;
        
        echo '<div class="span3 wookmark-item" style="position: absolute; left: 520px; top: 810px;">
        
          <div>
            <img src="/vendor/jquery/plugins/wookmark/sample-images/image_5.jpg" alt="">
          </div>
          
          <div class="plane-text">
            Кровянистые выделения ягуары в Бразилии          </div>
          <div class="plane-bottom">
            2 комментария
          </div>
        
        </div>';
    }

}