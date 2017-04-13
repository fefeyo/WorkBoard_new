@extends('layouts.app')
@section('content')
    <div class="container">
        {{-- フラッシュメッセージの表示 --}}
        @if (Session::has('flash_message'))
            <div class="alert alert-success">{{ Session::get('flash_message') }}<a href="#">確認する</a></div>
        @endif
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>企業マイページ</h4>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <tr>
                                <td class="col-md-3">名前</td>
                                <td class="col-md-9">{{ Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <td>今までに投稿した案件</td>
                                <td>5件</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
