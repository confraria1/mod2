<?php

class Contato extends Core {

    public function index() {

        $data = array(
            'pageTitle' => 'Contato - ' . SITE_NAME,
            'description' => '',
            'canonical' => $this->url('contato'),
            'msg' => Useful::msgFeedback()
        );

        $this->loadView('contato', true, true, $data);
    }

}
