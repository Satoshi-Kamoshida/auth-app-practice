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

## `FortifyServiceProvider.php`

| 項目             | 内容                                                                     |
| ---------------- | ------------------------------------------------------------------------ |
| ファイル         | `app/Providers/FortifyServiceProvider.php`                               |
| 役割             | **Fortifyの動作をカスタマイズする設定ファイル**                          |
| 何を書く？       | ログイン画面・登録画面の指定、認証処理、ユーザー登録処理、レート制限など |
| いつ実行される？ | Laravel起動時（ServiceProviderとして読み込まれる）                       |

### よく使う設定

- **ログイン画面を指定**

```php
Fortify::loginView(function () {
    return view('auth.login');
});
```

→ `/login` にアクセスしたときに `auth/login.blade.php` を表示する。

---

- **登録画面を指定**

```php
Fortify::registerView(function () {
    return view('auth.register');
});
```

→ `/register` にアクセスしたときに `auth/register.blade.php` を表示する。

---

- **ユーザー登録処理を指定**

```php
Fortify::createUsersUsing(CreateNewUser::class);
```

→ ユーザー登録時に `CreateNewUser` クラスを実行する。

---

- **ログイン試行回数を制限**

```php
RateLimiter::for('login', function (Request $request) {
    return Limit::perMinute(5);
});
```

→ ログインを1分間に5回までに制限する。

---

### イメージ

```
Laravel起動
      │
      ▼
FortifyServiceProvider
      │
      ├── loginView()     → ログイン画面
      ├── registerView()  → 登録画面
      ├── createUsersUsing() → ユーザー登録処理
      └── RateLimiter()   → ログイン試行回数制限
```

## 動作確認

（**どうやって動かして確認するかを記載してください**）

# auth-app-practice
