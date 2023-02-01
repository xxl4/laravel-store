<?php


namespace App\Exceptions\Exporter;


use Nicelizhi\Admin\Grid\Exporters\ExcelExporter;
use Maatwebsite\Excel\Concerns\WithMapping;

class EveryDayUploadExporter extends ExcelExporter implements WithMapping
{
    protected $fileName = "每天上新.xlsx";

    protected $columns = [
        'goods_id' => '商品ID',
        'goods.goods_name'=>'商品名称',
        'goods_more.age'=>'年龄',
        'goods.isbn'    => 'ISBN',
        'taobao.tid'    => '淘宝ID',
        'goods.goods_number'    => '商品库存'
    ];

    public function map($goods) : array {
        return [
            $goods->goods_id,
            data_get($goods, 'goods.goods_name'),
            data_get($goods, 'goods_more.age'),
            data_get($goods, 'goods.isbn'),
            data_get($goods, 'taobao.tid'),
            data_get($goods, 'goods.goods_number'),
        ];
    }
}
