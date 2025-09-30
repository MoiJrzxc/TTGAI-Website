<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
            scroll-behavior: smooth;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        body {
            background: #E0EAF4;
            font-style: mono, sans-serif;
        }


        .container {
            padding: 10px 10%;
        }

        .row {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-bottom: 50px;
        }

        /* Navigation Bar */

        nav {
            background-color: #2E77AE;
            height: 80px;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0px;
            box-shadow: 0 4px 10px rgba(255, 255, 255, 0.644);
            position: fixed;
            z-index: 1;
        }

        .logo {
            width: 60px;
            height: auto;
            border-radius: 40px 40px 40px 40px;
            margin-left: 20px;
        }

        nav ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin-right: 40px;
            justify-content: center;
        }

        nav ul li a {
            color: white;
            font-size: 16px;
            padding: 10px 5px;
            border-radius: 5px;
            text-transform: uppercase;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
            font-weight: bold;
        }

        nav ul li a:hover {
            background-color: #ffffff;
            color: #000000;
        }

        button {
            background-color: #ff8b2b;
            color: #000000;
            border: none;
            margin: none;
            padding: 5px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-style: bold;
            height: 30px;
            font-style: bold;
        }

        #button:hover {
            background-color: #ffffff;
            color: #000000;
        }

        #header {
            background-image: url('5.jpg');
            background-size: cover;
        }
    </style>
</head>

<body>

    <!-- Nav Bar -->
    <nav>
        <img src="5.jpg" class="logo">
        <ul>
            <li><a class="active" href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="#documentation">TEAM</a></li>
            <li><a href="#operation">OPERATION</a></li>
            <li><a href="#sponsors">LINKAGES</a></li>
            <li id="team"><button>BE A SPONSOR</button></li>
        </ul>
    </nav>
    <!-- Dashboard -->
    <div id="header">
        <div class="header-text">

            <h1>About Us</h1>
            <p>Team Twilight Golfers Association Inc. is a non-stock, non-profit organizationregistered with SEC and
                BIR. Our
                members are like-minded business owners, leaders, managers who share the love for golf and a passion for
                helping
                others.</p>
        </div>
    </div>



</body>

</html>