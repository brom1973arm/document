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
<link rel="stylesheet" href="styles/product_style.css">
<title>C.C.Donuts | 商品一覧</title>
<?php require 'header2.php'; ?>
<main>
            <nav>
                <ol class="breadcrumbs"> <!-- パンくずナビゲーション -->
                    <li><a href="index.php">top</a></li>
                    <li>商品一覧</li>
                </ol>
            </nav>
            <p class="border"></p>
            <p class="welcome">ようこそ　ゲスト様</p>
            <p class="border"></p>
            <h1>商品一覧</h1>
            <h2>メインメニュー</h2>
                <section class="mainMenu">
                <div class="menu1">
                    <div class="spImg">
                        <a href="product-detail-1.php">
                            <img src="images/05_sp_menu/01_sp_menu1.png" alt="CCドーナツ 当店オリジナル（5個入り）">
                        </a>
                    </div>
                    <div class="pcImg">
                        <a href="product-detail-1.php">
                            <img src="images/06_pc_menu/01_pc_menu1.png" alt="CCドーナツ 当店オリジナル（5個入り）">
                        </a>
                    </div>
                    <p class="productName">CCドーナツ 当店オリジナル（5個入り）</p>
                    <p class="price">税込  ￥1,500</p>
                    <p class="cartBtn">カートに入れる</p>
                    </div>
                <div class="menu2">
                    <div class="spImg">
                        <img src="images/05_sp_menu/01_sp_menu2.png" alt="チョコレートデライト（5個入り）">
                    </div>
                    <div class="pcImg">
                        <img src="images/06_pc_menu/01_pc_menu2.png" alt="チョコレートデライト（5個入り）">
                    </div>
                    <p class="productName">チョコレートデライト（5個入り）</p>
                    <p class="price">税込  ￥1,600</p>
                    <p class="cartBtn">カートに入れる</p>
                </div>
                <div class="menu3">
                    <div class="spImg">
                        <img src="images/05_sp_menu/01_sp_menu3.png" alt="キャラメルクリーム（5個入り）">
                    </div>
                    <div class="pcImg">
                        <img src="images/06_pc_menu/01_pc_menu3.png" alt="キャラメルクリーム（5個入り）">
                    </div>
                    <p class="productName">キャラメルクリーム（5個入り）</p>
                    <p class="price">税込  ￥1,600</p>
                    <p class="cartBtn">カートに入れる</p>
                </div>
                <div class="menu4">
                    <div class="spImg">
                        <img src="images/05_sp_menu/01_sp_menu4.png" alt="プレーンクラシック5個入り）">
                    </div>
                    <div class="pcImg">
                        <img src="images/06_pc_menu/01_pc_menu4.png" alt="プレーンクラシック5個入り）">
                    </div>
                    <p class="productName">プレーンクラシック（5個入り）</p>
                    <p class="price">税込  ￥1,500</p>
                    <p class="cartBtn">カートに入れる</p>
                </div>
                <div class="menu5">
                    <div class="spImg">
                        <img src="images/05_sp_menu/01_sp_menu5.png" alt="【新作】サマーシトラス（5個入り）">
                    </div>
                    <div class="pcImg">
                        <img src="images/06_pc_menu/01_pc_menu5.png" alt="【新作】サマーシトラス（5個入り）">
                    </div>
                    <p class="productName">【新作】サマーシトラス（5個入り）</p>
                    <p class="price">税込  ￥1,600</p>
                    <p class="cartBtn">カートに入れる</p>
                </div>
                <div class="menu6">
                    <div class="spImg">
                        <img src="images/05_sp_menu/01_sp_menu6.png" alt="ストロベリークラッシュ（5個入り）">
                    </div>
                    <div class="pcImg">
                        <img src="images/06_pc_menu/01_pc_menu6.png" alt="ストロベリークラッシュ（5個入り）">
                    </div>
                    <p class="productName">ストロベリークラッシュ（5個入り）</p>
                    <p class="price">税込  ￥1,800</p>
                    <p class="cartBtn">カートに入れる</p>
                </div>
            </section>
            <h2>バラエティセット</h2>
            <section class="varietySet">
                <div class="menuVs1">
                    <div class="spImg">
                        <a href="product-detail-2.php">
                            <img src="images/05_sp_menu/02_sp_menu_vs1.png" alt="フルーツドーナツセット（12個入り）">
                        </a>
                    </div>
                    <div class="pcImg">
                        <a href="product-detail-2.php">
                            <img src="images/06_pc_menu/02_pc_menu_vs1.png" alt="フルーツドーナツセット（12個入り）">
                        </a>
                    </div>
                    <p class="productName">フルーツドーナツセット（12個入り）</p>
                    <p class="price">税込  ￥3,500</p>
                    <p class="cartBtn">カートに入れる</p>
                </div>
                <div class="menuVs2">
                    <div class="spImg">
                        <img src="images/05_sp_menu/02_sp_menu_vs2.png" alt="フルーツドーナツセット（14個入り）">
                    </div>
                    <div class="pcImg">
                        <img src="images/06_pc_menu/02_pc_menu_vs2.png" alt="フルーツドーナツセット（14個入り）">
                    </div>
                    <p class="productName">フルーツドーナツセット（14個入り）</p>
                    <p class="price">税込  ￥4,000</p>
                    <p class="cartBtn">カートに入れる</p>
                </div>
                <div class="menuVs3">
                    <div class="spImg">
                        <img src="images/05_sp_menu/02_sp_menu_vs3.png" alt="ベストセレクションボックス（4個入り）">
                    </div>
                    <div class="pcImg">
                        <img src="images/06_pc_menu/02_pc_menu_vs3.png" alt="ベストセレクションボックス（4個入り）">
                    </div>
                    <p class="productName">ベストセレクションボックス（4個入り）</p>
                    <p class="price">税込  ￥1,200</p>
                    <p class="cartBtn">カートに入れる</p>
                </div>
                <div class="menuVs4">
                    <div class="spImg">
                        <img src="images/05_sp_menu/02_sp_menu_vs4.png" alt="チョコクラッシュボックス（7個入り）">
                    </div>
                    <div class="pcImg">
                        <img src="images/06_pc_menu/02_pc_menu_vs4.png" alt="チョコクラッシュボックス（7個入り）">
                    </div>
                    <p class="productName">チョコクラッシュボックス（7個入り）</p>
                    <p class="price">税込  ￥2,400</p>
                    <p class="cartBtn">カートに入れる</p>
                </div>
                <div class="menuVs5">
                    <div class="spImg">
                        <img src="images/05_sp_menu/02_sp_menu_vs5.png" alt="クリームボックス（4個入り）">
                    </div>
                    <div class="pcImg">
                        <img src="images/06_pc_menu/02_pc_menu_vs5.png" alt="クリームボックス（4個入り）">
                    </div>
                    <p class="productName">クリームボックス（4個入り）</p>
                    <p class="price">税込  ￥1,400</p>
                    <p class="cartBtn">カートに入れる</p>
                </div>
                <div class="menuVs6">
                    <div class="spImg">
                        <img src="images/05_sp_menu/02_sp_menu_vs6.png" alt="クリームボックス（9個入り）">
                    </div>
                    <div class="pcImg">
                        <img src="images/06_pc_menu/02_pc_menu_vs6.png" alt="クリームボックス（9個入り）">
                    </div>
                    <p class="productName">クリームボックス（9個入り）</p>
                    <p class="price">税込  ￥2,800</p>
                    <p class="cartBtn">カートに入れる</p>
                </div>
            </section>
        </main>
<?php require 'footer.php'; ?>