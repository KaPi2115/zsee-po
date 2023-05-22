<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Sierpniowy kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <section id="banner_1">
        <h1>Organizer: SIERPIEŃ</h1>
    </section>

    <section id="banner_2">
        <form method="POST">
            Zapisz wydarzenie:<input type="text" name="wpis">
            <button>OK</button>

            
        </form>
        <?php 
            error_reporting(0);
            $conn=mysqli_connect("localhost","root","","kalendarz");
            $wpis=$_POST['wpis'];
            $qrr="UPDATE zadania SET wpis='$wpis' WHERE dataZadania='2020.08.09';";
            mysqli_query($conn,$qrr);
        ?>
    </section>

    <section id="banner_3">
        <img src="logo2.png" alt="sierpień">
    </section>

    <section id="glowny">
    <?php
        $q = "SELECT dataZadania, wpis FROM zadania WHERE miesiac = 'sierpien'";
        $res = mysqli_query($conn, $q);
        while ($row = mysqli_fetch_array($res)) {
            echo "<section id='kalendarz'>
                    <h5>$row[0]</h5>
                    <p>$row[1]</p>
                </section>";
        }
        mysqli_close($conn);
        ?>
    </section>

    <footer>
        <p>Stronę wykonał: Kacper Nowak</p>
    </footer>
</body>
</html>