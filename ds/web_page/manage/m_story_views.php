<?php  
  include "../../db.php";
  $sql = mq("SELECT class FROM information WHERE id='$_SESSION[id]'");
  while ($checking = $sql->fetch_assoc()){
    if($checking['class']=='Standard'){
      echo "<script language=javascript> alert('관리자만 이용 가능합니다.'); location.replace('../index/index.php'); </script>";
    }
    if($checking['class']=='Silver'){
        echo "<script language=javascript> alert('관리자만 이용 가능합니다.'); location.replace('../index/index.php'); </script>";
    }
    if($checking['class']=='Gold'){
      echo "<script language=javascript> alert('관리자만 이용 가능합니다.'); location.replace('../index/index.php'); </script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manager Story views</title>
    <link rel="stylesheet" href="../../css/components.css">
    <link rel="stylesheet" href="../../css/icons.css">
    <link rel="stylesheet" href="../../css/s_responsee.css">
    <link rel="stylesheet" href="../../owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../../owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="../../css/lightcase.css">
    <link rel="stylesheet" href="../../css/main1.css">
    <link rel="stylesheet" href="../../css/story.css">
    <!-- TABLE -->
    <link rel="stylesheet" href="https://cdn.datatables.net/t/bs-3.3.6/jqc-1.12.0,dt-1.10.11/datatables.min.css"/> 
    <script src="https://cdn.datatables.net/t/bs-3.3.6/jqc-1.12.0,dt-1.10.11/datatables.min.js"></script>
    <!-- CSS 부분 -->

    <!-- JS 부분 -->
    <script type="text/javascript" src="<c:url value='../../js/jquery-1.11.2.js' />"></script>
    <script type="text/javascript" src="<c:url value='../../etc/jquery-ui-1.11.2.custom/jquery-ui.js' />"></script>
    <script type="text/javascript" src="<c:url value='../../etc/DataTables-1.10.4/media/js/jquery.dataTables.js' />"></script>

    <script>
        jQuery(function($){//DataTables는 HTML의 <table>을 데이터 그리드 형식으로 사용하기 위한 라이브러리
            $("#story_table").DataTable({
              // 표시 건수기능 숨기기
               lengthChange: false,
               // 검색 기능 숨기기
               searching: false,
               // 정렬 기능 숨기기
               ordering: false,
               // 정보 표시 숨기기
               info: false,
               // 페이징 기능 숨기기
               paging: false
            });
        });
    </script>
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="../../css/s_template-style.css">   
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="../../js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="../../js/jquery-ui.min.js"></script>    
    <script type="text/javascript" src="../../js/navigation_bar.js"></script>
  </head>

  <script type="text/javascript">
    var s_index=0;
    function cc(){
        if(sessionStorage.getItem("mineSession")=="-1"){
          str = `<li><a href="../login/login.html">로그인</a></li>
                <li><a href="../login/signup.html">회원가입</a></li>`;
        }else{
          str = `<li><a href=""></a>
                    <a href="#">`+sessionStorage.getItem("mineSession")+`님 환영합니다</a>
                      <ul class="main2">
                        <li><a href="../../php/login/logout.php">로그아웃</a></li>
                      </ul>
                  </li>`;
        }
        $('.loginlog').replaceWith(str);
    }
      function test(a){
        s_index=a;
      }
      function return_s(){
        $('#name1').val(s_index);
      }
  </script>
  <body class="size-1280">
    <header role="banner" class="position-absolute">    
      <nav class="background-transparent background-primary-dott full-width sticky"> 
        <div class="logo hide-l hide-xl hide-xxl">
           <a href="../index/index.php" class="logo">
            <img class="logo-dark" src="../../img/logo-dark.svg" alt="">
          </a>
        </div>
        <div id="login" style='float: right;'>
          <ul class="main1" style='position: absolute;left: 80%;top: 10%;'>
              <div class="loginlog" id="loginlog"></div>
              <script>cc();</script>
          </ul>
        </div>
        <div class="top-nav">
          <div class="top-nav left-menu">
            <ul class="right top-ul chevron">
               <li><a style="color:black;" href="./m_index.php">Home</a></li>
               <li><a style="color:black;" href="./m_member.php">Member</a></li>
               <li><a style="color:black;" href="./m_story.php">Story</a></li>
            </ul>
         </div>
          
          <ul class="logo-menu">
            <a href="./m_index.php" class="logo">
              <img class="logo-white" src="../../img/dream/logo123.PNG" alt="">
              <img class="logo-dark" src="../../img/dream/logo123.PNG" alt="">
            </a>
          </ul>
          <div class="top-nav right-menu">
            <ul class="top-ul chevron">
               <li><a style="color:black;" href="./m_gallery.php">Gallery</a></li>
               <li><a style="color:black;" href="./m_equipment.php">Equipment</a></li>
               <li><a style="color:black;" href="./managerpage.php">Request</a></li>
            </ul> 
         </div>
        </div>
      </nav>
    </header>
    
    <main role="main">
        <article>    
        </article>
        <section class="section-small-padding background-white text-center" style="text-align: center;">
        
        </section>
        <section class="section-small-padding background-white text-center" style="text-align: center;">
        
        </section>
        <div class="margin-left-60" style="text-align: center;"></div>
        </br></br>
        
        <div class="container">
            <?php
                $sql11 = mq("SELECT * FROM silver_story where s_index='{$_GET['data']}'");
                $i=0;
                while($story = $sql11->fetch_array()){
                    $int_v=(int)$story['s_view'];
                    $int_v+=1;
                    $sql2=mq("update story set s_view='".$int_v."' where s_index='".$story['s_index']."'");
                    $writer= $story['s_writer'];
                    $n=$story['s_index'];
                    echo "<script>test(".$story['s_index'].");</script>"
            ?>
            <table border="0" id="post_view">
                <thead>
                    <tr>
                        <th class='line'>제목 : <?php echo $story['s_title']; ?></th>
                        <td class='line' style="text-align: right"><?php echo $story['s_date']; ?></td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th class='line1'>작성자 : <?php echo $story['s_writer']; ?></th>
                        <td class='line1' style="text-align: right">조회수 : <?php echo $story['s_view']; ?>
                        <!--댓글 : <?php echo $post['comments']; ?></td>-->
                    </tr>

                    <tr class='list'>
                        <th class='line1'><?php echo $story['s_content']; ?></th>
                        <td class='line1'>
                        </td>
                    <tr>
                </tbody>
            </table>
        </div><?php }?>
        <div class="container">
            <form action="../../php/manage/m_story_views_db.php" id="commentForm" name="commentForm" method="post">
                <input type="text" id="name1" name="name1" value="" style="display:none">
                <script>return_s();</script>
                </br></br>
                <div>
                    <div>
                        <span><strong>댓글</strong></span> <span id="cCnt"></span>
                    </div>
                    <table class="table">                    
                        <tr>
                            <td>
                                <textarea style="width: 1100px" rows="3" cols="30" id="comment" name="comment" placeholder="댓글을 입력하세요"></textarea>
                                <br>
                                <div>
                                    <input type="submit" class="btn pull-right" value="등록"/>
                                </div>
                            </td>
                        </tr>
                        <?php
                            $i=1;
                            $db_conn = mysqli_connect("localhost","root","1234","dream");
                            $query = "SELECT c_writer, c_content, c_date FROM silver_comment where s_index=$_GET[data] ORDER BY c_index ASC";
                            $stmt = mysqli_prepare($db_conn, $query);
                            $exec = mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);
                            while($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <!-- <div>
                            <span><strong><?php echo $row['c_writer'] ; ?></strong></span> <span id="cCnt"></span>
                        </div>
                        <div>
                            <span><strong><?php echo $row['c_content']; ?></strong></span> <span id="cCnt"></span>
                        </div> -->
                        <tr></tr>
                        <tr>
                            <td>
                            <div style="text-align: left"><?php echo $row['c_writer'] ; ?></div>
                            <div><?php echo $row['c_content']; ?></div>
                            <?php echo $row['c_date']; ?>
                            </td>
                        </tr>
                        <br>
                        <?php
                            $i++;
                            } 
                            mysqli_free_result($result); 
                            mysqli_stmt_close($stmt);
                            mysqli_close($db_conn);
                        ?>
                    </table>
                <div>
            </form>
        </div>
    </main>
    <script type="text/javascript" src="../../js/responsee.js"></script>
    <script type="text/javascript" src="../../owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="../../js/template-scripts.js"></script> 
  </body>
  <style>
    body{
      padding:0px;
      background-repeat : no-repeat;
      background-size : auto;
      
      line-height:2em;
    }
    .story_table{
      /* 상 우 하 좌*/
      padding:0px 200px 0px 0px;
    }
  </style>
</html>