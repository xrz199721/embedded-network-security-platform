<?php require_once("header.php"); ?>
		<div class="head-section text-center">
			<h2>失落的道具[电话微波炉]</h2>
			<h3>描述</h3>
			<p><img src="../pic/gallery.jpg" alt="image" width="750px"></img><p>
			<div class="text-left">
			<p>冈部伦太郎，传说中有名的疯狂科学家 （明明是看过本番才知道嘛= =） 。最近又鼓捣出了一堆乱七八糟的东西，在他搞出的那一堆东西毁灭世界之前，你需要赶紧找出flag以启动时间机器恢复原状。</p>
			<p>以下链接会前往：</p>
			<!-- <p><a href="http://192.168.1.10:10010/index.cgi" rel="external nofollow">『冈部の未来道具研究所』</a></p></div> -->

			<?php
				$host_ip = exec("configure_edison --showWiFiIP");
				// echo $host_ip . "\n";
				if(empty($host_ip)) {
					echo "fail get host ip : something wrong!";
					exit("error");
				}
				echo '<p><a href="http://' . $host_ip . ':10010/index.cgi" rel="external nofollow">『冈部の未来道具研究所』</a></p></div>';
			?>

			<h3></h3>
			<form action="CheckFlag.php" method="get">
  			请提交flag：<input type="text" name="flag" />
			<!-- <button onclick="checkflag()"></button> -->
  			<input type="submit" value="提交" />
			</form>
			<!-- <p >you have solve this problem!</p> -->
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