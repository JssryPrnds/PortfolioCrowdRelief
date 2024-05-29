<?php
echo "<title>CrisisConnect: Empowering Disaster Relief Through Crowdfunding Innovation</title>";
echo "<div align='CENTER'>";
    include_once('header.php');
echo "</div>";


class Controller
{
    public function getPage()
    {
        $command = $_REQUEST['command'] ?? null;
        
        switch ($command) {
            case '0':
                include('home.php');
                break;
            case '1':
                include('dbArch.php');
                break;
            case '2':
                include('erd.php');
                break;
            case '3':
                include('query.php');
                break;
            default:
                include('home.php');
                break;
        }
    }
}

echo "<div>";                
    $controller = new Controller();
    $controller->getPage();    
echo "</div>";        

echo "<div align='CENTER'>";
    include_once('footer.php');
echo "</div>";
?>
