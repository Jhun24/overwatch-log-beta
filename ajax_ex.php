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



<div class="container" style="margin:200px;">
<input type="text" name="content" class="form-control" rows="1" id="rep"/>
<button style="float:right;" value="" type="submit" class="btn btn-default reply_submit" style="margin-top:15px; margin-bottom:15px;">작성</button>
</div>




<div class="container" style="margin-top:200px;">
    <div id="chat" class="proportional">
    <% @chat.each do |c|%>
      <div class="bubble-center">
        <div class="bubble-3">
        </div>
      </div>
     <%end%>
    </div>
</div>



<script>
    
    $(function(){
    $(".reply_submit").click(function hell(){
          
          content = $("#rep").val();
          if(content.length>300){
            alert("400자 이하로 작성해라 이놈아");
            return;
          }
          if(content.trim().length<1){
            alert("공백안됨");
            return;
          }
              $.ajax({
                  method: "POST",
                  url: "/chat_write",
                  data: { name:"<%=@name%>",content:content },
                  success: function(){
                    
                  },
                  error: function(){
                    alert("리플이 작성되지 않았습니다.")
                  }
            });
    });
});

</script>

<script>
            var a;
            var b= "";
            var c=0;
        (function poll(){
          $.ajax({
              method:"GET", 
              url: "/last",
            success: function(data){
              
              if(data[0].content==b){
                return;
              }
             
             b= data[0].content;
              
                $("#chat").prepend("<div class=\"bubble-center\"> <div class=\"bubble-3\"> <p>" +data[0].name+" :"+ b + "</p> </div> </div>");
            },
            error: function(){
            }, 
            dataType: "json", complete: poll, timeout: 10000 });
        })();
        
</script>

<script>

$(document).ready(function(){
    $("#rep").keypress(function(e){
      if(e.which == 13){
            content =$("#rep").val();
          if(content.length>300){
            alert("400자 이하로 작성해라 이놈아");
            return;
          }
           if(content.trim().length<1){
            alert("공백안됨");
            return;
          }
          
            $("#rep").val('');  // submit via ajax or
               $.ajax({
                  method: "POST",
                  url: "/chat_write",
                  data: { name:"<%=@name%>",content:content },
                  success: function(){
                  },
                  error: function(){
                    alert("리플이 작성되지 않았습니다.");
                  }
            });
       }
    });
});
  
  
</script>

<!-- build:js scripts/app.min.js -->
<!-- jQuery -->
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
<!-- endbuild -->
</body>
</html>

<!-- The bubbles below have the same font-size with varying sizes of border-radius:-->











