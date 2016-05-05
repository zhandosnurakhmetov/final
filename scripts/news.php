<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">

  $(document).ready(function(){
    $("#name1").click(function(){
      $("#info1").show("slow");
});
    $("#name4").click(function(){
      $("#info4").show("slow");
});
    $("#name2").click(function(){
      $("#info2").show("slow");
});
    $("#name3").click(function(){
      $("#info3").show("slow");
});
    $("#name5").click(function(){
      $("#info5").show("slow");
});$("#name6").click(function(){
      $("#info6").show("slow");
});
$("#name7").click(function(){
      $("#info7").show("slow");
});


    // $("#star").click(function(){
    // 	alert("successfully added");
    // });


    $("#star2").click(function(){
      addFav2();
    });
    $("#star1").click(function(){
      addFav();
    });
    $("#star3").click(function(){
      addFav3();
    });
    $("#star4").click(function(){
      addFav4();
    });
    $("#star5").click(function(){
      addFav5();
    });
    $("#star6").click(function(){
      addFav6();
    });
    $("#star7").click(function(){
      addFav7();
    });

});

function addFav2(){

  $.post("add_fav.php",{

     post_id:$("#postid2").val()

  },function(data){

    $("#test").html(data);

  });

}
function addFav(){

    $.post("add_fav.php",{

       post_id:$("#postid1").val()

    },function(data){

      $("#test").html(data);

    });

  }
  function addFav3(){

      $.post("add_fav.php",{

         post_id:$("#postid3").val()

      },function(data){

        $("#test").html(data);

      });

    }	function addFav4(){

          $.post("add_fav.php",{

             post_id:$("#postid4").val()

          },function(data){

            $("#test").html(data);

          });

        }	function addFav5(){

              $.post("add_fav.php",{

                 post_id:$("#postid5").val()

              },function(data){

                $("#test").html(data);

              });

            }	function addFav6(){

                  $.post("add_fav.php",{

                     post_id:$("#postid6").val()

                  },function(data){

                    $("#test").html(data);

                  });

                }	function addFav7(){

                      $.post("add_fav.php",{

                         post_id:$("#postid7").val()

                      },function(data){

                        $("#test").html(data);

                      });

                    }

</script>
