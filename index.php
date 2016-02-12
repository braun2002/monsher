<html>
<head>
    <script src="script/jquery-1.7.2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" type="text/css" href="css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css"/>
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css"/>
    <link rel="stylesheet" type="text/css" href="css/prettify.css"/>
</head>
<body>
<header>
    <div class="top">
        <header class="cf">
            <div class="logo"><img src="img/logo.png"/> </div>
            <div class="navigation">
                <nav>
                    <a href="javascript:void(0)" class="smobitrigger ion-navicon-round"><span>Menu</span></a>
                    <ul class="mobimenu">
                        <li><a href="">Продукция</a></li>
                        <li><a href="">О компании</a></li>
                        <li><a href="">Контакты</a></li>
                        <li><a href="">Где купить</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </div>
    <div id="slider-wrap">
        <div id="slider">
            <div class="slide" id="s1">
                <p>Какой то текст</p>

            </div>
            <div class="slide" id="s2">
                <p>Some text 2 </p>
            </div>
            <div class="slide" id="s3">
                <p>Some text 3</p>
            </div>
            <div class="arrow bounce">

            </div>
        </div>
    </div>
</header>
<main class="main">
    <div class="product_wrapper">
        <div class="text_head">
            <h1>Продукция</h1>
        </div>
        <div class="cart">
            <div id="image">
                <img src="img/kond1.jpg">
                <span>Какой то текст Какой то текст Какой то текст Какой то текст</span>
            </div>
            <div id="title">
                <h2>Мульти сплит-система внутренний блок настенный Dantex RK-M09CC</h2>
            </div>
            <div id="more">Подробнее</div>
        </div>
        <div class="cart">
            <div id="image">
                <img src="img/kond1.jpg">
                <span>Какой то текст Какой то текст Какой то текст Какой то текст</span>
            </div>
            <div id="title">
                <h2>Мульти сплит-система внутренний блок настенный Dantex RK-M09CC</h2>
            </div>
            <div id="more">Подробнее</div>
        </div>
        <div class="cart">
            <div id="image">
                <img src="img/kond1.jpg">
                <span>Какой то текст Какой то текст Какой то текст Какой то текст</span>
            </div>
            <div id="title">
                <h2>Мульти сплит-система внутренний блок настенный Dantex RK-M09CC</h2>
            </div>
            <div id="more">Подробнее</div>
        </div>
        <div class="cart">
            <div id="image">
                <img src="img/kond1.jpg">
                <span>Какой то текст Какой то текст Какой то текст Какой то текст</span>
            </div>
            <div id="title">
                <h2>Мульти сплит-система внутренний блок настенный Dantex RK-M09CC</h2>
            </div>
            <div id="more">Подробнее</div>
        </div>
        <div class="cart">
            <div id="image">
                <img src="img/kond1.jpg">
                <span>Какой то текст Какой то текст Какой то текст Какой то текст</span>
            </div>
            <div id="title">
                <h2>Мульти сплит-система внутренний блок настенный Dantex RK-M09CC</h2>
            </div>
            <div id="more">Подробнее</div>
        </div>
        <div class="cart">
            <div id="image">
                <img src="img/kond1.jpg">
                <span>Какой то текст Какой то текст Какой то текст Какой то текст</span>
            </div>
            <div id="title">
                <h2>Мульти сплит-система внутренний блок настенный Dantex RK-M09CC</h2>
            </div>
            <div id="more">Подробнее</div>
        </div>
    </div>
</main>
<h1>Какие то иконки</h1>
<div class="slide_icons" style="background: #ff4848">
    <div class="container" style="    width: 80%;
    margin: 0 auto;">
        <div class="row" >
            <div class="span12">
                <div id="owl-icons" class="owl-carousel">
                    <div class="item"><img src="img/icons-branze_22.png"><span>Описание</span></div>
                    <div class="item"><img src="img/icons-branze_22.png"><span>Описание</span></div>
                    <div class="item"><img src="img/icons-branze_22.png"><span>Описание</span></div>
                    <div class="item"><img src="img/icons-branze_22.png"><span>Описание</span></div>
                    <div class="item"><img src="img/icons-branze_22.png"><span>Описание</span></div>
                    <div class="item"><img src="img/icons-branze_22.png"><span>Описание</span></div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>

</footer>
<script src="script/slider.js"></script>
<script src="script/simpleMobileMenu.js"></script>
<script src="script/bootstrap-collapse.js"></script>
<script src="script/bootstrap-tab.js"></script>
<script src="script/bootstrap-transition.js"></script>
<script src="script/owl.carousel.min.js"></script>

<script>
    $(document).ready(function(){
        $(".cart").on('mouseover', function(){
            $(this).children( "#more" ).css('background-position', '-100% 0%');
        });

        $(".cart").on('mouseout', function(){
            $(this).children( "#more" ).css('background-position', '0% -100%');
        });

        var owl = $("#owl-icons");

        owl.owlCarousel({

            items : 4, //10 items above 1000px browser width
            itemsDesktop : [1000,4], //5 items between 1000px and 901px
            itemsDesktopSmall : [900,2], // 3 items betweem 900px and 601px
            itemsTablet: [600,1], //2 items between 600 and 0;
            itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
            //Basic Speeds
            slideSpeed : 200,
            paginationSpeed : 800,
            rewindSpeed : 1000,

            //Autoplay
            autoPlay : true,
            stopOnHover : true,


            //Pagination
            pagination : false,
            paginationNumbers: false
        });

        // Custom Navigation Events
        $(".next").click(function(){
            owl.trigger('owl.next');
        })
        $(".prev").click(function(){
            owl.trigger('owl.prev');
        })
        $(".play").click(function(){
            owl.trigger('owl.play',1000);
        })
        $(".stop").click(function(){
            owl.trigger('owl.stop');
        })
    });
</script>
<script>
    $('.smobitrigger').smplmnu();
</script>
</body>
</html>