@extends('layouts.baseFrame')
@section('content')
    @if($error == 1)
        <div id="error-msg-div" class="panel panel-danger" style="width: 100%;">
            <div class="panel-heading">
                <h3> 错误提示</h3>
            </div>
            <div class="panel-body" style="text-align: center;">
                <h4>{{ $msg }}</h4>
            </div>
        </div>
    @else
        <div id="book-div" class="panel panel-primary" style="width: 100%;">
            <div class="panel-heading">
                <h3>案例信息</h3>
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <tr>
                        <th>乡镇问题</th><td>{{ $case['township_problem'] }}</td>
                    </tr>
                    <tr>
                        <th>相关产业</th><td>{{ $case['related_industry'] }}</td>
                    </tr>
                    <tr>
                        <th>发展模式</th><td>{{ $case['mode'] }}</td>
                    </tr>
                    <tr>
                        <th>发展方案</th><td>{{ $case['develop_plan'] }}</td>
                    </tr>
                    <tr>
                        <th>参与主体</th><td>{{ $case['related_subject'] }}</td>
                    </tr>
                    <tr>
                        <th>发展成效</th><td>{{ $case['develop_result'] }}</td>
                    </tr>
                    <tr>
                        <th>未来计划</th><td>{{ $case['future_plan'] }}</td>
                    </tr>
                </table>
            </div>
        </div>
    @endif
@endsection

@section('js-text-part')
@endsection
