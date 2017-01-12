<?php

class Not_found extends Core {

    public function index() {

        $data = array(
            'pageTitle' => 'Página não encontrada - ' . SITE_NAME,
            'description' => '',
            'canonical' => ''
        );

        $this->loadView('error_404', true, true, $data);
    }

}
