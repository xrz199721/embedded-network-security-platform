<?php require_once("header.php"); ?>
  <div class="head-section text-center">
    <h2>XSS</h2>
    <h3>描述</h3>
    <div class="text-left">
    <!-- <p>以下链接会前往xss源站点：<a href="http://192.168.1.10:7074/hack.php" rel="external nofollow">xss</a></p> -->
    <?php
    	  $host_ip = exec("configure_edison --showWiFiIP");
				// echo $host_ip . "\n";
				if(empty($host_ip)) {
					echo "fail get host ip : something wrong!";
					exit("error");
				}
        echo '<p>以下链接会前往xss源站点：<a href="http://' . $host_ip . ':7074/hack.php" rel="external nofollow">xss</a></p>';
        echo '<p> 网页源代码链接：<a href="http://' . $host_ip . ':7074/hack.txt" rel="external nofollow">source</a></p>';
    ?>
      <p>
        如果能够调用console.log()输出任何内容，即xss成功。
      </p>
    
    </div>
    <h3></h3>
    <form action="CheckFlag.php" method="get">
      提交网页链接：hack.php?name=<input type="text" name="flag" />
      <input type="submit" value="提交" />
    </form>
    <?php 
				$fr = fopen("name", 'r');
				$name = str_replace(PHP_EOL, '', fgets($fr));
				if(file_exists("ans.txt")) {
					$fr = fopen("ans.txt", 'r');
					while(!feof($fr)) {
						$line = fgets($fr);
						$line = str_replace(PHP_EOL, '', $line); 
						if($line != "" && $line == $name) {
							echo '<p >you have solve this problem!</p>';
							break;
						}
					}
				}
    ?>
  </div>
  </center>
<?php require_once("footer.php"); ?>