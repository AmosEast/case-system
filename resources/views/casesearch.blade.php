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
                                <ul class="nav nav-list">
                                    <li>
                                        <a href="#select-mode" class="nav-header" data-toggle="collapse" style="font-size: 1.3em; padding-left: 0;">模式选择<span class="glyphicon glyphicon-collapse-down"></span></a>
                                        <ul id="select-mode" class="nav nav-list collapse">
                                            <div class="raw">
                                                <div class="form-group">
                                                    <div>
                                                        <label for="case_mode">请选择模式</label>
                                                        <select name="case_mode" id="case_mode" class="form-control">
                                                            <option value="1">模式一</option>
                                                            <option value="2">模式二</option>
                                                            <option value="3">模式三</option>
                                                            <option value="4">模式四</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#case-attribute" class="nav-header" data-toggle="collapse" style="font-size: 1.3em; padding-left: 0;">属性输入<span class="glyphicon glyphicon-collapse-down"></span></a>
                                        <ul id="case-attribute" class="nav nav-list collapse">
                                            <!--生产要素-->
                                            <div class="raw">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>生产要素</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <label for="special_industry">特色产业</label>
                                                        <input type="text" class="form-control" id="special_industry" name="special_industry">
                                                    </div>
                                                    <span>&nbsp;&nbsp;</span>
                                                    <div class="form-group">
                                                        <label for="local_people">常住人口</label>
                                                        <input type="text" class="form-control" id="local_people" name="local_people">
                                                    </div>
                                                    <span>&nbsp;&nbsp;</span>
                                                    <div class="form-group">
                                                        <label for="location">区位</label>
                                                        <input type="text" class="form-control" id="location" name="location">
                                                    </div>
                                                    <span>&nbsp;&nbsp;</span>
                                                    <div class="form-group">
                                                        <label for="area">面积</label>
                                                        <input type="text" class="form-control" id="area" name="area">
                                                    </div>
                                                    <span>&nbsp;&nbsp;</span>
                                                    <div class="form-group">
                                                        <label for="infrastructure">基础设施</label>
                                                        <input type="text" class="form-control" id="infrastructure" name="infrastructure">
                                                    </div>
                                                    <span>&nbsp;&nbsp;</span>
                                                    <div class="form-group">
                                                        <label for="temperature">温度</label>
                                                        <input type="text" class="form-control" id="temperature" name="temperature">
                                                    </div>
                                                    <span>&nbsp;&nbsp;</span>
                                                    <div class="form-group">
                                                        <label for="air_quality">空气质量</label>
                                                        <input type="text" class="form-control" id="air_quality" name="air_quality">
                                                    </div>
                                                    <span>&nbsp;&nbsp;</span>
                                                    <div class="form-group">
                                                        <label for="landforms">地貌</label>
                                                        <input type="text" class="form-control" id="landforms" name="landforms">
                                                    </div>
                                                    <span>&nbsp;&nbsp;</span>
                                                    <div class="form-group">
                                                        <label for="precipitation">降水</label>
                                                        <input type="text" class="form-control" id="precipitation" name="precipitation">
                                                    </div>
                                                    <span>&nbsp;&nbsp;</span>
                                                    <div class="form-group">
                                                        <label for="local_sights">风景名胜</label>
                                                        <input type="text" class="form-control" id="local_sights" name="local_sights">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--市场需求-->
                                            <div class="raw">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>市场需求</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <label for="economy">经济规模</label>
                                                        <input type="text" class="form-control" id="economy" name="economy">
                                                    </div>
                                                    <span>&nbsp;&nbsp;</span>
                                                    <div class="form-group">
                                                        <label for="consumption_level">城乡居民人均消费支出</label>
                                                        <input type="text" class="form-control" id="consumption_level" name="consumption_level">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--支撑产业-->
                                            <div class="raw">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>支撑产业</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <label for="fir_industry_proportion">第一产业占比</label>
                                                        <input type="text" class="form-control" id="fir_industry_proportion" name="fir_industry_proportion">
                                                    </div>
                                                    <span>&nbsp;&nbsp;</span>
                                                    <div class="form-group">
                                                        <label for="sec_industry_proportion">第二产业占比</label>
                                                        <input type="text" class="form-control" id="sec_industry_proportion" name="sec_industry_proportion">
                                                    </div>
                                                    <span>&nbsp;&nbsp;</span>
                                                    <div class="form-group">
                                                        <label for="thr_industry_proportion">第三产业占比</label>
                                                        <input type="text" class="form-control" id="thr_industry_proportion" name="thr_industry_proportion">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="infrastructure_2">基础设施</label>
                                                        <input type="text" class="form-control" id="infrastructure_2" name="infrastructure_2">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--企业发展-->
                                            <div class="raw">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>企业发展</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <label for="big_enterprise_density">规模以上企业密度</label>
                                                        <input type="text" class="form-control" id="big_enterprise_density" name="big_enterprise_density">
                                                    </div>
                                                    <span>&nbsp;&nbsp;</span>
                                                    <div class="form-group">
                                                        <label for="enterprise_density">企业密度</label>
                                                        <input type="text" class="form-control" id="enterprise_density" name="enterprise_density">
                                                    </div>
                                                    <span>&nbsp;&nbsp;</span>
                                                    <div class="form-group">
                                                        <label for="education_service">科教文化相关服务</label>
                                                        <input type="text" class="form-control" id="education_service" name="education_service">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--机遇-->
                                            <div class="raw">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>机遇</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <label for="municipal_government_distance">距市政府距离</label>
                                                        <input type="text" class="form-control" id="municipal_government_distance" name="municipal_government_distance">
                                                    </div>
                                                    <span>&nbsp;&nbsp;</span>
                                                    <div class="form-group">
                                                        <label for="town_government_distance">距镇政府距离</label>
                                                        <input type="text" class="form-control" id="town_government_distance" name="town_government_distance">
                                                    </div>
                                                    <span>&nbsp;&nbsp;</span>
                                                    <div class="form-group">
                                                        <label for="average_education_age">人均受教育年龄</label>
                                                        <input type="text" class="form-control" id="average_education_age" name="average_education_age">
                                                    </div>
                                                    <span>&nbsp;&nbsp;</span>
                                                    <div class="form-group">
                                                        <label for="information_dissemination">信息传播</label>
                                                        <input type="text" class="form-control" id="information_dissemination" name="information_dissemination">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--政府-->
                                            <div class="raw">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>政府</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <label for="committees_density">乡镇村委会密度</label>
                                                        <input type="text" class="form-control" id="committees_density" name="committees_density">
                                                    </div>
                                                    <span>&nbsp;&nbsp;</span>
                                                    <div class="form-group">
                                                        <label for="policies_number">相关政策数</label>
                                                        <input type="text" class="form-control" id="policies_number" name="policies_number">
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#case-weight" class="nav-header" data-toggle="collapse" style="font-size: 1.3em; padding-left: 0;">权重输入<span class="glyphicon glyphicon-collapse-down"></span></a>
                                        <ul id="case-weight" class="nav nav-list collapse">
                                            <!--生产要素-->
                                            <div class="form-group "style="border: 1px solid #ccc;padding: 10px  15px;border-radius: 5px;margin-bottom:20px;">
                                                <div class="col-md-12">
                                                    <div class="form-group col-md-12">
                                                        <label for="production_factors_weight">生产要素</label>
                                                        <input type="text" class="form-control" id="production_factors_weight" name="production_factors_weight">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 " style="padding: 10px 40px">
                                                    <div class="form-group col-md-4" style="margin: 8px 0">
                                                        <label for="special_industry_weight" style="width:60px">特色产业</label>
                                                        <input type="text" class="form-control" id="special_industry_weight" name="special_industry_weight">
                                                    </div>
                                                    <div class="form-group col-md-4" style="margin: 8px 0">
                                                        <label for="local_people_weight" style="width:60px">常住人口</label>
                                                        <input type="text" class="form-control" id="local_people_weight" name="local_people_weight">
                                                    </div>
                                                    <div class="form-group col-md-4" style="margin: 8px 0">
                                                        <label for="location_weight" style="width:60px">区位</label>
                                                        <input type="text" class="form-control" id="location_weight" name="location_weight">
                                                    </div>
                                                    <div class="form-group col-md-4" style="margin: 8px 0">
                                                        <label for="area_weight" style="width:60px">面积</label>
                                                        <input type="text" class="form-control" id="area_weight" name="area_weight">
                                                    </div>
                                                    <div class="form-group col-md-4" style="margin: 8px 0">
                                                        <label for="infrastructure_weight" style="width:60px">基础设施</label>
                                                        <input type="text" class="form-control" id="infrastructure_weight" name="infrastructure_weight">
                                                    </div>
                                                    <div class="form-group col-md-4" style="margin: 8px 0">
                                                        <label for="temperature" style="width:60px">温度</label>
                                                        <input type="text" class="form-control" id="temperature_weight" name="temperature_weight">
                                                    </div>
                                                    <div class="form-group col-md-4" style="margin: 8px 0">
                                                        <label for="air_quality_weight" style="width:60px">空气质量</label>
                                                        <input type="text" class="form-control" id="air_quality_weight" name="air_quality_weight">
                                                    </div>
                                                    <div class="form-group col-md-4" style="margin: 8px 0">
                                                        <label for="landforms_weight" style="width:60px">地貌</label>
                                                        <input type="text" class="form-control" id="landforms_weight" name="landforms_weight">
                                                    </div>
                                                    <div class="form-group col-md-4" style="margin: 8px 0">
                                                        <label for="precipitation_weight" style="width:60px">降水</label>
                                                        <input type="text" class="form-control" id="precipitation_weight" name="precipitation_weight">
                                                    </div>
                                                    <div class="form-group col-md-4" style="margin: 8px 0">
                                                        <label for="local_sights_weight" style="width:60px">风景名胜</label>
                                                        <input type="text" class="form-control" id="local_sights_weight" name="local_sights_weight">
                                                    </div>
                                                </div>
                                            </div>
                                            <br/>
                                            <!--市场需求-->
                                            <div class="form-group" style="border: 1px solid #ccc;padding: 10px  15px;border-radius: 5px;margin-bottom:20px;">
                                                <div class="col-md-12">
                                                    <div class="form-group col-md-12">
                                                        <label for="market_demand_weight">市场需求</label>
                                                        <input type="text" class="form-control" id="market_demand_weight" name="market_demand_weight">

                                                    </div>
                                                </div>
                                                <div class="col-md-12" style="padding: 10px 40px">
                                                    <div class="form-group col-md-5" style="margin: 8px 0">
                                                        <label for="economy_weight" >经济规模</label>
                                                        <input type="text" class="form-control" id="econom_weighty" name="economy_weight">
                                                    </div>
                                                    <div class="form-group col-md-5" style="margin: 8px 0">
                                                        <label for="consumption_level_weight">城乡居民人均消费支出</label>
                                                        <input type="text" class="form-control" id="consumption_level_weight" name="consumption_level_weight">
                                                    </div>
                                                </div>
                                            </div>
                                            <br/>
                                            <!--支撑产业-->
                                            <div class="form-group" style="border: 1px solid #ccc;padding: 10px  15px;border-radius: 5px;margin-bottom:20px;">
                                                <div class="col-md-12" >
                                                    <div class="form-group col-md-12">
                                                        <label for="supporting_industry_weight">支撑产业</label>
                                                        <input type="text" class="form-control" id="supporting_industry_weight" name="supporting_industry_weight">
                                                    </div>
                                                </div>
                                                <div class="col-md-12" style="padding: 10px 40px">
                                                    <div class="form-group col-md-5" style="margin: 8px 0">
                                                        <label for="fir_industry_proportion_weight">第一产业占比</label>
                                                        <input type="text" class="form-control" id="fir_industry_proportion_weight" name="fir_industry_proportion_weight">
                                                    </div>
                                                    <div class="form-group col-md-5"  style="margin: 8px 0">
                                                        <label for="sec_industry_proportion_weight">第二产业占比</label>
                                                        <input type="text" class="form-control" id="sec_industry_proportion_weight" name="sec_industry_proportion_weight">
                                                    </div>
                                                    <div class="form-group col-md-5" style="margin: 8px 0">
                                                        <label for="thr_industry_proportion_weight">第三产业占比</label>
                                                        <input type="text" class="form-control" id="thr_industry_proportion_weight" name="thr_industry_proportion_weight">
                                                    </div>
                                                    <div class="form-group col-md-5" style="margin: 8px 0">
                                                        <label for="infrastructure_2_weight">基础设施</label>
                                                        <input type="text" class="form-control" id="infrastructure_2_weight" name="infrastructure_2_weight">
                                                    </div>
                                                </div>
                                            </div>
                                            <br/>
                                            <!--企业发展-->
                                            <div class="form-group" style="border: 1px solid #ccc;padding: 10px  15px;border-radius: 5px;margin-bottom:20px;">
                                                <div class="col-md-12">
                                                    <div class="form-group col-md-12">
                                                        <label for="enterprise_development_weight">企业发展</label>
                                                        <input type="text" class="form-control" id="enterprise_development_weight" name="enterprise_development_weight">
                                                    </div>
                                                </div>
                                                <div class="col-md-12" style="padding: 10px 40px">
                                                    <div class="form-group col-md-5" style="margin: 8px 0">
                                                        <label for="big_enterprise_density_weight" >规模以上企业密度</label>
                                                        <input type="text" class="form-control" id="big_enterprise_density_weight" name="big_enterprise_density_weight">
                                                    </div>
                                                    <div class="form-group col-md-5" style="margin: 8px 0">
                                                        <label for="enterprise_density_weight" >企业密度</label>
                                                        <input type="text" class="form-control" id="enterprise_density_weight" name="enterprise_density_weight">
                                                    </div>
                                                    <div class="form-group col-md-5" style="margin: 8px 0">
                                                        <label for="education_service_weight" >科教文化相关服务</label>
                                                        <input type="text" class="form-control" id="education_service_weight" name="education_service_weight">
                                                    </div>
                                                </div>
                                            </div>
                                            <br/>
                                            <!--机遇-->
                                            <div class="form-group" style="border: 1px solid #ccc;padding: 10px  15px;border-radius: 5px;margin-bottom:20px;">
                                                <div class="col-md-12">
                                                    <div class="form-group col-md-12">
                                                        <label for="chance_weight">机遇</label>
                                                        <input type="text" class="form-control" id="chance_weight" name="chance_weight">
                                                    </div>
                                                </div>
                                                <div class="col-md-12" style="padding: 10px 40px">
                                                    <div class="form-group col-md-5" style="margin: 8px 0">
                                                        <label for="municipal_government_distance_weight">距市政府距离</label>
                                                        <input type="text" class="form-control" id="municipal_government_distance_weight" name="municipal_government_distance_weight">
                                                    </div>
                                                    <div class="form-group col-md-5" style="margin: 8px 0">
                                                        <label for="town_government_distance_weight">距镇政府距离</label>
                                                        <input type="text" class="form-control" id="town_government_distance_weight" name="town_government_distance_weight">
                                                    </div>
                                                    <div class="form-group col-md-5" style="margin: 8px 0">
                                                        <label for="average_education_age_weight">人均受教育年龄</label>
                                                        <input type="text" class="form-control" id="average_education_age_weight" name="average_education_age_weight">
                                                    </div>
                                                    <div class="form-group col-md-5" style="margin: 8px 0">
                                                        <label for="information_dissemination_weight">信息传播</label>
                                                        <input type="text" class="form-control" id="information_dissemination_weight" name="information_dissemination_weight">
                                                    </div>
                                                </div>
                                            </div>
                                            <br/>
                                            <!--政府-->
                                            <div class="form-group " style="border: 1px solid #ccc;padding: 10px  15px;border-radius: 5px;margin-bottom:20px;">
                                                <div class="col-md-12">
                                                    <div class="form-group col-md-12">
                                                        <label for="government_weight">政府</label>
                                                        <input type="text" class="form-control" id="government_weight" name="government_weight">
                                                    </div>
                                                </div>
                                                <div class="col-md-12" style="padding: 10px 40px">
                                                    <div class="form-group  col-md-5" style="margin: 8px 0">
                                                        <label for="committees_density_weight">乡镇村委会密度</label>
                                                        <input type="text" class="form-control" id="committees_density_weight" name="committees_density_weight">
                                                    </div>
                                                    <div class="form-group  col-md-5" style="margin: 8px 0">
                                                        <label for="policies_number_weight">相关政策数</label>
                                                        <input type="text" class="form-control" id="policies_number_weight" name="policies_number_weight">
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                </ul>
                                <button type="submit" class="btn btn-primary">&nbsp;搜&nbsp;索&nbsp;</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="panel-body table-responsive">
                    <table id="list-case-table" class="table table-striped table-hover">
                        <tr>
                            <th>编号</th><th>案例名称</th><th>涉及产业</th><th>相关主体</th><th>主要模式</th><th>相似度</th><th>操作</th>
                        </tr>
                        <tr>
                            <td>1</td><td>测试</td><td>测试</td><td>测试</td><td>1111</td><td>100%</td>
                            <td>
                                <input class="btn btn-primary" type="button" value="案例查看">
                                <input class="btn btn-success" type="button" value="相似度查看">
                                <input class="btn btn-info" type="button" value="采纳">
                                <input class="btn btn-warning" type="button" value="输出">
                            </td>
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
