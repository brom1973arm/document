<?php require 'header.php'; ?>
<link rel="stylesheet" href="styles/confirmation-cart-final_style.css">
<title>C.C.Donuts | 購入確認</title>
<?php require 'header2.php'; ?>
        <main>
            <nav>
                <ol class="breadcrumbs"> <!-- パンくずナビゲーション -->
                    <li><a href="index.php">top</a></li>
                    <li><a href="cart.php">カート</a></li>
                    <li>購入確認</li>
                </ol>
            </nav>
            <p class="border"></p>
            <p class="welcome">ドーナツ太郎　様</p>
            <p class="border"></p>
            <h1>ご購入確認</h1>
            <h2>ご購入商品</h2>
            <section>
                <div class="purchase1">
                    <dl>
                        <dt>商品名</dt>
                        <dd>CCドーナツ 当店オリジナル（5個入り）</dd>
                        <dt>数量</dt>
                        <dd>1個</dd>
                        <dt>金額</dt>
                        <dd>税込  ￥1,500</dd>
                    </dl>
                </div>
                <div class="purchase2">
                    <dl>
                        <dt>商品名</dt><dd>フルーツドーナツセット（12個入り）</dd>
                        <dt>数量</dt><dd>1個</dd>
                        <dt>金額</dt><dd>税込  ￥3,500</dd>
                    </dl>
                </div>
                <div class="sum">
                    <dl>
                        <dt>合計数量</dt><dd>1個</dd>
                        <dt>合計金額</dt><dd>税込  ￥5,000</dd>
                    </dl>
                </div>
                <h2>お届け先</h2>
                <div class="address">
                    <dl>
                        <dt>お名前</dt><dd>ドーナツ太郎</dd>
                        <dt>郵便番号</dt><dd>123-4567</dd>
                        <dt>住所</dt><dd>千葉県〇〇市中央1-1-1</dd>
                    </dl>
                </div>
                <h2>お支払い方法</h2>
                <div class="payment">
                    <dl>
                        <dt>お支払い</dt><dd>クレジットカード</dd>
                        <dt>ブランド</dt><dd>JCB</dd>
                    </dl>
                </div>
                <div class="submitBtn">
                    <input type="submit" value="購入を確定する">
                </div>
            </section>
        </main>
<?php require 'footer.php'; ?>