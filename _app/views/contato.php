<div class="contato">
    <div class="container">
         <h1>Contato</h1>
        <div class="pos-form">
            <?php
            if (isset($msg)) {
                echo '<div class="alert alert-info">' . $msg . '</div>';
            }
            ?>
            <form role="form" action="<?php echo $this->url('mail'); ?>" method="post">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required="">
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required="">
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone">
                </div>
                <div class="form-group">
                    <label for="mensagem">Mensagem</label>
                    <textarea class="form-control" name="mensagem" id="mensagem" cols="30" rows="4" required=""></textarea>
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-success">ENVIAR</button>           
                </div>
            </form>
        </div>
    </div>
</div>



