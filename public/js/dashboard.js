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

    $(this).on('click','.btn-show',function(){
        event.preventDefault();
        var idshow = $(this).attr('id');
        $.ajax({
          method: 'POST',
          url: '/lihatuser/'+idshow,
          success: function(data){
            $('#lihatModal .modal-body .body-nama').html(data.success[0].nama);
            $('#lihatModal .modal-body .body-email').html(data.success[0].email);
            $('#lihatModal .modal-body .body-password').html(data.success[0].password);
            $('#lihatModal .modal-body .body-authority').html(data.success[0].authority);
          }
        })
    });;
    
    $(this).on('click','.btn-showedit',function(){
        event.preventDefault();
        var idshow = $(this).attr('id');
        $.ajax({
          method: 'POST',
          url: '/lihatuser/'+idshow,
          dataType: 'JSON',
          success: function(data){
            $('#editModal #nama').attr('value',data.success[0].nama);
            $('#editModal #email').attr('value',data.success[0].email);
            $('#editModal #pass').attr('value',data.success[0].password);
            $('#editModal #auth').attr('value',data.success[0].authority);
          }
        });

        $('.btn-edit').click(function(){
            event.preventDefault();
            $.ajax({
              method: 'POST',
              url: '/edituser',
              data:{id:idshow, nama: $('#editModal input[name=edNama]').val(), password:$('#editModal input[name=edPassword]').val(), email:$('#editModal input[name=edEmail]').val(),auth:$('#editModal input[name=edAuth').val()},
              dataType: "JSON",
              success: function(data){
                if(data.status=="success"){
                  alert('berhasil edit data');
                  $('#editModal #nama').attr('value',data.baru[0].nama);
                  $('#editModal #email').attr('value',data.baru[0].email);
                  $('#editModal #pass').attr('value',data.baru[0].password);
                  $('#editModal #auth').attr('value',data.baru[0].authority);
                  loadDataUser();
                  data.status="netral";
                }
              }
            })
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
