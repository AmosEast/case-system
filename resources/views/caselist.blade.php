@extends('layouts.baseFrame')
@section('content')
    {{--当前案例列表 --}}
    <div id="list-caselist-div" class="panel panel-success" style="width: 100%;">
        <div class="panel-heading">
            <h3>案例列表</h3>
        </div>
        <div class="panel-body table-responsive">
            <div class="panel">
                <div class="panel-body">
                    <form id="query-caselist-form" method="get" action="" class="form-inline">
                        @csrf
                        <div class="form-group">
                            <label for="case_id">案例编号</label>
                            <input type="text" class="form-control" id="case_id" name="case_id" placeholder="案例编号">
                        </div>
                        <span>&nbsp;&nbsp;</span>
                        <div class="form-group">
                            <label for="case_name">案例名称</label>
                            <input type="text" class="form-control" id="case_name" name="case_name" placeholder="案例名称">
                        </div>
                        <span>&nbsp;&nbsp;</span>
                        <div class="form-group">
                            <label for="case_province">案例省份</label>
                            <input type="text" class="form-control" id="case_province" name="case_province" placeholder="案例省份">
                        </div>
                        <span>&nbsp;&nbsp;</span>
                        <div class="form-group">
                            <label for="case_mode">案例模式</label>
                            <input type="text" class="form-control" id="case_mode" name="case_mode" placeholder="案例模式">
                        </div>
                        <button type="submit" class="btn btn-primary">&nbsp;搜&nbsp;索&nbsp;</button>
                        <br/><br/>
                        <a href="javascript:void(0);" class="btn btn-info" onclick="popIframeWithCloseFunc('添加案例', '', '675px', '535px', clickXFunc)">添加案例</a>
                    </form>
                </div>
            </div>
            <div class="panel">
                <div class="panel-body table-responsive">
                    <table id="list-case-table" class="table table-striped table-hover">
                        <tr>
                            <th>案例编号</th><th>案例名称</th><th>案例地点</th><th>案例称号</th><th>简要信息</th><th>操作</th>
                        </tr>
                        @if(!empty($caseList))
                            @foreach($caseList as $caseItem)
                                <tr>
                                    <td>{{ $caseItem['id'] }}</td>
                                    <td>{{ $caseItem['name'] }}</td>
                                    <td>{{ $caseItem['location'] }}</td>
                                    <td>{{ $caseItem['alias'] }}</td>
                                    <td style="width: 35%;">{{ $caseItem['intra'] }}</td>
                                    <td>
                                        <input class="btn btn-warning" type="button" value="修改">
                                        <input class="btn btn-danger" type="button" value="删除">
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </table>
                </div>
                <div align="right">
                    {{-- $selectLists ->appends(['case_id' =>old('case_id'), 'case_name' =>old('case_name'), 'case_province' =>old('case_province'), 'case_mode' =>old('case_mode')]) ->links() --}}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js-text-part')
    <script type="text/javascript">
        function clickXFunc() {
            window.location.reload();
        }
    </script>
@endsection

