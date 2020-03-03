<script type="text/javascript">
function submitForm(){
$("#appsetform").submit();
}
</script>
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header"><h4>APP设置</h4></div>
			<div class="card-body">
				<form class="form-inline"method="post" id="weaform" >
					<div class="form-group">
						<label>应用名</label>
						<input class="form-control" type="text" name="app_appname" value="<?php echo get_config('app_appname');?>" placeholder="应用名" >
					</div>
					<div class="form-group">
						<label>应用包名</label>
						<input class="form-control" type="text" name="app_packagename" value="<?php echo get_config('app_packagename');?>" placeholder="应用包名" >
					</div>
					<div class="form-group">
						<label>应用签名</label>
						<input class="form-control" type="text" name="app_sign" value="<?php echo get_config('app_sign');?>" placeholder="应用签名" >
					</div>
					<div class="form-group">
						<button class="btn btn-label btn-primary" type="submit" name="submitappinfo"><label><i class="mdi mdi-checkbox-marked-circle-outline"></i></label>确认提交</button>
					</div>
				</form>
			</div>
		</div>

		<div class="card">
			<div class="card-header"><h4>默认解码模式与超时跳转</h4></div>
			<div class="card-body">
				<form method="post" id="appsetform">
					<div class="form-group">
						<select name="decodersel" onchange="submitForm()" class="form-control btn btn-secondary dropdown-toggle">
							<?php
							switch ($decoder) {
								case '0':
									echo "<option value='0' selected=\"selected\">智能解码</option>";
									echo "<option value='1'>硬件解码</option>";
									echo "<option value='2'>软件解码</option>";
									break;
								case '1':
									echo "<option value='0'>智能解码</option>";
									echo "<option value='1' selected=\"selected\">硬件解码</option>";
									echo "<option value='2'>软件解码</option>";
									break;
								case '2':
									echo "<option value='0'>智能解码</option>";
									echo "<option value='1'>硬件解码</option>";
									echo "<option value='2' selected=\"selected\">软件解码</option>";
									break;
								default:
									echo "<option value='0' selected=\"selected\">硬件解码</option>";
									echo "<option value='1'>软件解码</option>";
									break;
							}
							?>				
						</select>
					</div>

					<div class="form-group">
						<select name="buffTimeOut" onchange="submitForm()" class="form-control btn btn-secondary dropdown-toggle">
							<?php
							$checkString5='';
							$checkString10='';
							$checkString15='';
							$checkString20='';
							$checkString25='';
							$checkString30='';
							switch ($buffTimeOut) {
								case 5:
									$checkString5="selected=\"selected\"";
									break;
								case 10:
									$checkString10="selected=\"selected\"";
									break;
								case 15:
									$checkString15="selected=\"selected\"";
									break;
								case 20:
									$checkString20="selected=\"selected\"";
									break;
								case 25:
									$checkString25="selected=\"selected\"";
									break;
								case 30:
									$checkString30="selected=\"selected\"";
									break;
								default:
									break;
							}
							echo "<option value='5' $checkString5 >5 秒</option>";
							echo "<option value='10' $checkString10 >10 秒</option>";
							echo "<option value='15' $checkString15 >15 秒</option>";
							echo "<option value='20' $checkString20 >20 秒</option>";
							echo "<option value='25' $checkString25 >25 秒</option>";
							echo "<option value='30' $checkString30 >30 秒</option>";
							?>
						</select>
					</div>

					<div class="form-group">
						<label>试用天数</label>
						<input class="form-control" type="text" name="trialdays" value="<?php echo $trialdays ?>" size="3">
						<small class="help-block">提示：-999为永不到期。</small>
					</div>
					<button class="btn btn-label btn-primary" type="submit" name="submittrialdays"><label><i class="mdi mdi-checkbox-marked-circle-outline"></i></label>修改</button>
				</form>
			</div>
		</div>

		<div class="card">
			<div class="card-body">
				<form method="post">
					<div class="form-group">
						<label class="btn-block">授权设置</label>
						<input class="btn btn-warning" type="submit" name="submitcloseauthor" value="<?php echo $closeauthor;?>">
						<input class="btn btn-warning" type="hidden" name="needauthor" value="<?php echo $needauthor;?>">
						<small class="help-block">提示：关闭后，APP进入无需授权。</small>
					</div>
					<div class="form-group">
						<label class="btn-block">推送清除数据</label>
						<button class="btn btn-primary" type="button">
							  次数 <span class="badge"><?php echo $setver; ?></span>
						</button>
						<button type="submit" name="submitsetver" class="btn btn-label btn-danger"><label><i class="mdi mdi-delete-empty"></i></label> 清空数据</button>
					</div>
				</form>
			</div>
		</div>

		<div class="card">
			<div class="card-body">
				<form method="post">
					<div class="form-group">
						<label class="btn-block">升级地址</label>
						<input class="form-control" type="text" size="80" name="appurl" value="<?php echo $appurl; ?>"/>
					</div>
					<div class="form-group">
						<label class="btn-block">当前版本</label>
						<input class="form-control" type="text" name="appver" value="<?php echo $appver; ?>"/>
					</div>
					<div class="form-group">
						<label class="btn-block">软件大小</label>
						<input class="form-control" type="text" name="up_size" value="<?php echo $up_size; ?>"/>
					</div>
					<div class="form-group">
						<?php
							if($up_sets==1){
								$set="checked";
							}else{
								$set="";
							}
						?>
						<label>强制更新</label>
						<label class="lyear-switch switch-primary">
							<input type="checkbox" name="up_sets" checked="<?php echo $set;?>">
							<span></span>
						</label>
					</div>
					<div class="form-group">
						<label class="btn-block">更新内容</label>
						<textarea class="form-control" rows="5" name="up_text" placeholder="请输入更新内容" ><?php echo $up_text;?></textarea>
					</div>
					<div class="form-group">
						<button class="btn btn-label btn-primary" type="submit" name="submit"><label><i class="mdi mdi-upload"></i></label>推送更新</button>
					</div>
				</form>
			</div>
		</div>
		<div class="card">
			<div class="card-body">
				<form method="post">
					<p>节目加载提示：<input class="form-control" type="text" name="tiploading" value="<?php echo $tiploading;?>"></p>
					<p>授权到期提示：<input class="form-control" type="text" name="tipuserexpired" value="<?php echo $tipuserexpired;?>"></p>
					<p>账号停用提示：<input class="form-control" type="text" name="tipuserforbidden" value="<?php echo $tipuserforbidden;?>"></p>
					<p>未予授权提示：<input class="form-control" type="text" name="tipusernoreg" value="<?php echo $tipusernoreg;?>"></p>
					<div class="form-group">
						<button class="btn btn-label btn-primary" type="submit" name="submittipset"><label><i class="mdi mdi-content-save-all"></i></label>保存</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>