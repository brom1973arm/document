<?php require 'header.php'; ?>
<link rel="stylesheet" href="styles/login_style.css">
<title>C.C.Donuts | ログイン</title>
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
            <h1>ログイン</h1>
            <section class="loginFlame">
                <form action="completion.php" method="post">
                    <p class="inputType">メールアドレス
                        <div class="textInput">
                            <input type="email" name="mail">
                        </div>
                    </p>
                    <p class="inputType">パスワード
                        <div class="textInput">
                            <input type="password" name="password"></p>
                        </div>
                    <div class="submitBtn">
                        <input type="submit" value="ログインする">
                    </div>
                </form>
            </section>
            <div class="register">
                <p><a href="registration.php">会員登録はこちら<a></p>
            </div>
</main>
<?php require 'footer.php'; ?>