<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Mug Bruno" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <style>
            .log-bg{
                width:100%;
                height:100%;
                position: fixed;
                top:0;
                background: #dddddd;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .log-bg .log_wraps{
                background-color: #eeee;
                padding:10px;
                margin: 10px;
                border-radius: 5px;
                width: 600px;
            }
            .log-bg input[type=text], input[type=password], input[type=email]{
                outline: none;
                border: 1px solid #ddd;
                border-radius: 4px;
                /* width: 100%; */
                padding: 12px;
            }
            .log-bg input[type=submit]{
                outline: none;
                border: 1px solid #ddd;
                border-radius: 4px;
                /* width: 100%; */
                padding: 12px;
                background-color: #ddd;
                color: #232323;
                font: 300 17px Ubuntu,Arial;
            }
            .log-bg input[type=submit]:hover{
                background-color: #232323;
                color: #ddd;
            }
            .log-bg .form-group{
                display: flex;
                flex-direction: column;
                align-items: left;
                font: 300 17px Ubuntu,Arial;
                color:#232323;
                justify-content: space-around;
                padding: 10px;
            }
            .log-bg .form-group label{
                font: 300 17px Ubuntu,Arial;
                color:#232323;
            }
        </style>
    </head>

    <body class="log-bg">
        <section>
			@yield('content')
        </section>
			<!-- ========================== Login Elements ============================= -->
		</div>
	</body>
</html>
