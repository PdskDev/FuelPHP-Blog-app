<?php

class Controller_Post extends Controller_Template
{
    /**
     * The basic welcome message
     *
     * @access  public
     * @return  Response
     */
    public function action_index()
    {
        //return Response::forge(View::forge('post/index'));
        $data = array();
        $this->template->title = 'Welcome to blog';
        $this->template->content = View::forge('post/index', $data);
    }

    /**
     * The basic welcome message
     *
     * @access  public
     * @return  Response
     */
    public function action_add()
    {
        //return Response::forge(View::forge('post/add'));
        $data = array();
        $this->template->title = 'Add new post';
        $this->template->content = View::forge('post/add', $data);
    }
}
