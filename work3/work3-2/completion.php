<?php require 'header.php'; ?>
<link rel="stylesheet" href="styles/completion_style.css">
<title>C.C.Donuts | ログイン完了</title>
<?php require 'header2.php'; ?>
<main>
            <nav>
                <ol class="breadcrumbs"> <!-- パンくずナビゲーション -->
                    <li><a href="index.php">top</a></li>
                    <li>商品一覧</li>
                </ol>
            </nav>
            <p class="border"></p>
            <p class="welcome">
                <?php
                unset($_SESSION['customers']);
                $pdo=new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8', 'ccStaff', 'ccDonuts');
                $sql=$pdo->prepare('select * from customers where mail=? and password=?');
                $sql->execute([$_REQUEST['mail'], $_REQUEST['password']]);
                foreach ($sql as $row) {
                    $_SESSION['customers']=[
                        'id'=>$row['id'], 'name'=>$row['name'], 'furigana'=>$row['furigana'], 'postcode_a'=>$row['postcode_a'], 'postcode_b'=>$row['postcode_b'], 
                        'address'=>$row['address'], 'mail'=>$row['mail'], 
                        'password'=>$row['password']];
                }
                if (isset($_SESSION['customers'])) {
                    echo $_SESSION['customers']['name'], '様';
                } else {
                    echo 'ようこそ　ゲスト様';
                }
                ?>
            </p>
            <p class="border"></p>
            <?php
                unset($_SESSION['customers']);
                $pdo=new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8', 'ccStaff', 'ccDonuts');
                $sql=$pdo->prepare('select * from customers where mail=? and password=?');
                $sql->execute([$_REQUEST['mail'], $_REQUEST['password']]);
                foreach ($sql as $row) {
                    $_SESSION['customers']=[
                        'id'=>$row['id'], 'name'=>$row['name'], 'furigana'=>$row['furigana'], 'postcode_a'=>$row['postcode_a'], 'postcode_b'=>$row['postcode_b'], 
                        'address'=>$row['address'], 'mail'=>$row['mail'], 
                        'password'=>$row['password']];
                }
                if (isset($_SESSION['customers'])) {
                    echo '<h1>ログイン完了</h1>';
                    echo '<section class="completionFlame">';
                    echo '<p>ログインが完了しました。</p>';
                    echo '<p>引き続きお楽しみください。</p>';
                    echo '</section>';
                } else {
                    echo '<section class="completionFlame">';
                    echo '<p>メールアドレスもしくはパスワードが違います。</p>';
                    echo '</section>';
                }
                ?>
            <div class="proceed">
                <p><a href="confirmation-cart.php">購入確認ページへすすむ<a></p>
            </div>
            <div class="backToTop">
                <p><a href="index.php">TOPページへもどる</a></p>
            </div>
        </main>
</main>
<?php require 'footer.php'; ?>