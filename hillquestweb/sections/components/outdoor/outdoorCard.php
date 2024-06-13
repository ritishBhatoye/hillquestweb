<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/@webpixels/css@1.2.6/dist/index.css" rel="stylesheet">
    <style>
        .body-style {
            font-family: 'Open Sans', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f9f9f9;
        }
        .card-outdoor {
            display: flex;
            flex-direction: column;
            max-width: 900px;
            margin: 20px;
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card-outdoor:hover {
            transform: translateY(-10px);
            box-shadow: 0 16px 32px rgba(0, 0, 0, 0.2);
        }
        .card-outdoor img {
            width: 100%;
            height: auto;
        }
        .card-outdoor-content {
            padding: 20px;
        }
        .card-outdoor-title {
            font-size: 24px;
            font-weight: 700;
            margin: 0 0 10px 0;
        }
        .card-outdoor-text {
            font-size: 16px;
            color: #666;
            margin-bottom: 20px;
        }
        .card-outdoor-icons {
            display: flex;
            justify-content: space-around;
        }
        .card-outdoor-icon {
            text-align: center;
            transition: color 0.3s;
        }
        .card-outdoor-icon:hover {
            color: #e63946;
        }
        .card-outdoor-icon i {
            font-size: 32px;
            margin-bottom: 8px;
        }
        .card-outdoor-icon span {
            display: block;
            font-size: 14px;
            font-weight: 600;
        }
    </style>
</head>
<body class="body-style">
    <div class="card-outdoor">
        <img src="https://via.placeholder.com/900x300" alt="Billboard">
        <div class="card-outdoor-content">
            <h1 class="card-outdoor-title">Billboard advertising creates an instant impression and has excellent recall rates</h1>
            <p class="card-outdoor-text">We work in any domestic market, and internationally. With a few details we will quickly present you with the best available billboard locations in the areas.</p>
            <div class="card-outdoor-icons">
                <div class="card-outdoor-icon">
                    <i class="wp-icon wp-icon-location"></i>
                    <span>Traditional</span>
                </div>
                <div class="card-outdoor-icon">
                    <i class="wp-icon wp-icon-bus"></i>
                    <span>Transit Media</span>
                </div>
                <div class="card-outdoor-icon">
                    <i class="wp-icon wp-icon-road"></i>
                    <span>Highway</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
