<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
        <title>Прокат машин</title>
        <h2 align = "center">Результаты запросов из задания</h2>
    </head>
    <body>
    
<hr>
        <script type="text/javascript" defer>
        alert( "Ввод, который использовался ранее для каждого запроса\nЗапрос1:\n"+localStorage.getItem('r1')+"\nЗапрос2:\n"+localStorage.getItem('r2')+"\nЗапрос3:\n"+localStorage.getItem('r3') );
        </script>
        <p>
        <form action="action1.php" id = "1" method = "post">
             1. Полученный доход с проката по состоянию на выбранную дату 
             <input placeholder="Введите дату" name="data1" id= "date1"> 
             <input id="button1" type="submit" value="Отправить"> 
        </form>


        <form action="action2.php" id = "2" method = "post">
             2. Автомобили с пробегом меньше указанного 
             <input placeholder="Введите пробег" name="seller2" id = "id2"> 
             <input id="button2" type="submit" value="Отправить"> 
        </form>

        <form action="action3.php" id = "3" method = "post"> 
             3. Имеющиеся в данном пункте марки автомобилей
             <input placeholder="Введите дату" name="data3" id = "date3"> 
             <input id="button3" type="submit" value="Отправить"> 
        </form>
        </p>
<hr>
       

    </body>
</html>