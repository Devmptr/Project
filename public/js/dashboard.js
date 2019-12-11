/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
} 
   


$(document).ready(function(){
    function fetchuser(){};
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    function fetchuser(input="") {
        event.preventDefault();
    
        $.ajax({
            type: 'POST',
            url: 'cariuser',
            data: {value:input},
            success: function(data){
              $('tbody').html(data.success.table_data);
              $('tbody .isiauto').hide();
            }
        });
    }

    $(this).on('keyup','#searchn', function(){
      var query = $(this).val();
        fetchuser(query);
    });
});
