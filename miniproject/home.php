<html>
<head>
    <style>
        li {
            float: left;
        }
        a {
            display: flex;
            color: black;
            padding: 8px 20px;
        }

        li a:hover {
            background-color: grey;
        }

        header nav ul {
            list-style: none;
            display: flex;
            flex-direction: row;
            font-size: 20px;
            font-family: fantasy;
            text-decoration: none;
        }

        span {
            font-size: 70px;
            color: navy;
        }

        .nav {
            color: rgb(240, 5, 5);
        }

        body {
            background: white;
        }

        .head {
            text-align: center;
            color: blue;
            font-family: serif;
        }

        header {
            width: 98%;
            display: flex;
            justify-content: space-around;
            border: 1px solid white;
            margin: 10px auto;
            padding: 10px 0;
            border-radius: 7px;
            backdrop-filter: blur(22px) saturate(73%);
            -webkit-backdrop-filter: blur(22px) saturate(73%);
            background-color: rgba(17, 25, 40, 0.29);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.125);
            position: auto;
            z-index: 1;
            left: 10px;
        }

        .imgc {
            width: 300px;
            height: 400px;
            background-size: cover;
            border: 1px solid;
        }

        .cards {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        footer {
            background-color: red;
        }

        a {
            text-decoration: none;
            padding: 4px;
            background-color: rgb(202, 230, 230);
            border-radius: 5px;
            color: #000;
        }

        h2 {
            text-align: center;
        }

        .sub {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding-top: 50px;
        }

       
         .account-icon {
            position: relative;
            display: inline-block;
            cursor: pointer;
        }

        .account-dropdown {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 100px; 
            max-width: 150px; 
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
            z-index: 1;
            right: 0;
            border-radius: 8px;
            padding: 2px; 
            font-size: 12px; 
        }

        .account-dropdown a, .account-dropdown span {
            color: black;
            padding: 4px 8px; 
            text-decoration: none;
            display: block;
        }

        .account-dropdown a:hover {
            background-color: #ddd; 
        }

        
        .account-icon:hover .account-dropdown {
            display: block; 
        }

        .icon {
            font-size: 24px; 
        }
    </style>
</head>
<body>
<?php session_start(); ?>
<header>
    <div>
        <span>Freaky World</span>
    </div>
    <nav>
        <div class="inline">
            <ul>
                <li><a href="./home.php" class="nav">Home</a></li>
                <li><a href="./about.html">About</a></li>
                <li><a href="./login.php">Login</a></li>
                <li><a href="./register.php">Sign Up</a></li>
                <?php if(isset($_SESSION['username'])): ?>
                    <li class="account-icon" id="accountIcon">
                        <span class="icon">&#128100;</span> 
                        <div class="account-dropdown" id="accountDropdown">
                    
                            <a href="./logout.php">Logout</a>
                        </div>
                    </li>
                   
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</header>

<div class="head">
    <h1>Freaky World Dress Store</h1>
</div>

<div class="cards">
    <div class="sub-card">
        <img class="imgc" src="./imgs/clth4 (6).jpg" alt="Shirts">
        <div class="content">Shirts start with RS 1000
            <button type="submit"> <a href="./order.html">BUY</a></button>
        </div>
    </div>
    <div class="sub-card">
        <img class="imgc" src="./imgs/clth01 (2).jpg" alt="Jeans">
        <div class="content">Shirts start with RS 1450
            <button type="submit"> <a href="./order.html">BUY</a></button>
        </div>
    </div>
    <div class="sub-card">
        <img class="imgc" src="./imgs/clth4 (3).jpg" alt="Shirts">
        <div class="content">Shirts & shoes start with RS 2450
            <button type="submit"> <a href="./order.html">BUY</a></button>
        </div>
    </div>
    <div class="sub-card">
        <img class="imgc" src="./imgs/clth4 (1).jpg" alt="pants">
        <div class="content">Pants RS 1450
            <button type="submit"> <a href="./order.html">BUY</a></button>
        </div>
    </div>
</div>
<div class="sub">
    <div class="sub-card">
        <img class="imgc" src="./imgs/clth2 (2).jpg" alt="Shirts">
        <div class="content">Shirts start with RS 1450
            <button type="submit"> <a href="./order.html">BUY</a></button>
        </div>
    </div>
    <div class="sub-card">
        <img class="imgc" src="./imgs/shirts.jpg" alt="Shirts">
        <div class="content">Shirts start with RS 999
            <button type="submit"> <a href="./order.html">BUY</a></button>
        </div>
    </div>
    <div class="sub-card">
        <img class="imgc" src="./imgs/clth01 (4).jpg" alt="Suit">
        <div class="content">Suit RS 5000
            <button type="submit"> <a href="./order.html">BUY</a></button>
        </div>
    </div>
    <div class="sub-card">
        <img class="imgc" src="./imgs/clth01 (1).jpg" alt="jeans">
        <div class="content">Jeans RS 1499
            <button type="submit"> <a href="./order.html">BUY</a></button>
        </div>
    </div>
</div>

<footer>
    <div class="foot">
        <h2>Freaky World</h2>
        <p>Owned By Prithvienterprises</p>
    </div>
</footer>
<script>

    document.getElementById('accountIcon').addEventListener('click', function () {
        const dropdown = document.getElementById('accountDropdown');
        dropdown.style.display = (dropdown.style.display === 'block') ? 'none' : 'block'; // Toggle dropdown
    });

   
    window.onclick = function(event) {
        if (!event.target.matches('.icon')) {
            const dropdown = document.getElementById('accountDropdown');
            if (dropdown.style.display === 'block') {
                dropdown.style.display = 'none';
            }
        }
    };
</script>

</body>
</html>
