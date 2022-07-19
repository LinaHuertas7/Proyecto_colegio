<?

class App
{

    function __construct()
    {
        echo "<p>Welcome new app</p>";
        $url = $_GET["url"];
        $url = rtrim($url, "/");
        $url = explode("/", $url);
    }
}
