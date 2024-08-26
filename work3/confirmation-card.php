<?php require 'header.php'; ?>
<link rel="stylesheet" href="styles/confirmation-card_style.css">
<title>C.C.Donuts | 入力確認</title>
<?php require 'header2.php'; ?>
        <main>
            <nav>
                <ol class="breadcrumbs"> <!-- パンくずナビゲーション -->
                    <li><a href="index.php">top</a></li>
                    <li><a href="cart.php">カート</a></li>
                    <li><a href="confirmation.php">購入確認</a></li>
                    <li><a href="registration-card.php">カード情報</a></li>
                    <li>情報確認</li>
                </ol>
            </nav>
            <p class="border"></p>
            <p class="welcome">ドーナツ太郎　様</p>
            <p class="border"></p>
            <h1>入力情報確認</h1>
            <section class="nameContents">
                <p class="inputType">お名前</p>
                <div class="textInput">
                    <p>ドーナツ太郎</p>
                </div>
            </section>
            <section class="cardContents">
                <p class="inputType">カード番号
                    <div class="textInput">
                        <p>123456789123</p>
                    </div>
                </p>
            </section>
            <section class="cardKindsContents">
                <p class="inputType">カード会社</p>
                    <div class="textInput">
                        <p>JCB</p>
                    </div>
                </p>
            </section>
            <section class="effectiveDateContents">
                <p class="inputType">有効期限
                    <div class="effectiveDate">
                        <div class="effectiveDateMonth">
                            <p>4</p>
                        </div>
                        <div class="effectiveDateYear">
                            <p>25</p>
                        </div>
                    </div>
                    <p class="month">月</p>
                    <p class="year">年</p>
                </p>
            </section>
            <section class="securityCodeContents">
                <p class="inputType">セキュリティコード
                    <div class="textInput">
                        <p>123456</p>
                    </div>
                </p>
            </section>
            <section class="nameContents">
                <div class="submitBtn">
                    <input type="submit" value="登録する">
                </div>
            </section>
        </main>
<?php require 'footer.php'; ?>