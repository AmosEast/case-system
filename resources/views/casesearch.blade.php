@extends('layouts.baseFrame')
@section('content')
    {{--当前案例列表 --}}
    <div id="list-casesearch-div" class="panel panel-success" style="width: 100%;">
        <div class="panel-heading">
            <h3>案例检索</h3>
        </div>
        <div class="panel-body table-responsive">
            <div class="panel">
                <div class="panel-body">
                    <div id="left-navbar" class="pull-left" style="width: 100%;">
                        <div id="left-navbar-main" class="sidebar-nav">
                            <form id="query-caselist-form" method="get" action="" class="form-inline">
                                @csrf
                                <ul class="nav nav-list collapse">
                                    <li>
                                        <a href="#select-mode" class="nav-header" data-toggle="collapse" style="font-size: 1.3em;">模式选择<span class="glyphicon glyphicon-collapse-down"></span></a>
                                        <ul id="select-mode" class="nav nav-list collapse" style="font-size: 1.1em;">
                                            <div class="form-group">
                                                <label for="case_mode">请选择模式</label>
                                                <select name="case_mode" id="case_mode" class="form-control">
                                                    <option value="1">模式一</option>
                                                    <option value="2">模式二</option>
                                                    <option value="3">模式三</option>
                                                    <option value="4">模式四</option>
                                                </select>
                                            </div>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#case-attribute" class="nav-header" data-toggle="collapse" style="font-size: 1.3em;">属性输入<span class="glyphicon glyphicon-collapse-down"></span></a>
                                        <ul id="case-attribute" class="nav nav-list collapse" style="font-size: 1.1em;">
                                            <div class="container">
                                                <div class="raw">
                                                    <div class="col-md-2">
                                                        <strong>生成要素</strong>
                                                    </div>
                                                    <div class="col-md-10">
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
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                </ul>
                                <button type="submit" class="btn btn-primary">&nbsp;搜&nbsp;索&nbsp;</button>
                                <a href="javascript:void(0);" class="btn btn-warning btn-sm" onclick="popIframeWithCloseFunc('添加案例', '', '675px', '535px', clickXFunc)">添加案例</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="panel-body table-responsive">
                    <table id="list-case-table" class="table table-striped table-hover">
                        <tr>
                            <th>#</th><th>任务名称</th><th>年级</th><th>学院名称</th><th>专业名称</th><th>课程名称</th><th>教材类书籍</th><th>教参类书籍</th><th>负责教师</th><th>审核状态</th>
                        </tr>
                        {{--                            @if(!empty($selectLists))--}}
                        {{--                                @foreach($selectLists as $selectList)--}}
                        {{--                                    <tr>--}}
                        {{--                                        <td>{{ $selectList ->id }}</td>--}}
                        {{--                                        <td>{{ $arrTasksInfo[$selectList ->task_id] ->name }}</td>--}}
                        {{--                                        <td>{{ $selectList ->grade }}</td>--}}
                        {{--                                        <td>{{ $arrAcademiesInfo[$selectList ->academy_id] ->name }}</td>--}}
                        {{--                                        <td>{{ $arrMajorsInfo[$selectList ->major_id] ->name }}</td>--}}
                        {{--                                        <td>{{ $arrCoursesInfo[$selectList ->course_id] ->name }}</td>--}}
                        {{--                                        <td >--}}
                        {{--                                            @if(!empty($selectList ->book_ids))--}}
                        {{--                                                @foreach($selectList ->book_ids as $bookId)--}}
                        {{--                                                    @if($arrBooksInfo[$bookId] ->type == \App\Models\Book::$bookForStudent)--}}
                        {{--                                                        <a href="javascript:void(0);" onclick="popIframe('书籍信息' ,'{{ route('booksmanage.getbookinfo', ['bookId' =>$bookId]) }}', '675px', '515px')">--}}
                        {{--                                                            {{$arrBooksInfo[$bookId] ->name}},--}}
                        {{--                                                        </a>--}}
                        {{--                                                    @endif--}}
                        {{--                                                @endforeach--}}
                        {{--                                            @endif--}}
                        {{--                                        </td>--}}
                        {{--                                        <td>--}}
                        {{--                                            @if(!empty($selectList ->book_ids))--}}
                        {{--                                                @foreach($selectList ->book_ids as $bookId)--}}
                        {{--                                                    @if($arrBooksInfo[$bookId] ->type == \App\Models\Book::$bookForTeacher)--}}
                        {{--                                                        <a href="javascript:void(0);" onclick="popIframe('书籍信息' ,'{{ route('booksmanage.getbookinfo', ['bookId' =>$bookId]) }}', '675px', '515px')">--}}
                        {{--                                                            {{$arrBooksInfo[$bookId] ->name}},--}}
                        {{--                                                        </a>--}}
                        {{--                                                    @endif--}}
                        {{--                                                @endforeach--}}
                        {{--                                            @endif--}}
                        {{--                                        </td>--}}
                        {{--                                        <td>{{ $arrUsersInfo[$selectList ->selector_id] ->name }}</td>--}}
                        {{--                                        <td>{{ $selectStatusMeaning[$selectList ->status] }}</td>--}}
                        {{--                                    </tr>--}}
                        {{--                                @endforeach--}}
                        {{--                            @endif--}}
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
