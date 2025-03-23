<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;

    // 一括代入を許可するカラムを指定
    protected $fillable = [
        'bookname',          // 本の名前
        'author',            // 著者
        'publisher',         // 出版社
        'publicationdate',   // 出版日
        'content',           // 内容（あらすじなど）
        'image',             // 画像のファイル名
    ];

    // 型変換の設定（キャスト）
    protected $casts = [
        'publicationdate' => 'datetime',  // 出版日を日付型（Carbonインスタンス）に変換
    ];
}
