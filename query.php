<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Query Results Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align:center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .result-img {
            width: 100px;
            height: auto;
        }
    </style>
</head>

<body>
    <h1>Query Results Table</h1>
    <table>
        <thead>
            <tr>
                <th>Process</th>
                <th>Query</th>
                <th>Result</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Process 1</td>
                <td>SELECT * FROM users;</td>
                <td><img src="path/to/result1.jpg" alt="Result 1" class="result-img"></td>
            </tr>
            <tr>
                <td>Process 2</td>
                <td>SELECT name, age FROM users WHERE age > 30;</td>
                <td><img src="path/to/result2.jpg" alt="Result 2" class="result-img"></td>
            </tr>
            <tr>
                <td>Process 3</td>
                <td>SELECT COUNT(*) FROM orders;</td>
                <td><img src="path/to/result3.jpg" alt="Result 3" class="result-img"></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
