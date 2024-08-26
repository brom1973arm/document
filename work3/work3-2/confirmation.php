<?php require 'header.php'; ?>
<link rel="stylesheet" href="styles/confirmation_style.css">
<title>C.C.Donuts | 入力確認</title>
<?php require 'header2.php'; ?>
        <main>
            <nav>
                <ol class="breadcrumbs"> <!-- パンくずナビゲーション -->
                    <li><a href="index.php">top</a></li>
                    <li><a href="login.php">ログイン</a></li>
                    <li><a href="registration.php">会員登録</a></li>
                    <li>入力確認</li>
                </ol>
            </nav>
            <p class="border"></p>
            <p class="welcome">ようこそ　ゲスト様</p>
            <p class="border"></p>
            <h1>入力確認</h1>
            <form action="completion-member.php" method="confirmation">
            <section class="nameContents">
                <p class="inputType">お名前</p>
                <div class="textInput">
                    <?php
                    $userName=$_REQUEST['userName'];
                    echo $userName;
                    ?>
                </div>
            </section>
            <section class="nameContentsKana">
                <p class="inputType">お名前（フリガナ）</p>
                <div class="textInput">
                    <?php
                    echo mb_convert_kana($_REQUEST['furigana']);
                    ?>
                </div>
            </section>
            <section class="postCodeContents">
                <p class="inputType">郵便番号</p>
                <div class="postCode">
                    <?php
                    $postcode1=$_REQUEST['postcode1'];
                    echo $postcode1;
                    ?>
                    <?php
                    $postcode2=$_REQUEST['postcode2'];
                    echo $postcode2;
                    ?>
                </div>
            </section>
            <section class="addressContents">
                <p class="inputType">住所</p>
                <div class="textInput">
                    <?php
                    $userAddress=$_REQUEST['userAddress'];
                    echo $userAddress;
                    ?>
                </div>
            </section>
            <section class="mailContents">
                <p class="inputType">メールアドレス</p>
                <div class="textInput">
                    <?php
                    $userMail=$_REQUEST['userMail'];
                    if (preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/', $userMail)) {
                    echo $userMail;
                    }   else {
                        echo '正しいメールアドレスを入力してください。';
                    }
                    ?>
                </div>
            </section>
            <section class="mailContents2">
                <p class="inputType">メールアドレス確認用</p>
                <div class="textInput">
                    <?php
                    $userMail2=$_REQUEST['userMail2'];
                    if (preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/', $userMail)) {
                    echo $userMail2;
                    }   else {
                        echo '正しいメールアドレスを入力してください。';
                    }
                    ?>
                </div>
            </section>
            <section class="passwordContents">
                <p class="inputTypePassword">パスワード</p>
                <div class="textInput">
                    <?php
                    $password=$_REQUEST['password'];
                    if (preg_match('/^[a-zA-Z0-9]{8,20}$/',$password)) {
                    echo $password;
                    } else {
                        echo 'パスワード「', $password, '」は適切ではありません。';
                    }
                    ?>
                </div>
            </section>
            <section class="passwordContents2">
                <p class="inputType">パスワード確認用</p>
                <div class="textInput">
                    <?php
                    $password2=$_REQUEST['password2'];
                    if (preg_match('/^[a-zA-Z0-9]{8,20}$/',$password2)) {
                    echo $password2;
                    } else {
                        echo 'パスワード「', $password2, '」は適切ではありません。';
                    }
                    ?>
                </div>
            </section>
            <section class="nameContents">
                <div class="submitBtn">
                    <input type="submit" value="登録する">
                </div>
            </section>
        </main>
<?php require 'footer.php'; ?>