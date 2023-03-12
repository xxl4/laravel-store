    <div class="col-md-12">
        <div class="box-body">
            <form name="prod_prop_select" action="/admin/products/prod_edit/<?php echo $id;?>" method="post" >
                <div id="has-many-properties" class="has-many-properties">
                    <div class="has-many-properties-forms">
                        <div class="has-many-properties-form fields-group">
                        <?php foreach($categoryMoreProp as $key=>$prop) { ?>
                            <div class="form-group">
                                <label for="prop_id" class="col-sm-2 control-label"><?php echo $prop['name'];?>：</label>
                                <div class="col-sm-4">
                                    <input type="hidden" name="prop_id[]" value="<?php echo $key;?>" />
                                    <?php if($prop['rule']['type']=='text') { ?>
                                    <input type="text" class="form-control properties value" value="<?php if(isset($ProdProperty[$key])) echo $ProdProperty[$key];?>" name="value[<?php echo $key;?>]" placeholder="请输入 <?php echo $prop['name'];?>" <?php if($prop['rule']['required']==1) echo 'required="required"'; ?> />
                                    <?php }else { ?>
                                        <select name="value[<?php echo $key;?>]" class="form-control properties value">
                                            <option>---请选择---</option>
                                            <?php foreach($prop['prop_value'] as $kk => $val) {?>
                                            <option value="<?php echo $kk;?>" <?php if(isset($ProdProperty[$key]) && $ProdProperty[$key]==$kk) echo "selected";?> ><?php echo $val;?></option>
                                            <?php } ?>
                                        </select>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <input type="hidden" name="_token" value="KXh1JArnTpNGRgzYRdXaBPVXCqcLX8g8KLukFP6q">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">

                        <div class="btn-group pull-right">
                        <button type="submit" class="btn btn-primary">提交</button>
                        </div>

                                      
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>