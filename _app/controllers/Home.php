<?php

Class Home extends Core {

    public function index() {
              
        $data = array(
            'pageTitle' => SITE_NAME,
            'description' => '',
            'canonical' => $this->url(),
            'info' => 'CC Micro Framework'
        );

        $this->loadView('home', true, true, $data);

    }
    
}
