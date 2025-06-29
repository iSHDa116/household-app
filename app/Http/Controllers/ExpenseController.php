<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;

class ExpenseController extends Controller
{    /**
     * 出費の一覧を表示
     */
    public function index()
    {
        $expense = Expense::all(); //すべての出費を取得

        $totalExpenses = $expense->sum('amount'); //出費の合計
        $monthlyIncome = 190000; //仮の月収
        $warningThreshold = $monthlyIncome * 0.15; //月収の15%の出し方

        return view('expenses.index',[

            'expenses' => $expense,
            'totalExpenses' => $totalExpenses,
            'warningThreshold' => $warningThreshold,
            'monthlyIncome' => $monthlyIncome,
        ]);
    }

    /**
     * 新規登録フォーム
     */
    public function create()
    {
        return view('expenses.create');

    }

    /**
     * フォームから送られたデータを保存
     */
    public function store(Request $request)
    {
        $validData = $request->validate([

            'data' => 'required|date',
            'item' => 'required|string|max:255',
            'amount' => 'required|integer',
        ]);

        Expense::created($validData);

        return redirect()-> route('expenses.index');
    }

    /**
     * 既存の出費データを編集
     */
    public function show(string $id)
    {
        //
    }

    /**
     * 既存の出費データを編集
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * 編集フォームから送られたデータを保存する
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * データの削除
     */
    public function destroy(string $id)
    {
        //
    }
}
