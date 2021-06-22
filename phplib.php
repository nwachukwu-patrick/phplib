<?php
/*
*
*
*******************************************************
|*****************phplib v 0.3.9**********************|
*******************************************************
*
*@author Nwachukwu patrick 
*
*contact @ nwachukwupatrick06@gmail.com
*
*
*/
/***********************javascript functions********************************/
function alert($alert){
          $alart = "<script>alert('$alert')</script>";
          echo $alart;
}
function square($square)
  {
            return $square *= $square;
  }
function prompt($prompt){
  $show = "<script>prompt('$prompt')</script>";
  return $show;
}



  /*****************************css functions*****************************/
function t_red()
{
  echo('<style type="text/css">body{color:red}</style>');
}
function bg($color)
{
  $color =$color;
    if($color == "red"){
echo('<style type="text/css">body{background-color:red}</style>');
 }elseif($color == "blue"){
echo('<style type="text/css">body{background-color:blue}</style>');
 }elseif($color == "green"){
echo('<style type="text/css">body{background-color:green}</style>');
 }elseif($color == "pink"){
echo('<style type="text/css">body{background-color:pink}</style>');
 }elseif($color == "yellow"){
echo('<style type="text/css">body{background-color:yellow}</style>');
 }elseif($color == "gold"){
echo('<style type="text/css">body{background-color:gold}</style>');
 }else{
echo('<style type="text/css">body{background-color:white}</style>');
 }
}
class bg {
  var $color;
 public function __construct($color)
  {
    $color =$color;
    if($color == "red"){
echo('<style type="text/css">body{background-color:red}</style>');
 }elseif($color == "blue"){
echo('<style type="text/css">body{background-color:blue}</style>');
 }elseif($color == "green"){
echo('<style type="text/css">body{background-color:green}</style>');
 }elseif($color == "pink"){
echo('<style type="text/css">body{background-color:pink}</style>');
 }elseif($color == "yellow"){
echo('<style type="text/css">body{background-color:yellow}</style>');
 }elseif($color == "gold"){
echo('<style type="text/css">body{background-color:gold}</style>');
 }else{
echo('<style type="text/css">body{background-color:white}</style>');
 }
  }
}




  /****************************HTML functions***************************/
  /*-----------------html tag---------------*/
  function html_o()
    {
     echo "<html>";
    }
    function html_c()
    {
     echo "</html>";
    }
      /*-----------------head tag---------------*/
      function head_o()
    {
     echo "<head>";
    }
      function head_c()
    {
     echo "</head>";
    }
      /*-----------------body tag---------------*/
      function body_o()
    {
     echo "<body>";
    }
    function body_c()
    {
     echo "</body>";
    }
      /*-----------------javascript internal script tag---------------*/
    function js_o()
    {
     echo "<script type='text/javascript'>";
    }
    function js_c()
    {
     echo "</script>";
    }
      /*-----------------bold tag---------------*/
    function b_o()
    {
     echo "<b>";
    }
      function b_c()
    {
     echo "</b>";
    }
      /*-----------------paragraph tag---------------*/
      function p_o()
    {
     echo "<p>";
    }
      function p_c()
    {
     echo "</p>";
    }
      /*-----------------h1 tag---------------*/
      function h1_o()
    {
     echo "<h1>";
    }
      function h1_c()
    {
     echo "</h1>";
    }
      /*-----------------h2 tag---------------*/
      function h2_o()
    {
     echo "<h2>";
    }
      function h2_c()
    {
     echo "</h2>";
    }
      /*-----------------h3 tag---------------*/
      function h3_o()
    {
     echo "<h3>";
    }
      function h3_c()
    {
     echo "</h3>";
    }
      /*-----------------h4 tag---------------*/
      function h4_o()
    {
     echo "<h4>";
    }
      function h4_c()
    {
     echo "</h4>";
    }
      /*-----------------h5 tag---------------*/
      function h5_o()
    {
     echo "<h5>";
    }
      function h5_c()
    {
     echo "</h5>";
    }
      /*-----------------h6 tag---------------*/
      function h6_o()
    {
     echo "<h6>";
    }
      function h6_c()
    {
     echo "</h6>";
    }
      /*-----------------line break tag---------------*/
    function br()
    {
     echo "<br>";
    }


/*
******************************
***********alternative********
******************************
*/
/*------html root-------*/
function html($html)
 {
   $html = $html;
   echo ("<html>$html</html>");
 }
/*------head-------*/
 function head($head)
 {
   $head = $head;
   echo ("<head>$head</head>");
 }
 /*------title------*/
 function title($title)
 {
   $title = $title;
   echo ("<title>$title</title>");
 }
/*------body------*/
 function body($body)
 {
   $body = $body;
   echo ("<body>$body</body>");
 }
/*-------paragraph-------*/
  function p($p)
 {
   $p = $p;
   echo ("<p>$p</p>");
 } 
/*-------bold-------*/
 function b($b)
 {
   $b = $b;
   echo ("<b>$b</b>");
 } 
/*-------div-------*/
 function div($div)
 {
   $div = $div;
   echo ("<div>$div</div>");
 } 
/*-------span-------*/
 function span($span)
 {
   $span = $span;
   echo ("<span>$span</span>");
 }
/*-------h1-------*/
function h1($h1)
{
  $h1 = $h1;
  echo ("<h1>$h1</h1>");
} 
/*-------h2-------*/
function h2($h2)
{
  $h2 = $h2;
  echo ("<h2>$h2</h2>");
} 
/*-------*h3-------*/
function h3($h3)
{
  $h3 = $h3;
  echo ("<h3>$h3</h3>");
} 
/*****h4****/
function h4($h4)
{
  $h4 = $h4;
  echo ("<h4>$h4</h4>");
} 
/*****h5****/
 function h5($h5)
 {
   $h5 = $h5;
   echo ("<h5>$h5</h5>");
 } 
 /*****h6****/
 function h6($h6)
 {
   $h6 = $h6;
   echo ("<h6>$h6</h6>");
 } 
 /*****ul****/
 function ul($ul)
 {
   $ul = $ul;
   echo ("<ul>$ul</ul>");
 } 
 /*****i****/
 function i($i)
 {
   $i = $i;
   echo ("<i>$i</i>");
 } 
 /*****ol****/
 function ol($ol)
 {
   $ol = $ol;
   echo ("<ol>$ol</ol>");
 } 
/*****li****/
function li($li)
{
  $li = $li;
  echo ("<li>$li</li>");
} 
/*****table****/
 function table($table)
 {
   $table = $table;
   echo ("<table>$table</table>");
 } 
 /*****tr****/
 function tr($tr)
 {
   $tr = $tr;
   echo ("<tr>$tr</tr>");
 } 
 /*****td****/
 function td($td)
 {
   $td = $td;
   echo ("<td>$td</td>");
 } 
 /*****thead****/
 function thead($thead)
 {
   $thead = $thead;
   echo ("<thead>$thead</thead>");
 } 
 /*****tbody****/
 function tbody($tbody)
 {
   $tbody = $tbody;
   echo ("<tbody>$tbody</tbody>");
 } 
 /*****a****/
 function a($a,$a1)
 {
   $a = $a;
   echo ("<a href='$a1'>$a</a>");
 } 
 /*****em****/
 function em($em)
 {
   $em = $em;
   echo ("<em>$em</em>");
 }
 /*****footer****/
 function footer($footer)
 {
   $footer = $footer;
   echo ("<footer>$footer</footer>");
 }
 
   /*****aside****/
 function aside($aside)
 {
   $aside = $aside;
   echo ("<aside>$aside</aside>");
 }
  /*****section****/
 function section($section)
 {
   $section = $section;
   echo ("<section>$section</section>");
 }
  /*****main****/
 function main($main)
 {
   $main = $main;
   echo ("<main>$main</main>");
 }
  /*****article****/
  function article($article)
  {
    $article = $article;
    echo ("<article>$article</article>");
  }
   /*****nav****/
 function nav($nav)
 {
   $nav = $nav;
   echo ("<nav>$nav</nav>");
 }
  /*****form****/
 function form($form)
 {
   $form = $form;
   echo ("<form>$form</form>");
 }
  /*****dl****/
 function dl($dl)
 {
   $dl = $dl;
   echo ("<dl>$dl</dl>");
 }
  /*****dd****/
 function dd($dd)
 {
   $dd = $dd;
   echo ("<dd>$dd</dd>");
 }
  /*****dt****/
 function dt($dt)
 {
   $dt = $dt;
   echo ("<dt>$dt</dt>");
 }
  /*****sup****/
 function sup($sup)
 {
   $sup = $sup;
   echo ("<sup>$sup</sup>");
 }
  /*****sub****/
  function sub($sub)
  {
    $sub = $sub;
    echo ("<sub>$sub</sub>");
  }


  ?>