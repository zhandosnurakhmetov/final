<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


<script type="text/javascript">
var sizeOfNews = 0;

  $(document).ready(function(){

    $("#load_more").click(function(){
      retrieveDataMore();
    });

  });

  function retrieveDataMore(){

    sizeOfNews+=3

    $.get("load_more.php",{
      sizeOfLoadMore:sizeOfNews

    },function(data){

      $("#content").html(data);

    });

  }
</script>

<div class="container">

    <!-- Begin of rows -->
    <div class="row carousel-row">
        <div class="col-xs-9 col-xs-offset-1 slide-row" id="content">
          <div class="row">
            <div class="col-sm-4"><div id="carousel-2" class="carousel slide slide-carousel" data-ride="carousel">
              <!-- Indicators -->


            </div></div>
            <div class="col-sm-8">  <div class="slide-content" >

              </div></div>

          </div>

        </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <center><h5 class="text-primary" id = "load_more">Load More</h5></center>
      </div>

      </div>

</div>
