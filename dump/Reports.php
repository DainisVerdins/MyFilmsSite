

<!DOCTYPE HTML>
<html>
<head>
  <title>CrazyDiamond</title>
  <link rel="shortcut icon" type ="image/png" href="img/favicon3_1.png">
  
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <META http-equiv=Content-Type content="text/html; charset=UTF-8">
    
    <style>
	form{display:inline;}<!--this alows buttons be on the one row-->
    </style>
</head>


<body>

  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">Crazy<span class="logo_colour">Diamond</span></a></h1>
          <h2>Simple. Contemporary. Website.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Home</a></li>
          <li class="selected"><a href="Reports.php">Reports</a></li>
          <li><a href="Questions.php">FAQ</a></li>
          <li><a href="examples.php">A Page</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <!-- insert your sidebar items here -->
            <h3>Latest News</h3>
            <h4>New Website Launched</h4>
            <h5>February 1st, 2014</h5>
            <p>2014 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Useful Links</h3>
            <ul>
              <li><a href="#">link 1</a></li>
              <li><a href="#">link 2</a></li>
              <li><a href="#">link 3</a></li>
              <li><a href="#">link 4</a></li>
            </ul>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Search</h3>
            <form method="post" action="#" id="search_form">
              <p>
                <input class="search" type="text" name="search_field" value="Enter keywords....." />
                <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
              </p>
            </form>
          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
      <div id="content">
        <!-- insert the page content here -->
		<h1><b>Practise Reports</b></h1>
        <!-- Tab links -->



<div class="tab">
    <!-- SHIT STARTS HERE -->
  <button class="tablinks" onclick="openCity(event, 'report1');">OS Install</button>
  <button class="tablinks" onclick="openCity(event, 'report2');">Comands(2)</button>
  <button class="tablinks" onclick="openCity(event, 'report3');">WEB Services(3)</button>
  <button class="tablinks" onclick="openCity(event, 'report4');">WEB conf(4)</button>
  <button class="tablinks" onclick="openCity(event, 'report5');">Services(5)</button>
  <button class="tablinks" onclick="openCity(event, 'report6');">LAMP(6)</button>
  <button class="tablinks" onclick="openCity(event, 'report7');">WEB(7)</button>
</div>

<!-- Tab content -->
<div id="report1" class="tabcontent">
  <h3>Lubuntu 18.04 Instalation</h3>
  <hr>
	  <font size="3" color="black">
		<br>
		<ul>
			 <li>Check disk for errors!</li>
			<li>Language: English</li>
			<li>Country: Latvia</li>
			<li>Keyboard: English-US</li>
			<li>Network: do not configure</li>
			<li>Disk Partition: use entire disk</li>
			<li>HTTP Proxy : None</li> 
		</ul>
	  </font>  
	 <hr> 
	 <br>


<font size="3">
	 <!--Comment Show-->
    
    <?php
   $ReportID=1;
     include "CommentsShow.php";
    ?>
    
</font>
	 <!--Insert SCRIPT-->
	 <form method = "POST" action = "CommentInsert.php">
  		<input type = "hidden" name = "date" value = "" >
  		<input type = "hidden" name ="client" value = "">
  		<input type = "hidden" name = "ReportID" value = "1">
  		<textarea name = "text" cols ="66" rows ="2"></textarea>
  		<button type = "submit" name = "submitComent">submit</button>
	</form>
</div>


<div id="report2" class="tabcontent">
  <h3>Comands</h3>
  <hr>
  <br>
  <font size="3">
	   <td>
        Labrotorijas darbs 2<br>
        Datora numurs:4.4 <br>
        Studenti Josuke <br>
        Datums 12.02.2019<br>
        ==================================================================<br>
        datorvards: CrazyDiamond -hostname<br>
        lietotaja vards: josuke - whoami<br>
        CPU:Pentium 4-lshw-class cpu<br>
        RAM kopigais:2GiB - lshw -class memory<br>
        RAM free:1594KiB - free -m<br>
        HDD full: 113GB - df -h --total<br>
        HDD free:103GB - df -h --total<br>
        tikla kate:empls8 - lshw -class network<br>
        GPU:Integrated Graphics Control - lshw -class video<br>
        <br>
        2.Fails adminis<br>
        izveidosana: nano adminis<br>
        <br>
        tiesibas: sudo chmod u=r,g=r,o=r adminis<br>
        <br>
        3. lietotaja izveidosana: sudo adduser guest<br>
        <br>
        4.kataloga reports izvede: sudo mkdir reports<br>
        <br>
     </td>    
  </font>  
    <hr>
  <br>
  <!--Comment Show-->
  <font size="3">
    
    <?php
    $ReportID=2;
     include "CommentsShow.php";
    ?>
    
  </font>
  <!-- Comment insert-->
   <form method = "POST" action = "CommentInsert.php">
      <input type = "hidden" name = "date" value = "" >
      <input type = "hidden" name ="client" value = "">
      <input type = "hidden" name = "ReportID" value = "2">
      <textarea name = "text" cols ="66" rows ="2"></textarea>
      <button type = "submit" name = "submitComent">submit</button>
  </form>
</div>

<div id="report3" class="tabcontent">
  <h3>WEB Services</h3>
  <hr>
  <br>
    <font size="3">
		Datortīkli<br>
		Laboratoriskais darbs 3: tīkla ierīču uzstādīšana<br>
		------------------------------------------------------------------<br>
		Datora numurs 4.4<br>
		Studenti:Dainis <br>
		Datorvārds:CrazyDiamond<br>
		Datums:26/02/2019<br>
		------------------------------------------------------------------<br>
		1. Tīkla interfeisa konfigurācija un komandas tā iegūšanai:<br>
		   - loģiskais vārds:enp1s8<br>
			route -n<br>
		   - MAC adrese:00:16:e6:45:4e:7c<br>
			ifconfig -a	<br>
		   - IP adrese:192.168.0.124<br>
			ifconfig -a<br>
		   - apakštīkla maska:255.255.255.0<br>
			ifconfig -a<br>
		   - noklusējuma vārtejas (default gateway) IP adrese:192.168.0.254<br>
			route -n<br>
		   - DNS serveru IP adreses:127.0.053<br>
			nslookup google.lv<br>
			<br>
		2. Tīkla darbspējas pārbaudes konsoles komandas:<br>
		   - lokāla tīkla df.rtu pieejamības pārbaude:<br>
			ping df.rtu<br>
		   - ārēja tīkla rtu.lv pieejamības pārbaude:<br>
			ping rtu.lv<br>
		   - globāla tīkla Internet pieejamības pārbaude:<br>
			ping google.com<br>
			<br>
		3. DNS servera darbspējas pārbaudes konsoles komandas:<br>
			nslookup ping.lv<br>
			<br>
		4. Konsoles komandas paketes sarakstu atjaunošanai un <br>
		   failu menedžera Midnight Commander uzstādīšanai:<br>
		 sudo apt-get update sudo apt-get mc	<br>
		<br>
		5. Darba secība ar FTP serveri:<br>
		   - lejupielādēt atskaites paraugu report3:get report3<br>
		<br>	
		   - izveidot katalogu compN:mkdir<br>
		<br>
		   - augšupielādēt atskaites report2 un report3:put report2<br>
		put report3<br>
		<br>
	</font >
	   <hr>
	  <br>
	    <font size="3">
    <?php
	    $ReportID=3;
	     include "CommentsShow.php";
    ?>
  </font>
  <!-- Comment insert-->
   <form method = "POST" action = "CommentInsert.php">
      <input type = "hidden" name = "date" value = "" >
      <input type = "hidden" name ="client" value = "">
      <input type = "hidden" name = "ReportID" value = "3">
      <textarea name = "text" cols ="66" rows ="2"></textarea>
      <button type = "submit" name = "submitComent">submit</button>
  </form>
</div>

<div id="report4" class="tabcontent">
  <h3>WEB conf</h3>
  <hr>
  <font size="3">
  	<td>
			Datortīkli<br>
		Laboratoriskais darbs 4: intertīkla konfigurēšana<br>
		--------------------------------------------------------------------------<br>
		Datora numurs:4.4<br>
		Studenti: Dainis<br>
		Datorvārds:CrazyDiamond<br>
		Datums:19/03/2019<br>
		--------------------------------------------------------------------------<br>
		1. Tīkla interfeisa konfigurācija:<br>
		   - IP adrese:192.168.4.4/24<br>
		   - apakštīkla maska:255.255.255.0<br>
		   - noklusējuma vārtejas (default gateway) IP adrese:192.168.4.254<br>
		   - DNS serveru IP adreses:<br>
				213.175.88.196<br>
		                      8.8.8.8<br>
		<br>
		2. Tīkla interfeisa statiskās konfigurācijas uzstādīšanas kārtība:<br>
			1)ifconfig-a //to check your network interface<br>
			2)open this file in system in this path-> /etc/netplan/01-netcfg.yaml <br>
		//Important: In case a YAML file is not created by the distribution installer,<br>
		//use this command ->sudo netplan generate <br>
			3)//here is my shablom for Komp4.4 BTW THIS IS NETPLAN CONFIGURATION<br>
			//<br>
		// # This file describes the network interfaces available on your system<br>
		// # For more information, see netplan(5).<br>
		// network:<br>
		//   version: 2<br>
		//  renderer: networkd<br>
		//   ethernets:<br>
		//     enp1s8:<br>
		//       dhcp4: no<br>
		//       dhcp6: no<br>
		//       addresses: [192.168.4.4/24, ]<br>
		//       gateway4:  192.168.4.254<br>
		//       nameservers:<br>
		               addresses: [213.175.88.196, 8.8.8.8]<br>
		<br>
			//<br>
			//<br>
			4)sudo netplan apply<br>
			5)???????<br>
			6)PROFIT!!!<br>
			7)ifconfig -a <br>
		<br>	
		<br>
		3. Tīkla darbspējas pārbaudes komandas:<br>
		   - tīkla interfeisa stāvokļa un tekošas konfigurācijas pārbaude:<br>
			ifconfig -a<br>
		   - sava apakštīkla datoru pieejamības pārbaude:<br>
			ping CrazyDiamond  vai ping localhost<br>
		   - maršrutētāja pārbaude kaimiņ apakštīkla piekļūšanai:<br>
			ping mainframe<br>
		   - maršrutētāja pārbaude df.rtu apakštīkla piekļūšanai:<br>
			ping df.rtu<br>
		   - maršrutētāja pārbaude Internet saišu piekļūšanai:<br>
			ping google.lv<br>
		   - DNS servera darbspējas pārbaude:<br>
			nslookup zevs.df.rtu <br>
		   - hosts faila darbspējas pārbaude: <br>
			nslookup CrazyDiamond.politeh.lv //piem sevi<br>
		<br>
		4. Maršruti līdz saitēm un komandas tos iegūšanai:<br>
		   - līdz sava apakštīkla datora:<br>
		     - komanda:<br>
				traceroute CrazyDiamond<br>
		     - maršruts:<br>
			 1  CrazyDiamond (127.0.1.1)  0.051 ms  0.018 ms  0.020 ms<br>
		<br>
		   - līdz kaimiņ apakštīkla datora:<br>
		     - komanda:<br>
			 traceroute Nagibator<br>
		     - maršruts:<br>
			1  192.168.4.254 (192.168.4.254)  0.513 ms  0.505 ms  0.598 ms<br>
			 2  Nagibator (192.168.3.2)  1.988 ms  2.050 ms  2.113 ms<br>
		<br>
		   - līdz df.rtu apakštīkla datora ftp.df.rtu:<br>
		     - komanda:<br>
			traceroute ftp.df.rtu<br>
		     - maršruts:<br>
			1  192.168.4.254 (192.168.4.254)  0.474 ms  0.545 ms  0.600 ms<br>
		<br>
		   - līdz Interneta saitam ping.lv:<br>
		     - komanda:<br>
			traceroute ping.lv<br>
		<br>
		     - maršruts:<br>
		 1  192.168.4.254 (192.168.4.254)  1.712 ms  1.733 ms  1.760 ms<br>
		 2  * * *<br>
		 3  78.154.143.14 (78.154.143.14)  5.410 ms  5.490 ms  5.582 ms<br>
		 4  78.154.143.15 (78.154.143.15)  7.131 ms  7.205 ms  7.282 ms<br>
		 5  78.154.153.135 (78.154.153.135)  6.235 ms  7.325 ms  7.426 ms<br>
		 6  balticom-64-54.balticom.lv (82.193.64.54)  5.923 ms  4.995 ms  5.327 ms<br>
		 7  balticom-193-72-102.balticom.lv (82.193.72.102)  5.073 ms  7.438 ms  7.350 ms<br>
		 8  balticom-193-69-12.balticom.lv (82.193.69.12)  7.262 ms  6.721 ms  6.512 ms<br>
		 9  balticom-193-69-252.balticom.lv (82.193.69.252)  6.413 ms  6.443 ms  6.420 ms<br>
		<br>
	</td>
  </font>
    <hr>
    <br>
  <font size="3">
    <?php
    $ReportID=4;
     include "CommentsShow.php";
    ?>
  </font>
  <!-- Comment insert-->
   <form method = "POST" action = "CommentInsert.php">
      <input type = "hidden" name = "date" value = "" >
      <input type = "hidden" name ="client" value = "">
      <input type = "hidden" name = "ReportID" value = "4">
      <textarea name = "text" cols ="66" rows ="2"></textarea>
      <button type = "submit" name = "submitComent">submit</button>
  </form>
</div>

<div id="report5" class="tabcontent">
  <h3>Internet Service Setup</h3>
  <hr>
  <br>
  <font size="3">
  	<td>
		 Datortīkli<br>
		Laboratoriskais darbs 5: tīkla dienestu uzstādīšana<br>
		--------------------------------------------------------------------------<br>
		Datora numurs:4.4<br>
		Studenti: Dainis<br>
		Datorvārds:CrazyDiamond<br>
		Datums:30/03/2019 <br>
		--------------------------------------------------------------------------<br>
		1. SSH dienests:<br>
		   - mērķi:<br>
			 remote acces from another pc to this pc<br>
		<br>
		   - instalācijas kārtība:<br>
			sudo apt install openssh-server<br>
		<br>
		   - stāvokļa pārbaudes komandas:<br>
			sudo service status ssh<br>
			sudo service ssh  start<br>
			sudo service ssh stop<br>
		<br>
		   - sākotnējā sveiciena (baner) izveidošana:<br>
			#1) in /etc/ssh must create text what will be banner<br>
			nano ssh-banner-message.txt<br>
			#2)need to open sshd_config -> nano sshd_config<br>
			#3)find out the "#no default banner path" header and uncoment<br>
			# and write path to banner file ,my example is :<br>
			Banner /etc/ssh/ssh-banner-message.txt<br>
			#4)after saving file type this comand in console(it restarts ssh)<br>
			service ssh restart<br>
			#5)?????????<br>
			#6)PROFIT!!!<br>
			<br>
		   - pieslēgšana no lokāla datora, no lokāla tīkla un no Interneta:<br>
			#lokālais dators<br>
			ssh localhost<br>
			#lokalais tikls<br>
			ssh guest@mainframe<br>
			#internets<br>
			#must be download and installed PuTTy (if you have windows 7)<br>
			#open programm and in field host name/ip adrees type:<br>
			#ip btw command to check that is ping crazydiamond.politeh.lv <br>
			213.175.88.238	<br>
			#or localhostname<br>
			crazydiamond.politeh.lv<br>
		<br>
		2. FTP dienests:<br>
		   - mērķi:<br>
			ļauj pārsūtīt failus starp datoriem(serveris <-> klients)<br>
		<br>
		  - instalācijas kārtība:<br>
			#in console<br>
			sudo apt install vsftpd<br>
		<br>
		   - stāvokļa pārbaudes komandas:<br>
			service vsftpd status<br>
			netstat -tlpn | grep vsftpd<br>
		 <br>
		   - pieslēgšana no lokāla datora, no lokāla tīkla un no Interneta:<br>
			#local computer<br>
			ftp localhost<br>
			#local web (here Nagibator as example)<br>
			ftp Nagibator<br>
			#Ethernet<br>
			ftp://ddb002@ftp.df.rtu<br>
		<br>
		<br>
		3. SAMBA dienests:<br>
		   - mērķi:<br>
			ļauj failu sharing ar dažādam ierīcem sava starpa <br>
		  <br>
		   - instalācijas kārtība:<br>
			#in console<br>
			sudo apt install cifs-utils <br>
			#in root directory type this in console<br>
			mkdir mnt<br>
			#in mnt folder create two folders common and studnet<br>
			mkdir common<br>
			mkdir studnet<br>
			<br>
		   - pieslēgšanas pie koplietojuma resursiem (common un studnet) komandas:<br>
			#How to mount common<br>
			mount -t  //zevs.df.rtu/common  /mnt/common -o user=ddb001,guest<br>
			<br>
			#How to mount StudNet<br>
			mount -t //hera.df.rtu/StudNet   /mnt/studnet -o user=ddb001,guest<br>
			<br>
			#After that <br>
			mount -a <br>
			#or<br>
			reboot<br>
		<br>
			#command to check if all is properly mounted <br>
			df<br>
		<br>
		   - pastāvīgas pieslēgšanas pie koplietojuma resursiem organizācija:<br>
			#type this in console sudo nano /etc/fstab<br>
			#add this lines to file and save it<br>
			//zevs.df.rtu/common	/mnt/common	cifs	_netdev,user=ddb001,guest<br>
			//hera.df.rtu/StudNet	/mnt/studnet	cifs	_netdev,user=ddb001,guest<br>
			<br>
  	</td>
  </font>
  <hr>
  <br>
    <font size="3">
    <?php
    $ReportID=5;
     include "CommentsShow.php";
    ?>
  </font>
  <!-- Comment insert-->
   <form method = "POST" action = "CommentInsert.php">
      <input type = "hidden" name = "date" value = "" >
      <input type = "hidden" name ="client" value = "">
      <input type = "hidden" name = "ReportID" value = "5">
      <textarea name = "text" cols ="66" rows ="2"></textarea>
      <button type = "submit" name = "submitComent">submit</button>
  </form>
</div>

<div id="report6" class="tabcontent">
  <h3><b>LAMP</b></h3>
  <hr>
  <br>
  	<font size ="3">
  		<td>
			  			 Datortīkli<br>
			Laboratoriskais darbs 6: tīmekļa dienestu uzstādīšana<br>
			--------------------------------------------------------------------------<br>
			Datora numurs4.4 <br>
			Studenti:Dainis <br>
			Datorvārds:CrazyDiamond<br>
			Datums:02/05/02<br>
			--------------------------------------------------------------------------<br>
			1. Apache dienests:<br>
			   - mērķi:<br>
				HTTP serveris <br>
			   - instalācijas kārtība:<br>
				tasksel install lamp-server<br>
			   - stāvokļa pārbaudes komandas:<br>
				service apache2 status<br>
			   - pieslēgšana no lokāla datora, no lokāla tīkla un no Interneta:<br>
				http://localhost/ura.html<br>
				http://192.168.4.4/ura.html<br>
				http://crazydiamond.politeh.lv/ura.html<br>
			<br>
			2. PHP hiperteksta priekšprocesors:<br>
			   - mērķi:<br>
				Rakstit skriptus web lappaspusem<br>
			   - instalācijas kārtība:<br>
				tasksel install lamp-server<br>

			   - darbspējas pārbaudes kārtība:<br>
				Izveidot failu hello.php un uzrakstīt tāja <!php printf("Hello,world!";!><br>
				palaist hello.php<br>
			   - kopdarba ar Apache serveru pārbaudes kārtība:<br>
				Atver var/www/html/ un izveidot ,un uzrakstīt faila test.php<br>
				"<!php echo phpinfo();!>"<br>
			<br>
			<br>
			3. MySQL dienests:<br>
			   - mērķi:<br>
				datu bažu izveidei domāta sistēma<br>
			   - instalācijas kārtība:<br>
				tasksel install lamp-server<br>
			   - stāvokļa pārbaudes komandas:<br>
				service mysql status<br>
				service mysql start<br>
			<br>
			<br>
			4. phpMyAdmin menedžeris:<br>
			   - mērķi:<br>
				domāts ,lai pārvalditu MSQL datubāzes<br>
			 <br>
			   - instalācijas kārtība:<br>
				apt-get install phpmyadmin	<br>
			   - pielietošanas kārtība:<br>
				*MSQL consoli iedot root tiesības phpmy admin<br>
				atvert http://localhost/phpmyadmin<br>
				ieiet kā phpmyadmin vārdu un pāroli<br>
			<br>	
			<br>
			*<br>
			 #Komandas,lai dotu root tiesības phpmyadmin :<br>
			#1)Ubuntu Konsoli -> mysql -u root -p<br>
			#2)MSQL koncoli -> CREATE USER 'phpmyadmin'@'localhost' IDENTIFIED BY 'pasword';<br>
			#3)MSQL konsoli ->FLUSH PRIVILEGES;<br>
			#4)"Turn on Grant"->MSQL konsoli -> GRANT ALL ON *.* TO 'phpmyadmin'@'localhost' WITH GRANT OPTION;<br>
			#5) ????????<br>
			#6)PROFIT!!<br>
			<br>
			<br>
			#Avots informacijai -><br> https://askubuntu.com/questions/34409/unable-to-login-to-phpmyadmin-with-the-root-user<br>
			#Ka izdarīt ta lai piekļūtu no citiem datoriem pie MSQL servera -> <br>https://www.techrepublic.com/article/how-to-set-up-mysql-for-remote-access-on-ubuntu-server-16-04/<br>

  		</td>
  	</font>
  <br> 
    <hr>
   <br>
	    <font size="3">
    <?php
    $ReportID=6;
     include "CommentsShow.php";
    ?>
  </font>
  <!-- Comment insert-->
   <form method = "POST" action = "CommentInsert.php">
      <input type = "hidden" name = "date" value = "" >
      <input type = "hidden" name ="client" value = "">
      <input type = "hidden" name = "ReportID" value = "6">
      <textarea name = "text" cols ="66" rows ="2"></textarea>
      <button type = "submit" name = "submitComent">submit</button>
  </form>
</div>

<div id="report7" class="tabcontent">
  <h3><b>WEB</b></h3>
    <hr>
  <font size="3">
	<td>
		Datortīkli<br>
		Laboratoriskais darbs 7: Web lapaspuses izveidošana<br>
		--------------------------------------------------------------------------<br>
		Datora numurs:4.4
		Studenti: Dainis
		Datorvārds:CrazyDiamond<br>
		Datums:<br>
		--------------------------------------------------------------------------<br>
		1. Piemēra lapaspuse comment:<br>
		   - SQL vaicājums komentāru izlasīšanai:<br>
		<br>
		   - SQL vaicājums komentāra pievienošanai:<br>
		<br>
		   - SQL vaicājums komentāra dzēšanai:<br>
		<br>
		   - PHP skripts ar paskaidrojumiem, kas izvada komentārus:<br>
		<br>
		   - PHP skripts ar paskaidrojumiem, kas pievieno komentāru:<br>
		<br>
		   - PHP skripts ar paskaidrojumiem, kas dzēš komentāru:<br>
		<br>
		<br>
		<br>
		2. Kursa laboratorisko darbu prezentācijas lapaspuse:<br>
		   - titullapas HTML kods:<br>
		<br>
		   - atskaites lapas HTML kods:<br>
		<br>
		   - datubāzes struktūra kontroljautājumu atbilžu glabāšanai:<br>
		<br>
		   - PHP skripts kontroljautājumu un atbilžu izvadīšanai:<br>
		<br>
		   - PHP skripts atbildes uz kontroljautājumu pievienošanai:<br>
		<br>
		   - PHP skripts atbildes uz kontroljautājumu rediģēšanai:<br>
		<br>
	</td>
  </font>
    <hr>
	<br>
	<font size="3">
	    <?php
		    $ReportID=7;
		     include "CommentsShow.php";
	    ?>
  </font>
  <!-- Comment insert-->
   <form method = "POST" action = "CommentInsert.php">
      <input type = "hidden" name = "date" value = "" >
      <input type = "hidden" name ="client" value = "">
      <input type = "hidden" name = "ReportID" value = "7">
      <textarea name = "text" cols ="66" rows ="2"></textarea>
      <button type = "submit" name = "submitComent">submit</button>
  </form>
</div>

</div><!--added shit-->
<script type ='text/javascript'>

		function openCity(evt, cityName) {
		  var i, tabcontent, tablinks;
		  tabcontent = document.getElementsByClassName("tabcontent");
		  for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		  }
		  tablinks = document.getElementsByClassName("tablinks");
		  for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
		  }
		  document.getElementById(cityName).style.display = "block";
		  evt.currentTarget.className += " active";
		}
		</script>
		
<!--deleted shit -->


















	 <!--Tab links 
    <div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.html">Home</a> | <a href="examples.html">Examples</a> | <a href="page.html">A Page</a> | <a href="another_page.html">Another Page</a> | <a href="contact.html">Contact Us</a></p>
      <p>Copyright &copy; simplestyle_banner | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">HTML5 Web Templates</a></p>
    </div>
  </div>
-->
  
</body>
</html>
