<?php

/**
 * 券圈品设置
 * @author auto create
 */
class PromActSku
{
	
	/** 
	 * 商家逻辑分组序号
	 **/
	public $logic_group_number;
	
	/** 
	 * 参与者id
	 **/
	public $participate_id;
	
	/** 
	 * 参与者名称
	 **/
	public $participate_name;
	
	/** 
	 * 参与者类型 SKU_CODE(1, "商品skuCode"), SHOP(2, "店铺"), CATEGORY(3, "品类")
	 **/
	public $participate_type;	
}
?>