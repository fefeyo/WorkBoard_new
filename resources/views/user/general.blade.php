@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>一般マイページ</h4>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <tr>
                                <td class="col-md-3">名前</td>
                                <td class="col-md-9">{{ Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <td>今までに受けた案件の数</td>
                                <td>profileテーブル見ましょう</td>
                            </tr>
                            <tr>
                                <td>現在受けている案件</td>
                                <td>profileテーブル見ましょう</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
