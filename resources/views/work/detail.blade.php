@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>{{ $work->title }}</h4>
                    </div>
                    <table class="table table-bordered">
                        <tr class="work_row">
                            <td>掲載日時</td>
                            <td>{{ $work->created_at }}</td>
                        </tr>
                        <tr>
                            <td>報酬金額</td>
                            <td>¥{{ $work->reward }}</td>
                        </tr>
                        <tr>
                            <td>募集人数</td>
                            <td>{{ $work->necessary }}人</td>
                        </tr>
                    </table>
                    <div class="panel-body">
                        {!! $work->body !!}
                        <input type="button" name="submit" value="応募する">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
