# フリマアプリ「フリマル」
ゲーム・PCなどのハード機器に特化したフリマアプリ

## 機能要件
### 基本機能
【アカウント関連】
+ ログイン
+ 会員登録　← ここまで実装済み
+ マイページ編集

【商品関連】
+ 商品登録
+ 商品編集
+ 商品削除

【売買関連】
+ 取引商品管理
+ コメント機能
+ 購入機能（決済：代引き・銀行振込）

### 特化機能
+ 動作確認の証拠動画アップロード機能
+ 機器ならではの項目追加（型番・ジャンクかどうか・スペック・バッテリーの持ちなど）
+ セット・個別の同時出品機能（セット商品が売れたら個別商品の出品が自動停止）

## 導入ライブラリ・フレームワーク
Laravel9 バックエンド機能
Vue3 フロントエンド機能（frontendディレクトリ配下）

## 動作マニュアル
### Laravel
Comming soon

### Vue
cd /frontend
npm install
npm run serve

  App running at:
  - Local:   http://localhost:8080/
  - Network: http://192.168.1.14:8080/

<http://localhost:8080/> へアクセス

【テストアカウント】
メールアドレス：test1@test
パスワード：test
