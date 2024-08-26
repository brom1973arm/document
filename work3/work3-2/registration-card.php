<?php require 'header.php'; ?>
<link rel="stylesheet" href="styles/registration-card_style.css">
<title>C.C.Donuts | カード情報</title>
<?php require 'header2.php'; ?>
        <main>
            <nav>
                <ol class="breadcrumbs"> <!-- パンくずナビゲーション -->
                    <li><a href="index.php">top</a></li>
                    <li><a href="cart.php">カート</a></li>
                    <li><a href="login.php">購入確認</a></li>
                    <li>カード情報</li>
                </ol>
            </nav>
            <p class="border"></p>
            <p class="welcome">ようこそ　ゲスト様</p>
            <p class="border"></p>
            <h1>カード情報登録</h1>
            <section class="nameContents">
                <p class="inputType">お名前
                    <div class="textInput">
                        <input type="text" name="user_name">
                    </div>
                </p>
                <p class="mustFieldName">（必須）</p>
            </section>
            <section class="cardContents">
                <p class="inputType">カード番号
                    <div class="textInput">
                        <input type="text" name="user_num">
                    </div>
                </p>
                <p class="mustFieldCard">（必須）</p>
            </section>
            <section class="cardKindsContents">
                <p class="inputType">
                    <label><input type="radio" name="attend" value="JCB" checked="checked">JCB</label>
                    <label><input type="radio" name="attend" value="Visa">Visa</label>
                    <label><input type="radio" name="attend" value="Mastercard">Mastercard</label>
                </p>
                <p class="mustFieldCardKinds">（必須）</p>
            </section>
            <section class="effectiveDateContents">
                <p class="inputType">有効期限
                    <div class="effectiveDate">
                        <div class="effectiveDateMonth">
                            <input type="text" name="month">
                        </div>
                        <div class="effectiveDateYear">
                            <input type="text" name="year">
                        </div>
                    </div>
                    <p class="mustFieldEffectiveDate">（必須）</p>
                    <p class="month">月</p>
                    <p class="year">年</p>
                </p>
            </section>
            <section class="securityCodeContents">
                <p class="inputType">セキュリティコード
                    <div class="textInput">
                        <input type="text" name="user_security">
                    </div>
                </p>
                <p class="mustFieldSecurityCode">（必須）</p>
            </section>
            <section class="nameContents">
                <div class="submitBtn">
                    <input type="submit" value="入力確認する">
                </div>
            </section>
        </main>
<?php require 'footer.php'; ?>