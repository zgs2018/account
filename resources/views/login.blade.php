<!DOCTYPE html>
<html lang="ZH-cn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="kit2/lib/layui/css/layui.css">
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>
<div class="kit-login">
    <div class="kit-login-bg"></div>
    <div class="kit-login-wapper">
        <h2 class="kit-login-slogan text-success">我憧 <br> 您的未来</h2>
        <div class="kit-login-form">
            <h4 class="kit-login-title">登录</h4>
            <form class="layui-form">
                <div class="kit-login-row">
                    <div class="kit-login-col">
                        <i class="layui-icon">&#xe612;</i>
                        <span class="kit-login-input">
                            <input type="text" name="loginName" lay-verify="required" placeholder="用户名/邮箱/手机号" />
                        </span>
                    </div>
                    <div class="kit-login-col"></div>
                </div>
                <div class="kit-login-row">
                    <div class="kit-login-col">
                        <i class="layui-icon">&#xe64c;</i>
                        <span class="kit-login-input">
                            <input type="password" name="password" lay-verify="required" placeholder="密码" />
                        </span>
                    </div>
                    <div class="kit-login-col"></div>
                </div>
                <div class="kit-login-row">
                    <div class="kit-login-col">
                        <input type="checkbox" name="rememberMe" value="true" title="记住帐号" lay-skin="primary">
                    </div>
                </div>
                <div class="kit-login-row">
                    <button class="layui-btn kit-login-btn" lay-submit="submit" lay-filter="login_hash">登录</button>
                </div>
                <div class="kit-login-row" style="margin-bottom:0;">
                    <a href="javascript:;" style="color: rgb(153, 153, 153); text-decoration: none; font-size: 13px;" id="forgot">忘记密码</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="kit2/lib/polyfill.min.js"></script>
<script src="kit2/lib/layui/layui.js"></script>
<script>
    //'axios', 'lodash'
    layui.use(['layer', 'form'], function() {
        var form = layui.form,
            //axios = layui.axios,
            $ = layui.jquery;
        //_ = layui.lodash;

        $('#forgot').on('click', function() {
            layer.msg('请联系管理员.');
        });

        //监听提交
        form.on('submit(login_hash)', function(data) {
            var layIndex = layer.load(2, {
                shade: [0.1, '#393D49']
            });
            console.log(data.field);
            setTimeout(function() {
                location.href = '/';
            }, 2000);
            // axios.post('/api/account/checklogin', data.field)
            //   .then(function(response) {
            //     if (response.status === 500) {
            //       throw new Error(response.statusText);
            //     }
            //     return response.data;
            //   })
            //   .then(function(res) {
            //     setTimeout(function() {
            //       if (res.success) {
            //         var to = getParams(location.href);
            //         location.href = to !== null && to.ReturnUrl !== undefined ? unescape(to.ReturnUrl) : '/';
            //       } else {
            //         layer.msg(res.message);
            //         layer.close(layIndex);
            //       }
            //     }, 500);
            //   })
            //   .catch(function(err) {
            //     console.log(err);
            //     layer.close(layIndex);
            //   });
            return false;
        });
    });

    // function getParams(href) {
    //   var p = href.substr(href.indexOf('?') + 1);
    //   if (href === p) return null;
    //   var params = p.split('&');
    //   var data = {};
    //   _.forEach(params, function(item, index) {
    //     var kv = item.split('=');
    //     var key = kv[0];
    //     var value = kv[1];
    //     data[key] = value;
    //   });
    //   return data;
    // }
</script>
</body>

</html>