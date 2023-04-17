<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name_kana')->after('name');  // かな
            $table->string('nickname')->after('password');  // ニックネーム
            $table->string('introduction')->after('nickname');  // 自己紹介
            $table->string('post_code')->after('introduction');  // 都道府県
            $table->string('pref')->after('post__code');  // 郵便番号
            $table->string('address')->after('pref');  // 住所
            $table->string('phone')->after('address');  // 電話番号
            $table->softDeletes();  // ソフトデリート
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name_kana')->after('name');  // かな
            $table->dropColumn('nickname');  // ニックネーム
            $table->dropColumn('introduction');  // 自己紹介
            $table->dropColumn('post_code');  // 都道府県
            $table->dropColumn('pref');  // 郵便番号
            $table->dropColumn('address');  // 住所
            $table->dropColumn('phone');  // 電話番号
            $table->dropSoftDeletes();  // ソフトデリート
        });
    }
};
