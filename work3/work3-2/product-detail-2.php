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
<link rel="stylesheet" href="styles/product-detail1_style.css">
<title>C.C.Donuts | フルーツドーナツセット（12個入り）</title>
<?php require 'header2.php'; ?>
        <main>
            <nav>
                <ol class="breadcrumbs"> <!-- パンくずナビゲーション -->
                    <li><a href="index.php">top</a></li>
                    <li><a href="product.php">商品一覧</a></li>
                    <li>CCドーナツ 当店オリジナル（5個入り）</li>
                </ol>
            </nav>
            <p class="border"></p>
            <p class="welcome">ようこそ　ゲスト様</p>
            <p class="border"></p>
            
            <div class="productDetail">
                <div class="productImg">
                    <div class="spImg">
                        <img src="images/07_sp_detail/sp_dtl_vs.png" alt="フルーツドーナツセット（12個入り）">
                    </div>
                    <div class="pcImg">
                        <img src="images/08_pc_detail/pc_dtl_vs.png" alt="フルーツドーナツセット（12個入り）">
                    </div>
                </div>
                <div class="productExplanation">
                    <p class="productName">フルーツドーナツセット（12個入り）</p>
                    <p class="sentenceBorder"></p>
                    <p class="explanation">新鮮で豊かなフルーツをたっぷりと使用した贅沢な12個入りセットです。このセットには、季節の最高のフルーツを厳選し、ドーナツに取り入れました。口に入れた瞬間にフルーツの風味と生地のハーモニーが広がります。色鮮やかな見た目も魅力の一つです。</p>
                    <p class="sentenceBorder"></p>
                    <p class="price">税込  ￥3,500</p>
                    <div class="purchase">
                        <div class="selectBox">
                            <select name="count">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <p class="count">個</p>
                        <p class="cartBtn">カートに入れる</p>
                        <div class="favoriteBtn">
                            <div class="spImg">
                                <img src="images/07_sp_detail/sp_favorite.png" alt="ハートマーク">
                            </div>
                            <div class="pcImg">
                                <img src="images/08_pc_detail/pc_favorite.png" alt="ハートマーク">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
<?php require 'footer.php'; ?>