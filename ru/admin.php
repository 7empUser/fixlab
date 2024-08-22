<?php
    include_once("../scripts/connectDB.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin page</title>
        <?php include_once("../component/headerRu.html"); ?>

<?php

    if (isset($_POST)) {
        if (isset($_POST["add"])) {
            $name = str_replace(" ", "", $_POST["name"]);
            $description = $_POST["description"];
            $pageLink = "shop.php?page=".$name;
            $root = $_POST["root"];
            $type = $_POST["type"];
            $final = $_POST["final"];
            if ($name != "") {
                $query = "INSERT INTO `fixlab`(`name`, `description`, `link`, `root`, `type`, `final`) 
                    VALUES ('$name', '$description', '$pageLink', '$root', '$type', '$final')";
                $link->query($query);
            }
        } elseif (isset($_POST["delete"])) {
            $id = $_POST["id"];
            $query = "DELETE
            FROM `fixlab`
            WHERE `id` = $id";
            $link->query($query);
        }
    }

?>

        <form action="admin.php" method="POST">
            <input type="text" name="name" placeholder="Название устройства">
            <input type="text" name="description" placeholder="Описание" value="">
            <select name="root" id="root">

<?php

                $query = "SELECT `name` FROM `fixlab`";
                $result = $link->query($query);
                $rows = $result->fetch_all();
                foreach ($rows as $row) {
                    echo ("<option value='".$row[0]."'>".$row[0]."</option>");
                }

?>

            </select>
            <select name="type" id="type">
                <option value="phone">Телефон</option>
                <option value="laptop">Ноутбук</option>
            </select>
            <select name="final" id="final">
                <option value="category">Страница категории</option>
                <option value="final">Страница продукта</option>
            </select>
            <input type="submit" name="add" value="Добавить запись">

            <div class="contentToCenter">
                <table>
                    <thead>
                        <tr>
                            <td>id</td>
                            <td>name</td>
                            <td>description</td>
                            <td>link</td>
                            <td>root</td>
                            <td>type</td>
                            <td>final</td>
                        </tr>
                    </thead>
                    <tbody>

<?php

    $query = "SELECT *
        FROM `fixlab`";
    $result = $link->query($query);
    $rows = $result->fetch_all();
    foreach ($rows as $row) {
        echo ("<tr>");
        echo ("<td>".$row[0]."</td>");
        echo ("<td>".$row[1]."</td>");
        echo ("<td>".$row[2]."</td>");
        echo ("<td>".$row[3]."</td>");
        echo ("<td>".$row[4]."</td>");
        echo ("<td>".$row[5]."</td>");
        echo ("<td>".$row[6]."</td>");
        echo ("<td><input type='hidden' name='id' value='".$row[0]."'><input type='submit' value='Удалить' name='delete'></td>");
        echo ("</tr>");
    }

?>

                    </tbody>
                </table>
            </div>

        </form>

        <?php include_once("../component/footerRu.html"); ?>

    </body>
</html>