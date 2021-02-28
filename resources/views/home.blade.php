@extends('layouts.basePage')

@section('css-text-part')
    <style>
        #left-navbar-main a {
            border-bottom: 1px solid #9fcdff;
        }
    </style>
@endsection

@section('content')
    <!-- 侧边导航栏 -->
    <div id="left-navbar" class="pull-left" style="width: 20%; min-height: 600px; border-right: 3px solid #ffffff;">
        <div id="left-navbar-main" class="sidebar-nav">
            <ul class="nav nav-list collpse">
                <li>
                    <a href="#select-books" class="nav-header" data-toggle="collapse" style="font-size: 1.3em;"><span class="glyphicon glyphicon-pencil"></span> &nbsp;&nbsp;&nbsp;案例模块</a>
                    <ul id="select-books" class="nav nav-list collapse" style="font-size: 1.1em;">
                        <li><a href="javascript:void(0)" onclick="changeMainPage('{{ route('caselist.index') }}')"><span style="margin-left: 23%;">案例管理</span></a></li>
                    </ul>
                </li>
                <li>
                    <a href="#query-block" class="nav-header" data-toggle="collapse" style="font-size: 1.3em;"><span class="glyphicon glyphicon-search"></span> &nbsp;&nbsp;&nbsp;检索模块</a>
                    <ul id="query-block" class="nav nav-list collapse" style="font-size: 1.1em;">
                        <li><a href="javascript:void(0)"><span style="margin-left: 23%;">案例检索</span></a></li>
                    </ul>
                </li>
{{--                <li>--}}
{{--                    <a href="#system-manage" class="nav-header" data-toggle="collapse" style="font-size: 1.3em;"><span class="glyphicon glyphicon-cog"></span> &nbsp;&nbsp;&nbsp;系统管理</a>--}}
{{--                    <ul id="system-manage" class="nav nav-list collapse" style="font-size: 1.1em;">--}}
{{--                        <li><a href="javascript:void(0)" ><span style="margin-left: 23%;">流程管理</span></a></li>--}}
{{--                        <li><a href="javascript:void(0)" ><span style="margin-left: 23%;">角色管理</span></a></li>--}}
{{--                        <li><a href="javascript:void(0)" ><span style="margin-left: 23%;">权限管理</span></a></li>--}}
{{--                        <li><a href="javascript:void(0)" ><span style="margin-left: 23%;">用户管理</span></a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
            </ul>
        </div>
    </div>
    <!-- 右边主页面 -->
    <div id="right-main" class="pull-left" style="width:80%;">
        <iframe id="main-page-iframe" scrolling="yes" width="100%" height="100%" frameborder="0" src="{{ route('main.index') }}" style="min-height: 600px;">

        </iframe>
    </div>
    </div>
@endsection

@section('js-text-part')
    <script type="text/javascript">
        function changeMainPage(pageUrl) {
            if(pageUrl == "" || pageUrl == undefined || pageUrl == null) {
                window.alert('pageUrl不能为空');
            }
            else {
                $("#main-page-iframe").attr("src", pageUrl);
            }
        }
    </script>
@endsection
