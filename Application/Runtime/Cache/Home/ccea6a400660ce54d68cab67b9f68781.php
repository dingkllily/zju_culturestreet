<?php if (!defined('THINK_PATH')) exit();?>﻿<html>
  <head lang="en">
      <meta charset="UTF-8">
      <title>欢迎访问浙江大学学生街在线平台</title>
      <script type="text/javascript">
          function checkForm() {
              if (document.myForm.username.value == "") {
                  alert('请输入用户名');
                  document.myForm.username.focus();
                  return false;
              }
              if (document.myForm.password.value == "") {
                  alert('请输入密码');
                  document.myForm.password.focus();
                  return false;
              }
          }
      </script>
      <style type="text/css">
          h1
          {
            background-color:#094871;
            color:#F5EEE8;
            font-size:35px;
          }
          body
          {
            background-color: #A8D9F9;
          }
          h2
          {
            font-size:20px;
          }
          div
          {
            color:red;
            font-size:15px;
          }
      </style>
  </head>

<body>
    <center>
        <h1>浙江大学学生街在线平台</h1>
    </center>
    <iframe name="sinaWeatherTool" src="http://weather.news.sina.com.cn/chajian/iframe/weatherStyle32.html?city=%E6%9D%AD%E5%B7%9E" width="166" height="152" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no"></iframe>
    <form action="/zju_culturestreet/index.php/Home/Index/check_login" target='_self' id="loginForm" method="post" name="myForm" onsubmit="return checkForm();">
        <center>
            <table width=" 400" border="1">
                <tr>
                    <td align="center"><h2>用户名</h2></td>
                    <td align="center"><input type="text" class="inputtext" placeholder="请输入用户名" name="username" id="username" tabindex="1"></td>
                </tr>
                <tr>
                    <td align="center"><h2>密码</h2></td>
                    <td align="center"><input type="password" class="inputtext" placeholder="请输入密码" name="password" id="password" tabindex="2"></td>
                </tr>
            </table>
            <br />
            <br />
            <button tabindex="4" type="submit" id="login_button" style="width:80px">登录</button>
        </center>
    </form>
    <center>
    <a href="register.html" id="register">点我注册</a>
    <br />
    <br />
    <br />
        <div>tips:</div>
        <div>1.需要借用工作室的人员必须为在校学生或老师，请直接使用浙大通行证登录。</div>
        <div>2.审核员、保洁员账号请点击注册提交申请，待后台审核通过后可以进行登录。</div>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    </center>
    <center><p><a target="_blank" href="http://workroom.knowway.cn">友情链接：浙江大学微讯社 </a></p></center>
</body>
</html>