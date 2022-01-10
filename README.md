# 開発setup
```
//プロジェクト取得
$ git clone hogehoge

// コンテナ立ち上げ
$ docker-compose up -d --build

// コンテナログイン
$ docker exec -it [コンテナ名] bash
$ docker exec -it php bash

// phpパッケージインストール
$ composer install

// フロントモジュールインストール
$ npm install
$ npm run dev

```

# application setup
```
// アプリケーション.env設定
// DB接続設定 .envファイル
DB_CONNECTION=pgsql
DB_HOST=db
DB_PORT=5432
DB_DATABASE=breeze_sample
DB_USERNAME=admin
DB_PASSWORD=password!1

// APP_KYEの設定
$ php artisan key:generate

```

# 開発時コマンド
```
// コンテナ立ち上げ
$ docker-compose up -d --build

// コンテナ一括削除
$ docker-compose down

// コンテナ確認
$ docker ps -a

//ボリューム確認
$ docker volume ls

// コンテナに入る
$ docker-compose exec -it [コンテナ名] bash

// フロント変更監視・ビルド
[コンテナ内]$ npm run watch

```

# commitメッセージ統一ルール
```
$ git commit -m "[Prefix]: 〇〇のため、□□を追加"
```
- Prefix
  - Add: 新規の(ファイル)機能追加
  - Fix: バグ修正
  - Modify: バグではない機能の修正
  - Refactor: 仕様に影響がないコード改善(リファクタ)
  - Test: テスト関連
  - Remove: 削除

# todo
- Laravel
  - 認証機能作成
  - ユーザ登録バリデーション
  - テストコード

