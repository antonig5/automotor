<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    html {
        height: 100%;
    }

    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background: linear-gradient(#141e30, #243b55);
        overflow: hidden;
    }



    .login-box {
        position: absolute;
        top: 50%;
        left: 40%;
        width: 400px;
        padding: 40px;
        transform: translate(-50%, -50%);

        box-sizing: border-box;

        border-radius: 10px;
    }

    .login-box .user-box {
        position: relative;
    }

    .login-box .user-box input {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
    }

    .login-box .user-box select {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
    }


    .login-box .user-box label {
        position: absolute;
        top: 0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        pointer-events: none;
        transition: 0.5s;
    }

    .login-box .user-box input:focus~label,
    .login-box .user-box input:valid~label {
        top: -20px;
        left: 0;
        color: #dc5851;
        font-size: 12px;
    }

    .login-box .user-box select:focus~label,
    .login-box .user-box select:valid~label {
        top: -20px;
        left: 0;
        color: #dc5851;
        font-size: 12px;
    }

    .login-box form a {

        display: inline;
        padding: 10px 20px;
        color: #fff;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: 0.5s;
        margin-top: 40px;
        letter-spacing: 4px;
        background-color: #dc5851;
        border-radius: 28px;
    }

    .login-box a:hover {
        background: #dc5851;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px #dc5851, 0 0 25px #dc5851, 0 0 50px #dc5851,
            0 0 100px #dc5851;
    }

    .login-box a span {
        position: absolute;
        display: block;
    }
</style>

<body>
    <?php
    include '../components/navbar.php';

    ?>
    <div class="login-box">
        <form>
            <div class="user-box">
                <input type="text" name="" required="" />
                <label>Placa</label>
            </div>
            <div class="user-box">
                <select name="" id="">
                    <option value=""></option>
                    <option value="">Bus</option>
                    <option value="">Buseta</option>
                    <option value="">Camioneta</option>
                </select>
                <label>Tipo Vehiculo</label>
            </div>
            <div class="user-box">
                <select name="" id="">
                    <option value=""></option>
                    <option value="">Mercedez</option>
                    <option value="">Renault</option>
                    <option value="">Nissan</option>
                </select>
                <label>Marca</label>
            </div>
            <div class="user-box">
                <select name="" id="">
                    <option value=""></option>
                    <option value="">Puristur</option>
                    <option value="">Puritrans</option>
                    <option value="">Marcos</option>
                </select>
                <label>Propietario</label>
            </div>

            <div class="user-box">
                <select name="" id="">
                    <option value=""></option>
                    <option value="">Servicio</option>
                    <option value="">Disponible</option>
                    <option value="">Mantenimiento</option>
                </select>
                <label>Estado</label>
            </div>

            <a href="index.php" onclick="{alert('registrado')}">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                registrar
            </a>
        </form>
    </div>
    <?php
    include '../components/menu.php';
    ?>
</body>

</html>