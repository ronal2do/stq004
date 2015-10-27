<!DOCTYPE html>
<html>
    <head>
        <title>Marília sem dengue</title>

       <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>



        <style>
            html, body {
                height: 100%;
                background-color: #65398F;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }
            p{
                color: #fff;
            }
            h1, h4, h3, h5{
                color: #fff;
            }
            h2 {
                color: #30BBA9;
                font-weight: bold;
                font-size: 2.1rem;
            }

            .title {
                font-size: 96px;
                color: #ffd21f;
            }
            input{
                padding: 10px;
                font-size: 1rem;

            }
            div{
                line-height:70%;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <img src="{{ asset('images/landing/logo.png') }}" alt="Logo"><br>
                <img src="{{ asset('images/landing/texto.png') }}" alt="Logo">
                 <h2 ><b>Participe desse movimento</b></h2>
                <img src="{{ asset('images/landing/texto2.png') }}" alt="Logo">
               <br><br>
                <input type="text"
                       placeholder="E-mail:"
                       size="42"
                       >
            </div>
        </div>
        
    </body>
</html>
