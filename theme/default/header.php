<!DOCTYPE html>
<html lang="pt">
    <head>
        <link rel="canonical" href="<?=APP_URL?>" />

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no" />

        <meta name="description" content="" />

        <title><?=APP_TITLE?></title>

        <link rel="shortcut icon" type="image/png" href="_images/favicon.png" />

        <link rel="stylesheet" type="text/css" href="<?=APP_URL?>/theme/<?=THEME?>/_css/reset.css" />
        <link rel="stylesheet" type="text/css" href="<?=APP_URL?>/theme/<?=THEME?>/_css/noisy-cricket.css" />

        <!-- Third-party libs -->
        <script type="text/javascript" src="<?=APP_URL?>/theme/<?=THEME?>/_libs/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="<?=APP_URL?>/theme/<?=THEME?>/_libs/jquery.easing-1.3.min.js"></script>
        <script type="text/javascript" src="<?=APP_URL?>/theme/<?=THEME?>/_libs/jquery.mask.min.js"></script>
        <script type="text/javascript" src="<?=APP_URL?>/theme/<?=THEME?>/_libs/jquery-ui-1.11.2/jquery-ui.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?=APP_URL?>/theme/<?=THEME?>/_libs/jquery-ui-1.11.2/jquery-ui.min.css" />
        <link rel="stylesheet" type="text/css" href="<?=APP_URL?>/theme/<?=THEME?>/_libs/font-awesome-4.3.0/font-awesome.min.css" />
        <!-- /Third-party libs -->

        <script>
            var rootURL = "<?=APP_URL?>";
            var templateURL = "<?=APP_URL?>";
        </script>

        <script type="text/javascript" src="<?=APP_URL?>/theme/<?=THEME?>/_js/noisy-cricket/notification.js"></script>
        <script type="text/javascript" src="<?=APP_URL?>/theme/<?=THEME?>/_js/noisy-cricket/data_binding.js"></script>
        <script type="text/javascript" src="<?=APP_URL?>/theme/<?=THEME?>/_js/noisy-cricket/submit.js"></script>
        <script type="text/javascript" src="<?=APP_URL?>/theme/<?=THEME?>/_js/noisy-cricket/events.js"></script>
        <script type="text/javascript" src="<?=APP_URL?>/theme/<?=THEME?>/_js/noisy-cricket/js.js"></script>

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <!-- /Fonts -->

        <!--og tags (fb)-->
        <meta property="fb:admins" content="792152327" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:title" content="<?=APP_TITLE?>" />
        <meta property="og:description" content="" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="<?=APP_TITLE?>"/>
        <meta property="og:url" content="<?=APP_URL?>" />
        <meta property="og:image" content="" />
        <!--/og tags-->

        <!--gplus tags-->
        <meta itemprop="name" content="<?=APP_TITLE?>" />
        <meta itemprop="description" content="<?=APP_TITLE?>">
        <meta itemprop="image" content="">
        <!--/gplus tags-->

    </head>

    <body>
    <header>
        <div id="topline">
            <div class="wrapper">
                <div class="side" id="left">
                    <?php 
                        $link = false;
                        if (isset($_SESSION['user_id']) && !is_null($_SESSION['user_id']) && "" != $_SESSION['user_id']) :
                            $link = APP_URL."/dashboard";
                        else :
                            $link = APP_URL;
                        endif;
                    ?>
                    <h1><a href="<?=$link?>"><?=APP_TITLE?></a></h1>
                </div>

                <div class="side" id="right">
                    <?php if (isset($_SESSION['user_id']) && !is_null($_SESSION['user_id']) && "" != $_SESSION['user_id']) : ?>
                    <div id="info" class="fright">
                        <?php
                            $userDAO = new UsuarioDAO;
                            $user = $userDAO->getUserById($_SESSION['user_id']);
                        ?>
                        <p><?=$user->get('email')?></p>
                        <p class="fright" style="line-height:15px; vertical-align:top;">
                            <a href="<?=APP_URL?>/usuario/atualizar">Alterar Cadastro</a>&nbsp;&nbsp;&nbsp;
                            <a href="<?=APP_URL?>/logout">Sair</a>
                        </p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>