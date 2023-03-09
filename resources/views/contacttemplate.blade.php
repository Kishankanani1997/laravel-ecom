<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Contact Template</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>

.email 
        {
            width: 90%;
            height: auto;
            padding: 16px;
            background-color: aliceblue;

        }
    </style>
</head>
<body>

    <div class="email">
        <img src="https://assets.website-files.com/5daaade3e3e3f04da71daa8e/60c9d40039e3533cb7d9373f_GIFs%20in%20Emails.gif" alt="img" class="mt-3" style="width:400px; height:300px;">

        <address style="text-align: left;  color:black;">
            <p><strong>First Name of Customer:- </strong>{{$data["fname"]}}</p>
            <p><strong>Last Name of Customer:- </strong>{{$data["lname"]}}</p>
            <p><strong>Cell Number of Customer:- </strong>{{$data["number"]}}</p>
            <p><strong>City of Customer:- </strong>{{$data["city"]}}</p>
            <p><strong>Email of Customer:- </strong>{{$data["email"]}}</p>
            <p><strong>Message of Customer:- </strong>{{$data["message"]}}</p>

            <p><strong>Company Address: </strong> Kishan Infotech, <br> Royal Complex 101, Sadhuwasvani Road, <br> Rajkot - 360005 </p>
            <p><strong>Email Us:- </strong><a href="mailto:info@kishan.com">info@kishan.com</a></p>
        </address>

    </div>
    
</body>
</html>