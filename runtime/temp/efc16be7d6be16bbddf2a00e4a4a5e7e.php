<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:54:"/www/wwwroot/finance/thinkphp/tpl/dispatch_jumpbak.tpl";i:1552301479;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>跳转提示</title>
    <style type="text/css">
        *{ padding: 0; margin: 0; }
        body{ background: #fff; font-family: "Microsoft Yahei","Helvetica Neue",Helvetica,Arial,sans-serif; color: #333; font-size: 16px; }
        .system-message{ padding: 24px 48px; }
        .system-message h1{ font-size: 100px; font-weight: normal; line-height: 120px; margin-bottom: 12px; }
        .system-message .jump{ padding-top: 10px; }
        .system-message .jump a{ color: #333; }
        .system-message .success,.system-message .error{ line-height: 1.8em; font-size: 36px; }
        .system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display: none; }
        .layui-layer-molv {font-size:2rem;}
    </style>
    <script src="/static/H-ui.admin/lib/jquery/1.9.1/jquery.js"></script>
    <script type="text/javascript" src="/static/H-ui.admin/lib/layer/2.4/layer.js"></script>
    <script type="text/javascript" src="/static/H-ui.admin/static/h-ui/js/H-ui.js"></script>
</head>
<body>
    <div class="system-message">
        <?php switch ($code) { case 1:?>

                <script>
                    layer.open({
                        title: '在线调试'
                        ,content: "<p style='font-size:2rem;line-height:35px;'>您的信息已经成功提交，稍后会联系您</p>"
                    });
                </script>

            <?php break;case 0:?>
                    <script>
                        layer.open({
                            title: '在线调试'
                            ,content: "<p style='font-size:2rem;line-height:35px;'>因为其他原因，没有提交成功，请重新提交</p>"
                        });

                    </script>
            <?php break;} ?>
        <div style="display: none;">
            <p class="detail"></p>
            <p class="jump">
                页面自动 <a id="href" href="<?php echo($url);?>">跳转</a> 等待时间： <b id="wait"><?php echo($wait);?></b>
            </p>
        </div>

    </div>
    <script type="text/javascript">
        (function(){
            var wait = document.getElementById('wait'),
                href = document.getElementById('href').href;
            var interval = setInterval(function(){
                var time = --wait.innerHTML;
                if(time <= 0) {
                    location.href = href;
                    clearInterval(interval);
                };
            }, 1000);
        })();
    </script>
</body>
</html>
