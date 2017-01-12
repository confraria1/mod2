<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index, follow">
        <title><?php echo $pageTitle; ?></title>
        <?php if(isset($description) && $description != null){ echo '<meta name="description" content="' . $description . '">' . PHP_EOL; } ?>
        <?php if(isset($canonical) && $canonical != null){ echo '<link rel="canonical" href="' . $canonical . '" />' . PHP_EOL; } ?>
        <link href="<?php echo $this->url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo $this->url('assets/css/main.css'); ?>" rel="stylesheet">
        <link href="<?php echo $this->url('assets/css/style.css'); ?>" rel="stylesheet">
        <link href="<?php echo $this->url('assets/css/mobile.css'); ?>" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,600,700' rel='stylesheet' type='text/css'>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php require './_app/views/_inc/analyticstracking.php'; ?>
        <div class="layout">
            <div class="header">
                <div class="container">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="<?php echo $this->url(); ?>"><?php echo SITE_NAME; ?></a>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="<?php echo $this->url(); ?>">Home</a></li>
                                    <li><a href="<?php echo $this->url('contato'); ?>">Contato</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>