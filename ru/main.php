<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Главная</title>
        <?php include_once("../component/headerRu.html"); ?>

        <div class="belowHeaderDiv">
            <div>
                <p><pre>Качественный сервис</pre></p>
                <p><pre> Команда профессионалов</pre></p>
                <p><pre>  Склад в Риге</pre></p>
            </div>
            <img src="../img/laptopwithphone.png" alt="Laptop with phone">
        </div>

        <div class="subDiv">
            <h2>Услуги</h2>
            <div class="service">
                <div class="serviceDiv">
                    <h3>Компьютеры</h3>
                    <img src="../img/pc.png" alt="Компьютеры" class="serviceImg">
                </div>
                <div class="serviceDiv">
                    <h3>Ноутбуки</h3>
                    <img src="../img/laptopwithphone.png" alt="Ноутбуки" class="serviceImg">
                </div>
                <div class="serviceDiv">
                    <h3>Планшет</h3>
                    <img src="../img/tablet.png" alt="Планшеты" class="serviceImg">
                </div>
                <div class="serviceDiv">
                    <h3>Телефоны</h3>
                    <img src="../img/phone.png" alt="Телефоны" class="serviceImg">
                </div>
                <div class="serviceDiv">
                    <h3>Другие устройства</h3>
                    <img src="../img/otherDevices.png" alt="Другие устройства" class="serviceImg">
                </div>
                <div class="serviceDiv">
                    <h3>Бизнес клиентам</h3>
                    <img src="../img/business.png" alt="Бизнес клиентам" class="serviceImg">
                </div>
                <div class="serviceDiv">
                    <h3>Доставка</h3>
                    <img src="../img/delivery.png" alt="Доставка" class="serviceImg">
                </div>
            </div>
        </div>

        <div style="height: 30px;">

        </div>

        <div class="subDiv">
            <div class="advantages">
                <div class="advantagesDiv">
                    <div>
                        <h3>Удобный доступ</h3>
                        <img src="../img/comfortableAccess.png" alt="Удобный доступ" style="height: 80px;">
                    </div><br>
                    <ul>
                        <li>Бесплатная парковка у магазина Rimi</li>
                        <li>Рядом множество остановок общественного транспорта</li>
                    </ul>
                </div>
                <div class="advantagesDiv">
                    <div>
                        <h3>Доставка</h3>
                        <img src="../img/delivery.png" alt="Доставка и работа по вызову" style="height: 80px;">
                    </div>
                    <h4>Доставка и работа по вызову</h4><br>
                    <ul>
                        <li>Наш техник может приехать за Вашим усройтвом и вернуть после ремонта</li>
                        <li>Наш специалист может выполнить некоторые ремонты на месте</li>
                    </ul>
                </div>
                <div class="advantagesDiv">
                    <div>
                        <h3>Другие удобства</h3>
                        <img src="../img/anyComfort.png" alt="Другие удобства" style="height: 80px;">
                    </div><br>
                    <ul>
                        <li>В мастерской есть место сесть</li>
                        <li>Рядом кафе, ресторан и магазин</li>
                        <li>Рядом парк</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="formDiv" id="formDiv">
            <div>
                <h3>Запись</h3>
                <form action="index.php" method="POST">
                    <h4>Ваш номер телефона или почта:</h4>
                    <input type="text" id="contact" name="contact" placeholder="Контактная информация" required>
                    <h4>Тип устройства:</h4>
                    <select name="type" id="type" required>
                        <option value="default">Выберите тип устройства</option>
                        <option value="pc">Компьютер</option>
                        <option value="laptop">Ноутбук</option>
                        <option value="tablet">Планшет</option>
                        <option value="phone">Телефон</option>
                        <option value="other">Другое</option>
                        <option value="business">Бизнес клиент</option>
                    </select>
                    <h4>Описание проблемы</h4>
                    <textarea name="description" id="description" cols="25" rows="2" required></textarea><br>
                    <input type="checkbox" name="checkbox" id="checkbox" required>
                    <label for="checkbox"><a href="">Соглашаюсь с политикой обработки персональных данных</a></label><br>
                    <input type="submit" name="submit" id="submit" value="Отправить">
                </form>
            </div>
        </div>

        <?php
            
            include_once("../component/footerRu.html");

            if (isset($_POST["submit"])) {
                $phone = $_POST["contact"];
                $type = $_POST["type"];
                $description = $_POST["description"];
                $message = "Контакт: $phone\nТип устройства: $type\nОписание проблемы: $description";
                if (mail("fixlablv@gmail.com", "Заказ", $message)) {
                    echo("<script>alert('Заявка успешно отправлена')</script>");
                } else {
                    echo("<script>alert('Что-то пошло не так')</script>");
                }
            }

        ?>

    </body>
</html>