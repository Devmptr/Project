$(document).ready(function(){
    function fetchuser(){};
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    loadDataUser();

    function loadDataUser(){
        $.ajax({
            type: 'POST',
            url: "/getdatauser",
            success:function(data){
                $('#datauser').html(data);
            }
        })
    }
    
    $(this).on('click', '.user-insert',function(event){
        event.preventDefault();
        $.ajax({
            method: 'POST',
            url: '/insertuser',
            data:{nama: $('#ModalUserInsert input[name=inNama]').val(), password:$('#ModalUserInsert input[name=inPassword]').val(), email:$('#ModalUserInsert input[name=inEmail]').val(), auth:$('#ModalUserInsert input[name=inAuth').val()},
            success: function(data){
                if(data=="sukses"){
                    alert('berhasil tambah data');
                    loadDataUser();
                }
            }
        })
    });

    $(this).on('click','.user-delete',function(event){
        event.preventDefault();
        var iddelete = $(this).attr('id');
        $.ajax({
            method: 'GET',
            url: '/deleteuser/'+iddelete,
            success: function(data){
                if(data=='sukses'){
                    alert('berhasil hapus data');
                    loadDataUser();
                }
            }
        });
    });
    
    $(this).on('click','.user-show',function(){
        event.preventDefault();
        var idshow = $(this).attr('id');
        $.ajax({
            method: 'POST',
            url: '/loaddatauser/'+idshow,
            dataType: 'JSON',
            cache: false,
            success: function(data){
                $('#editModal #namauser').val(data.nama);
                $('#editModal #emailuser').val(data.email);
                $('#editModal #passuser').val(data.password);
                $('#editModal #authuser').val(data.authority);
            }
        });

        $('.user-edit').click(function(event){
            event.preventDefault();
            $.ajax({
                method: 'POST',
                url: '/edituser',
                data:{id:idshow, nama: $('#editModal input[name=edNama]').val(), password:$('#editModal input[name=edPassword]').val(), email:$('#editModal input[name=edEmail]').val(), auth:$('#editModal input[name=edAuth').val()},
                success: function(data){
                    if(data=="sukses"){
                        alert('berhasil edit data');
                        loadDataUser();
                    }
                }
            })
        });
        
    });

    $(this).on('keyup','#searchuser', function(){
        var query = $(this).val();
        fetchuser(query);
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
});