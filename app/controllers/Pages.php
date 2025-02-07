<?php
class Pages extends Controller
{
    public function __construct()
    {
        $this->model('Post');
    }
    public function index()
    {
        $data = ['title' => 'data is here '];
        $this->view('pages/index', $data);
    }
    public function about()
    {
        $this->view('pages/about');
    }
}
