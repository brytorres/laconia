<?php

class Home extends Controller
{
    public $page_title = 'Home';

    public function get() {
        $user = new User();
        $this->session->authenticate();
        
        // Proceed if authentication passed
        $userInfo = $user->getUser($this->session->getSessionValue('user_id'));
        
        $this->user = $userInfo;
        $this->view('home');
    }
}