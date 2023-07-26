<?php
///////////////
//ホームコントローラー
///////////////

// 設定の読み込み
include_once '../config.php';
// 便利な関数を読み込み
include_once '../util.php';

//ツイートデーターを操作モデルを読み込む
include_once '../Models/tweets.php';



//TODO:ログインチェック
$user = getUserSession();
if (!$user) {
    //ログインしてない
    header('Location: ' .HOME_URL . 'controllers/sign-in.php');
    exit;
}

//表示の変数
$view_user = $user;
//ツイート一覧
//　TODO: モデルから取得する
$view_tweets = findTWEETS($user);
 
//画面表示
include_once '../Views/home.php';