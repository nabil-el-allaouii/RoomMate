<?php 

class BaseController
{
    // Render a view
    public function render($view, $data = [])
    {
        
        extract($data);
        include __DIR__ . '/../app/views/' . $view . '.php';
    }
    public function renderDashboard($view, $data = [])
    {
        
        extract($data);
        include __DIR__ . '/../app/views/dashboard/' . $view . '.php';
    }
    
    public function renderChat($view, $data = [])
    {
        extract($data);
        include __DIR__ . '/../app/views/user/' . $view . '.php';
    }
    public function renderUser($view, $data = [])
    {
        extract($data);
        include __DIR__ . '/../app/views/user/' . $view . '.php';
    }
   
    public function renderMessage($view, $data = [])
    {
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        extract($data);
        include __DIR__ . '/../app/views/user/' . $view . '.php';
    }
   
}
