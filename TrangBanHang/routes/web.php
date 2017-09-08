<?php


Route::get('trangchu',function (){
    return view('pages.TrangChu');
});

Route::get('index',[
    'as'=>'trang-chu',
    'uses'=>'MyController@getIndex'
]);

Route::get('chitiet_loaisp',[
    'as'=>'chitiet_loaisp',
    'uses'=>'MyController@listLoaiSp'
]);


Route::get('product', 'ProductControler@getList');

