<?php
/*
Plugin Name:  Stoppage
Plugin URI: https://github.com/Igor-kor/StopPage
Description: Заглушка для посетителей
Version: 1
Author: Игорь Шарангия
Author URI: https://vk.com/id117766113
GitHub Plugin URI: https://github.com/Igor-kor/StopPage
*/

function onlyadmin_func()
{
    if (!current_user_can('manage_options')) {
        ?>
        <style>
            #textstop {
                display: flex;
                justify-content: center;
                align-content: space-between;
                align-items: center;
                height: 100%;
                font-size: larger;
                font-family: "Franklin Gothic Medium", serif;
            }

            #textmiddle {
                border: 10px solid #dd5265;
                border-radius: 7px;
                padding: 30px;
                width: 80%;
            }

            body {
                background-color: #fdfff8;
            }
        </style>
        </head>
        <body>
        <div id="textstop">
            <div id="textmiddle"> Сайт временно приостановлен по техническим причинам.
                Мы делаем все возможное чтобы возобновить работу сайта.
            </div>
        </div>
        </body>
        </html>
        <?php
        wp_die("", 503);
    }
}

add_action('get_header', 'onlyadmin_func');
?>