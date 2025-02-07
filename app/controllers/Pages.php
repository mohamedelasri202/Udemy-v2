<?php
class Pages extends Controller
{

    private $postModel;
    public function __construct()

    {
        $this->postModel = $this->model('Post');
    }
    public function index()
    {
        $Post = $this->postModel->getPosts();

        $data = ['posts' => $Post];

        $this->view('index', $data);
    }
    public function about()
    {
        $this->view('pages/about');
    }

    public function login()
    {
        $this->view('user/login');
    }
    public function regester()
    {
        $this->view('user/regester');
    }
}
