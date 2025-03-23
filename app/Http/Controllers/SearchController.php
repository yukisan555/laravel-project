<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\books; // 検索対象となるモデル

class SearchController extends Controller
{
    // 検索フォームを表示する
    public function index()
    {
        return view('search.index');
    }

    // 検索結果を表示する
    public function search(Request $request)
    {
        $query = $request->input('query');  // フォームから送られた検索キーワード

        // 検索処理（例: Bookモデルのbooknameカラムで検索）
        $books = Book::where('bookname', 'like', '%' . $query . '%')
                     ->orWhere('author', 'like', '%' . $query . '%')
                     ->get();

        // 結果をビューに渡して表示
        return view('search.results', compact('books'));
    }
}
