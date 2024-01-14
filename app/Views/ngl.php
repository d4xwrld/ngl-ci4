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
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', sans-serif;
        background: linear-gradient(90deg, #edc0bf 0, #c4caef 58%);
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .container {
        position: relative;
        width: 25rem;
        height: 25rem;
    }

    .card {
        position: relative;
        width: 100%;
        height: 80%;
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 2rem;
        z-index: 1;
        box-shadow: 5px 8px rgba(0, 0, 0, 0.5);
        animation: float 6s ease-in-out infinite;
    }

    .card-title {
        margin-bottom: 1rem;
        font-size: 1.5rem;
        color: #fff;
    }

    .card-text {
        margin-bottom: 2rem;
        font-size: 1rem;
        color: #fff;
        opacity: 0.8;
    }

    #card-link {
        display: inline-block;
        padding: 0.5rem 1rem;
        /* background-color: #fff;
  color: #4d4ae8; */
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        border-radius: 10px;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .card-link:hover {
        background-color: #4d4ae8;
        color: #fff;
    }

    .shape {
        position: absolute;
        bottom: -50px;
        right: -50px;
        width: 200px;
        height: 200px;
        background: radial-gradient(circle at 50% 50%, rgba(255, 255, 255, 0.15), transparent);
        filter: blur(50px);
        z-index: 0;
    }

    .form {
        display: grid;
    }

    .footer {
        background-color: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(10px);
        border-radius: 10px 10px 0 0;
        bottom: 0;
        left: 0;
        padding: 20px;
        position: fixed;
        width: 100%;
    }

    .footer p {
        color: #333;
        font-size: 0.9rem;
        text-align: center;
    }

    textarea:active {
        animation: wobble 0.5s ease-in-out;
    }

    @keyframes wobble {
        0% {
            transform: rotate(-2deg);
        }

        25% {
            transform: rotate(2deg);
        }

        50% {
            transform: rotate(-2deg);
        }

        75% {
            transform: rotate(2deg);
        }

        100% {
            transform: rotate(0);
        }
    }

    @keyframes float {
        0% {
            box-shadow: 0 5px 15px 0px rgba(0, 0, 0, 0.6);
            transform: translatey(0px);
        }

        50% {
            box-shadow: 0 25px 15px 0px rgba(0, 0, 0, 0.2);
            transform: translatey(-20px);
        }

        100% {
            box-shadow: 0 5px 15px 0px rgba(0, 0, 0, 0.6);
            transform: translatey(0px);
        }
    }

    @media only screen and (max-width: 768px) {
        .wrapper {
            width: 100%;
            margin: 2rem;
        }

        .container {
            position: relative;
            width: auto;
            height: auto;
        }

        .card {
            padding: 2rem;
        }

        .card-title {
            font-size: 1.25rem;
        }

        .card-text {
            font-size: 1rem;
        }

        #card-link {
            padding: 0.5rem 1rem;
        }
    }
    </style>
</head>

<body>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Anonymous Q&A</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="styles.css">
        <title>Ask Me Anything</title>
    </head>

    <body>
        <div class="wrapper">
            <div class="container">
                <div class="card">
                    <h3 class="card-title">Ask Me Anything</h3>
                    <!-- <p class="card-text">A modern CSS UI library based on the glassmorphism design principles that will
                        help
                        you quickly design and build beautiful websites and applications.</p> -->
                    <!-- <a href="https://ui.glass" class="card-link">Read more</a> -->
                    <form id="card" class="form">
                        <textarea required id="card-link" placeholder="Type your question here..." rows="5"
                            cols="15"></textarea>
                        <br>
                        <button id="card-link">Kirim Pesan!</button>
                    </form>
                </div>
                <div class="footer">
                    <p>made by d4x with ♡</p>
                    <p>cuih</p>
                </div>
                <!-- <div id="questions-container">
		</div>
    </div>
    <div class="shape"></div>
  </div> -->
    </body>

    </html>
</body>

</html>
</body>

</html>