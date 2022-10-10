<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Document</title>
</head>
<style>
    .navbar {
        position: fixed;
        width: 100%;
        z-index: 2;
        padding: 25px 0;
        transition: all 0.3s ease;
        background: #fff;
    }

    .navbar.sticky {
        background: #1b1b1b;
        padding: 10px 0;
        box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.1);
    }

    .navbar .content {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .logo {
        position: relative;
        margin-top: -12px;
    }

    .navbar .logo a {
        margin-left: 2.5rem;
        color: #1b1b1b;
        font-size: 30px;
        font-weight: 600;
        text-decoration: none;
    }

    .navbar .menu-list {
        display: inline-flex;
    }

    .menu-list li {
        list-style: none;
    }

    .menu-list li a {
        color: #1b1b1b;
        font-size: 18px;
        font-weight: 500;
        margin-left: 20px;
        margin-right: 50px;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .menu-list li a:hover {
        color: #007bff;
    }

    .banner {
        background: url("banner.jpg") no-repeat;
        height: 100vh;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    .about {
        padding: 30px 0;
    }

    .about .title {
        font-size: 38px;
        font-weight: 700;
    }

    .about p {
        padding-top: 20px;
        text-align: justify;
    }

    .icon {
        color: #fff;
        font-size: 20px;
        cursor: pointer;
        display: none;
    }

    .menu-list .cancel-btn {
        position: absolute;
        right: 30px;
        top: 20px;
    }

    .notification {
        width: 50px;
        height: inherit;
        color: black;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        margin-top: -25px;
    }

    .notification::after {
        min-width: 20px;
        height: 20px;
        content: attr(data-count);
        background-color: #ed657d;
        font-family: monospace;
        font-weight: bolt;
        font-size: 14px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        position: absolute;
        top: 5px;
        right: 5px;
        transition: 0.3s;
        opacity: 0;
        transform: scale(0.5);
        will-change: opacity, transform;
    }

    .notification.show-count::after {
        opacity: 1;
        transform: scale(1);
    }

    .notification::before {
        content: "\f0f3";
        font-family: "FontAwesome";
        display: block;
    }

    .notification.notify::before {
        animation: bell 1s ease-out;
        transform-origin: center top;
    }

    @keyframes bell {
        0% {
            transform: rotate(35deg);
        }

        12.5% {
            transform: rotate(-30deg);
        }

        25% {
            transform: rotate(25deg);
        }

        37.5% {
            transform: rotate(-20deg);
        }

        50% {
            transform: rotate(15deg);
        }

        62.5% {
            transform: rotate(-10deg);
        }

        75% {
            transform: rotate(5deg);
        }

        100% {
            transform: rotate(0);
        }
    }
</style>

<body>
    <nav class="navbar">
        <div class="content">
            <div class="logo">
                <a href="#">Bienvenido Usuario</a>
            </div>
            <ul class="menu-list">
                <div class="icon cancel-btn">
                    <i class="fas fa-times"></i>
                </div>
                <li>
                    <a href=""><i class="fa fa-bell"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-user"></i></a>
                </li>
            </ul>

        </div>
    </nav>
    <script>
        const $button = document.getElementById("button");
        const $bell = document.getElementById("notification");

        $button.addEventListener("click", function(event) {
            const count = Number($bell.getAttribute("data-count")) || 0;

            $bell.setAttribute("data-count", count + 1);
            $bell.classList.add("show-count");
            $bell.classList.add("notify");
        });

        $bell.addEventListener("animationend", function(event) {
            $bell.classList.remove("notify");
        });
    </script>
</body>

</html>