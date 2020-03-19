<?php 
  error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title><?php include "dina_titel.php"; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="index, follow">
    <meta name="description" content="<?php include "dina_meta1.php"; ?>">
    <meta name="keywords" content="<?php include "dina_meta2.php"; ?>">
    <meta http-equiv="Copyright" content="daftarjualbeli.com">
    <meta name="author" content="Poeji">
    <meta http-equiv="imagetoolbar" content="no">
    <meta name="language" content="Indonesia">
    <meta name="revisit-after" content="7">
    <meta name="webcrawlers" content="all">
    <meta name="rating" content="general">
    <meta name="spiders" content="all">
    
    <link rel="stylesheet" href="<?=$f['folder']?>/style.css" type="text/css" media="screen" />
    <?php /*?><link rel="stylesheet" type="text/css" href="<?=$f['folder']?>/layout.css" /><?php */?>
    <link rel="stylesheet" type="text/css" href="<?=$f['folder']?>/style_slider.css" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
    
   <?php /*?> <script language="javascript" type="text/javascript" src="<?=$f['folder']?>/js/jquery.js"></script><?php */?>
	<script src="<?php echo "$f[folder]/js/jquery-1.4.js" ?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?=$f['folder']?>/script.js"></script>
    <script src="<?php echo "$f[folder]/js/newsticker.js" ?>" type="text/javascript"></script>

<script language="JavaScript" type="text/javascript">
  function addSmiley(textToAdd){
  document.formshout.pesan.value += textToAdd;
  document.formshout.pesan.focus();
}
</script>
<script src="<?php echo "$f[folder]/js/jquery.js" ?>" type="text/javascript"></script>
<script src="<?php echo "$f[folder]/js/skrip.js" ?>" type="text/javascript"></script>

<script type="text/javascript"> 
 $(document).ready( function()
 {	
		$('#lofslidecontent45').lofJSidernews( { interval:4000,
											 	easing:'easeInOutQuad',
												duration:1200,
												auto:true } );						
	});
</script>	
  <style>	
	ul.lof-main-wapper li{
		position:relative;	
	}
  div#copyright { display: none; }
  
  .line {
    background: url("<?=$f['folder']?>/images//line.gif") no-repeat scroll 22px 100% transparent;
    float: left;
    line-height: 16px;
    margin: -1px 0 0;
    width: 200px;
}
</style>
</head>
<body>
    <div id="art-page-background-gradient"></div>
    <div id="art-main">
        <div class="art-sheet">
            <div class="art-sheet-tl"></div>
            <div class="art-sheet-tr"></div>
            <div class="art-sheet-bl"></div>
            <div class="art-sheet-br"></div>
            <div class="art-sheet-tc"></div>
            <div class="art-sheet-bc"></div>
            <div class="art-sheet-cl"></div>
            <div class="art-sheet-cr"></div>
            <div class="art-sheet-cc"></div>
            <div class="art-sheet-body">
                <div class="art-header">
                    <div class="art-header-jpeg"></div>
                    <script type="text/javascript" src="<?=$f['folder']?>/swfobject.js"></script>
                    <div id="art-flash-area">
                    <div id="art-flash-container">
                    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="980" height="245" id="art-flash-object">
                        <param name="movie" value="images/flash.swf" />
                        <param name="quality" value="high" />
                    	<param name="scale" value="exactfit" />
                    	<param name="wmode" value="transparent" />
                    	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.70&amp;framerate1=24" />
                        <param name="swfliveconnect" value="true" />
                        <!--[if !IE]>-->
                        <object type="application/x-shockwave-flash" data="<?=$f['folder']?>/images/flash.swf" width="980" height="245">
                            <param name="quality" value="high" />
                    	    <param name="scale" value="exactfit" />
                    	    <param name="wmode" value="transparent" />
                    	    <param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.70&amp;framerate1=24" />
                            <param name="swfliveconnect" value="true" />
                        <!--<![endif]-->
                        <!--[if !IE]>-->
                        </object>
                        <!--<![endif]-->
                    </object>
                    </div>
                    </div>
                    <script type="text/javascript">swfobject.switchOffAutoHideShow();swfobject.registerObject("art-flash-object", "9.0.0", "expressInstall.swf");</script>
                    <div class="art-logo" style="height:100px;
												margin-left:-5px;
												width:938px;
												float:left;
												padding:15px 0px 0px 10px;
												font-family:Anderson Torchy The Battery Boy;
												font-style:italic; font-size:32px;
												font-weight:bold; color:#FF3333;
												text-shadow:#FFFF33 2px 2px;">Ade-Portal-News</div>
												
					<div id="slogan-text" class="art-logo-text" style="height:100px;
												margin-left:30px;
												margin-top:40px;
												width:400px;
												float:left;
												padding:20px 0px 0px 10px;
												font-family:Anderson Torchy The Battery Boy;
												font-style:italic; font-size:14px;
												text-shadow:#ffff00 1px 1px;">Akurat-Terpadu-Terupdate</div>
					
                </div>
                <div class="art-nav">
                	<div class="l"></div>
                	<div class="r"></div>
                	<ul class="art-menu">
                    <?php               
              $main=mysql_query("SELECT * FROM mainmenu WHERE aktif='Y'");

              while($r=mysql_fetch_array($main)){
				  if($r['nama_menu']=="Beranda") {
				echo "<li><a href='$r[link]' class=\"active\"><span class=\"l\"></span><span class=\"r\"></span><span class=\"t\">$r[nama_menu]</span></a>";  
				  } else {
				 echo "<li><a href='$r[link]'><span class=\"l\"></span><span class=\"r\"></span><span class=\"t\">$r[nama_menu]</span></a>"; //class="active"	  
				  }
	            
	             $sub=mysql_query("SELECT * FROM submenu, mainmenu  
                                 WHERE submenu.id_main=mainmenu.id_main 
                                 AND submenu.id_main=$r[id_main]");
               $jml=mysql_num_rows($sub);
                // apabila sub menu ditemukan
                if ($jml > 0){
                  echo "<div><ul>";
	                while($w=mysql_fetch_array($sub)){
                    echo "<li><a href='$w[link_sub]'><span>&#187; $w[nama_sub]</span></a></li>";
	                }           
	                echo "</ul></div>
                        </li>";
                }
                else{
                  echo "</li>";
                }
              }        
            ?>
                		
                	</ul>
                </div>
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-sidebar1">
                            <div class="art-vmenublock">
                                <div class="art-vmenublock-body">
                                            <div class="art-vmenublockheader">
                                                <div class="l"></div>
                                                <div class="r"></div>
                                                 <div class="t">Kategori</div>
                                            </div>
                                            <div class="art-vmenublockcontent">
                                                <div class="art-vmenublockcontent-tl"></div>
                                                <div class="art-vmenublockcontent-tr"></div>
                                                <div class="art-vmenublockcontent-bl"></div>
                                                <div class="art-vmenublockcontent-br"></div>
                                                <div class="art-vmenublockcontent-tc"></div>
                                                <div class="art-vmenublockcontent-bc"></div>
                                                <div class="art-vmenublockcontent-cl"></div>
                                                <div class="art-vmenublockcontent-cr"></div>
                                                <div class="art-vmenublockcontent-cc"></div>
                                                <div class="art-vmenublockcontent-body">
                                            <!-- block-content -->
                                                            <ul class="art-vmenu">
      <?php
          include "$f[folder]/kategori.php";      
      ?>
                                                            	
                                                            </ul>
                                            <!-- /block-content -->
                                            
                                            		<div class="cleared"></div>
                                                </div>
                                            </div>
                            		<div class="cleared"></div>
                                </div>
                            </div>

                           <div class="art-block">
                                <div class="art-block-body">
                                            <div class="art-blockheader">
                                                <div class="l"></div>
                                                <div class="r"></div>
                                                 <div class="t">My Profile</div>
                                            </div>
                                            <div class="art-blockcontent">
                                                <div class="art-blockcontent-tl"></div>
                                                <div class="art-blockcontent-tr"></div>
                                                <div class="art-blockcontent-bl"></div>
                                                <div class="art-blockcontent-br"></div>
                                                <div class="art-blockcontent-tc"></div>
                                                <div class="art-blockcontent-bc"></div>
                                                <div class="art-blockcontent-cl"></div>
                                                <div class="art-blockcontent-cr"></div>
                                                <div class="art-blockcontent-cc"></div>
                                                <div class="art-blockcontent-body">
                                            <!-- block-content -->
          
	   <table border=1 align=center>
			<tr><th>NAMA</th><td> &nbsp&nbsp ADE SAPUTRA </td>
			<tr><th>NIM</th><td> &nbsp&nbsp 1655201018</td></tr>
			<tr><th>AGAMA</th><td> &nbsp&nbsp ISLAM</td></tr>
			<tr><th>JENIS KELAMIN</th><td> &nbsp&nbsp LAKI - LAKI</td></tr>
			<tr><th>TMPAT/TGL LAHIR</th><td> &nbsp&nbsp PKU, 19071997</td></tr>
			<tr><th>ALAMAT</th><td> &nbsp&nbsp JL.T.MAHARANI </td></tr>
			<tr><th>NO HP</th><td> &nbsp&nbsp 081270242882</td></tr>
			<tr><th>PRODI</th><td><center>TEKNIK INFORMATIKA</center></td></tr>
			<tr><th>FAKULTAS</th><td> &nbsp&nbsp ILMU KOMPUTER</td></tr>
			<tr><th>UNIVERSITAS</th><td> &nbsp&nbsp UNIVERSITAS LANCANG KUNING</td></tr>
			<tr><img src='admin/images/add.jpg' width='208' height='200' /></tr></tr>
	   </table>
                                         
                     
                                            <!-- /block-content -->
                                                </div>
                                            </div>
                                       </div>
                                  </div>
                            
                            
                            <div class="art-block">
                                <div class="art-block-body">
                                            <div class="art-blockheader">
                                                <div class="l"></div>
                                                <div class="r"></div>
                                                 <div class="t">Pencarian</div>
                                            </div>
                                            <div class="art-blockcontent">
                                                <div class="art-blockcontent-tl"></div>
                                                <div class="art-blockcontent-tr"></div>
                                                <div class="art-blockcontent-bl"></div>
                                                <div class="art-blockcontent-br"></div>
                                                <div class="art-blockcontent-tc"></div>
                                                <div class="art-blockcontent-bc"></div>
                                                <div class="art-blockcontent-cl"></div>
                                                <div class="art-blockcontent-cr"></div>
                                                <div class="art-blockcontent-cc"></div>
                                                <div class="art-blockcontent-body">
                                            <!-- block-content -->
          



<form method="POST" id="searchform" action="hasil-pencarian.html"> <!-- form pencarian -->
					<div>
					   <input class="searchField" type="text" name="kata" maxlength="50" value="Pencarian..." onblur="if(this.value=='') this.value='Pencarian...';" onfocus="if(this.value=='Pencarian...') this.value='';" /><br />
					   <input type="submit" value="Search" class="art-button" />
					</div>
				</form>            
            
                     
                                            <!-- /block-content -->
                                           
                                                </div>
                                            </div>
                                </div>
                            </div>
                            
                           
                            
                             <div class="art-block">
                                <div class="art-block-body">
                                            <div class="art-blockheader">
                                                <div class="l"></div>
                                                <div class="r"></div>
                                                 <div class="t">Banner</div>
                                            </div>
                                            <div class="art-blockcontent">
                                                <div class="art-blockcontent-tl"></div>
                                                <div class="art-blockcontent-tr"></div>
                                                <div class="art-blockcontent-bl"></div>
                                                <div class="art-blockcontent-br"></div>
                                                <div class="art-blockcontent-tc"></div>
                                                <div class="art-blockcontent-bc"></div>
                                                <div class="art-blockcontent-cl"></div>
                                                <div class="art-blockcontent-cr"></div>
                                                <div class="art-blockcontent-cc"></div>
                                                <div class="art-blockcontent-body">
                                            <!-- block-content -->
          
<?php
              // Tampilkan banner
              $banner=mysql_query("SELECT * FROM banner ORDER BY id_banner");
              while($b=mysql_fetch_array($banner)){
                  echo "<p align=center><a href=$b[url] target='_blank' title='$b[judul]'>
                        <img src='foto_banner/$b[gambar]' border='0'></a></p>";
              }
            ?>          
                                            <!-- /block-content -->
                                            
                                            		<div class="cleared"></div>
                                                </div>
                                            </div>
                            		<div class="cleared"></div>
                                </div>
                            </div>
                            
                            
                                
                            
                            
                             <div class="art-block">
                                <div class="art-block-body">
                                            <div class="art-blockheader">
                                                <div class="l"></div>
                                                <div class="r"></div>
                                                 <div class="t">Sekilas Info</div>
                                            </div>
                                            <div class="art-blockcontent">
                                                <div class="art-blockcontent-tl"></div>
                                                <div class="art-blockcontent-tr"></div>
                                                <div class="art-blockcontent-bl"></div>
                                                <div class="art-blockcontent-br"></div>
                                                <div class="art-blockcontent-tc"></div>
                                                <div class="art-blockcontent-bc"></div>
                                                <div class="art-blockcontent-cl"></div>
                                                <div class="art-blockcontent-cr"></div>
                                                <div class="art-blockcontent-cc"></div>
                                                <div class="art-blockcontent-body">
                                            <!-- block-content -->
                                                            <!-- SIDEBAR -->
			
				
          <ul id="listticker">
            <?php
              $sekilas=mysql_query("SELECT * FROM sekilasinfo ORDER BY id_sekilas DESC LIMIT 3");
              while($s=mysql_fetch_array($sekilas)){
                echo "<li><span class='line'>- $s[info]<br><br></span></li>";
              }
            ?>
          </ul>
                                            <!-- /block-content -->
                                            
                                            		<div class="cleared"></div>
                                                </div>
                                            </div>
                            		<div class="cleared"></div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="art-layout-cell art-content">

       <?php
          include "$f[folder]/kiri.php";      
      ?>
                                                    


                        </div>
                    </div>
                </div>
				<div class="art-footer">
                    <div class="art-footer-inner">
                        <div class="art-footer-text" style="padding : 20px 335px 20px 335px;font-size : 100%;color : #FFFFFF;background-color : #265180;">
                            <p><b><center>&copy;copyrigt @2017 Fasilkom Teknik Informatika(TI-1)</center></b></p>
                        </div>
                    </div>
                    <div class="art-footer-background"></div>
                </div>
        		<div class="cleared"></div>
            </div>
        </div>
        <div class="cleared"></div>
        <p class="art-page-footer"></p>
    </div>
    
</body>
</html>