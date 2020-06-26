<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <!--meta name="viewport" content="width=1240"-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js"></script>
    
    <?php
    $Render_Data_HEAD = new Render_Data('head.twig', $jsonData);
    $Render_Data_HEAD->render('MAIN');
    ?>

    <?php if (file_exists("css/external.css")) { ?>
        <link rel="stylesheet" href="/css/external.css" type="text/css" />
    <?php } ?>
    <?php if (file_exists("css/style.css")) { ?>
        <link rel="stylesheet" href="/css/style.css" type="text/css" />
    <?php } ?>

    <noscript>
        <style>
            .noScript {
                display: none;
            }
        </style>
    </noscript>
</head>
<body class="body">
<div class="body__container">
    <?php
        if ($page == 'base') {
            $Render_Data = new Render_Data('base.twig', 'base');
        } else if ($page == '404') {
            $Render_Data = new Render_Data('404.twig', '404');
        } else {
            $Render_Data = new Render_Data($jsonData . '.twig', $jsonData, $uri);
        }

        $Render_Data->render('MAIN');
    ?>
</div>

<?php
$Render_Data_Modals = new Render_Data('modals.twig', $jsonData);
$Render_Data_Modals->render('MAIN');
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit-icons.min.js"></script>

<?php if (file_exists("js/external.js")) { ?>
    <script src="/js/external.js"></script>
<?php } ?>
<?php if (file_exists("js/bundle.js")) { ?>
    <script src="/js/bundle.js"></script>
<?php } ?>

<?php
$Render_Data_SCRIPTS = new Render_Data('scripts.twig', $jsonData);
$Render_Data_SCRIPTS->render('MAIN');
?>
</body>
</html>
