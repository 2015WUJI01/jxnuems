<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>注册||导航</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/jquery.steps.css">
        <script src="js/modernizr-2.6.2.min.js"></script>
        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/jquery.cookie-1.3.1.js"></script>
        <script src="js/jquery.steps.js"></script>
        <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
        <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/localization/messages_zh.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <header>
            <h1>注册向导</h1>
        </header>

        <form id="content" action="#">
           <!--  <h1>Basic Demo</h1> -->

            <script>
                $(function ()
                {
                    $("#wizard").steps({
                        headerTag: "h2",
                        bodyTag: "section",
                        transitionEffect: "slideLeft",
                        stepsOrientation: "vertical"
                    });
                });
                var form = $("#content");
                    form.validate({
                        errorPlacement: function errorPlacement(error, element) { element.before(error); },
                        rules: { confirm: {equalTo: "#password"}}
                    });
                $("#wizard").steps({
                       
                        onStepChanging: function (event, currentIndex, newIndex)
                        {
                            form.validate().settings.ignore = ":disabled,:hidden";
                            return form.valid();
                        },
                        onFinishing: function (event, currentIndex)
                        {
                            form.validate().settings.ignore = ":disabled";
                            return form.valid();
                        },
                        onFinished: function (event, currentIndex)
                        {
                            alert("Submitted!");
                        }
                    });
            </script>

            <div id="wizard">
                <h2>注册</h2>
                <section>
                    <label for="email">Email *</label>
                    <input id="email" name="email" type="text" class="required email">
                    <label for="password">Password *</label>
                    <input id="password" name="Password" type="text" class="required">
                    <label for="confirm">Confirm Password *</label>
                    <input id="confirm" name="confirm" type="text" class="required">
                </section>

                <h2>选择身份</h2>
                <section>
                        <label>身份
                            <label>
                                <input type="radio" name="user_type" value="student" checked>学生     
                            </label>
                            <label>
                                <input type="radio" name="user_type" value="teacher">教师
                            </label>
                            <label>
                                <input type="radio" name="user_type" value="unit">单位    
                            </label>
                        </label>
                    <br>
                        <label><input type="text" name="name">姓名/单位全名
                        </label>
                        <br>
                </section>

                <h2>绑定教务在线</h2>
                <section>
                       <label>学号/工号<input type="text" name="number"></label>
                    <br>
                       <label>教务在线密码<input type="password" name="jwc_password"></label>
                </section>

                <h2>同意注册条款</h2>
                <section>
                    <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required">
                    <label for="acceptTerms">我同意以上注册条例.</label>
                </section>
            </div>
        </form>
    </body>
</html>