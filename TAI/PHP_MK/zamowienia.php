<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zamowienia</title>
</head>
<body>

    <?php
        $liczba_bulek = $_POST['txtLiczbaB'];
        $waga_ciasteczek = $_POST['txtWagaC'];
        $vatBulki=8;
        $vatCiastka=23;

        $sumaBulki = $liczba_bulek * 0.52 + $liczba_bulek * 0.52 * $vatBulki / 100;
        $sumaCiastka = $waga_ciasteczek * 1.62 + $waga_ciasteczek * 1.62 * $vatCiastka / 100;

        $suma = $sumaBulki + $sumaCiastka;

        //

        echo "Liczba bulek: $liczba_bulek <br> Waga ciasteczek: $waga_ciasteczek <br>";

        echo<<<END

        <h2>Podsumowanie zamowienia</h2>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>L.p.</th>
                <th>Nazwa towaru</th>
                <th>Ilosc</th>
                <th>Cena netto</th>
                <th>VAT</th>
                <th>Cena brutto</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Bulki</td>
                <td>$liczba_bulek</td>
                <td>0.52</td>
                <td>$vatBulki%</td>
                <td>$sumaBulki</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Ciastka</td>
                <td>$waga_ciasteczek</td>
                <td>1.62</td>
                <td>$vatCiastka%</td>
                <td>$sumaCiastka</td>
            </tr>
            <tr>
                <td colspan="5">Suma</td>
                <td>$suma</td>
            </tr>
        </table>

        END;
    ?>

</body>
</html>