<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <script src="scripts/script.js"></script>
        <title>Galvenā</title>
        <meta name="description" content="Mūsu specialistu komanta veis datoru, telefonu un citu ierīču profesionālo remontu. Mēs piedāvājam augstas kvalitātes pakalpojumus par izdevīgam cenām. Visiem mūsu darbiem 6 mēnešu garantija. Mūsu komandā tehniķi ar lielo pieredzi, gatavi palīdzēt ar jebkuru jautājumu! Sazinieties ar mums, lai uzzinātu vairāk par mūsu pakalpojumiem un kā atrisinātu problēmas ar jūsu ierīci!">
        <link rel="icon" href="img/logo.png">
    </head>
    <body>

        <header>
            <div>
                <a href="../ru/main.php"><img src="../img/logo.png" alt="Fixlab" class="logo"></a>
            </div>
            <div class="search">

            </div>
            <div>
                <div class="mobileNumber">
                    <div>
                        <p>Informatīvais tālrunis: 26982943</p>
                    </div>
                    <div>
                        <ul class="languageList">
                            <li><div><img src="img/flag_lv.png" alt="latviešu"><p>LV</p></div>
                                <ul>
                                    <li class="languageListItem"><a href=""><div><img src="img/flag_eng.png" alt="english"><p>ENG</p></div></a></li>
                                    <li class="languageListItem"><a href="ru/main.php"><div><img src="img/flag_ru.jpg" alt="русский"><p>RU</p></div></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <nav>
                    <button onclick="menuToggle()" class="dropbtn">Izvēlne</button>
                    <ul class="headerList" id="headerList">
                        <li><a href="#">Galvenā</a></li>
                        <li><a href="lv/shop.php">Veikals</a></li>
                        <li class="headerListForPC">Pakalpojumi
                            <ul>
                                <li><a href="lv/repairPC.php"><div><p>Datora remonts</p></div></a></li><hr>
                                <li><a href="lv/repairLaptop.php"><div><p>Laptopa remonts</p></div></a></li><hr>
                                <li><a href="lv/repairTablet.php"><div><p>Planšetdatora remonts</p></div></a></li><hr>
                                <li><a href="lv/repairPhone.php"><div><p>Telefona remonts</p></div></a></li><hr>
                                <li><a href="lv/otherDevices.php"><div><p>Citu ierīču remonts</p></div></a></li><hr>
                                <li><a href="lv/businessClients.php"><div><p>Biznesa klientiem</p></div></a></li>
                            </ul>
                        </li>
                        <li class="headerListForPhone"><a href="lv/repairPC.php">Datora remonts</a></li>
                        <li class="headerListForPhone"><a href="lv/repairLaptop.php">Laptopa remonts</a></li>
                        <li class="headerListForPhone"><a href="lv/repairTablet.php">Planšetdatora remonts</a></li>
                        <li class="headerListForPhone"><a href="lv/repairPhone.php">Telefona remonts</a></li>
                        <li class="headerListForPhone"><a href="lv/otherDevices.php">Citu ierīču remonts</a></li>
                        <li class="headerListForPhone"><a href="lv/businessClients.php">Biznesa klientiem</a></li>
                        <li><a href="lv/delivery.php">Piegāde</a></li>
                        <li><a href="lv/contact.php">Kontakti</a></li>
                        <li><a href="lv/aboutUs.php">Par mums</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="belowHeaderDiv">
            <div>
                <p><pre>Kvalitatīvs serviss</pre></p>
                <p><pre> Profesionālu komanda</pre></p>
                <p><pre> Noliktava Rīgā</pre></p>
            </div>
            <img src="img/laptopwithphone.png" alt="Laptop with phone">
        </div>

        <div class="subDiv">
            <h2>Услуги</h2>
            <div class="service">
                <div class="serviceDiv">
                    <h3>Datori</h3>
                    <img src="img/pc.png" alt="Datori" class="serviceImg">
                </div>
                <div class="serviceDiv">
                    <h3>Laptopi</h3>
                    <img src="img/laptopwithphone.png" alt="Laptopi" class="serviceImg">
                </div>
                <div class="serviceDiv">
                    <h3>Planšetes</h3>
                    <img src="img/tablet.png" alt="Planšetes" class="serviceImg">
                </div>
                <div class="serviceDiv">
                    <h3>Telefoni</h3>
                    <img src="img/phone.png" alt="Telefoni" class="serviceImg">
                </div>
                <div class="serviceDiv">
                    <h3>Citas ierīces</h3>
                    <img src="img/otherDevices.png" alt="Citas ierīces" class="serviceImg">
                </div>
                <div class="serviceDiv">
                    <h3>Biznesa klientiem</h3>
                    <img src="img/business.png" alt="Biznesa klientiem" class="serviceImg">
                </div>
                <div class="serviceDiv">
                    <h3>Piegāde</h3>
                    <img src="img/delivery.png" alt="Piegāde" class="serviceImg">
                </div>
            </div>
        </div>

        <div class="subDiv">
            <div class="advantages">
                <div class="advantagesDiv">
                    <div>
                        <h3>Ērta piekļuve</h3>
                        <img src="img/comfortableAccess.png" alt="Ērta piekļuve" style="height: 80px;">
                    </div><br>
                    <ul>
                        <li>Liela bezmaksas stāvvieta pie Rimi veikala</li>
                        <li>Blakus daudz sabiedriska transporta pietures</li>
                    </ul>
                </div>
                <div class="advantagesDiv">
                    <div>
                        <h3>Piegāde</h3>
                        <img src="img/delivery.png" alt="Piegāde uz darbnīcu un atpakaļ" style="height: 80px;">
                    </div>
                    <h4>Piegāde un darbs ar izbraukšanu</h4><br>
                    <ul>
                        <li>Mūsu tehnikis var atbraukt pēc Jūsu ierīces un atgriezt pēc remonta.</li>
                        <li>Mūsu specialists var izpildīt dažus darbus uz vietas.</li>
                    </ul>
                </div>
                <div class="advantagesDiv">
                    <div>
                        <h3>Citas ērtības</h3>
                        <img src="img/anyComfort.png" alt="Другие удобства" style="height: 80px;">
                    </div><br>
                    <ul>
                        <li>Mūsu darbnīcā ir vieta apsēsties</li>
                        <li>Blakus ir kafeiņīca, restorāns un daudz kas cits</li>
                        <li>Blakus parks</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="formDiv" id="formDiv">
            <div>
                <h3>Pieraksts</h3>
                <form action="index.php" method="POST">
                    <h4>Jūsu telefons vai e-pasts:</h4>
                    <input type="text" id="contact" name="contact" placeholder="kontaktinformācija" required>
                    <h4>Ierīces tips:</h4>
                    <select name="type" id="type" required>
                        <option value="default">Izvēlieties ierīces tipu</option>
                        <option value="pc">Dators</option>
                        <option value="laptop">Laptops</option>
                        <option value="tablet">Planšete</option>
                        <option value="phone">Telefons</option>
                        <option value="other">Cits</option>
                        <option value="business">Biznesa klients</option>
                    </select>
                    <h4>Problēmas apraksts</h4>
                    <textarea name="description" id="description" cols="25" rows="2" required></textarea><br>
                    <input type="checkbox" name="checkbox" id="checkbox" required>
                    <label for="checkbox"><a href="">Piekrītu personas datu apstrādes politikai</a></label><br>
                    <input type="submit" name="submit" id="submit" value="Nosūtīt">
                </form>
            </div>
        </div>

        <footer>
            <div>
                <h3>Sazinies ar mums:</h3>
                <p>
                    <img src="img/email-icon.png" alt="pasts">Почта: fixlabv@gmail.com
                </p>
                <p>
                    <img src="img/phone-icon.png" alt="nummurs">
                    <a href="tel:+37129995639">+371 29995639</a> | Meistars: 12:00 - 20:00
                </p>
                <p>
                    <img src="img/phone-icon.png" alt="nummurs">
                    <a href="tel:+37126982943">+371 26982943</a> | Menedžeris: 10:00 - 23:00
                </p>
            </div>
            <div style="text-align: center;">
                <h3>Darba laiks:</h3>
                <p>Pirmdiena - Piektdiena: 11:00 - 19:00</p>
                <p>Sestdiena: 11:00 - 16:00</p>
                <p>Svētdiena: pēc pieraksta</p>
            </div>
            <div style="text-align: center;">
                <h3>Adrese:</h3>
                <p>Rīga: Krišjana Valdemara 62A Rimi (Bezmaksas stāvvieta)</p>
                <p><a href="lv/delivery.php">Bezmaksas piegāde pēc pieraksta</a></p>
            </div>
            <div style="padding-left: 10px;">
                <h3>Соцсети:</h3>
                <p>
                    <img src="img/facebook-icon.png" alt="Facebook">
                    <a href="https://www.facebook.com/profile.php?id=61556708657105">Facebook</a>
                </p>
                <p>
                    <img src="img/instagram-icon.png" alt="Instagram">
                    <a href="https://www.instagram.com/fixlab.lv/">Instagram</a>
                </p>
                <p>
                    <img src="img/tiktok-icon.png" alt="Tiktok">
                    <a href="https://www.tiktok.com/@fixlab.lv">Tiktok</a>
                </p>
            </div>
        </footer>

        <?php
            
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