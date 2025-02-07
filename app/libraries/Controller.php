<!-- /*
*BASE CONTROLLER
*LOADS THE MODELS AND THE VIEWS
*/ -->
<?php
class Controller
{
    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        // instatiate model 
        return new $model();
    }
    // load view 
    public function view($view, $data = [])
    {
        // check for the view fille 
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            // the view  does not existe 
            die('view file does not exists');
        }
    }
}
