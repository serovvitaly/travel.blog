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
        
        $items = array();
        
        $posts = BlogPost::take(20)->where('status', '=', 4)->get();
        
        foreach ($posts AS $post) {
            $items[] = array(
                'id'    => $post->id,
                'title' => $post->title,
            );
        }
        
        return json_encode($items);
        
        echo '<div class="span3 wookmark-item">
        
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