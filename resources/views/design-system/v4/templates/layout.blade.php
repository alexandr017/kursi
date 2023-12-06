<?php
includeComponent('fonts/inter', 1);
includeComponent('fonts/suisse-intl', 1);
includeComponent('tokens', 1);
includeComponent('general', 1);
includeComponent('grid', 1);
//includeComponent('components/atoms/button', 1);
if(isset($templateName)) {
    includeComponent("components/templates/$templateName");
}
?><!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    @foreach($GLOBALS['m']['first_order'] as $item)
        <?php
        if (file_exists(resource_path('views/design-system/v4/') . $item . '/styles.css')) {
            $rowCode = file_get_contents(resource_path('views/design-system/v4/') . $item . '/styles.css');

            echo compressCSS($rowCode);
        }
        ?>
    @endforeach

    @foreach($GLOBALS['m']['default_order'] as $item)
            <?php
            if (file_exists(resource_path('views/design-system/v4/') . $item . '/styles.css')) {
                $rowCode = file_get_contents(resource_path('views/design-system/v4/') . $item . '/styles.css');

                echo compressCSS($rowCode);
            }
            ?>
    @endforeach
    </style>
    <title>@yield('title')</title>
</head>
<body>
@yield('content')

<script>
    @foreach($GLOBALS['m']['first_order'] as $item)
        <?php
        if (file_exists(resource_path('views/design-system/v4/') . $item . '/main.js')) {
            echo file_get_contents(resource_path('views/design-system/v4/') . $item . '/main.js');
        }
        ?>
    @endforeach

    @foreach($GLOBALS['m']['default_order'] as $item)
        <?php
        if (file_exists(resource_path('views/design-system/v4/') . $item . '/main.js')) {
            echo file_get_contents(resource_path('views/design-system/v4/') . $item . '/main.js');
        }
        ?>
    @endforeach
</script>
</body>
</html>
