<html>
    <script>
        window.onload = function()
        {
            setinterval(clockPainting,1000);
        }
    </script>
    <head>
        <meta charset="utf-8">
        <title> Сайт web-студії "Web-DECO"</title>
        <script src="js/clock1.js"></script>
        <script type="text/javascript">
            function send()
            {
                var valid = true;
                var elems = document.forms[0].elemenst;
                for(var i=0; i<document.forms[0].length; i++)
                {
                    if(elems[i].getAttribite('type') == 'text'||
                    elems[i].getAttribite('type') == 'password'||
                    elems[i].getAttribite('type') == 'email')
                    {
                        if(elems[i].value == '')
                        {
                            elems[i].style.border = '2px solid red';
                            valid = false;
                        }
                    }
                }
                if(!valid)
                {
                    alert('Заповніть всі поля!!!');
                    return false;
                }
            }
        </script>
        <style>
            .shadowtext {
                text-shadow: 1px 3px 2px white, 0 0 1em red;
                color: #210042;
                font-size: 2em;
            }
        </style>
                        <script src="js/clock1.js"></script>
                        <script>
                            window.onload = function(){
                                setInterval(clockPainting, 1000);
                            }
                        </script>
    </head>
    <body background="images/bg.jpg">
        <table border="1" align="center" cellpadding="10">
            <tr>
            <td background="images/bg-3.jpg" colspan="2" height="150" align="right">
                <img src="images/logo.png" height="140" align="left" >
                <font size="5" color="Maroon">
                    <h1 class="shadowtext">Сайт web-студії "Web-DECO"</h1>
                </font>
            </td>
            </tr>
            <tr>
            <td colspan="2">
                <font size="4"><b>
                <a href="index.php">Головна</a>&nbsp;&nbsp; 
                  <a href="input.php">Зареєстровані</a>&nbsp;&nbsp; 
                 <a href="log.php">Інформація</a>&nbsp; &nbsp;
                  <a href="foto.php">Фотогалерея</a>&nbsp; &nbsp;
                 <a href="tel.php">Телефони</a></b></font></td>
            </tr>
            <tr>
            <td width="30%" valign="top" >
                <center><canvas id="canvas" height="120" width="120"</canvas></canvas></center>
                <hr>
                <font size="5" color="navy"><h2>Новини</h2></font>
                    <font size="5" >
                <ul>
                    <li><a href="#">Сайт будівельної компанії </a></li>
                    <li><a href="#">Сайт ТМ "Новашкола" </a></li>
                    <li><a href="#">Редизайн сайту classno.com.ua</a></li>
                    <li><a href="#">Розробка CMS для Metro Cash&Carry </a></li>
                    <li><a href="#">Сайт-візитка дизайнера інтерфейсів </a></li><br>
                    <p align="right"><a href="#">інші...</a></p>
                </ul>
                    </font>
                <hr>
                    <H1 align="center"><font color="green">Реєстрація</font></H1>
                    <form action="forma.php" method="post" onsubmit="return send();">
                    <table align="center" bgcolor="#ccc">
                        <tr>
                            <td><font color="green">Прізвище</font>: </td>
                            <td><input type="text" size="10" maxlength="20" name="name2"></td>
                        </tr>
                        <tr>
                            <td><font color="green">Ім'я</font>: </td>
                            <td><input type="text" size="10" maxlength="20" name="name1"></td>
                        </tr>
                        <tr>
                            <td><font color="green">E-Mail</font>: </td>
                            <td><input type="email" size="10" maxlength="20" name="email"></td>
                        </tr>
                        <tr>
                            <td><font color="green">Пароль</font>: </td>
                            <td><input type="password" size="10" maxlength="20" name="password"></td>
                        </tr>
                    </table>
                    <p align="center">
                    <input type="submit" value="Зареєструватись">
                    <input type="reset" value="Очистити">
                 </p>
                 </form>
                <hr>
            </td>
            <td width="70%">
            <?php	
                $st = $_POST['name2'].";".$_POST['name1'].";".$_POST['email'].";".$_POST['password'].";\n";
                 $fp=fopen("txt/baza.txt","a");
                fwrite($fp,$st);
                echo "<h1 align='center'>".$_POST['name2']." ".$_POST['name1']."<br>Дякуємо за реєстрацію !</h1>";
                echo "<h2 align='center' > на Ваш E-Mail : ".$_POST['email']."<br> відправлено повідомлення.</br>";
            ?>
            </td>
            </tr>
            <tr>
            <td background="images/bg-3.jpg" colspan="2" valign="middle" height="90">
                <font size="4">Сайт розробив "Гапич Ігор"</font>
            </td>
            </tr>
            </table>
    </body>
</html>