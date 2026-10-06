# relation-app-practice

## 概要
Laravelを用いたTodoアプリです。
- Todo一覧ページ：Todoの登録、更新、削除、検索することができる。
<img width="1244" height="691" alt="Todo一覧ページ" src="https://github.com/user-attachments/assets/09dc6101-79c0-46cb-853f-774dbfd7be5a" />
- カテゴリ一覧ページ：Todoに紐づけするカテゴリを表示、登録、更新、削除することができる。
<img width="1206" height="546" alt="カテゴリ一覧ページ" src="https://github.com/user-attachments/assets/6080d295-0535-420d-92ac-179781923a1f" />

## 使用技術
- PHP 8.x
- Laravel 10.x
- Eloquent ORM（hasMany / belongsTo / belongsToMany）
- MySQL

## ディレクトリ構成（抜粋）
```
todo-app/
    ├── app/                                # MVCのモデル（M） とコントローラー(C)
        └── Https/                          
            ├── Controllers                 # HTTPのコントローラー（リクエスト処理）
                └──CategoryController.php   #Category一覧ページのコントローラー（追加、更新、削除機能）
                └──TodoController.php       #Todo一覧ページのコントローラー
        └── Models/                         # Eloquentモデル
            ├── Category.php                # Categoryのバリデーションを設定
            └── Todo.php                    # Todoのバリデーション、カテゴリとの関係性（belongTo）、検索機能を実装
    ├── database/                           
        ├── migrations/                     # マイグレーションの定義
            ├── 2026_10_05_14604_create_todos_table.php
            └── 2026_10_05_143603_create_categories_table.php
    ├── public/
        └── css
            └── app.css　　　　　　　　　　　#アプリ部分のCSS
            └── category.css               #CategoryのCSS
            └── common.css                 #共通部分のCSS
            └── index.css                  #indexページのCSS
            └── sanitize.css               #初期化CSS
    ├── routes/                            #コントローラとの紐づけ（ルーティング）
        └── web.php　　　　　　　　　　　　　　#TodoController、CategoryControllerとのルーティング
    ├── resources/
        ├── css/
        ├── js/
        └──  views/                   　　　 # Bladeテンプレート（V）
            └── layouts/ 
                └── app.blade.php           #標準機能部分のレイアウト
            ├── category.blade.php          #Category一覧ページのblade
            └── index.blade.php             #Todo一覧ページのblade
    ├── config/
    ├── strage/
    ├── bootstrap/
    └── tests/
```

## 学んだこと
- CRUDの設定（C：Create（作成機能）、R：Read（読み取り機能）、U：Update（更新機能）、D：Delete（削除機能））
- `@extends` と `@section` でレイアウトを部品化できること
- `old()` / `session()` / `$errors` で UX の良いフィードバック表示ができる

## 動作確認
1. Githubからリポジトリをクローン
```
git clone git@github.com:aridome-sashizume/Todo-app.git
```
2. Sailを起動
```
./vendor/bin/sail up -d
```
3. http://localhost にアクセス
