<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/home', function () {
    return view('home');
});

Route::get('/main', function () {
    return view('main');
})->name('main.index');

Route::get('/caselist', function () {
    return view('caselist') ->with([
        'caseList' =>[
            [
                'id' =>'29',
                'name' =>'蟒川镇',
                'location' =>'河南',
                'alias' =>'产业融合发展示范园、全国特色小镇',
                'intra' =>'蟒川镇位于汝州市区南15公里，地处汝州、宝丰、鲁山三县（市）交界。下辖34个行政村，212个自然村，289个村民组，58554人（2017），面积145.9平方千米。相传在远古时期此地有大蟒出没，蟒川因此而得名。1958年建蟒川公社，1984年改乡。2009年6月撤乡建镇。',
            ],
            [
                'id' =>'63',
                'name' =>'项店镇',
                'location' =>'河南',
                'alias' =>'农业产业强镇',
                'intra' =>'项店镇位于河南省信阳市息县东偏北5—23公里处，被称为豫南明珠。全镇总面积118.46平方千米（2017年），可耕地面积89775亩（其中旱地41625亩，水田47150亩）。全镇辖18个行政村，324个村民组，48382人（2017年），其中镇区人口4180人。',
            ],
            [
                'id' =>'73',
                'name' =>'砖店镇',
                'location' =>'河南',
                'alias' =>'农业产业强镇',
                'intra' =>'砖店街道办处位于河南省新蔡县西部，北靠淮河支流洪河故道，省道驻新公路、大广高速公路横贯全境，分别有砖陈、砖李、砖余、砖三等镇、村柏油路与周边5个乡镇相连，交通十分便利，是新蔡西部的交通枢纽和人流、物流、商流、信息流的中心，东距新蔡19公里，西距平舆23公里，西南距正阳58公里，南距息县66公里。全镇共有48443亩耕地。镇党委下辖20个基层党支部，党员699名，其中农村党支部10个，农民党员476名。砖店镇历史悠久，魏冢为新石器文化遗址，且景色秀丽。著名的“戚桥疏柳”、“九沟渔唱”为新蔡古县志中记载的“八景”中的二景。',
            ],
        ]
    ]);
})->name('caselist.index');

Route::get('/casesearch', function () {
    return view('casesearch') ->with([
        'caseList' =>[
            [
                'id' =>'47',
                'name' =>'唐山镇',
                'related_industry' =>'小麦，玉米',
                'related_subject' =>'农户、合作社、企业',
                'mode' =>'产业链延伸型、企业带动型',
                'similarity' =>'0.92'
            ],
            [
                'id' =>'34',
                'name' =>'南河种镇',
                'related_industry' =>'玉米、蔬菜、药材',
                'related_subject' =>'农户、合作社',
                'mode' =>'产业链延伸型',
                'similarity' =>'0.87'
            ],
            [
                'id' =>'23',
                'name' =>'姜屯镇',
                'related_industry' =>'小麦、玉米、马铃薯、大葱',
                'related_subject' =>'农户、合作社',
                'mode' =>'产业链延伸型、功能拓展型',
                'similarity' =>'0.85'
            ],
            [
                'id' =>'9',
                'name' =>'店子镇',
                'related_industry' =>'红枣、花生',
                'related_subject' =>'农户、企业',
                'mode' =>'产业链延伸型、产业功能拓展型、电商引领型',
                'similarity' =>'0.82'
            ],
        ]
    ]);
})->name('casesearch.index');


Route::get('/caseinfo/{caseId}', function () {
    return view('caseinfo') ->with([
        'error' =>0,
        'msg' =>'success',
        'caseinfo' =>[
            'township_problem' =>'1、农业与二三产业融合度低，结合程度不紧密，农业附加值低；2、利益联结松散，合作方式简单，多采用订单式农业，股份制比例不高；3、劳动力素质有待提高，劳动力素质不高，抑制了要素融合；',
            'related_industry' =>'以小麦为核心，带动种子、农药、肥料、农产品加工、销售等行业的发展',
            'mode' =>'产业链延伸型',
            'develop_plan' =>'1、成立淄博博信农业科技公司，组织1.5万吨优质小麦加工、仓储。包括3万亩小麦良种繁育、1.5万吨小麦良种加工，粮食烘干仓及育种研发。形成了育种、订单收购、种子加工、仓储物流完整的产业链；2、成立种业研究院为农户提供产前、产中、产后综合服务；3、成立恒台润农粮食种植专业合作社，为种植大户以及新型农业经营提供全方位的服务，以订单种植模式，为其提供小麦、玉米良种、农资、粮食回收、种植管理指导等全套服务。',
            'related_subject' =>'农户、合作社、企业',
            'develop_result' =>'<无>',
            'future_plan' =>'1、以美丽乡村建设为契机，推动基础建设，积极推动农业电商的发展；2、积极推动镇内田园综合开发项目，重点提升水利配套设施，发展旅游农业、生态农业；3、引导企业、合作社、农户联合出资办企业、鼓励农民以个体身份入股，参加企业经营，采用“保底收益，按股分红”的方式实现产业链延伸的同时，确保农户享受更多的产业收益。',
        ]
    ]);
})->name('caseinfo.index');

require __DIR__.'/auth.php';
