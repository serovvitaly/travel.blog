<?php

include("../vkontakte.php");

class IndexController extends BaseController {

	protected $layout = 'base.layout.blog.list';
    
    protected $client_id     = '3705388';
    protected $client_secret = '20k3JyyjAdW4BncMrQs4';

    protected $access_token  = NULL;
    
    protected function _getAccessToken($update = false)
    {   
        if (!$update AND $this->access_token != NULL) {
            return $this->access_token;
        }
        
        $uri = "https://oauth.vk.com/access_token?client_id={$this->client_id}&client_secret={$this->client_secret}&grant_type=client_credentials";
        
        $result = (array) json_decode(file_get_contents($uri));
        
        $this->access_token = $result['access_token'];
        
        return $this->access_token;
    }
    
	public function getIndex()
	{        
        $api_url = 'https://api.vk.com/method/usersSearch';
        
        $params = array(
            'count' => 30,
            'hometown' => 'Москва',
            'sex' => 1,
            'age_from' => 20,
            'age_to'   => 30,
            'has_photo' => 1,
            'access_token' => $this->_getAccessToken()
        );
        
        foreach ($params AS $param_key => $params_val) {
            $params[$param_key] = $param_key . '=' . $params_val; 
        }
        
        $query = $api_url . '?' . implode('&', $params);
        
        $result = file_get_contents($query);
        
        //return $result;
        
        $this->layout->items = BlogPost::take(80)->get();
		$this->layout->content = 300;
	}

}