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
<link rel="stylesheet" href="styles/cart_style.css">
<title>C.C.Donuts | カート</title>
<?php require 'header2.php'; ?>
<main>
            <nav>
                <ol class="breadcrumbs"> <!-- パンくずナビゲーション -->
                    <li><a href="index.php">top</a></li>
                    <li>カート</li>
                </ol>
            </nav>
            <p class="border"></p>
            <p class="welcome">ドーナツ太郎　様様</p>
            <p class="border"></p> 
            <div class="productDetail">
                <div class="cartContents">
                    <p>現在　商品2点</p>
                    <div class="priceInfo">
                        <p>ご注文小計：税込 </p>
                        <p class="price">¥5,000</p>
                    </div>
                    <p class="purchaseBtn">購入確認へ進む</p>
                </div>
                <div class="purchase1 productContainer">
                    <div class="productImg">
                        <div class="spImg">
                            <img src="images/05_sp_menu/01_sp_menu1.png" alt="CCドーナツ 当店オリジナル（5個入り）">
                        </div>
                        <div class="pcImg">
                            <img src="images/08_pc_detail/pc_dtl_vs.png" alt="CCドーナツ 当店オリジナル（5個入り）">
                        </div>
                    </div>
                    <div class="productExplanation">
                        <p class="productName">CCドーナツ 当店オリジナル（5個入り）</p>
                        <p class="sentenceBorder"></p>
                        <div class="purchaseUnit">
                            <p class="price">税込  ￥1,500</p>
                            <div class="purchase">
                                <p>数量</p>
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
                            </div>
                        </div>
                        <p class="recastBtn">再計算</p>
                        <p class="delete">削除する</p>
                        <p class="sentenceBorder"></p>
                    </div>
                </div>
                <div class="purchase2 productContainer">
                    <div class="productImg">
                        <div class="spImg">
                            <img src="images/05_sp_menu/02_sp_menu_vs1.png" alt="CCドーナツ 当店オリジナル（5個入り）">
                        </div>
                        <div class="pcImg">
                            <img src="images/06_pc_menu/02_pc_menu_vs1.png" alt="CCドーナツ 当店オリジナル（5個入り）">
                        </div>
                    </div>
                    <div class="productExplanation">
                        <p class="productName">フルーツドーナツセット（12個入り）</p>
                        <p class="sentenceBorder"></p>
                        
                        <p class="price">税込  ￥3,500</p>
                        <div class="purchase">
                            <p>数量</p>
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
                        </div>
                        <p class="recastBtn">再計算</p>
                        <p class="delete">削除する</p>
                        <p class="sentenceBorder"></p>
                    </div>
                </div>
                    <div class="cartContents">
                        <p>現在　商品2点</p>
                        <div class="priceInfo">
                            <p>ご注文小計：税込 </p>
                            <p class="price">¥5,000</p>
                        </div>
                        <p class="purchaseBtn">購入確認へ進む</p>
                </div>
                <p class="continueBtn">買い物を続ける</p>
            </div>
        </main>
<?php require 'footer.php'; ?>