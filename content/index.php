<!doctype html>
<style>
  body { text-align: center; padding: 150px;background-color:white }
  h1 { text-align:center;font-size: 25px;color:black  }
  h2 { text-align:center;font-size: 20px;color:black  }
  body { font: 16px Helvetica, sans-serif; color: #333; }
  article { display: block; text-align: left; width: 650px; margin: 0 auto; }
  a { color: #DC8100; text-decoration: none; }
  a:hover { color: #333; text-decoration: none; }
</style>
<article>
    <h1>Welcome to Hackathon DevOps</h1>
    <h1>We have installed Nginx , Php-fpm and Mysql, and Addtional phpMyAdmin</h1>
    <h1>By Islam Nurul Yakin</h1>
    <h2><?php echo 'We are running PHP, version: ' . phpversion(); ?></h2>
    <h1><a href="info.php?">PHP Info</a></h1>
    <h1><a href="http://13.215.221.67:8090">phpMyAdmin</a></h1>
       <?  
       $database ="semesta";  
       $user = "root";  
       $password = "islam";  
       $host = "mysql";  

       $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);  
       $query = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");  
       $tables = $query->fetchAll(PDO::FETCH_COLUMN);  

        if (empty($tables)) {
          echo "<p>There are no tables in database \"{$database}\".</p>";
        } else {
          echo "<p>Database \"{$database}\" has the following tables:</p>";
          echo "<ul>";
            foreach ($tables as $table) {
              echo "<li>{$table}</li>";
            }
          echo "</ul>";
        }
        ?>
</article>
