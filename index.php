<!DOCTYPE html>
<html>

<head>

    <title>Mingəçevir</title>

    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <script src="script/jquery-1.12.1.min.js" charset="utf-8"></script>
    <script src="script/bootstrap.min.js" charset="utf-8"></script>

</head>

<body>

  <div class="contentBox">

    <div class="content">

      <div data-toggle="modal" data-target="#contentModal" data-whatever="Haqqında" class="infoCol">
        <span>
            <i class="fa fa-building"></i><br>
            <span>HAQQINDA</span>
        </span>
      </div>

      <div data-toggle="modal" data-target="#contentModal" data-whatever="Niyə Mingəçevir?" class="infoCol">
        <span>
            <i class="fa fa-question"></i><br>
            <span>NİYƏ MİNGƏÇEVİR?</span>
        </span>
      </div>

      <div data-toggle="modal" data-target="#contentModal" data-whatever="Rezidentlər" class="infoCol">
        <span>
            <i class="fa fa-users"></i><br>
            <span>REZİDENTLƏR</span>
        </span>
      </div>

      <div data-toggle="modal" data-target="#contentModal" data-whatever="Mingəçevir Şəhəri" class="infoCol">
        <span>
            <i class="fa fa-lightbulb-o"></i><br>
            <span>MİNGƏÇEVİR ŞƏHƏRİ</span>
        </span>
      </div>

      <div class="infoCol" onclick="document.location='http://hightech.az/contact/'">
          <span>
              <i class="fa fa-phone"></i><br>
              <span>ƏLAQƏ</span>
          </span>
      </div>

      <img class="backImg" src="images/background.jpg" alt="" />


      <div class="modal fade" id="contentModal" tabindex="-1" role="dialog" aria-labelledby="contentModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="contentModalLabel"></h4>
            </div>
            <div class="modal-body">
              <div class="modalContents">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="highTechLogo">
      <a href="#">
        <img class="img-responsive" src="images/htp-logo.jpg" alt="" />
      </a>
    </div>


</body>
</html>

<script type="text/javascript">

  $('#contentModal').on('show.bs.modal', function(event) {

    var contentDiv = $(event.relatedTarget)
    var recipient = contentDiv.data('whatever')

    var modal = $(this)
    modal.find('.modal-title').html('<h1>' + recipient + '</h1>');


// this switch below, dynamically imports php files inside modal
// if you want to change anything, change it from the proper php file in view folder

  switch(recipient) {

      case "Haqqında":

            $.ajax({
              url: 'view/about.php',
              success: function(html) {
                $(".modalContents").html(html);
              }
            });

          break;

      case "Niyə Mingəçevir?":

          $.ajax({
            url: 'view/why.php',
            success: function(html) {
              $(".modalContents").html(html);
            }
          });

          break;

      case "Rezidentlər":

          $.ajax({
            url: 'view/team.php',
            success: function(html) {
              $(".modalContents").html(html);
            }
          });

          break;


        case "Mingəçevir Şəhəri":

            $.ajax({
              url: 'view/city.php',
              success: function(html) {
                $(".modalContents").html(html);
              }
            });

            break;

          }

  });

  $(document).ready(function() {
    var marginTop = $('.contentBox').css('top');
    var modelContents = $('.modal-content').css('margin-top');
  });


</script>
