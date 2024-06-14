<?php

class Controller_Post extends Controller_Template
{
    
    public function action_index()
    {
        $posts = Model_Post::find('all');
        $data = array('posts' => $posts);
        $this->template->title = 'Welcome to blog';
        $this->template->content = View::forge('post/index', $data, false);
    }

    public function action_view($id)
    {
        $post = Model_Post::find('first', array(
            'where' => array('id' => $id)
        ));

        $data = array('post' => $post);
        $this->template->title = $post->title.' in FuelPHP Blog';
        $this->template->content = View::forge('post/view', $data, false);
    }

    public function action_add()
    {
        //return Response::forge(View::forge('post/add'));
        $data = array();
        $this->template->title = 'Add new post';
        $this->template->content = View::forge('post/add', $data);
    }
}
