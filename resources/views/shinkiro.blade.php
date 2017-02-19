<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>たかしましんきろう - 石狩湾の蜃気楼をさがす</title>

    <link rel="shortcut icon" type="image/png" href="assets/img/brand.png">

    <meta property="og:title" content="たかしましんきろう - 石狩湾の蜃気楼をさがす">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://honokak.osaka/">
    <meta property="og:image" content="http://honokak.osaka/assets/img/sample.png">
    <meta property="og:description" content="石狩湾の蜃気楼(高島おばけ)を追い求めるサイト。石狩市、小樽市の情報も。">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="たかしましんきろう - 石狩湾の蜃気楼をさがす">
    <meta name="twitter:image" content="http://honokak.osaka/assets/img/sample.png">
    <meta name="twitter:description" content="石狩湾の蜃気楼(高島おばけ)を追い求めるサイト。石狩市、小樽市の情報も。">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/example.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://cdn.jsdelivr.net/leaflet/1.0.3/leaflet.css">

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>

    <header>
        <nav class="navbar navbar-light bg-faded navbar-fixed-top">
            <div class="container">
                <h1><a href="#" class="navbar-brand">たかしましんきろう</a></h1>
                <div class="clearfix hidden-sm-up"></div>
                <!-- fix navbar responsive bug -->
                <div class="collapse navbar-toggleable-xs" id="navbar-header">
                </div>
            </div>
        </nav>
    </header>

    <div class="jumbotron special">
        <div class="container logo">
        </div>
    </div>

    <section class="section section-default">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 subtitle">
                    <h2><em>たかしま しんきろう</em></h2>
                    <p>北海道にある高島という場所では、しんきろうを見ることができるそうだ。</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="thumbnail">
                        <a href=""><img src="assets/img/img1.jpg" width="100%"></a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="thumbnail">
                        <a href=""><img src="assets/img/img3.jpg" width="100%"></a>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="section background-pic">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 subtitle">
                    <h2><em>蜃気楼が見える石狩湾とは</em></h2>
                </div>
            </div>

            <div class="row">
                <p>石狩湾（いしかりわん）は、北海道中西部、小樽市や石狩市などが面する、日本海につづく湾。積丹岬から雄冬岬にかけて南東方向に湾入している部分をいう。</p>

                <p>湾の両端は山地が海岸に迫って海食崖をなしており、海岸線も比較的入り組んでいることから小樽港や中小の漁港など良港が多い。これに対し湾奥は石狩平野から続く遠浅の海となっており、大型の船舶が接岸できるような場所がなかったが、1982年石狩市と小樽市の境界部に、掘り込み式の石狩湾新港が作られた。この港は札幌市中心部から20km足らずの位置にあり、札幌圏と各地とを結ぶ海上物流拠点の役割を担う。湾奥部の海岸は砂浜が広がっており、海水浴場も多い。</p>
                <p>wikipediaより</p>
            </div>

        </div>
    </section>

    <section class="section section-default">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 subtitle">
                    <h2><em>蜃気楼が見えるときは？</em></h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <p><img src="assets/img/img1.jpg" width="100%" class="thumbnail"></p>
                </div>
                <div class="col-md-8 col-sm-12">
                    <p>石狩湾で上位蜃気楼が観測できるのは、年間で10回程度です。その中でも、初めて見た人が驚くほど規模の大きな蜃気楼は、年に1回程度しかありません。とても稀な現象です。</p>
                    <p>蜃気楼が発生する時期は4月から7月。石狩湾上の空気の下層には沖合の冷たい空気があり、上層に陸地からの暖かい空気が移り流れることで「上暖下冷」の空気層の構造ができます。そのため、春から初夏にかけての陸地の気温に比べ海水の温度の方が低い期間なのです。</p>

                </div>

            </div>

        </div>
    </section>


    <section class="section background-blue">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 subtitle">
                    <h2><em>蜃気楼シーズンのイベント</em></h2>
                </div>
            </div>

            <div class="row">
                <div id="eventmap"></div>
            </div>

        </div>
    </section>

    <section class="section section-default">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 subtitle">
                    <h2><em>石狩湾周辺の観光施設</em></h2>
                </div>
            </div>

            <div class="row">
                <div id="placesmap"></div>
            </div>

        </div>
    </section>


    <footer class="small">

        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center copyright">
                    &copy; 2017 たかしましんきろう
                </div>
            </div>
        </div>
    </footer>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://cdn.jsdelivr.net/leaflet/1.0.3/leaflet.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>