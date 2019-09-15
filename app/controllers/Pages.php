<?php

class Pages extends Controller
{
    public function __construct()
    {
       // $this->postModel = $this->model('Post');
    }

    public function index()
    {
        //$posts = $this->postModel->getPosts();

        $data = [
            'title' => 'Welcome',
            'description' => 'This is Will\'s PHP MVC Framework'
            //'posts' => $posts
        ];
        $this->view('pages/index', $data);
        //$this->view('pages/index');
    }

    public function about()
    {
        $data = [
            'title' => 'About Framework',
            'description' => 'for more information reads documentation from github'
        ];
        $this->view('pages/about', $data);
        //$this->view('pages/about');
    }
}
