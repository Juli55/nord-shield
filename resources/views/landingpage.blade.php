<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nordshield</title>
    <link rel="stylesheet" href="/css/main.css">
    <script src="js/vendor/jquery-3.3.1.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic|News+Cycle|Patua+One|Yantramanav" rel="stylesheet">
  </head>
  <body>
    <div id="section-header">
      <a href="/"><img src="/imgs/logo.png" alt=""></a>
      <ul>
        <li class="sub-page"><a href="/how">How we protect your privacy</a></li>
        <li class="sub-page"><a href="/about">About us</a></li>
        <li><a class="button" href="/download"><b>Get it</b> for free</a> </li>
      </ul>
    </div>
    <div id="section-1">
      <p><b>Enjoy</b> your web experience<br>as if no one is watching you.</p>
      <div><a class="button" href="/download"><b>Get it</b> for free</a></div>
      <div class="next-section">
        <p class="NextSectionDescription">How we protect your privacy</p>
        <i class="NextSectionButton fas fa-chevron-circle-down"></i>
      </div>
    </div>
    <div id="section-2">
      <div class="left">
        <p>We change your registry where possible.</p>
        <p>We take care of many useful plugins that gradually shield your privacy.</p>
      </div>
      <div class="right">
        <div class="card">
          <p class="headline"><b>These</b> should be your secrets.</p>
          <p style="margin-top: 36px">Increase your privacy while keeping your personal user experience at 100%. Automatically.</p>
          <a style="margin-top: 112px;" class="button" href="/download"><b>Get it</b> for free</a>
        </div>
      </div>
    </div>
    <script type="text/javascript">
    $(".NextSectionButton").click(function() {
      $([document.documentElement, document.body]).animate({
          scrollTop: $("#section-2").offset().top
      }, 2000);
    });
    </script>
  </body>
</html>
