<?php
    // セッションを開始する
    session_start();

    // セッション変数に値を割り当てる
    $_SESSION['username'] = 'tyousikon';
    $_SESSION['email'] = 'kd1406226@st.kobedenshi.ac.jp';

    // メッセージを表示する
    echo "セッション変数が設定されました。";
?>