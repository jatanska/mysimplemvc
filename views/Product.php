<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">
    <title>Simple PHP MVC - Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/simplemvc/css/my.css"/>
</head>

<body>

    <section>
    <div class="container">
            <div class="row">
                <div class="col">
                <h1>My Product:</h1>
                    <ul>
                        <li><?php echo $product->getTitle(); ?></li>
                        <li><?php echo $product->getDescription(); ?></li>
                        <li><?php echo $product->getPrice(); ?></li>
                        <li><?php echo $product->getSku(); ?></li>
                        <li><?php echo $product->getImage(); ?></li>
                    </ul>
                    <a href="<?php echo $routes->get('homepage')->getPath(); ?>">Back to homepage</a>
                </div>
                <div class="col">
                Column
                </div>
                <div class="col">
                Column
                </div>
            </div>
            </div>
    </section>
        
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>