<?php

class Controller_Post extends Controller
{
    /**
     * The basic welcome message
     *
     * @access  public
     * @return  Response
     */
    public function action_index()
    {
        return Response::forge(View::forge('post/index'));
    }

    /**
     * The basic welcome message
     *
     * @access  public
     * @return  Response
     */
    public function action_add()
    {
        return Response::forge(View::forge('post/add'));
    }
}
