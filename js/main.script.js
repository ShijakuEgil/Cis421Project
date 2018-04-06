jQuery(document).ready(function($){
  var searchString = $('#searchBar').val();
  $.("#Search").on('click', function(){
    $.ajax({
      type: "POST",
      url:"functionsDb/db_search.php"
      data: {
        'searchString': searchString
      },
      dataType: "JSON"
      error: function(status){
        console.log(status);
      }
      success:function(data){
        $("#search-table-wrapper").append(
          "<table class='mt-5'>"+
            "<thead class="thead-dark">"+
              "<tr>"
                "<th scope="col">#</th>"+
                "<th scope="col">Library Number</th>"+
                "<th scope="col">ISBN</th>"+
                "<th scope="col">Title</th>"+
                "<th scope="col">Author</th>"+
                "<th scope="col">Publisher</th>"+
              "</tr>"

            "</thead>"
            "<tbody>"
          "</tbody>"
         "</table>"
        );
      }
    });
  });


  //jquery functions go here...
});
