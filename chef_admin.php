<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/chef_admin.css">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@0;1&family=Montserrat:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
<div class="login">
    <img src="img/engin-akyurt-Y5n8mCpvlZU-unsplash.jpg" alt="login image" class="login__img">
    <?php include "navbar.php" ?>
    <div class="titleAccount"><p>ACCOUNT</p></div>
    <div class="home__account"><a href="#">Home</a>/Profil</div>
    <div class="container">
    <div class="All">

        <div class="left_info">
            <img src="img/chef.jpg">
        </div>
        <div class="right_info">
            <h2>chef Mohamed Hamadi</h2>
            <div class="col" id="myCol1">
                <div class="left-col"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                </svg></div>
                <div class="right-col">
                <h5>Phone</h5>
                <p>Toll-Free: 000-12-456789</p>
                </div>
            </div>
            <div class="col" id="myCol2">
                <div class="left-col"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
                </svg></div>
                <div class="right-col">
                <h5>Email</h5>
                <p>Tmail@example.com</p>
                </div>
            </div>
            <div class="col" id="myCol3">
                <div class="left-col"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cursor-fill" viewBox="0 0 16 16">
                    <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
                </svg></div>
                <div class="right-col">
                <h5>Address</h5>
                <p>No: 58 A, East Madison Street,</p>
                </div>
            </div>
        </div>
    </div>
    <div class="title">
        <h3>Command</h3>
    </div>
    <div class="comondes">
    <div class="comonde">
        <img src="img/kj.jpg">
        <div class="info"><h5>Plat</h5>
        <span>300.00DA</span>
        <a href="#">more</a></div>
        <div class="btn">
            <button  type="submit">Accepter</button>
            <button  type="submit">Anuler</button>
        </div>
    </div>
    <div class="comonde">
        <img src="img/kj.jpg">
        <div class="info"><h5>Plat</h5>
        <span>300.00DA</span>
        <a href="#">more</a></div>
        <div class="btn">
         <button  type="submit">Accepter</button>
            <button  type="submit">Anuler</button>
        </div>
    </div>
    </div>
    <?php include "footer.php"; ?>
    </div>
    </div>
</body>
</html>