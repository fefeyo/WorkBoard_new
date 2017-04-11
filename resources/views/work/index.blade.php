@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>現在投稿されている案件一覧</h4></div>

                    <div class="panel-body">
                        <table class="table table-hover table-inverse">
                            <thead>
                                <tr>
                                    <th>タイトル</th>
                                    <th>報酬金額</th>
                                    <th>募集人数</th>
                                    <th>納期</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($works as $work)
                                    <tr class="work_row" data-id="{{ $work->id }}">
                                        <td>{{ $work->title }}</td>
                                        <td>{{ $work->reward }}</td>
                                        <td>{{ $work->necessary }}</td>
                                        <td>{{ $work->due }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $works->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(function() {
            $('.work_row').on('click', function() {
                var id = $(this).data('id');
                var url = "/works/" + id;
                console.log(url);
                location.href = url;
            });
        });
    </script>
@endsection
