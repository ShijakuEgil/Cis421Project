jQuery(document).ready(function($){

  $("#search").on('click', function(){

    var searchString = $("input:text").val();

    $.ajax({
      type: "POST",
      url:"functionsDb/db_search.php",
      data: {
        'searchString': searchString
      },
      dataType: "JSON",
      error: function(status){
        console.log(status);
      },
      success:function(data){
        console.log(data);
        $(".blockquote").remove();

        if(data.length == 0){
          $(".search-table-wrapper").append(
            '<blockquote class="blockquote">'+
              '<p class="mb-0 h1">No results</p>'+
            '</blockquote>'
          );
        }
        else{
          for(var i = 0; i < data.length; i++){
            $(".search-table-wrapper").append(
              '<blockquote class="blockquote text-left">'+
                '<p class="mb-0 h1">'+ data[i].title +'</p>'+
                '<footer class="blockquote-footer">Author: <cite title="Source Title">'+
                data[i].author_first_name + " " + data[i].author_last_name + '</cite></footer>'+
                '<footer class="blockquote-footer">Publisher: <cite title="Source Title">'+
                data[i].publisher + '</cite></footer>'+
                '<footer class="blockquote-footer">ISBN: <cite title="Source Title">'+
                data[i].isbn + '</cite></footer>'+
              '</blockquote>'
              );
          }
        }
      }
    });
  });
});
