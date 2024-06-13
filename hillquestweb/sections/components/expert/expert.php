<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Agency Card</title>
    <link href="https://unpkg.com/@webpixels/css@1.2.6/dist/index.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
   <style>
        .card {
            display: flex;
            flex-direction: row;
            width: 100%;
            height: 100%;
            color: white;
        }
        .card-left {
            background: url('https://images.unsplash.com/photo-1629155336846-8886792eca68?q=80&w=3132&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') no-repeat center center;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
            flex: 2;
        }
        .card-left h1 {
            font-size: 4rem;
            font-weight: bold;
            font-family: 'Roboto', sans-serif;
        }
        .card-right {
            background: linear-gradient(rgba(42, 42, 42, 0.8), rgba(42, 42, 42, 0.8)), url('https://images.unsplash.com/photo-1557858310-9052820906f7?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') no-repeat center center;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            flex: 1;
        }
        .card-right p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }
        .progress-container {
            margin-bottom: 10px;
        }
        .progress-container p {
            margin: 0;
            display: flex;
            justify-content: space-between;
        }
        .progress-bar {
            background: #555;
            height: 5px;
            width: 100%;
            margin-top: 5px;
        }
        .progress {
            background: #ff1744;
            height: 100%;
        }

        /* Responsive Styles */
        @media (max-width: 1200px) {
            .card-left h1 {
                font-size: 2rem;
            }
            .card-right p {
                font-size: 1.1rem;
            }
        }
        @media (max-width: 992px) {
            .card-left h1 {
                font-size: 1.8rem;
            }
            .card-right p {
                font-size: 1rem;
            }
        }
        @media (max-width: 768px) {
            .card {
                flex-direction: column;
            }
            .card-left, .card-right {
                flex: none;
                width: 100%;
            }
            .card-left h1 {
                font-size: 1.5rem;
            }
            .card-right p {
                font-size: 0.9rem;
            }
        }
        @media (max-width: 576px) {
            .card-left h1 {
                font-size: 1.2rem;
            }
            .card-right p {
                font-size: 0.8rem;
            }
        }
        @media (max-width: 480px) {
            .card-left h1 {
                font-size: 1rem;
            }
            .card-right p {
                font-size: 0.7rem;
            }
        }
    </style>
</head>
<body>
    <div class="row g-0 card bg-black-100">
        <div class="col-sm-6 col-md-8 card-left opacity-80 ">
            <h1 class="text-black ">EXPERT OUT OF MEDIA AGENCY</h1>
        </div>
        <div class="col-6 col-md-4 card-right ">
            <p>Providing expert assistance with billboard advertising for 25 years. quickly present you</p>
            <div class="progress-container">
                <p>Strategy <span>90%</span></p>
                <div class="progress-bar">
                    <div class="progress" style="width: 90%;"></div>
                </div>
            </div>
            <div class="progress-container">
                <p>Performance <span>75%</span></p>
                <div class="progress-bar">
                    <div class="progress" style="width: 75%;"></div>
                </div>
            </div>
            <div class="progress-container">
                <p>Planning <span>80%</span></p>
                <div class="progress-bar">
                    <div class="progress" style="width: 80%;"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
