<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usersbooks extends Model
{
    use HasFactory;

    /**
     * モデルに関連付けるテーブル名
     * (Laravelはデフォルトで、モデル名の複数形をテーブル名として認識するため、この記述は省略可)
     */
    protected $table = 'usersbooks';

    /**
     * 変更可能（Mass Assignable）なカラム
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'users_id',
        'books_id',
        'states',
        'episode',
        'review',
        'deleteat',
    ];

    /**
     * データの型キャスト
     *
     * @var array<string, string>
     */
    protected $casts = [
        'deleteat' => 'date',
    ];
}
