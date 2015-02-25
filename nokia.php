<?php
error_reporting(0);
?>

<?php
    $file_data = file_get_contents('formdata.txt', FILE_USE_INCLUDE_PATH);
    $file_data_array = explode("|=|", $file_data); //create array separate by new line
    //print_r($file_data_array); die;
?>


<html xmlns="http://www.w3.org/1999/xhtml"><head><style type="text/css">
            a {
                text-decoration:none;
                color:inherit;
            }
        </style>



        <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="ksafone_files/style.css" rel="stylesheet" type="text/css">
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                    <title>STARKSA:.</title>
                    </head>

                    <body>
                        <div id="main_div">
                            <div id="div_center"> 
                                <a href="/index.php" ><div id="logo">STARKSA</div></a>   
                                <div id="content">
                                    <div class="login"><a href="http://62.75.202.95:8080/" class="button">Customer Login</a></div>
                                    <a href="/index.php" class="home"><img src="ksafone_files/home.png"></a>
                                    <div class="login"><a href="http://62.75.202.95:8080/VSR" class="button">Reseller Login</a></div>
                                    
                                    <span class="dialer-sub-item-title">Nokia Dialers</span>
                                    <div style="width:320px; height:auto; float:left; padding:20px 0 0 25px; border-top: 1px solid #333;">

                                        <a href="<?php echo $file_data_array[3] ?>">
                                            <div class="mob_dialer">
                                                <div class="mob_icone">
                                                    <img width="36" height="33" src="img/portfolio/world.png" alt="" />
                                                </div>
                                                <div class="mob_dialername"><strong>HelloByte [OC 30020]</strong></div>
                                            </div>
                                        </a>

                                        <div style="width:190px; height:auto; float:left; margin:5px 0 5px 60px; font-family:Arial; color:#fff; font-size:14px"></div>
                                        <a href="<?php echo $file_data_array[4] ?>">
                                            <div class="mob_dialer">
                                                <div class="mob_icone">
                                                    <img width="36" height="33" src="img/portfolio/world.png" alt="" />
                                                </div>
                                                <div class="mob_dialername"><strong>Itel Dialer [OC 31719]</strong></div>
                                            </div>
                                        </a>
                                        
                                        <div style="width:190px; height:auto; float:left; margin:5px 0 5px 60px; font-family:Arial; color:#fff; font-size:14px"></div>
                                        <a href="<?php echo $file_data_array[5] ?>">
                                            <div class="mob_dialer">
                                                <div class="mob_icone">
                                                    <img width="36" height="33" src="img/portfolio/world.png" alt="" />
                                                </div>
                                                <div class="mob_dialername"><strong>MoSIP [OC 1050]</strong></div>
                                            </div></a>

                                        <div style="width:190px; height:auto; float:left; margin:5px 0 5px 60px; font-family:Arial; color:#fff; font-size:14px"></div>
                                        <a href="<?php echo $file_data_array[6] ?>">
                                            <div class="mob_dialer">
                                                <div class="mob_icone">
                                                    <img width="36" height="33" src="img/portfolio/world.png" alt="" />
                                                </div>
                                                <div class="mob_dialername"><strong>Gplex [OC 1015]</strong></div>
                                            </div></a>

                                        <div style="width:190px; height:auto; float:left; margin:5px 0 5px 60px; font-family:Arial; color:#fff; font-size:14px"></div>      


                                    </div>
                                </div>
                                <div id="footer">Copyright©starksa,All Rights Reserved<br></div>
                            </div>
                        </div>


                    </body></html>