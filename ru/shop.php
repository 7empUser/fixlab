<?php
    include_once("../scripts/connectDB.php");

    $page = $_GET["page"];
    if (isset($_GET["order"]) or isset($_GET["consult"])) {
        $page = "order";
    } elseif (!isset($_GET["page"])) {
        $page = "main";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once("../component/headerRu.html"); ?>

        <div class="contentToCenter">
            <div class="withWhiteBack">
                <h2>Каталог телефонов</h2>
            </div>
        </div>

        <div>
            <!-- Поиск -->
        </div>

        <div class="shopDiv">
            <nav style="padding: 20px;">

<?php
    if ($page == "main") {
        $rows = [
            ["Телефон", "shop.php?page=phone", "category"], 
            ["Ноутбуки", "shop.php?page=laptop", "category"]
        ];  
    } else {
        $query = "SELECT `name`, `link`, `final`, `root`, `type`
            FROM `fixlab`
            WHERE `root` = '$page'";
        $result = $link->query($query);
        $rows = $result->fetch_all();
    }
    if ($rows[0][2] == "category") {
        echo ("<table class='shopList'>");
        echo ("<tbody>");
        foreach ($rows as $row) {
            echo ("<tr><td><a href='".$row[1]."'>".$row[0]."</a></td></tr>");
        }
        echo ("</tbody>");
        echo ("</table>");
    } else {
?>

        <form action="shop.php" method="POST">
            <p>Контактный телефон:</p>
            <input type="text" id="phoneNumber" name="phoneNumber">
            <p>Почта:</p>
            <input type="text" id="email" name="email">
            <p>Модель устройства</p>

<?php
            $name=$_GET["page"];
            echo ("<input type='text' value='$name' id='name' name='name'>");
?>

            <p>Тип неисправности:</p>
            <textarea id="repair" name="repair" cols="20" rows="6"></textarea><br>
            <input type="submit" id="submit" name="submit" value="Заказать">
        </form>
<?php
    }
    echo ("</nav>");

    if ($rows[0][2] == "category") {
        echo ("<div class='catalogDiv'>");
        foreach ($rows as $row) {
            echo ("<div class='contentToCenter withWhiteBack'>");
            echo ("<a href='".$row[1]."'><h3 style='margin: 30px 0 30px 0'>".$row[0]."</h3></a>");
            echo ("</div>");
        }
    } else {
        $query = "SELECT `name`, `type` FROM `fixlab` WHERE `link` = '"."shop.php?page="."$page'";
        $result = $link->query($query);
        $row = $result->fetch_all()[0];
        $name = $row[0];
        $type = $row[1];
        echo ("<div class='productDiv'>");
        echo ("<div id='diagnostics'>");
        echo ("<h2>Диагностика $name</h2>");
        echo ("<ul><li>Диагностика: Бесплатно</li></ul></div>");
        echo ("<div class='shopHidden' id='repairCharging'>");
        echo ("<h2>Замена зарядного гнезда $name</h2>");
        echo ("<ul>");
        echo ("<li>Чистка гнезда (если решила проблему): 25€</li>");
        echo ("<li>Замена гнезда: 45€</li>");
        echo ("</ul></div>");
        echo ("<div class='shopHidden' id='repairAfterWater'>");
        echo ("<h2>Ремонт после залития $name</h2>");
        echo ("<ul><li>Чистка после залития: 45€</li></ul></div>");
        echo ("<div class='shopHidden' id='repairPlatform'>");
        echo ("<h2>Ремонт платы $name</h2>");
        echo ("<ul><li>Ремонт платы: Зависит от состояния платы</li></ul></div>");
        echo ("<div class='shopHidden' id='repairSimCart'>");
        echo ("<h2>Ремонт сим-карты $name</h2>");
        echo ("<ul><li>Ремонт сим-карты: от 45€</li></ul></div>");
        echo ("<div class='shopHidden' id='repairDispley'>");
        echo ("<h2>Замена дисплея $name</h2>");
        echo ("<ul>");
        echo ("<li>Цена замены: 30€</li>");
        echo ("<li>Цена восстановления: 105€</li>");
        echo ("<li>Цена нового дисплея с рамкой: 150€</li>");
        echo ("</ul></div>");
        echo ("<div class='shopHidden' id='repairBattery'>");
        echo ("<h2>Ремонт аккумулятора $name</h2>");
        echo ("<ul><li>Ремонт аккумулятора 45€</li></ul></div>");
        echo ("<div class='shopHidden' id='repairSpeaker'>");
        echo ("<h2>Ремонт динамика $name</h2>");
        echo ("<ul><li>Ремонт динамика: 45€</li></ul></div>");
        echo ("<div class='shopHidden' id='repairMicrophone'>");
        echo ("<h2>Ремонт микрофона $name</h2>");
        echo ("<ul><li>Ремонт микрофона: 45€</li></ul></div>");

?>
            <div class="productServiceDiv">
                <div onClick="changeMenu('diagnostics')">
                    <img src="" alt="">
                    <p>Диагностика</a></p>
                </div>
                <div onClick="changeMenu('repairCharging')">
                    <img src="" alt="">
                    <p>Ремонт  зарядного гнезда</a></p>
                </div>
                <div onClick="changeMenu('repairAfterWater')">
                    <img src="" alt="">
                    <p>Ремонт после воды</p>
                </div>
                <div onClick="changeMenu('repairPlatform')">
                    <img src="" alt="">
                    <p>Ремонт платы</p>
                </div>
                <div onClick="changeMenu('repairSimCart')">
                    <img src="" alt="">
                    <p>Ремонт разъема для сим-карты</p>
                </div>
                <div onClick="changeMenu('repairDispley')">
                    <img src="" alt="">
                    <p>Замена дисплея</p>
                </div>
                <div onClick="changeMenu('repairBattery')">
                    <img src="" alt="">
                    <p>Замена аккумулятора</p>
                </div>
                <div onClick="changeMenu('repairSpeaker')">
                    <img src="" alt="">
                    <p>Ремонт динамика</p>
                </div>
                <div onClick="changeMenu('repairMicrophone')">
                    <img src="" alt="">
                    <p>Ремонт микрофона</p>
                </div>
            </div>

<?php
    }
?>

            </div>
        </div>

        <?php include_once("../component/footerRu.html"); ?>

        <?php
            if (isset($_POST["submit"])) {
                $phone = $_POST["phoneNumber"];
                $email = $_POST["email"];
                $deviceName = $_POST["name"];
                $repair = $_POST["repair"];
                $message = "Контакт: $phone\nПочта: $email\nНазвание устройства: $deviceName\n\n$repair";
                if (mail("fixlablv@gmail.com", "Заказ", $message)) {
                    echo("<script>alert('Заявка успешно отправлена')</script>");
                } else {
                    echo("<script>alert('Что-то пошло не так')</script>");
                }
            }
        ?>

    </body>
</html>