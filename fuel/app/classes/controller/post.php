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
            'where' => array('id' => $id),
        ));

        $data = array('post' => $post);
        $this->template->title = $post->title . ' in FuelPHP Blog';
        $this->template->content = View::forge('post/view', $data, false);
    }

    public function action_add()
    {
        if (Input::post('submit')) {
            $post = new Model_Post();
            $post->title = Input::post('title');
            $post->category = Input::post('category');
            $post->tags = Input::post('tags');
            $post->body = Input::post('body');
            $post->created_date = date("Y-m-d H:i:s");
            $post->save();

            Session::set_flash('success', 'Post added successfully');
            Response::redirect('/');
        }

        $data = array();
        $this->template->title = 'Add new post';
        $this->template->content = View::forge('post/add', $data);
    }

    public function action_edit($id)
    {
        if (Input::post('submit')) {
            $post = Model_Post::find(Input::post('post_id'));
            $post->title = Input::post('title');
            $post->category = Input::post('category');
            $post->tags = Input::post('tags');
            $post->body = Input::post('body');
            $post->created_date = date("Y-m-d H:i:s");
            $post->save();

            Session::set_flash('success', 'Post updated successfully');
            Response::redirect('/');
        }

        $post = Model_Post::find('first', array(
            'where' => array('id' => $id),
        ));

        $data = array('post' => $post);
        $this->template->title = 'Edit: ' . $post->title . ' in FuelPHP Blog';
        $this->template->content = View::forge('post/edit', $data, false);
    }

    public function action_delete($id)
    {
        $post = Model_Post::find($id);
        $post->delete();

        Session::set_flash('success', 'Post deleted successfully');
        Response::redirect('/');
    }
}
