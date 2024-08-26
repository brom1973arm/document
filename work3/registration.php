<?php session_start(); ?>
<?php require 'header.php'; ?>
<link rel="stylesheet" href="styles/registration_style.css">
<title>C.C.Donuts | 会員登録</title>
<?php require 'header2.php'; ?>
        <main>
            <nav>
                <ol class="breadcrumbs"> <!-- パンくずナビゲーション -->
                    <li><a href="index.php">top</a></li>
                    <li><a href="login.php">ログイン</a></li>
                    <li>会員登録</li>
                </ol>
            </nav>
            <p class="border"></p>
            <p class="welcome">ようこそ　ゲスト様</p>
            <p class="border"></p>
            <h1>会員登録</h1>
            <?php
            $id=$name=$furigana=$postcode_a=$postcode_b=$address=$mail=$password='';
            if (isset($_SESSION['customers'])) {
                $id=$_SESSION['customers']['id'];
                $name=$_SESSION['customers']['name'];
                $furigana=$_SESSION['customers']['furigana'];
                $postcode_a=$_SESSION['customers']['postcode_a'];
                $postcode_b=$_SESSION['customers']['postcode_b'];
                $address=$_SESSION['customers']['address'];
                $mail=$_SESSION['customers']['mail'];
                $password=$_SESSION['customers']['password'];
            }
            echo '<form action="confirmation.php" method="registration">';
                echo '<section class="nameContents">';
                    echo '<p class="inputType">お名前';
                        echo '<div class="textInput">';
                            echo '<input type="text" name="userName">';
                        echo '</div>';
                    echo '</p>';
                    echo '<p class="mustFieldName">（必須）</p>';
                echo '</section>';
                echo '<section class="nameContentsKana">';
                    echo '<p class="inputType">お名前（フリガナ）';
                        echo '<div class="textInput">';
                            echo '<input type="text" name="furigana">';
                        echo '</div>';
                    echo '</p>';
                    echo '<p class="mustFieldKana">（必須）</p>';
                echo '</section>';
                echo '<section class="postCodeContents">';
                    echo '<p class="inputType">郵便番号';
                        echo '<div class="postCode">';
                            echo '<div class="postCode1">';
                                echo '<input type="text" name="postcode1">';
                            echo '</div>';
                            echo '<div class="postCode2">';
                                echo '<input type="text" name="postcode2">';
                            echo '</div>';
                        echo '</div>';
                        echo '<p class="mustFieldPostCode">（必須）</p>';
                    echo '</p>';
                echo '</section>';
                echo '<section class="addressContents">';
                    echo '<p class="inputType">住所';
                        echo '<div class="textInput">';
                            echo '<input type="text" name="userAddress">';
                        echo '</div>';
                    echo '</p>';
                    echo '<p class="mustFieldAddress">（必須）</p>';
                echo '</section>';
                echo '<section class="mailContents">';
                    echo '<p class="inputType">メールアドレス';
                        echo '<div class="textInput">';
                            echo '<input type="email" name="userMail">';
                        echo '</div>';
                    echo '</p>';
                    echo '<p class="mustFieldMail">（必須）</p>';
                echo '</section>';
                echo '<section class="mailContents2">';
                    echo '<p class="inputType">メールアドレス確認用';
                        echo '<div class="textInput">';
                            echo '<input type="email" name="userMail2">';
                        echo '</div>';
                    echo '</p>';
                    echo '<p class="mustFieldMail2">（必須）</p>';
                echo '</section>';
                echo '<section class="passwordContents">';
                    echo '<p class="inputTypePassword">パスワード';
                        echo '<div class="textInput">';
                            echo '<input type="password" name="password">';
                        echo '</div>';
                    echo '</p>';
                    echo '<p class="note">半角英数字8文字以上20文字以内で入力してください。※記号の使用はできません</p>';
                    echo '<p class="mustFieldPass">（必須）</p>';
                echo '</section>';
                echo '<section class="passwordContents2">';
                    echo '<p class="inputType">パスワード確認用';
                        echo '<div class="textInput">';
                            echo '<input type="password" name="password2">';
                        echo '</div>';
                    echo '</p>';
                    echo '<p class="mustFieldPass2">（必須）</p>';
                echo '</section>';
                echo '<section class="nameContents">';
                    echo '<div class="submitBtn">';
                        echo '<input type="submit" value="入力確認する">';
                    echo '</div>';
                echo '</section>';
            echo '</form>';
        echo '</main>';
        ?>
<?php require 'footer.php'; ?>