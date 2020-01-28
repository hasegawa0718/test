<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>diworksblog 掲示板</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <div class="wrapper">
                <img src="diblog_logo.jpg">
                <div class="logo">
                 <ul>
                    <li>トップ</li>
                    <li>プロフィール</li>
                    <li>D.I.Blogについて</li>
                    <li>登録フォーム</li>
                    <li>問い合わせ</li>
                    <li>その他</li>
                 </ul>
                </div>
            </div>
        </header>
        <main>
            <h1>プログラミングに役立つ掲示板</h1>
                <form method="post" action="insert.php">
                <h2>入力フォーム</h2>
                <div>
                    <label>ハンドルネーム</label>
                    <input type="text" class="text"
                    size="35" name="handlename">
                </div>
                <div>
                    <label>タイトル</label>
                    <input type="text" class="text"
                    size="35" name="title">
                </div>
                <div>
                    <label>コメント</label>
                    <textarea cols="35" rows="7" name="comments"></textarea>
                </div>
                <div>
                    <input type="submit" class="submit" value="送信する">
                </div>
                </form>
        </main>
        <sub>
                <div class="famous">
                    <h2>人気の記事</h2>
                    <ul>
                        <li>PHPオススメ本</li>
                        <li>PHP　MyAdminの使い方</li>
                        <li>いま人気のエディタTops</li>
                        <li>HTMLの基礎</li>
                    </ul>
                </div>
                <div class="recog">
                    <h2>オススメリンク</h2>
                    <ul>
                        <li>ﾃﾞｨｰｱｲﾜｰｸｽ株式会社</li>
                        <li>XAMPPのダウンロード</li>
                        <li>Eclipseのダウンロード</li>
                        <li>Braketsのダウンロード</li>
                    </ul>
                </div>
                <div class="categ">
                    <h2>カテゴリ</h2>
                    <ul>
                        <li>HTML</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>javaScript</li>
                    </ul>
                </div>
            </sub>
            <footer>
                copyright(c) all right reserved diworks 2015-2018
            </footer>

    </body>
</html>