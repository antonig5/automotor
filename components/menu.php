<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/7c40aeb0cd.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/menu.css">

    <title>Document</title>
</head>

<body>
    <section class="app">
        <aside class="sidebar">
            <header>Puribus</header>
            <div></div>
            <nav class="sidebar-nav">
                <ul>
                    <li>
                        <a href="../admin/" id="btn"><i class="fa fa-house"></i>Home</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-car"></i> <span>Vehiculo</span></a>
                        <ul class="nav-flyout">
                            <li>
                                <a href="../vehiculos/" id="btn"><i class="fa fa-car-bus"></i>Vehiculos</a>
                            </li>
                            <li>
                                <a href="../vehiculos/registrar.php"><i class="ion-ios-clock-outline"></i>Registra Vehiculos</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa-solid fa-user-secret"></i>
                            <span class="">Conductores</span></a>
                        <ul class="nav-flyout">
                            <li>
                                <a href="#"><i class="ion-ios-alarm-outline"></i>Conductores</a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-ios-camera-outline"></i>Registra conductores</a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-ios-chatboxes-outline"></i>Hate</a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-ios-cog-outline"></i>Grinder</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa-solid fa-paste"></i>
                            <span class="">Reportes</span></a>
                        <ul class="nav-flyout">
                            <li>
                                <a href="#"><i class="ion-ios-flame-outline"></i>Burn</a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-ios-lightbulb-outline"></i>Bulbs</a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-ios-location-outline"></i>Where You</a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-ios-locked-outline"></i>On Lock</a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-ios-navigate-outline"></i>Ghostface</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa-solid fa-building"></i>
                            <span class="">Talleres</span></a>
                        <ul class="nav-flyout">
                            <li>
                                <a href="#"><i class="ion-ios-timer-outline"></i>Timers</a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-arrow-graph-down-left"></i>You Lose</a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-ios-partlysunny-outline"></i>Stormy</a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-ios-timer-outline"></i>Lookie Look</a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-ios-game-controller-a-outline"></i>Dork
                                    Mfer</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="../login/"><i class="fa-solid fa-door-open"></i>Salir</a></li>
                </ul>
            </nav>
        </aside>
    </section>
    <script>
        var btn = document.getElementById("btn")
        btn.addEventListener("click", function(e) {
            e.preventDefault()
        })
    </script>
</body>

</html>