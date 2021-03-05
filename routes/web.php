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
        'error' =>false,
        'msg' =>'',
        'selectLists' =>[]
    ]);
})->name('casesearch.index');

require __DIR__.'/auth.php';
