<?
require_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';

$db = new DataBaseDmitrievka\DataBase($config['db']);

$queryCompany = $db->query('SELECT * FROM company ');
$queryPortfolio = $db->query('SELECT * FROM portfolio ');
$db->closeConnection();
require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>


<? include $_SERVER['DOCUMENT_ROOT'] . "\include\menu.php"; ?>
    <!-- Start Home -->
    <a class="scroll" id="home"></a>
    <div class="home hero">
        <div class="overlay"></div>
        <div class="herowrapper">
            <h1>Добро пожаловать в мой мир <b class="rotate color">Друзья,Заказчики,Люди которым просто интересно</b>.
            </h1>
        </div>
        <a href="javascript:void(0);" class="scrolldown">
            <h3>Больше о бо мне</h3>
            <div data-icon="&#xe017;" class="icon"></div>
        </a>
    </div>
    <!-- End Home -->

    <!-- Start Section Divider -->
    <div class="section divider">
        <h2 id="servicestitle">Портфолио</h2>
        <a class="scroll" id="portfolio"></a>
    </div>
    <!-- End Section Divider -->

    <!-- Start Content -->

    <!-- Start Main Paragraph -->
    <p class="main dark-gray">Это портфолио моих наработок</p>
    <!-- Start Main Paragraph -->

    <ul class="portfoliofilter">
        <?

        if (!empty($queryPortfolio)) {
            foreach ($queryPortfolio as $portfolioItem) {
                $allTypes[] = $portfolioItem['type'];
            }

            $uniqueTypeArr = array_unique($allTypes);
            $indexTypeArr = array_values($uniqueTypeArr);

            $allTypes = implode(' ', $indexTypeArr);
        }

        ?>

        <li class="filter active" data-filter="<?= $allTypes ?>">Все</li>

        <? foreach ($indexTypeArr as $portfolioType) { ?>

            <li class="filter" data-filter="<?= $portfolioType ?>"><?= $portfolioType ?></li>
        <? } ?>

    </ul>

    <div class="clear"></div>

    <ul class="portfolio">
        <? foreach ($queryPortfolio as $portfolioItem) { ?>
            <!--            <li class="item --><? //= $portfolioItem["type"] ?><!--">-->
            <!--                <div class="portfolioitem">-->
            <!--                    <img src="--><? //= $portfolioItem["img"] ?><!--">-->
            <!--                    <div class="portfoliohover">-->
            <!--                        <div class="info">-->
            <!--                            <h1>+</h1>-->
            <!--                            <h5>--><? //= $portfolioItem["name"] ?><!--</h5>-->
            <!--                            <h6>--><? //= $portfolioItem["company"] ?><!--<b class="light-gray">-->
            <!--                                    / </b>--><? //= $portfolioItem["type"] ?><!--</h6>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </li>-->
            <li class="item <?= $portfolioItem["type"] ?>">
                <div class="portfolioitem_2">
                    <span class="img_portfolio"
                          style="background: url(<?= $portfolioItem["img"] ?>);background-position: center;background-size: contain;background-repeat: no-repeat;"></span>
                    <div class="portfoliohover">
                        <div class="info">
                            <h1>+</h1>
                            <h5><?= $portfolioItem["name"] ?></h5>
                            <h6><?= $portfolioItem["company"] ?><b class="light-gray">
                                    / </b><?= $portfolioItem["type"] ?></h6>
                        </div>
                    </div>
                </div>
            </li>
        <? } ?>
    </ul>

    <!-- Clear :) -->
    <div class="clear"></div>
    <!-- End Content -->

    <!-- Start Section Divider -->
    <div class="section divider">
        <h2 id="servicestitle">Мои компании</h2>
        <a class="scroll" id="services"></a>
    </div>
    <!-- End Section Divider -->

    <!-- Start Content -->
    <p class="main dark-gray" id="services">Места где я работал</p>
    <div class="content container">

        <!-- Start Main Paragraph -->


        <?
        if (!empty($queryCompany)) {
            foreach ($queryCompany as $company) {
                ?>
                <img src="<?= $company['img'] ?>" alt="">
                <?
            }
        } ?>


        <!-- Clear :) -->
        <div class="clear"></div>
    </div>
    <!-- End Content -->

    <!-- Start Section Divider -->
    <div class="section divider">
        <h2>Мои скилы</h2>
        <a class="scroll" id="blog"></a>
    </div>
    <!-- End Section Divider -->

    <div class="content container hover_block">
        <div class="text">
            <i class="fa-brands fa-html5"></i>
        </div>
        <div class="text">
            <i class="fa-brands fa-css3-alt"></i>
        </div>
        <div class="text">
            <i class="fa-brands fa-js"></i>
        </div>

        <div class="text">
            <i class="fa-brands fa-php"></i>
        </div>
        <div class="text">
            <i class="fa-brands fa-github"></i>
        </div>
        <div class="text" style="display: flex">
            <i class="fa-light fa-s"></i>
            <i class="fa-light fa-q"></i>
            <i class="fa-light fa-l"></i>
        </div>
        <div class="text sharp" style="display: flex">
            <i class="fa-solid fa-c"></i>
            <p>#</p>
        </div>
        <div class="skills_value">

            <div class="skills_fields"> HTML</div>

            <div class="skills_fields">
                <div class="">Css</div>
                <div class="">SCSS</div>
                <div class="">LESS</div>
            </div>
            <div class="skills_fields">
                <div>JS</div>
                <div>Jquery</div>
                <div>Vie JS</div>
            </div>
            <div class="skills_fields">
                <div>PHP</div>
                <div>Laravel</div>
                <div></div>
                <div></div>
            </div>
            <div class="skills_fields"></div>
        </div>
    </div>

    <div class="section divider">
        <h2>Другое</h2>
        <a class="scroll" id="blog"></a>
    </div>
    <!-- Start Content -->
    <div class="content">

        <!-- Start HomePage Section -->
        <div class="section full">
            <h2>Последние работы</h2>

            <ul class="carousel" id="carousellatest">

                <!-- Start Single Block -->
                <li>
                    <div class="section block">
                        <img src="img/Zaglucshka.png">
                        <div class="content">
                            <h5>Разработка</h5>
                            <h6>Мультивалютность для пользователя</h6>
                        </div>
                        <div class="hover">
                            <a href="http://b2b.kuppersbusch.sotbit.com/" class="hover content">
                                <h2>+</h2>
                                <h5>KUPPERSBUSCH.sotbit.com</h5>
                                <h6>Решение sotbit b2b</h6>
                            </a>
                        </div>
                    </div>
                </li>
                <!-- End Single Block -->

                <!-- Start Single Block -->
                <li>
                    <div class="section block">
                        <img src="img/geekzona.jpg">
                        <div class="content">
                            <h5>Разработка</h5>
                            <h6>Реализация умных предзаказов</h6>
                        </div>
                        <div class="hover">
                            <a href="https://geekzona.ru" class="hover content">
                                <h2>+</h2>
                                <h5>GeekZona.com</h5>
                                <h6>Bitrix 1C</h6>
                            </a>
                        </div>
                    </div>
                </li>
                <!-- End Single Block -->

                <!-- Start Single Block -->
                <li>
                    <div class="section block">
                        <img src="img/Zaglucshka.png">
                        <div class="content">
                            <h5>Разработка</h5>
                            <h6>Реализация собственных акций</h6>
                        </div>
                        <div class="hover">
                            <a href="#" class="hover content">
                                <h2>+</h2>
                                <h5>Agora</h5>
                                <h6>b2b Alfa system</h6>
                            </a>
                        </div>
                    </div>
                </li>
                <!-- End Single Block -->

                <!-- Start Single Block -->
                <li>
                    <div class="section block">
                        <img src="img/road.jpg">
                        <div class="content">
                            <h5>Разработка</h5>
                            <h6>Написание сайта на Битрикс 1С</h6>
                        </div>
                        <div class="hover">
                            <a href="https://road-invest.ru/" class="hover content">
                                <h2>+</h2>
                                <h5>Road-invest</h5>
                                <h6>Стандартная натяжка</h6>
                            </a>
                        </div>
                    </div>
                </li>
                <!-- End Single Block -->

            </ul>

        </div>
        <!-- End HomePage Section -->

        <!-- Clear :) -->
        <div class="clear"></div>

        <!-- Start HomePage Section -->
        <div class="section full">
            <h2>Последние новости на портале</h2>

            <ul class="carousel" id="carouselblog">

                <!-- Start Single Block -->
                <li>
                    <div class="section block blog active">
                        <img src="img/placeholder_large_blog2.jpg">
                        <div class="content">
                            <h5>Article</h5>
                            <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</h6>
                            <a href="#" class="readmore color">read more >></a>
                        </div>
                        <div class="hover">
                            <a href="#" class="hover content">
                                <h2>+</h2>
                                <h5>Article</h5>
                                <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</h6>
                                <h6 class="readmore color">read more >></h6>
                            </a>
                        </div>
                    </div>
                </li>
                <!-- End Single Block -->

            </ul>
        </div>
        <!-- End HomePage Section -->

        <!-- Clear :) -->
        <div class="clear"></div>

    </div>
    <!-- End Content -->

    <!-- Start Section Divider -->
    <div class="section divider">
        <h2>Our Team</h2>
        <a class="scroll" id="about"></a>
    </div>
    <!-- End Section Divider -->

    <!-- Start Content -->
    <div class="content">

        <!-- Start Main Paragraph -->
        <p class="main dark-gray">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, est
            non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac
            cursus commodo, tortor mauris condimentum nibh.</p>
        <!-- Start Main Paragraph -->

        <!-- Start Person Block -->
        <div class="person">
            <div class="image quotefade">
                <img src="img/person.jpg">
                <div class="quotehover">
                    <h5>“You have to do something you’ve never done
                        to have something you’ve never had.”</h5>
                    <h6>Elizabeth Franklin</h6>
                </div>
            </div>
            <div class="info">
                <h2>John Doe</h2>
                <h4 class="light-gray">CEO</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a href="#" class="socialicon linkedin"></a>
                <a href="#" class="socialicon facebook"></a>
                <a href="#" class="socialicon twitter"></a>
                <a href="#" class="socialicon dribbble"></a>
                <a href="#" class="socialicon pinterest"></a>
            </div>
        </div>
        <!-- Clear :) -->
        <div class="clear"></div>
        <!-- End Person Block -->

        <!-- Start Person Block -->
        <div class="person">
            <div class="image quotefade">
                <img src="img/person2.jpg">
                <div class="quotehover">
                    <h5>“You have to do something you’ve never done
                        to have something you’ve never had.”</h5>
                    <h6>Elizabeth Franklin</h6>
                </div>
            </div>
            <div class="info">
                <h2>John Doe</h2>
                <h4 class="light-gray">CEO</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a href="#" class="socialicon linkedin"></a>
                <a href="#" class="socialicon facebook"></a>
                <a href="#" class="socialicon twitter"></a>
                <a href="#" class="socialicon dribbble"></a>
                <a href="#" class="socialicon pinterest"></a>
            </div>
        </div>
        <!-- Clear :) -->
        <div class="clear"></div>
        <!-- End Person Block -->

        <!-- Start Person Block -->
        <div class="person">
            <div class="image quotefade">
                <img src="img/person3.jpg">
                <div class="quotehover">
                    <h5>“You have to do something you’ve never done
                        to have something you’ve never had.”</h5>
                    <h6>Elizabeth Franklin</h6>
                </div>
            </div>
            <div class="info">
                <h2>John Doe</h2>
                <h4 class="light-gray">CEO</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a href="#" class="socialicon linkedin"></a>
                <a href="#" class="socialicon facebook"></a>
                <a href="#" class="socialicon twitter"></a>
                <a href="#" class="socialicon dribbble"></a>
                <a href="#" class="socialicon pinterest"></a>
            </div>
        </div>
        <!-- Clear :) -->
        <div class="clear"></div>
        <!-- End Person Block -->

    </div>
    <!-- End Content -->

    <!-- Start Section Divider -->
    <div class="section divider">
        <h2 id="servicestitle">Our Clients</h2>
        <a class="scroll" id="testimonials"></a>
    </div>
    <!-- End Section Divider -->

    <!-- Start Content -->
    <div class="content">

        <!-- Start Main Paragraph -->
        <p id="testimonials" class="main dark-gray">What our clients have to say about our work.</p>
        <!-- Start Main Paragraph -->

        <div class="logos">
<!--            <img data-text="Lorem ipsum something" src="img/logo.png">-->
<!--            <img data-text="Lorem ipsum something" src="img/logo.png">-->
<!--            <img data-text="Lorem ipsum something" src="img/logo.png">-->
<!--            <img data-text="Lorem ipsum something" src="img/logo.png">-->
<!--            <img data-text="Lorem ipsum something" src="img/logo.png">-->
        </div>

        <!-- Clear :) -->
        <div class="clear"></div>
    </div>
    <!-- End Content -->
<?
include $_SERVER['DOCUMENT_ROOT'] . "/footer.php";
?>