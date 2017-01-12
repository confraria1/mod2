<?php

class Core {

    /**
     * Função para retornar a url do site concatenada com o parâmetro passado.
     * 
     * @param type $path Destino que será concatenado após a url definida em ROOT_DIR.
     * @return string ROOT_DIR ou ROOT_DIR . $path
     */
    protected function url($path = null) {

        if ($path != null) {
            $url = ROOT_DIR . $path;
        } else {
            $url = ROOT_DIR;
        }
        return $url;
    }

    /**
     * 
     * @param type $view
     * @param type $header
     * @param type $footer
     * @param array $data
     */
    protected function loadView($view, $header = null, $footer = null, $data = null) {

        if (file_exists('./_app/views/' . $view . '.php')) {

            if ($data) {
                foreach ($data as $key => $value) {
                    $$key = $value;
                }
                $data = array();
            }

            if ($header) {
                require './_app/views/_inc/header.php';
            }

            require './_app/views/' . $view . '.php';

            if ($footer) {
                require './_app/views/_inc/footer.php';
            }
        } else {
            echo 'File ' . $view . '.php not found';
        }
    }

    /**
     * Função para carregar arquivos JavaScript automaticamente.
     * 
     * @param type $js Um ou varios nomes de arquivos JS que serão carregados.
     */
    protected function loadJs($js) {

        if (is_array($js)) {
            foreach ($js as $row) {
                echo '<script src="' . $this->url() . 'assets/js/' . $row . '"></script>' . PHP_EOL;
            }
        } else {
            echo '<script src="' . $this->url() . 'assets/js/' . $js . '"></script>' . PHP_EOL;
        }
    }

}
