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
                background-color: #fff9ec;
                color: #5d2a42;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                transition: all 1s ease-in-out;
                text-align:center;
            }

            a {
                color: #247BA0;
                cursor: pointer;

            }

            li a {
                font:bold;
                padding: 0 25px;
                font-size: 20px;
                letter-spacing: .1rem;
            }

            a:hover {
                color: #5d2a42;
                text-decoration: underline;
            }

    
            button {
                background-color: #ffdccc;
                margin: 2rem;
                padding: 1rem;
            }

            button:hover {
                color: #5d2a42;
                background-color: #fb6376;
                cursor: pointer;
            }

            input {
                margin: 2%;
                border: 1px solid #ccc;
                min-width: 350px;
            }

            label {
                top: 0.9rem;
            }

            .edit {
                padding: 0 25%;
            }
            .edit label {
                text-align:right;
            }

            .edit input{
                text-align: left;
            }

            .errors {
                color: #FB6376;
                margin: 2rem;
            }

         
            fieldset {
                min-width: 50%;
                padding: 0 15%;
                text-align: left;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            form {
                border: double 8px #144552;
                max-width: 80%;
                margin:0% 10%;
                padding:3%;                
            }
            
            .form-control {
                color: #720026;
            }

            .form-group {
                margin: 2rem;
                text-align:center;
            }

            .full-height {
                height: 100vh;
            }

            label {
                margin: 2%;
                font-weight: bold;
                text-align: right;
                margin-right: 10px;
                clear: both;
                float: left;
                width: 150px;
                font-size: 115%;
                position: relative;
                top: 0.25rem;
            }
            
            input {
                margin: 2%;
                float: right;
                border-radius: 20px;
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

            h1 {
                padding: 4rem;
            }

            table {
                border: double 6px #144552;
                width: 90%;
                margin: 5%;
            }

            select {
                border: 1px solid #ccc;
                margin-left: 15px;
                border-radius: 20px;
                border: 1px solid #ccc;
                max-width: 70%;
                -moz-border-radius: 10px;
                -webkit-border-radius: 10px;
                border-radius: 10px;
                -moz-box-shadow: 2px 2px 3px #666;
                -webkit-box-shadow: 2px 2px 3px #666;
                box-shadow: 2px 2px 3px #666;
                font-size: 20px;

            }

            .success {
                font: bold;
                transform: scale(1.3);
                color: #fb6376;
                margin: 5rem;
            }

            h2 {
                padding: 3rem;
            }

            tr:first-of-type {
                background: #5D2A42;
                color: #FFDCCC;
                font-weight: bold;
                font-size: 110%;
            }

            td {
                min-width: 130px;
                max-width: fit-content;
                min-height: 120px;
                padding: 1%;
                border: 1px solid #5D2A42;
                overflow: auto;
                font-size: 16px;
            }

            tr:hover:not(tr:first-of-type) {
                background-color: #ffa69e;
                border: 1px solid #5D2A42;
            }

            tr a {
                color: #5D2A42;
            }
            
            tr:hover:not(tr:first-of-type) a {
                font: bold;
                color: #FFF;
            }


            td:hover {
            }

            .content {
                text-align: center;
                padding: 1rem 2rem;           
            }

            select {
                position: relative;
                top: 20px;
                left: 30px;
            }

            .title {
                font-size: 24px;
                padding: 3rem;
            }

            ul li {
                display:inline;
                padding: 1rem;
                transition: 0.7s all ease-in;
            }

            ul {
                text-align: center;
                padding: 5rem;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            input:hover, input:active, input:focus {
                background-color: #ffdccc;
            }

            input:focus, select:focus{
                background-color: #ffdccc;
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