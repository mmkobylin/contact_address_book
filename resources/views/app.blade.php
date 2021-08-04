<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact Address Book</title>

        <!-- Fonts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
            html, body {
                padding: 5% 3;
                background-color: #FFF;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                transform: all 0.5s ease-in;
            }

            button {
                background-color: #DDFFF7;
                margin: 2rem;
                padding: 1rem;
            }

            button:hover {
                background-color: #93e1d8;
                cursor: pointer;
            }

            .edit input {
                margin: 2%;
                border: 1px solid #ccc;
                min-width: 350px;
            }

            label {
                margin-top: 2.5%
            }

            .errors {
                color: #720026;
            }

         
            fieldset {
                min-width: 50%;
                padding: 0 25%;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .form-control {
                color: #720026;
            }

            .form-group {
                margin: 2rem;
                text-align:left;
            }

            .full-height {
                height: 100vh;
            }

            label {
                margin: 0.5%;
                font-weight: bold;
                text-align: left;
                clear: both;
                float: left;
                width: 150px;
                font-size: 120%;
            }

            input {
                margin: 2%;
                border: 1px solid #ccc;
                max-width: 70%;
                -moz-border-radius: 10px;
                -webkit-border-radius: 10px;
                border-radius: 10px;
                -moz-box-shadow: 2px 2px 3px #666;
                -webkit-box-shadow: 2px 2px 3px #666;
                box-shadow: 2px 2px 3px #666;
                font-size: 20px;
                padding: 4px 7px;
                outline: 0;
                -webkit-appearance: none;
            }

            input:hover, input:active, input:focus {
                background-color: #DDFFF7;
            }

            input:focus {
                border-color: #339933;
            }

            h1 {
                padding: 3rem;
            }
           
            .position-ref {
                position: relative;
            }

            table {
                border: double 5px black;
                padding: 2rem;
            }

            tr:first-of-type {
                background: cyan;
                font-weight: bold;
                font-size: 110%;
            }

            td {
                min-width: 150px;
                min-height: 120px;
                padding: 1%;
            }

            td:hover {
                color: indigo;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                padding: 1rem 5re            
            }

            .title {
                font-size: 84px;
            }

            ul li {
                display:inline;
                padding: 1rem;
                transform: 0.7s all ease-in;
            }

            ul li:hover {
                color: pink;
            }

            ul {
                text-align: center;
                padding: 5rem;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    
    <body>
        
        <main class="content">
            <h1>
                @yield("title")
            </h1>
            @yield("content")
            @include("partials/nav")
        </main>


    </body>
</html>