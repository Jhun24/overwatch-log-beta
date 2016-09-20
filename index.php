<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>OverWatch Game Log</title>
  <meta name="description" content="Music, Musician, Bootstrap" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="images/logo.png">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="https://yt3.ggpht.com/-M2-DH_DN-Qs/AAAAAAAAAAI/AAAAAAAAAAA/kczw_wtvMOI/s900-c-k-no-mo-rj-c0xffffff/photo.jpg">
  <!-- scripts -->
  <script src="libs/jquery/dist/jquery.js"></script>
<!-- Bootstrap -->
  <script src="libs/tether/dist/js/tether.min.js"></script>
  <script src="libs/bootstrap/dist/js/bootstrap.js"></script>
<!-- core -->
  <script src="libs/jQuery-Storage-API/jquery.storageapi.min.js"></script>
  <script src="libs/jquery.stellar/jquery.stellar.min.js"></script>
  <script src="libs/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="libs/jscroll/jquery.jscroll.min.js"></script>
  <script src="libs/PACE/pace.min.js"></script>
  <script src="libs/jquery-pjax/jquery.pjax.js"></script>

  <script src="libs/mediaelement/build/mediaelement-and-player.min.js"></script>
  <script src="libs/mediaelement/build/mep.js"></script>
  <script src="scripts/player.js"></script>

  <script src="scripts/config.lazyload.js"></script>
  <script src="scripts/ui-load.js"></script>
  <script src="scripts/ui-jp.js"></script>
  <script src="scripts/ui-include.js"></script>
  <script src="scripts/ui-device.js"></script>
  <script src="scripts/ui-form.js"></script>
  <script src="scripts/ui-nav.js"></script>
  <script src="scripts/ui-screenfull.js"></script>
  <script src="scripts/ui-scroll-to.js"></script>
  <script src="scripts/ui-toggle-class.js"></script>
  <script src="scripts/ui-taburl.js"></script>
  <script src="scripts/app.js"></script>
  <script src="scripts/site.js"></script>
  <script src="scripts/ajax.js"></script>
  
  
  <!-- style -->
  <link rel="stylesheet" href="css/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="css/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/material-design-icons/material-design-icons.css" type="text/css" />
  <link rel="stylesheet" href="css/bootstrap/dist/css/bootstrap.min.css" type="text/css" />

  <!-- build:css css/styles/app.min.css -->
  <link rel="stylesheet" href="css/styles/app.css" type="text/css" />
  <link rel="stylesheet" href="css/styles/style.css" type="text/css" />
  <link rel="stylesheet" href="css/styles/font.css" type="text/css" />
  
  <link rel="stylesheet" href="libs/owl.carousel/dist/assets/owl.carousel.min.css" type="text/css" />
  <link rel="stylesheet" href="libs/owl.carousel/dist/assets/owl.theme.css" type="text/css" />
  <link rel="stylesheet" href="libs/mediaelement/build/mediaelementplayer.min.css" type="text/css" />
  <link rel="stylesheet" href="libs/mediaelement/build/mep.css" type="text/css" />

  <!-- endbuild -->
</head>
<body class="pace-done dark" data-ui-class="dark">
  <div class="app dk" id="app">

<!-- ############ LAYOUT START-->

  <!-- aside -->
 
  <!-- / -->
  
  <!-- content -->
  <div id="content" class="app-content white bg box-shadow-z2" role="main">
    <div class="app-header hidden-lg-up white lt box-shadow-z1">
        
        
    </div>
   
    <div class="app-body" id="view">

<!-- ############ PAGE START-->
<div class = "padding">
<div class="padding">
  
  
    <div class="input-group input-group-lg">
      <input type="text" class="form-control" id="search_input" placeholder="Name#BattleTag">
      <span class="input-group-btn">
        <button class="btn b-a no-shadow white" id="search_btn" type="button">Search</button>
      </span>
    </div>

  
  
  <div class="m-y padding">
    <div id = "list" class="row item-list item-list-lg item-list-by m-b padding">
      
          <div class="col-xs-12 padding">
            <div class="item r">
            <div class="item-media" style="width:130px; height:130px; position:relative; " id="profile_img">
            </div>
            <div class="item-info">
            
              <div class="item-title text-ellipsis" style="font-size:40px" id="name">
                  
              </div>
            </div>
          </div>
        </div>
        
          <div class="col-xs-12 padding">
            <div class="item r">
            <div class="item-info">
            
              <div class="item-title text-ellipsis"  id="data_view">
                  <div class="m-a-0 m-b" id="info" style="font-size:20px"></div>
                <div class="list-group m-b">
                  <div id="level">
                  
                  </div>
                  <div id="playtime">
                  
                  </div>
                  <div id="playtime_quick">
                  
                  </div>
                
                  <div id="pro">
                     
                  <!-- <div class="progress">
                        <div class="progress-bar primary" style="width: 25%">25%</div>
                      </div>
                  -->
                  </div>
                  
                  <div id="pro_d">
                      
                  </div> 
                  
                  <div id="com">
                
                  </div>
                  
                  <div id="com_d">
                  
                  
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="padding item-title" id ="hero_list">
          
          
        </div>
        
      
  
        
         
</div>
</div>
<!-- ############ PAGE END-->

    </div>
  </div>
  <!-- / -->

  
  <!-- ############ SWITHCHER START-->

  <!-- ############ SHARE END -->

<!-- ############ LAYOUT END-->
  </div>

<script type="text/javascript">
  var ch_name;
</script>  
  
<script>
    
    $(function(){
    $("#search_btn").click(function(){
          
         content = $("#search_input").val();
            data_name = content.replace("#","-");
            user_name = encodeURI(data_name);
            url_build = "https://api.lootbox.eu/pc/kr/"
            url_build += user_name
            url_build += "/profile"
            
            $("#playtime_quick").empty();
          
            
               $.ajax({
                  method: "GET",
                  url: url_build,
                  async:false,
                  
                  
                  success: function(data){
                    

                    image_profile = "<img src=\""
                    image_profile += data.data.avatar
                    image_profile += "\"/>"
                    
                    pro_data = " <div class=\"progress\">"
                    pro_data += " <div class=\"progress-bar primary\" style=\"width:"
                    pro_data += Math.ceil(data.data.games.quick.wins/data.data.games.quick.played*100)
                    pro_data += "%\">"
                    pro_data += Math.ceil(data.data.games.quick.wins/data.data.games.quick.played*100)
                    pro_data += "%</div></div>"
                    
                    com_data = " <div class=\"progress\">"
                    com_data += " <div class=\"progress-bar primary\" style=\"width:"
                    com_data += Math.ceil(data.data.games.competitive.wins/data.data.games.competitive.played*100)
                    com_data += "%\">"
                    com_data += Math.ceil(data.data.games.competitive.wins/data.data.games.competitive.played*100)
                    com_data += "%</div></div>"
                    
                    $("#name").html('')
                    $("#name").append(data.data.username)
                    $("#profile_img").html(image_profile)
                    
                    $("#info").html('')
                    $("#info").append("Info")
                    
                    $("#level").html('')
                    $("#level").append("Level : ")
                    $("#level").append(data.data.level) 
                    
                    $("#playtime").html('')
                    $("#playtime").append("PlayTime(경쟁전) : ")
                    $("#playtime").append(data.data.playtime.competitive)
                    
                    $("playtime_quick").html('')
                    $("#playtime_quick").append("PlayTime(빠른대전) : ")
                    $("#playtime_quick").append(data.data.playtime.quick)
                    
                    $("#pro").html('')
                    $("#pro").html("승률(빠른대전):")
                    $("#pro_d").html(pro_data)
                    
                    $("#com").html('')
                    $("#com").html("승률(경쟁전):")
                    $("#com_d").html(com_data) 
                    
                  
                    },
                  error: function(){
                    alert("Error");
                  }
            });
    });
});
</script>

<script>
    
    $(function(){
    $("#search_btn").click(function(){
          
         cont = $("#search_input").val();
            data_n = cont.replace("#","-");
            user_n = encodeURI(data_n);
            url_build_data = "https://api.lootbox.eu/pc/kr/"
            url_build_data += user_n;
            url_build_data += "/quick-play/heroes";
            
            num = 0;
            
            $.ajax({
              method:"GET",
              url:url_build_data,
              dataType:'json',
              success: function(data){
                
                $("#hero_list").html("");
                
                for(i = 0; i<22; i++){
                  
                  ch_name = null;
                  
                  
                
                 
                  
                  make_box = "<div class=\"col-xs-12 padding\">"
                  make_box += "<div class=\"item r\">"
                  
                  
                  make_box += "<div class=\"item-media\">"
                  make_box += "<img src=\""
                  make_box += data[i].image
                  make_box += "\"/>"
                  make_box += "</div>"
                  
                  make_box += "<div class=\"item-info\">"
                    
                    
                    make_box += "<div class=\"item-title text-ellipsis\" style=\"font-size:40px\">"
                    make_box += data[i].name
                    make_box += "</div>"
                    
                    make_box += "<div class=\"item-title text-ellipsis\" style=\"font-size:20px\">"
                    make_box += data[i].playtime
                    make_box += "</div>"
                  
                  make_box += "</div>"
                  
                  if(data[i].name != "L&#xFA;cio" && data[i].name != "Soldier: 76" && data[i].name != "Torbj&#xF6;rn" && data[i].name != "D.Va" && data[i].name != "McCree"){
                     url_build_ch_data = "https://api.lootbox.eu/pc/kr/"
                     url_build_ch_data += user_n
                     url_build_ch_data += "/quick-play/hero/"
                     url_build_ch_data += data[i].name+"/"
                     ch_name = data[i].name;
                   }
                   else{
                     console.log(data[i].name);
                     if(data[i].name == "L&#xFA;cio"){
                       url_build_ch_data = "https://api.lootbox.eu/pc/kr/"
                       url_build_ch_data += user_n
                       url_build_ch_data += "/quick-play/hero/"
                       url_build_ch_data += "Lucio/"
                       user_data = "Lucio"
                       ch_name ="Lucio"
                     }
                     else if(data[i].name == "Soldier: 76"){
                       url_build_ch_data = "https://api.lootbox.eu/pc/kr/"
                       url_build_ch_data += user_n
                       url_build_ch_data += "/quick-play/hero/"
                       url_build_ch_data += "Soldier76/"
                       user_data = "Soldier76"
                       ch_name = "Soldier76"
                     }
                     else if(data[i].name == "D.Va"){
                       url_build_ch_data = "https://api.lootbox.eu/pc/kr/"
                       url_build_ch_data += user_n
                       url_build_ch_data += "/quick-play/hero/"
                       url_build_ch_data += "DVa/"
                       user_data = "DVa"
                       ch_name = "DVa";
                     }
                     else if(data[i].name == "McCree"){
                       url_build_ch_data = "https://api.lootbox.eu/pc/kr/"
                       url_build_ch_data += user_n
                       url_build_ch_data += "/quick-play/hero/"
                       url_build_ch_data += "Mccree/"
                       user_data = "Mccree"
                       ch_name = "Mccree"
                     }
                     else{
                       url_build_ch_data = "https://api.lootbox.eu/pc/kr/"
                       url_build_ch_data += user_n
                       url_build_ch_data += "/quick-play/hero/"
                       url_build_ch_data += "Torbjoern/"
                       user_data = "Torbjoern"
                       ch_name = "Torbjoern";
                     }
                   }  
                  
                  make_box += "<div class=\"information\" style=\"font-weight:600%;\" id=\""+ch_name+"\"></div>"
                  
                  make_box += "</div>"
                  
                  make_box += "</div>"
                  
                  
                  
                  $("#hero_list").append(make_box)
                  
                  
                  
                  /// https://api.lootbox.eu/pc/kr/Pangbae-3151/quick-play/hero/Mccree/
                
            
                          
                        $.ajax({
                            method: "GET",
                            url: url_build_ch_data,
                            dataType: 'json',
                            success: function(data2){
                              
                              
                              
                              for(var k in data2){
                                char_name = k;
                              }
                              
                              if(data2[char_name].WinPercentage == null){
                                
                                a = "--";
                              }
                              else{
                                a =  data2[char_name].WinPercentage;
                              }
                              
                              if(data2[char_name].EliminationsperLife == null){
                                b = "--";
                              }
                              else{
                                b =data2[char_name].EliminationsperLife;
                              }
                              
                              if(data2[char_name].WeaponAccuracy == null){
                                c = "--";
                              }
                              else{
                                c =  data2[char_name].WeaponAccuracy;
                              }
                              $("#"+char_name).html("");
                              $("#"+char_name).append("승률: "+a+" ");
                              $("#"+char_name).append("KDA: "+ b+" ");
                              
                              $("#"+char_name).append("명중률: "+c+" ");
                              
                              
                              // $('#test_data'+i).append(data.ch_name);
                            },
                            error: function(e){
                            }
                        });
                  
                  
                } //for end point               
              
                
              }
            });
    });
});
</script>

<script>
  $(document).ready(function(){
    $("#search_input").keypress(function(e){
      if(e.which == 13){
            cont = $("#search_input").val();
            data_n = cont.replace("#","-");
            user_n = encodeURI(data_n);
            url_build_data = "https://api.lootbox.eu/pc/kr/"
            url_build_data += user_n;
            url_build_data += "/quick-play/heroes";
            
            num = 0;
            
            $.ajax({
              method:"GET",
              url:url_build_data,
              dataType:'json',
              success: function(data){
                
                $("#hero_list").html("")
                
                
                for(i = 0; i<22; i++){
                  
                  ch_name = null;
                  
                  
                  
                 
                  
                  make_box = "<div class=\"col-xs-12 padding\">"
                  make_box += "<div class=\"item r\">"
                  
                  
                  make_box += "<div class=\"item-media\">"
                  make_box += "<img src=\""
                  make_box += data[i].image
                  make_box += "\"/>"
                  make_box += "</div>"
                  
                  make_box += "<div class=\"item-info\">"
                    
                    
                    make_box += "<div class=\"item-title text-ellipsis\" style=\"font-size:40px\">"
                    make_box += data[i].name
                    make_box += "</div>"
                    
                    make_box += "<div class=\"item-title text-ellipsis\" style=\"font-size:20px\">"
                    make_box += data[i].playtime
                    make_box += "</div>"
                  
                  make_box += "</div>"
                  
                  if(data[i].name != "L&#xFA;cio" && data[i].name != "Soldier: 76" && data[i].name != "Torbj&#xF6;rn" && data[i].name != "D.Va" && data[i].name != "McCree"){
                     url_build_ch_data = "https://api.lootbox.eu/pc/kr/"
                     url_build_ch_data += user_n
                     url_build_ch_data += "/quick-play/hero/"
                     url_build_ch_data += data[i].name+"/"
                     ch_name = data[i].name;
                   }
                   else{
                     console.log(data[i].name);
                     if(data[i].name == "L&#xFA;cio"){
                       url_build_ch_data = "https://api.lootbox.eu/pc/kr/"
                       url_build_ch_data += user_n
                       url_build_ch_data += "/quick-play/hero/"
                       url_build_ch_data += "Lucio/"
                       user_data = "Lucio"
                       ch_name ="Lucio"
                     }
                     else if(data[i].name == "Soldier: 76"){
                       url_build_ch_data = "https://api.lootbox.eu/pc/kr/"
                       url_build_ch_data += user_n
                       url_build_ch_data += "/quick-play/hero/"
                       url_build_ch_data += "Soldier76/"
                       user_data = "Soldier76"
                       ch_name = "Soldier76"
                     }
                     else if(data[i].name == "D.Va"){
                       url_build_ch_data = "https://api.lootbox.eu/pc/kr/"
                       url_build_ch_data += user_n
                       url_build_ch_data += "/quick-play/hero/"
                       url_build_ch_data += "DVa/"
                       user_data = "DVa"
                       ch_name = "DVa";
                     }
                     else if(data[i].name == "McCree"){
                       url_build_ch_data = "https://api.lootbox.eu/pc/kr/"
                       url_build_ch_data += user_n
                       url_build_ch_data += "/quick-play/hero/"
                       url_build_ch_data += "Mccree/"
                       user_data = "Mccree"
                       ch_name = "Mccree"
                     }
                     else{
                       url_build_ch_data = "https://api.lootbox.eu/pc/kr/"
                       url_build_ch_data += user_n
                       url_build_ch_data += "/quick-play/hero/"
                       url_build_ch_data += "Torbjoern/"
                       user_data = "Torbjoern"
                       ch_name = "Torbjoern";
                     }
                   }  
                  
                  make_box += "<div id=\""+ch_name+"\" style=\"font-family:\"Hanna\", serif; font-size:15px;\"></div>"
                  
                  make_box += "</div>"
                  
                  make_box += "</div>"
                  
                  
                  
                  $("#hero_list").append(make_box)
                  
                  
                  
                  /// https://api.lootbox.eu/pc/kr/Pangbae-3151/quick-play/hero/Mccree/
                
            
                          
                        $.ajax({
                            method: "GET",
                            url: url_build_ch_data,
                            dataType: 'json',
                            success: function(data2){
                              
                              
                              
                              for(var k in data2){
                                char_name = k;
                              }
                              console.log(data2[char_name]);
                              
                              if(data2[char_name].WinPercentage == null){
                                
                                a = "--";
                              }
                              else{
                                a =  data2[char_name].WinPercentage;
                              }
                              
                              if(data2[char_name].EliminationsperLife == null){
                                b = "--";
                              }
                              else{
                                b =data2[char_name].EliminationsperLife;
                              }
                              
                              if(data2[char_name].WeaponAccuracy == null){
                                c = "--";
                              }
                              else{
                                c =  data2[char_name].WeaponAccuracy;
                              }
                              //---------------------메달, 칭찬카드
                              if(data2[char_name].Medals == null){
                                d = 0;
                              }
                              else{
                                d =  data2[char_name].Medals;
                              }
                              if(data2[char_name]['Medals-Gold'] == null){
                                e = 0;
                              }
                              else{
                                e =  data2[char_name]['Medals-Gold'];
                              }
                              if(data2[char_name]['Medals-Silver'] == null){
                                f = 0;
                              }
                              else{
                                f =  data2[char_name]['Medals-Silver'];
                              }
                              
                              if(data2[char_name]['Medals-Bronze'] == null){
                                g = 0;
                              }
                              else{
                                g =  data2[char_name]['Medals-Bronze'];
                              }
                              
                              if(data2[char_name].Cards == null){
                                h = 0;
                              }
                              else{
                                h =  data2[char_name].Cards;
                              }
                              //---------------------------킬 종류
                              if(data2[char_name].SoloKills== null){
                                i = 0;
                              }
                              else{
                                i =  data2[char_name].SoloKills;
                              }
                              
                              if(data2[char_name].Multikills== null){
                                j = 0;
                              }
                              else{
                                j =  data2[char_name].Multikills;
                              }
                              
                              if(data2[char_name].Multikills== null){
                                j = 0;
                              }
                              else{
                                j =  data2[char_name].Multikills;
                              }
                              
                              if(data2[char_name].Eliminations== null){
                                k = 0;
                              }
                              else{
                                k =  data2[char_name].Eliminations;
                              }
                              
                              if(data2[char_name]['Eliminations-MostinGame'] == null){
                                l = 0;
                              }
                              else{
                                l =  data2[char_name]['Eliminations-MostinGame'];
                              }
                              
                              
                              if(data2[char_name]['Eliminations-Average']== null){
                                n = 0;
                              }
                              else{
                                n =  data2[char_name]['Eliminations-Average'];
                              }
                              //---------------------------- 결정타
                              if(data2[char_name].FinalBlows== null){
                                m = 0;
                              }
                              else{
                                m =  data2[char_name].FinalBlows;
                              }
                              
                              if(data2[char_name]['FinalBlows-MostinGame']== null){
                                o = 0;
                              }
                              else{
                                o =  data2[char_name]['FinalBlows-MostinGame'];
                              }
                              
                              if(data2[char_name]['FinalBlows-Average']== null){
                                p = 0;
                              }
                              else{
                                p =  data2[char_name]['FinalBlows-Average'];
                              }
                              
                              
                              $("#"+char_name).html("");
                              $("#"+char_name).append("승률: "+a+" ");
                              $("#"+char_name).append("KDA: "+ b+" ");
                              
                              $("#"+char_name).append("명중률: "+c+"<br>");
                              
                              $("#"+char_name).append("메달: "+ d+" ");
                              $("#"+char_name).append("금메달: "+ e+" ");
                              $("#"+char_name).append("은메달: "+ f+" ");
                              $("#"+char_name).append("동메달: "+ g+" ");
                              $("#"+char_name).append("카드: "+h+ "<br>");
                              
                              $("#"+char_name).append("누적 킬: "+k+ " ");
                              $("#"+char_name).append("단독 처치: "+i+ " ");
                              $("#"+char_name).append("연속 처치: "+j+ "<br>");
                              $("#"+char_name).append("게임당 최고 처치: "+l+" ");
                              $("#"+char_name).append("게임당 평균 처치: "+n+"<br>");
                              
                              $("#"+char_name).append("결정타: "+m+ "<br>");
                              $("#"+char_name).append("게임당 최고 결정타: "+o+ "<br>");
                              $("#"+char_name).append("게임당 최고 결정타: "+p+ "<br>");
                            
                              
                              
                              // $('#test_data'+i).append(data.ch_name);
                            },
                            error: function(e){
                            }
                        });
                  
                  
                } //for end point               
              
                
              }
            });
      }
    })
  });
</script>



<script>
$(document).ready(function(){
    $("#search_input").keypress(function(e){
      if(e.which == 13){
            content = $("#search_input").val();
            data_name = content.replace("#","-");
            user_name = encodeURI(data_name);
            url_build = "https://api.lootbox.eu/pc/kr/"
            url_build += user_name
            url_build += "/profile"
            
            $("#playtime_quick").empty();
          
            
               $.ajax({
                  method: "GET",
                  url: url_build,
                  async:false,
                  
                  
                  success: function(data){
                    

                    image_profile = "<img src=\""
                    image_profile += data.data.avatar
                    image_profile += "\"/>"
                    
                    pro_data = " <div class=\"progress\">"
                    pro_data += " <div class=\"progress-bar primary\" style=\"width:"
                    pro_data += Math.ceil(data.data.games.quick.wins/data.data.games.quick.played*100)
                    pro_data += "%;\">"
                    pro_data += Math.ceil(data.data.games.quick.wins/data.data.games.quick.played*100)
                    pro_data += "%</div></div>"
                    
                    com_data = " <div class=\"progress\">"
                    com_data += " <div class=\"progress-bar primary\" style=\"width:"
                    com_data += Math.ceil(data.data.games.competitive.wins/data.data.games.competitive.played*100)
                    com_data += "%;\">"
                    com_data += Math.ceil(data.data.games.competitive.wins/data.data.games.competitive.played*100)
                    com_data += "%</div></div>"
                    
                    $("#name").html('')
                    $("#name").append(data.data.username)
                    $("#profile_img").html(image_profile)
                    
                    $("#info").html('')
                    $("#info").append("Info")
                    
                    $("#level").html('')
                    $("#level").append("Level : ")
                    $("#level").append(data.data.level) 
                    
                    $("#playtime").html('')
                    $("#playtime").append("PlayTime(경쟁전) : ")
                    $("#playtime").append(data.data.playtime.competitive)
                    
                    $("playtime_quick").html('')
                    $("#playtime_quick").append("PlayTime(빠른대전) : ")
                    $("#playtime_quick").append(data.data.playtime.quick)
                    
                    $("#pro").html('')
                    $("#pro").html("승률(빠른대전):")
                    $("#pro_d").html(pro_data)
                    
                    $("#com").html('')
                    $("#com").html("승률(경쟁전):")
                    $("#com_d").html(com_data) 
                    
                  
                  },
                  error: function(){
                    alert("Error");
                  }
            });
       }
    });
});
  
  
</script>

<!-- build:js scripts/app.min.js -->
<!-- jQuery -->
<!-- endbuild -->
</body>
</html>