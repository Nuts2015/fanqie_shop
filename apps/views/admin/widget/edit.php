<?php echo template('admin/headers');?>
<form class="layui-form layui-card-body" method="post">
	<div class="layui-form-item">
		<label class="layui-form-label">上级分类</label>
		<div class="layui-input-block">
			<select name="data[pid]">
				<option value="0">顶级分类</option>
		        <?php foreach ($items as $value){?>
		        <option value="<?php echo $value['id'];?>" <?php echo $value['id']==$item['pid']?'selected':'';?> ><?php echo $value['name'];?></option>
		        <?php }?>
	        </select>
		</div>
	</div>
	<div class="layui-form-item">
		<label class="layui-form-label">分类名称</label>
		<div class="layui-input-block">
			<input type="text" name="data[name]" class="layui-input" value="<?php echo $item['name'];?>"  lay-verify='required'>
		</div>
	</div>
	<div>
		<input type="hidden" name="id" class="layui-input" value="<?php echo $item['id'];?>"  lay-verify='required'>
		<?php echo admin_btn($edit_url,'save','layui-btn-fluid',"lay-filter='sub' location='close_iframe_r'")?>
	</div>
</form>
<?php echo template('admin/script');?>
<?php echo template('admin/footers');?>