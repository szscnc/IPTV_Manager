<script type="text/javascript">
function submitappset(){
$("#appsetform").submit();
}
function submitlocapi(){
$("#locapiform").submit();
}
</script>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>应用配置</h4>
				<button type="button" class="btn btn-sm btn-primary pull-right" onclick="document.appinfoform.submit()">保存</button>
            </div>
            <div class="card-body">
                <form method="post" name="appinfoform">
                    <div class="form-group">
                        <label>应用名</label>
                        <input class="form-control" type="text" name="app_appname" value="<?php echo $app_appname; ?>">
                    </div>
                    <div class="form-group">
                        <label>应用包名</label>
                        <input class="form-control" type="text" name="app_packagename" value="<?php echo $app_packagename; ?>">
                    </div>
                    <div class="form-group">
                        <label>签名密码</label>
                        <input class="form-control" type="text" name="app_sign" value="<?php echo $app_sign; ?>">
                    </div>
                    <div class="form-group">
                        <label>代理密码</label>
                        <input class="form-control" type="text" name="keyproxy" value="<?php echo $keyproxy; ?>">
                    </div>
                    <div class="form-group">
                        <label>Base64密钥</label>
                        <input class="form-control" type="text" name="app_b64key" value="<?php echo $app_b64key; ?>">
                    </div>
                    <div class="form-group">
                        <label>HTTP_UserAgent</label>
                        <input class="form-control" type="text" name="app_useragent" value="<?php echo $app_useragent; ?>">
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4>应用设置</h4>
				<button type="button" class="btn btn-sm btn-primary pull-right" onclick="document.appsetform.submit()">保存</button>
            </div>
            <div class="card-body">
                <form method="post" id="appsetform" name="appsetform">
                    <div class="form-inline">
                        <div class="form-group" style="margin-right: 15px;">
                            <label>解码模式：</label>
                            <select name="decodersel" onchange="submitappset()" class="btn btn-sm btn-default dropdown-toggle" style="width: 115px;">
                                <?php
                                switch ($decoder) {
                                    case '0':
                                        $decoderselected0 = "selected";
                                        break;
                                    case '1':
                                        $decoderselected1 = "selected";
                                        break;
                                    case '2':
                                        $decoderselected2 = "selected";
                                        break;
                                }
                                ?>
                                <option value='0' <?php echo $decoderselected0;?> >智能解码</option>
                                <option value='1' <?php echo $decoderselected1;?> >硬件解码</option>
                                <option value='2' <?php echo $decoderselected2;?> >软件解码</option>    
                            </select>
                        </div>
    
                        <div class="form-group" style="margin-right: 15px;">
                            <label>超时跳转时长：</label>
                            <select name="buffTimeOut" onchange="submitappset()" class="btn btn-sm btn-default dropdown-toggle" style="width: 95px;">
                                <?php
                                switch ($buffTimeOut) {
                                    case 5:
                                        $buffTimeOutselected5 = "selected";
                                        break;
                                    case 10:
                                        $buffTimeOutselected10 = "selected";
                                        break;
                                    case 15:
                                        $buffTimeOutselected15 = "selected";
                                        break;
                                    case 20:
                                        $buffTimeOutselected20 = "selected";
                                        break;
                                    case 25:
                                        $buffTimeOutselected25 = "selected";
                                        break;
                                    case 30:
                                        $buffTimeOutselected30 = "selected";
                                        break;
                                }
                                ?>
                                <option value='5' <?php echo $buffTimeOutselected5;?> >5 秒</option>
                                <option value='10' <?php echo $buffTimeOutselected10;?> >10 秒</option>
                                <option value='15' <?php echo $buffTimeOutselected15;?> >15 秒</option>
                                <option value='20' <?php echo $buffTimeOutselected20;?> >20 秒</option>
                                <option value='25' <?php echo $buffTimeOutselected25;?> >25 秒</option>
                                <option value='30' <?php echo $buffTimeOutselected30;?> >30 秒</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" style="margin-top: 15px;">
                        <label>允许同一个IP授权数量：</label>
                        <input style="width: 85px;height: 30px;display: inline;" class="form-control" type="text" name="sameip_user" size="2" value="<?php echo $max_sameip_user; ?>">
                    </div>
                    <div class="form-group">
                        <label>自动封禁最大抓包次数：</label>
                        <input style="width: 85px;height: 30px;display: inline;" class="form-control" type="text" name="vpntimes" size="2" value="<?php echo $vpntimes; ?>">
                    </div>
                    <div class="form-group">
                        <label>试用天数：</label>
                        <input class="form-control" style="width: 60px;height: 26.5px;display: inline;" type="text" name="trialdays" value="<?php echo $trialdays ?>" size="3">
                    </div>
                    <small class="help-block">提示：试用天数-999为永不到期。</small>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header"><h4>数据设置</h4></div>
            <div class="card-body">
                <form class="form-inline" method="post" id="ipchkform">
                    <div class="form-group">
                        <label>IP归属地数据库：</label>
                        <div class="input-group">
                            <div class="input-group-btn">
                                <select name="locapi" onchange="submitlocapi()" class="btn btn-sm btn-default dropdown-toggle" style="width: 115px;">
                                    <?php
                                    switch ($locapi) {
                                        case 1:
                                            $locapi1 = "selected";
                                            break;
                                        case 2:
                                            $locapi2 = "selected";
                                            break;
                                        case 3:
                                            $locapi3 = "selected";
                                            break;
                                    }
                                    ?>
                                    <option value='1' <?php echo $locapi1;?> >ZXINC</option>
                                    <option value='2' <?php echo $locapi2;?> >淘宝</option>
                                    <option value='3' <?php echo $locapi3;?> >太平洋</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
                <form method="post" style="margin-top: 15px;">
                    <div class="form-group">
                        <label class="btn-block">推送清除数据</label>
                        <button class="btn btn-primary" type="button">
                              次数：<span class="badge"><?php echo $setver; ?></span>
                        </button>
                        <button type="submit" name="submitsetver" class="btn btn-label btn-danger"><label><i class="mdi mdi-delete-empty"></i></label> 清空数据</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4>通用版升级设置</h4>
				<button type="button" class="btn btn-sm btn-primary pull-right" onclick="document.updateform.submit()">推送更新</button>
            </div>
            <div class="card-body">
                <form method="post" name="updateform">
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
                            <input type="checkbox" name="up_sets" <?php echo $set;?>>
                            <span></span>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="btn-block">更新内容</label>
                        <textarea class="form-control" rows="5" name="up_text" placeholder="请输入更新内容" ><?php echo $up_text;?></textarea>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4>盒子版升级设置</h4>
				<button type="button" class="btn btn-sm btn-primary pull-right" onclick="document.updateboxform.submit()">推送更新</button>
            </div>
            <div class="card-body">
                <form method="post" name="updateboxform">
                    <div class="form-group">
                        <label class="btn-block">升级地址</label>
                        <input class="form-control" type="text" size="80" name="boxurl" value="<?php echo $boxurl; ?>"/>
                    </div>
                    <div class="form-group">
                        <label class="btn-block">当前版本</label>
                        <input class="form-control" type="text" name="boxver" value="<?php echo $boxver; ?>"/>
                    </div>
                </form>
            </div>
        </div>
    
        <div class="card">
            <div class="card-header">
                <h4>提示设置</h4>
				<button type="button" class="btn btn-sm btn-primary pull-right" onclick="document.apptipform.submit()">保存</button>
            </div>
            <div class="card-body">
                <form method="post" name="apptipform">
                    <p>非法访问视频地址：<input class="form-control" type="text" name="deniedurl" value="<?php echo $deniedurl;?>"></p>
                    <p>节目失效视频地址：<input class="form-control" type="text" name="failureurl" value="<?php echo $failureurl;?>"></p>
                    <p>节目加载提示：<input class="form-control" type="text" name="tiploading" value="<?php echo $tiploading;?>"></p>
                    <p>授权到期提示：<input class="form-control" type="text" name="tipuserexpired" value="<?php echo $tipuserexpired;?>"></p>
                    <p>账号停用提示：<input class="form-control" type="text" name="tipuserforbidden" value="<?php echo $tipuserforbidden;?>"></p>
                    <p>未予授权提示：<input class="form-control" type="text" name="tipusernoreg" value="<?php echo $tipusernoreg;?>"></p>
                </form>
            </div>
        </div>
    </div>
</div>
