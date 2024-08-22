<!DOCTYPE html>
<html lang="lv">
    <head>
        <title>Bezmaksas piegāde</title>
        <?php include_once("../component/header.html"); ?>

        <div class="contentToCenter">
            <div class="withWhiteBack">
                <h2>Bezmaksas piegāde pēc pieprasta</h2>
            </div>
        </div>

        <div class="contentToCenter">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d543.7450521902042!2d24.129960669682987!3d56.96627149834733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecf9b9d74b831%3A0x4884a05f3ab4e744!2sDatoru%20un%20telefonu%20remonts!5e0!3m2!1sru!2sru!4v1708967644741!5m2!1sru!2sru" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="contentToCenter">
            <div class="withWhiteBack">
                <h4>Ja remonta izmaksas pārsniedz 70€, mēs kompensēsim Jums piegādes izmaksas!</h4>
            </div>
        </div>

        <div class="contentToCenter deliweryForPhone" style="gap: 200px;">
            <table>
                <thead>
                    <tr>
                        <td>Piegādes veids</td>
                        <td>Cena</td>
                        <td>Vidējais laiks</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>FixLab kurjeris</td>
                        <td>0,75 €/km</td>
                        <td>0-2 darba dienas</td>
                    </tr>
                    <tr>
                        <td>DPD pakomāts</td>
                        <td>no 2.21 €</td>
                        <td>1-2 darba dienas</td>
                    </tr>
                    <tr>
                        <td>DPD kurjeris</td>
                        <td>no 9,61 €</td>
                        <td>1-2 darba dienas</td>
                    </tr>
                    <tr>
                        <td>Itella pakomāts</td>
                        <td>no 1,79 €</td>
                        <td>1-2 darba dienas</td>
                    </tr>
                    <tr>
                        <td>Itella kurjeris</td>
                        <td>no 3,99 €</td>
                        <td>1-2 darba dienas</td>
                    </tr>
                    <tr>
                        <td>Omniva pakomāts</td>
                        <td>no 2.88 €</td>
                        <td>1-2 darba dienas</td>
                    </tr>
                    <tr>
                        <td>Omniva kurjeris</td>
                        <td>no 9.98 €</td>
                        <td>1-2 darba dienas</td>
                    </tr>
                </tbody>
            </table>
            <div style="background-color: #bde3ff; border-radius: 10px; padding: 10px;">
                <h3>Reģistrējieties piegādei:</h3>
                <form action="delivery.php" method="POST">
                    <h4>Jūsu tālruņa numurs vai e-pasts:</h4>
                    <input type="text" id="contact" name="contact" placeholder="Kontaktinformācija" required>
                    <h4>Piegādes adrese</h4>
                    <input type="text" id="adress" name="adress" placeholder="Jūsu adrese" required>
                    <h4>Vēlamais datums un laiks</h4>
                    <select name="deliwery" id="deliwery" required>
                        <option value="fixLabK">FixLab kurjers</option>
                        <option value="DPDP">DPD pakomāts</option>
                        <option value="DPDK">DPD kurjers</option>
                        <option value="ItellaP">Itella pakomāts</option>
                        <option value="ItellaK">Itella kurjers</option>
                        <option value="OmnivaP">Omniva pakomāts</option>
                        <option value="OmnivaK">Omniva kurjers</option>
                    </select><br>
                    <input type="checkbox" name="checkbox" id="checkbox" required>
                    <label for="checkbox"><a href="">Piekrītu personas datu apstrādes politikai</a></label><br>
                    <input type="submit" name="submit" id="submit" value="Sūtīt">
                </form>
            </div>
        </div>

        <?php include_once("../component/footer.html"); ?>

        <?php
            if (isset($_POST["submit"])) {
                $phone = $_POST["contact"];
                $adress = $_POST["adress"];
                $deliwery = $_POST["deliwery"];
                $message = "Sazināties: $phone\nAdrese: $adress\nPiegāde metode: $deliwery";
                if (mail("fixlablv@gmail.com", "Piegāde", $message)) {
                    echo("<script>alert('Pieteikums veiksmīgi nosūtīts')</script>");
                } else {
                    echo("<script>alert('Kaut kas notika nepareizi')</script>");
                }
            }
        ?>

    </body>
</html>