<?php

$directories = [
    'aktau',
    'aktobe',
    'astana',
    'atyrau',
    'janaozen',
    'jezkazgan',
    'karaganda',
    'kokshetau',
    'kostanai',
    'kyzylorda',
    'pavlodar',
    'petropavlovsk',
    'semei',
    'shymkent',
    'taldykorgan',
    'taraz',
    'turkestan',
    'uralsk',
    'ust-kamenogorsk',
];
$originalFiles = [
    'two.html',
];

foreach ($directories as $directory) {
    //--------------------------------------------------------------
    echo '//------------------------------------------------------';
    echo PHP_EOL . 'START DIRECTORY ' . $directory . '. ' . PHP_EOL;
    echo '//------------------------------------------------------';
    //--------------------------------------------------------------
    foreach ($originalFiles as $originalFile) {
        $targetFile = $directory . DIRECTORY_SEPARATOR . $originalFile;

        //--------------------------------------------------------------
        echo PHP_EOL . $originalFile . PHP_EOL;
        //--------------------------------------------------------------

        updateLinks($targetFile);

    }
}

function updateLinks($file)
{
    $content = file_get_contents($file);

    $content = str_replace(
        '    <!-- banner -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
            <li data-target="#myCarousel" data-slide-to="4" class=""></li>
            <li data-target="#myCarousel" data-slide-to="5" class=""></li>
            <li data-target="#myCarousel" data-slide-to="6" class=""></li>
            <li data-target="#myCarousel" data-slide-to="7" class=""></li>
        </ol>
        <div class="carousel-inner" role="listbox">

            <div class="item item7 active">
                <div class="container">
                    <div class="carousel-caption">
                        <!-- <h2>Широкий выбор <span>POS Терминалов </span></h2> -->
                        <!-- <h2 class="vtoroi">и ТОРГОВОГО ОБОРУДОВАНИЯ</h2> -->
                    </div>
                </div>
            </div>
            <div class="item item8">
                <div class="container">
                    <div class="carousel-caption">
                        <!-- <h2>Широкий выбор <span>POS Терминалов </span></h2> -->
                        <!-- <h2 class="vtoroi">и ТОРГОВОГО ОБОРУДОВАНИЯ</h2> -->
                    </div>
                </div>
            </div>
            <div class="item item1  ">
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Широкий выбор <span>POS Терминалов </span></h2>
                        <h2 class="vtoroi">и ТОРГОВОГО ОБОРУДОВАНИЯ</h2>
                    </div>
                </div>
            </div>
            <div class="item item2">
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Высокоэффективная <span>система</span></h2>
                        <h2 class="vtoroi">Автоматизации Торговли</h2>
                    </div>
                </div>
            </div>
            <div class="item item3">
                <div class="container">
                    <div class="carousel-caption">
                        <h2>До Финансовых<span> отчетов</span></h2>
                        <h2 class="vtoroi">всего один клик</h2>
                    </div>
                </div>
            </div>
            <div class="item item4">
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Огромный<span> ассортимент</span></h2>
                        <h2 class="vtoroi">кассового оборудования</h2>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Автоматизация <span>ресторанов </span></h2>
                        <img src="../images/logotype.png" alt="R-Keeper">
                    </div>
                </div>
            </div>
            <div class="item item5">
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Автоматизация <span>магазинов </span></h2>
                        <img src="../images/1c_logo.png" alt="1C-system">
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!-- The Modal -->
    </div>',
        '    <!-- Banner -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
            <li data-target="#myCarousel" data-slide-to="4" class=""></li>
            <li data-target="#myCarousel" data-slide-to="5" class=""></li>
        </ol>
        <!-- Banners -->
        <div class="carousel-inner" role="listbox">
            <div class="item item1 active">
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Широкий выбор <span>POS Терминалов </span></h2>
                        <h2 class="vtoroi">и ТОРГОВОГО ОБОРУДОВАНИЯ</h2>
                    </div>
                </div>
            </div>
            <div class="item item2">
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Высокоэффективная <span>система</span></h2>
                        <h2 class="vtoroi">Автоматизации Торговли</h2>
                    </div>
                </div>
            </div>
            <div class="item item3">
                <div class="container">
                    <div class="carousel-caption">
                        <h2>До Финансовых<span> отчетов</span></h2>
                        <h2 class="vtoroi">всего один клик</h2>
                    </div>
                </div>
            </div>
            <div class="item item4">
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Огромный<span> ассортимент</span></h2>
                        <h2 class="vtoroi">кассового оборудования</h2>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Автоматизация <span>ресторанов </span></h2>
                        <img src="../images/logotype.png" alt="R-Keeper">
                    </div>
                </div>
            </div>
            <div class="item item5">
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Автоматизация <span>магазинов </span></h2>
                        <img src="../images/1c_logo.png" alt="1C-system">
                    </div>
                </div>
            </div>
        </div>
        <!-- Buttons -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>',
        $content);

    file_put_contents($file, $content);
}

