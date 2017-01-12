<?php

class Useful {

    /**
     * Função para carregar imagem.
     * Será concatenado o nome da imagem com o caminho absoluto.
     * 
     * @param type $path Nome e extensão da imagem a ser carregada.
     * @return type Caminho absoluto da imagem.
     */
    public static function loadImg($path) {

        return ROOT_DIR . 'assets/img/' . $path;
    }

    /**
     * 
     * @return type
     */
    public static function msgFeedback() {

        if (isset($_GET['msg']) || isset($_POST['msg'])) {

            if (isset($_GET['msg'])) {
                $msgID = filter_input(INPUT_GET, 'msg');
            }

            if (isset($_POST['msg'])) {
                $msgID = filter_input(INPUT_POST, 'msg');
            }

            $msg[1] = 'Sua mensagem foi enviada com sucesso.';
            $msg[2] = 'Erro ao enviar mensagem, tente novamente.';

            if (array_key_exists($msgID, $msg)) {
                return $msg[$msgID];
            }
        } else {
            return null;
        }
    }

    /**
     * 
     * @param type $var
     */
    public static function debug($var) {
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    }

}
