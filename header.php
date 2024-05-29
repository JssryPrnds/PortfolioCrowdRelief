<html>

<head>
    <title></title>
    <style>
        body {
            background-color: #82E0AA;
            font-family: Arial, sans-serif;
        }

        .header {
            text-align: center;
            padding: 10px;
            height: 100vh;
        }

        .container {
            display:flex;
            margin: 0 auto; 
            padding: 20px;
        }   
        
        .nav-bar {
            width: 100%;  
            background-color: #333;  
            padding: 15px 0;  
            text-align: center;  
            font-size: 20px;  
            font-weight: bold;  
            color: white; 
        }

        header a {
            color: white;
            text-decoration: none;
            margin-right: 10px;
            transition: color 0.3s; 
        }

        header a:hover {
            color: #ffd700; 
        }

        hr {
            border: 1px solid #2E7D32;
        }
    </style>
</head>

<body>
    <header>
    <div class="container">
        <div class="nav-bar">
        <a href="index.php?command=0">Home </a>|&nbsp
            <a href="index.php?command=1">Database Architecture </a>|&nbsp
            <a href="index.php?command=2">Entity Relationship Diagram</a>|&nbsp
            <a href="index.php?command=3">SQL Queries </a>|&nbsp
        </div>
            
    </header>
    <hr>
</body>

</html>
