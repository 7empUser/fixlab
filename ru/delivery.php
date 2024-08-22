<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Бесплатная доставка</title>
        <?php include_once("../component/headerRu.html"); ?>

        <div class="contentToCenter">
            <div class="withWhiteBack">
                <h2>Бесплатная доставка по записи</h2>
            </div>
        </div>

        <div class="contentToCenter">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d543.7450521902042!2d24.129960669682987!3d56.96627149834733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecf9b9d74b831%3A0x4884a05f3ab4e744!2sDatoru%20un%20telefonu%20remonts!5e0!3m2!1sru!2sru!4v1708967644741!5m2!1sru!2sru" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="contentToCenter">
            <div class="withWhiteBack">
                <h4>Если стоимость работ выше 70€ - мы компенсируем Вам затраты на доставку!</h4>
            </div>
        </div>

        <div class="contentToCenter deliweryForPhone" style="gap: 200px;">
            <table>
                <thead>
                    <tr>
                        <td>Тип доставки</td>
                        <td>Цена</td>
                        <td>Средние сроки</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>FixLab курьер</td>
                        <td>0,75 €/км</td>
                        <td>0-2 рабочих дня</td>
                    </tr>
                    <tr>
                        <td>DPD пакомат</td>
                        <td>от 2.21 €</td>
                        <td>1-2 рабочих дня</td>
                    </tr>
                    <tr>
                        <td>DPD курьер</td>
                        <td>от 9,61 €</td>
                        <td>1-2 рабочих дня</td>
                    </tr>
                    <tr>
                        <td>Itella пакомат</td>
                        <td>от 1,79 €</td>
                        <td>1-2 рабочих дня</td>
                    </tr>
                    <tr>
                        <td>Itella курьер</td>
                        <td>от 3,99 €</td>
                        <td>1-2 рабочих дня</td>
                    </tr>
                    <tr>
                        <td>Omniva пакомат</td>
                        <td>от 2.88 €</td>
                        <td>1-2 рабочих дня</td>
                    </tr>
                    <tr>
                        <td>Omniva курьер</td>
                        <td>от 9.98 €</td>
                        <td>1-2 рабочих дня</td>
                    </tr>
                </tbody>
            </table>
            <div style="background-color: #bde3ff; border-radius: 10px; padding: 10px;">
                <h3>Запись на доставку:</h3>
                <form action="delivery.php" method="POST">
                    <h4>Ваш номер телефона или почта:</h4>
                    <input type="text" id="contact" name="contact" placeholder="контактная информация" required>
                    <h4>Адрес доставки</h4>
                    <input type="text" id="adress" name="adress" placeholder="Ваш адрес" required>
                    <h4>Желаемая дата и время</h4>
                    <select name="deliwery" id="deliwery" required>
                        <option value="fixLabK">FixLab курьер</option>
                        <option value="DPDP">DPD пакомат</option>
                        <option value="DPDK">DPD курьер</option>
                        <option value="ItellaP">Itella пакомат</option>
                        <option value="ItellaK">Itella курьер</option>
                        <option value="OmnivaP">Omniva пакомат</option>
                        <option value="OmnivaK">Omniva курьер</option>
                    </select><br>
                    <input type="checkbox" name="checkbox" id="checkbox" required>
                    <label for="checkbox"><a href="">Соглашаюсь с политикой обработки персональных данных</a></label><br>
                    <input type="submit" name="submit" id="submit" value="Отправить">
                </form>
            </div>
        </div>

        <?php include_once("../component/footerRu.html"); ?>

        <?php
            if (isset($_POST["submit"])) {
                $phone = $_POST["contact"];
                $adress = $_POST["adress"];
                $deliwery = $_POST["deliwery"];
                $message = "Контакт: $phone\nАдресс: $adress\nСпособ доставки: $deliwery";
                if (mail("fixlablv@gmail.com", "Доставка", $message)) {
                    echo("<script>alert('Заявка успешно отправлена')</script>");
                } else {
                    echo("<script>alert('Что-то пошло не так')</script>");
                }
            }
        ?>

    </body>
</html>