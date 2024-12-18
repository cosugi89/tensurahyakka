<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $usertype = $_POST['usertype'];
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $inquiry  = $_POST['inquiry'];
    $error    = array();

    if (empty($error)) {

      $to      = 'cosugi89@gmail.com';
      $subject = "お問い合わせ: " . $name . '様より';
      $message = "email:\n" . $email . "\n問合せ区分:\n" . $usertype . "\n問合せ本文:\n" . $inquiry;
      mb_language('Japanese');
      mb_internal_encoding('UTF-8');
      $flg = mb_send_mail($to, $subject, $message);

      if ($flg) {
        header('Location: thanks.html');
        exit;
      }
      exit('お問い合わせの受付に失敗しました');
    }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>転スラ百科</title>
    <meta name="description" content="このサイトでは、主に『転スラ』をより楽しむための基本的な設定の解説や考察などを発信しています。">
    <meta name="viewport" content="width=device-width">
    <!-- JavaScriptファイルへのリンクの記載 P80 -->
    <script></script>
    <link rel="icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="/common.css">
    <link rel="stylesheet" href="/contact.css">
    <link rel="stylesheet" href="/contact 2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Noto+Sans+JP:wght@400;500;600;700;900&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="/contact.js"></script>
  </head>
  <body>
    <header class="header">
      <div class="header-inner">
        <ul class="site-menu">
          <li><a class="header-logo" href="/index.html">
            <span>転スラ百科</span><span class="poppins">HOME</span>
          </a></li>
        </ul> 
        <div class="header-site-menu">
          <nav class="header-site-menu-navi">
            <ul class="site-menu" id="hamburger-inner">
              <li><a id="menu-home" href="/index.html">
                <span class="poppins">HOME</span><span>ホーム</span>
              </a></li>
              <li><a class="menu-contents" href="/contents.html">
                <span class="poppins">CONTENTS</span><span>解説・考察</span>
              </a></li>
              <li><a class="menu-library" href="/library.html">
                <span class="poppins">LIBRARY</span><span>設定資料集</span>
              </a></li>
              <li><a class="menu-contact" href="/contact.php">
                <span class="poppins">CONTACT</span><span>お問い合わせ</span>
              </a></li>
              <li><a id="youtube-link" href="https://www.youtube.com/channel/UC0id8u0FA02YZ2QCH6I0G6A" target="_blank">
                <img src="/images/youtube-white.icon.png" alt="YouTube">
                <p class="poppins">YouTube</p>
              </a></li>
              <li><a id="twitter-link" href="https://twitter.com/CO_sugi_" target="_blank">
                <img src="/images/twitter-white.icon.png" alt="Twiter">
                <p class="poppins">Twitter</p>
              </a></li>
              <li><a id="note-link" href="https://t.co/W7QgaapvwI" target="_blank">
                <img src="/images/note-white.icon.png" alt="note">
                <p class="poppins">note</p>
              </a></li>
            </ul>
          </nav>
          <div class="openbtn"><span></span><span></span><span></span></div>
        </div>
      </div>
    </header>
    <main class="main">
      <section class="top_news">
        <div class="content content1480">
          <div class="_inner">
            <div class="_left">
              <div class="_left_inner">
                <div class="all_border_title">
                  <div class="_wrapper">
                    <div class="_container">
                      <div class="all_square_anime">
                        <h2 class="_head">
                          お問い合わせ
                        </h2>
                        <p class="_main poppins">
                          Contact
                        </p>
                      </div>
                    </div>
                    <div class="_border _left_top_to_right"></div>
                    <div class="_border _left_top_to_bottom"></div>
                    <div class="_border _right_bottom_to_left"></div>
                    <div class="_border _right_bottom_to_top"></div>
                  </div>
                </div>
                <!-- tab menu -->
                <ul class="tab">
                  <ul>
                    <li><p>
                      サイトをよりよいものにするため、<br>みなさんのご意見をお聞かせください。<br><br>YouTubeやTwitter、<br>またはフォームからお願いします。<br><br>返信などのリアクションがほしい方は<br>YouTubeやTwitterがオススメです。
                    </p></li>
                  </ul>
                </ul>
              </div>
            </div>
            <div class="_right">
              <!-- rist -->
              <ul class="creater">
                <li><span class="poppins">　 CREATER</span><br><span class="cosugi">こ過ぎ</span></li>
                <li>転スラちょっと詳しい人。<br>YouTubeや記事、Webサイトなどを浅く広く勉強しながら、<br class="none">『転生したらスライムだった件』関連のコンテンツを作成しています。</li>
                <li></li>
                <li><a href="https://www.youtube.com/channel/UC0id8u0FA02YZ2QCH6I0G6A" target="_blank">
                  <img src="/images/youtube-white.icon.png" alt="YouTube">
                  <p>co_sugi　/　<span class="poppins">YouTube</span></p>
                </a><a href="https://twitter.com/CO_sugi_" target="_blank">
                  <img src="/images/twitter-white.icon.png" alt="Twiter">
                  <p>CO_sugi_　/　<span class="poppins">Twitter</span></p>
                </a></li>
              </ul>
              <form action="contact.php" method="post">
                <dl class="form-area">
                  <dt>お問い合わせ区分</dt>
                  <dd>
                    <label class="radio-button"><input type="radio" name="usertype" value="ご要望" checked>ご要望</label>
                    <label class="radio-button"><input type="radio" name="usertype" value="ご質問">ご質問</label>
                    <label class="radio-button"><input type="radio" name="usertype" value="ご指摘">ご指摘</label>
                    <label class="radio-button"><input type="radio" name="usertype" value="その他">その他</label>
                  </dd>
                  <dt><span class="required">ニックネーム</span></dt>
                  <dd><input class="input-text" type="text" name="name" placeholder="ギメイ" required></dd>
                  <dt>メールアドレス<p>※ 返信がほしい場合のみ</p></dt>
                  <dd><input class="input-text" type="email" name="email" placeholder="tensura@exsample.com"></dd>
                  <dt><span class="required">お問い合わせ内容</span></dt>
                  <dd><textarea class="message" name="inquiry" placeholder="〇〇について追記してほしいです。" required></textarea></dd>
                  <p class="confirm-text">ご入力内容をご確認の上、お間違いがなければ［Submit］ボタンを押してください。<br>［ご質問］を選択された方は、メールアドレスのご入力をお願いします。</p>
                  <p class="_link _link_pc">
                    <input type="submit" value="Submit" class="all_button poppins">
                  </p>
                </dl>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="footer"></footer>
    <!-- jQueryバージョン（3.4.1）を読み込む -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- 自作js -->
    <script src="/common.js"></script>
    <script src="/library.js"></script>
  </body>
</html>

