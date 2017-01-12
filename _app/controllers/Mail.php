<?php

class Mail extends Core {

    public function index() {

        if (getenv("REQUEST_METHOD") == "POST") {

            require './_app/useful/phpmailer/class.phpmailer.php';

            $nome = filter_input(INPUT_POST, 'nome');
            $email = filter_input(INPUT_POST, 'email');
            $telefone = filter_input(INPUT_POST, 'telefone');
            $mensagem = nl2br(filter_input(INPUT_POST, 'mensagem'));

            date_default_timezone_set('America/Sao_Paulo');
            $data = date("d/m/y");
            $hora = date("H:i");

            $corpo = "
            <b>Nome:</b> $nome <br/>
            <b>E-Mail:</b> $email <br/>    
            <b>Telefone:</b> $telefone <br/>
            <b>Mensagem:</b> $mensagem <br/>
            -------------------------------------------<br/>
            Data: $data <br/>
            Hora: $hora";

            $mail = new PHPMailer();

            // Define os dados do servidor e tipo de conexão
            $mail->IsSMTP(); // Define que a mensagem será SMTP
            $mail->Host = ''; // Endereço do servidor SMTP (caso queira utilizar a autenticação, utilize o host smtp.seudomínio.com.br)
            $mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
            //$mail->Port = 465;
            $mail->Username = ''; // Usuário do servidor SMTP (endereço de email)
            $mail->Password = ''; // Senha do servidor SMTP (senha do email usado)
            // Define o remetente
            // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            $mail->From = ''; // Seu e-mail
            $mail->Sender = ''; // Seu e-mail
            $mail->FromName = SITE_NAME; // Seu nome
            // Define os destinatário(s)
            // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            $mail->AddAddress('');

            // Define os dados técnicos da Mensagem
            // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
            $mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
            // Define a mensagem (Texto e Assunto)
            // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            $mail->Subject = 'Formulário de Contato'; // Assunto da mensagem
            $mail->Body = $corpo;

            // Envia o e-mail
            $enviado = $mail->Send();

            // Limpa os destinatários e os anexos
            $mail->ClearAllRecipients();
            $mail->ClearAttachments();

            // Exibe uma mensagem de resultado
            if ($enviado) {
                header('location: ' . $this->url('contato/?msg=1'));
            } else {
                header('location: ' . $this->url('contato/?msg=2'));
            }
        } else {
            header('location: ' . $this->url('contato'));
        }
    }

}
