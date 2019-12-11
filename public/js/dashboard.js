function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
} 

$(document).ready(function(){
    function fetchuser(){};

    function loadDataUser(){
      $.ajax({
        type: 'POST',
        url: "/getdatauser",
        success:function(data){
          $('tbody').html(data.success.table_data);
          $('tbody .isiauto').hide();
        }
      })
    }

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
    
    function fetchmovie(input="") {
      event.preventDefault();
  
      $.ajax({
          type: 'POST',
          url: 'carimovie',
          data: {value:input},
          success: function(data){
            $('tbody').html(data.success.table_data);
            $('tbody .isiauto').hide();
          }
      });
  }

    $(this).on('click','.btn-delete',function(event){
        event.preventDefault();
        var idedit = $(this).attr('id');
        $.ajax({
            method: 'POST',
            url: '/deleteuser/'+idedit,
            success: function(data){
              if(data=='sukses'){
                alert('berhasil hapus data');
                loadDataUser();
              }
            }
        });
    });

    $(this).on('keyup','#searchuser', function(){
        var query = $(this).val();
          fetchuser(query);
    });

    $(this).on('keyup','#searchmovie', function(){
        var query = $(this).val();
          fetchmovie(query);
    });
});
