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
                font-size: 0.9rem;   
            }
            input {
                -webkit-box-shadow:inset 0 0 10 10px #000;
                   -moz-box-shadow:inset 0 0 10 10px #000;
                        box-shadow:inset 0 0 10 10px #000;
               
            }​
            div{
                line-height:50%;
            }
            .btn {
                display: inline-block;
                padding: 6px 12px;
                margin-bottom: 0;
                font-size: 14px;
                font-weight: 400;
                line-height: 1.42857143;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
                -ms-touch-action: manipulation;
                touch-action: manipulation;
                cursor: pointer;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                background-image: none;
                border: 1px solid transparent;
                border-radius: 4px;
                margin: 0;
                font: inherit;
                color: inherit;
                overflow: visible;
                text-transform: none;
                vertical-align: left;
                margin-left: 300px;
            }
            .btn-success {
                color: #fff;
                background-color: #30BBA9;
                border-color: #555E96;
            }
            .btn-success:hover {
                color: #fff;
                background-color: #123456;
                border-color: #123456;
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
                
                {!! Form::open(array('url' => '/')) !!}
                    <input type="email"
                       name="email"
                       placeholder="E-mail:"
                       size="47"
                       required
                       ><br><br>
                    <input type="phone"
                       name="phone"
                       placeholder="Fone:"
                       size="47"
                       required
                       ><br><br>
                    <a href="/teste"
                       class="btn btn-success"
                    >Obrigado, já participo</a>
                    <input type="submit"
                       class="btn btn-success"
                       value="Participar"
                       >
                    
                {!! Form::close() !!}    
            </div>
        </div>
        
    </body>
</html>
