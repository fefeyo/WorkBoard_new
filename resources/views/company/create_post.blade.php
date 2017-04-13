@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>案件を登録する</h4>
                    </div>
                    <div class="panel-body">
                        <form action="/commit-work" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title">タイトル</label>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="due">納期</label>
                                <input type="date" name="due" id="due" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="reward">報酬</label>
                                <input type="number" name="reward" id="reward" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="necessary">募集人数</label>
                                <input type="number" name="necessary" id="necessary" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="type">案件の種類</label>
                                <select type="text" name="type" id="type" class="form-control">
                                    <option value="1">Webサイト開発</option>
                                    <option value="2">Webサービス開発</option>
                                    <option value="3">Androidアプリ開発</option>
                                    <option value="4">iPhoneアプリ開発</option>
                                    <option value="5">その他</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="body">仕事の内容</label>
                                <textarea name="body" id="body" class="form-control" style="height: 300px"></textarea>
                            </div>
                            <input type="submit" value="投稿する" class="button fade-color">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
