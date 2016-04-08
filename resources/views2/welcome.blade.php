<!DOCTYPE html>
<html ng-app="myapp">
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
                x
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
        @foreach ($errors->all() as $error)
                        <li></li>
                    @endforeach
            @include('site.resources.modal')
        </div>
        
        
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0-beta.2/angular.min.js"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/ngMask.min.js') }}"></script>
<script src="{{ asset('js/ang.js') }}"></script>
    <!-- Include this after the sweet alert js file -->
@include('sweet::alert')
    </body>
</html>
