<!-- 制作するサイト		    架空のドーナツショップ「C.C.Donuts」のショッピングサイト
参考資料		            プログラミング科-Webプログラミング演習3-デザインカンプ.fig
ファイル・変数の命名規則	"半角英数字・キャメル型で作成
                            ※全角文字・半角カナは使用しないこと"
使用言語		            "HTML・CSS・JavaScript・PHP・SQL
                            ※BootStrap・jQuery・Vue.jsの使用は自由"
文字コード		            UTF-8
リソース格納先	            CSSディレクトリ名	styles
	                        JSディレクトリ名	scripts
	                        画像ディレクトリ名	images
	                        アプリケーション関連ディレクトリ名	app
title要素		            トップページ：「サイト名」のみ
                            下層ページ：サイト名｜ページ名
必須meta要素                文字コード指定ビューポート指定
対応ブラウザ	            PC	Chrome最新版
	                        モバイル	※Chromeのデベロッパーツール「iPhoneX」で確認
JavaScript	使用有無	    "必須機能としてはなし
                            （下記条件のもと、jQuery・BootStrap・Vue.jsの使用は自由）
                            ※PHPによる基本機能の実装が済んだあとであれば
　                          見た目上の動きを加えることは許容"
ブレイクポイント		    "設定必須768pxを基準とし、その他は個人ごとに適宜設定可"

共通基本ルール
余白：4倍数
PCコンテンツ幅：1200px
font: Noto Sans JP
font-size: ベース16px 4の倍数
見出しfont-size: SP→20px,PC→32px
ＳＰ幅:375px 
PC幅:1366px -->

<?php require 'header.php'; ?>
<link rel="stylesheet" href="styles/style.css">
<title>C.C.Donuts</title>
<?php require 'header2.php'; ?>
<main>
    <p class="welcome">ようこそ　ゲスト様</p>
    <section class="heroImg">
        <div class="spImg">
            <img src="images/03_sp_top/01_sp_hero.png" alt="ヒーローイメージ">
        </div>
        <div class="pcImg">
            <img src="images/04_pc_top/01_pc_hero.png" alt="ヒーローイメージ">
        </div>
    </section>
    <section class="infoContents">
        <div class="grid">
            <div class="newArrival spImg">
                <img src="images/03_sp_top/02_sp_newarrival.png" alt="サマーシトラス">
                <p>サマーシトラス</p>
                <p class="newTag">新商品</p>
            </div>
            <div class="newArrival pcImg">
                <img src="images/04_pc_top/02_pc_newarrival.png" alt="サマーシトラス">
                <p>サマーシトラス</p>
                <p class="newTag">新商品</p>
            </div>
            <div class="donutsLife spImg">
                <img src="images/03_sp_top/04_sp_dnutslife.png" alt="ドーナツのある生活">            
                <p>ドーナツのある生活</p>
            </div>
            <div class="donutsLife pcImg">
                <img src="images/04_pc_top/04_pc_donutslife.png" alt="ドーナツのある生活">            
                <p>ドーナツのある生活</p>
            </div>
        </div>
        <div class="productList spImg">
            <a href="product.php">
                <img src="images/03_sp_top/05_sp_menu.png" alt="商品一覧">
            </a>
            <p>商品一覧</p>
        </div>
        <div class="productList pcImg">
            <a href="product.php">
                <img src="images/04_pc_top/05_pc_menu.png" alt="商品一覧">
            </a>
            <p>商品一覧</p>
        </div>
    </section>
    <section class="shopIntroduction">
        <div class="spImg">
            <img src="images/03_sp_top/06_sp_shopinfo.png" alt="Philosophy">
        </div>
        <div class="pcImg">
            <img src="images/04_pc_top/06_pc_shopinfo.png" alt="Philosophy">
        </div>
        <h2>Philosophy</h2>
        <p class="philosophy">私たちの信念</p>
        <h3>"Creating Connections"</h3>
        <p class="creatingConnections">「ドーナツでつながる」</p>
    </section>
    <section class="popularityRanking">
        <h2>人気ランキング</h2>
        <div  class="rankingList">
            <div class="ranking1 ranking">
                <p class="topRank top1">1</p>
                <div class="spImg">
                    <a href="product-detail-1.php"><img src="images/03_sp_top/07_sp_lanking1.png" alt="CCドーナツ 当店オリジナル（5個入り）"></a>
                </div>
                <div class="pcImg">
                    <a href="product-detail-1.php"><img src="images/04_pc_top/07_pc_lanking1.png" alt="CCドーナツ 当店オリジナル（5個入り）"></a>
                </div>
                <p class="productName">CCドーナツ 当店オリジナル（5個入り）</p>
                <p class="price">税込  ￥1,500</p>
                <p class="cartBtn">カートに入れる</p>
            </div>
            <div class="ranking2 ranking">
                <p class="topRank top2">2</p>
                <div class="spImg">
                    <a href="product-detail-2.php"><img src="images/03_sp_top/07_sp_lanking2.png" alt="フルーツドーナツセット（12個入り）"></a>
                </div>
                <div class="pcImg">
                    <a href="product-detail-2.php"><img src="images/04_pc_top/07_pc_lanking2.png" alt="フルーツドーナツセット（12個入り）"></a>
                </div>
                <p class="productName">フルーツドーナツセット（12個入り）</p>
                <p class="price">税込  ￥3,500</p>
                <p class="cartBtn">カートに入れる</p>
            </div>
            <div class="ranking3 ranking">
                <p class="topRank top3">3</p>
                <div class="spImg">
                    <img src="images/03_sp_top/07_sp_lanking3.png" alt="フルーツドーナツセット（14個入り）">
                </div>
                <div class="pcImg">
                    <img src="images/04_pc_top/07_pc_lanking3.png" alt="フルーツドーナツセット（14個入り）">
                </div>
                <p class="productName">フルーツドーナツセット（14個入り）</p>
                <p class="price">税込  ￥4,000</p>
                <p class="cartBtn">カートに入れる</p>
            </div>
            <div class="ranking4 ranking">
                <p class="topRank top4">4</p>
                <div class="spImg">
                    <img src="images/03_sp_top/07_sp_lanking4.png" alt="チョコレートデライト（5個入り）">
                </div>
                <div class="pcImg">
                    <img src="images/04_pc_top/07_pc_lanking4.png" alt="チョコレートデライト（5個入り）">
                </div>
                <p class="productName">チョコレートデライト（5個入り）</p>
                <p class="price">税込  ￥4,000</p>
                <p class="cartBtn">カートに入れる</p>
            </div>
            <div class="ranking5 ranking">
                <p class="topRank top5">5</p>
                <div class="spImg">
                    <img src="images/03_sp_top/07_sp_lanking5.png" alt="ベストセレクションボックス（4個入り）">
                </div>
                <div class="pcImg">
                    <img src="images/04_pc_top/07_pc_lanking5.png" alt="ベストセレクションボックス（4個入り）">
                </div>
                <p class="productName">ベストセレクションボックス（4個入り）</p>
                <p class="price">税込  ￥1,200</p>
                <p class="cartBtn">カートに入れる</p>
            </div>
            <div class="ranking6 ranking">
                <p class="topRank top6">6</p>
                <div class="spImg">
                    <img src="images/03_sp_top/07_sp_lanking6.png" alt="ストロベ リークラッシュ（5個入り）">
                </div>
                <div class="pcImg">
                    <img src="images/04_pc_top/07_pc_lanking6.png" alt="ストロベ リークラッシュ（5個入り）">
                </div>
                <p class="productName">ストロベ リークラッシュ（5個入り）</p>
                <p class="price">税込  ￥1,800</p>
                <p class="cartBtn">カートに入れる</p>
            </div>
        </div>
    </section>
</main>
<?php require 'footer.php'; ?>