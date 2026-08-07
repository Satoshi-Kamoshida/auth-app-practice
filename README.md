# auth-app-practice

## 概要

COACHTECH 教材 Tutorial 10-1「認証機能 ハンズオン演習」で作成した成果物です。

- Laravel Fortifyを使ったログイン・ログアウト・ユーザー登録機能と、認証が必要なダッシュボード

## 使用技術

- PHP 8.x
- Laravel 10.x
- Laravel Fortify（認証）
- MySQL
  （**他に使ったものがあれば追記してください**）

## 学んだこと

- （**自分の言葉で2〜3項目書きましょう**）
- **各ファイルの役割**

| ファイル                      | 役割                                      |
| ----------------------------- | ----------------------------------------- |
| `config/fortify.php`          | Fortifyの設定（ログイン後の遷移先など）   |
| `FortifyServiceProvider.php`  | Fortifyに「どの画面を表示するか」を教える |
| `routes/web.php`              | URLとコントローラーを結び付ける           |
| `DashboardController.php`     | ログイン後の処理を担当する                |
| `resources/views/*.blade.php` | 実際に表示する画面（HTML）                |

- **各configファイルの役割**

| ファイル              | 役割                                                                 |
| --------------------- | -------------------------------------------------------------------- |
| `config/app.php`      | Laravel全体の基本設定（アプリ名・タイムゾーン・ServiceProviderなど） |
| `config/auth.php`     | ログイン認証の設定                                                   |
| `config/database.php` | データベース接続情報                                                 |
| `config/fortify.php`  | Fortifyの設定（ログイン後の遷移先、機能のON/OFFなど）                |
| `config/mail.php`     | メール送信設定                                                       |
| `config/session.php`  | セッションの保存方法                                                 |

- **Laravelの主要フォルダの役割**

| フォルダ          | 一言でいうと                                                  |
| ----------------- | ------------------------------------------------------------- |
| `app`             | **処理を書く場所**（Controller・Model・Middlewareなど）       |
| `routes`          | **URLの案内役**                                               |
| `resources/views` | **画面（HTML・Blade）**                                       |
| `config`          | **設定を書く場所**                                            |
| `database`        | **データベース関連**（マイグレーション・Seeder・Factoryなど） |
| `public`          | **ブラウザから直接アクセスされる入口**                        |

## 動作確認

（**どうやって動かして確認するかを記載してください**）

# auth-app-practice
