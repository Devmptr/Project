$(document).ready(function(){
    function fetchmovie(){};
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    loadDataMovie();

    function loadDataMovie(){
        $.ajax({
            type: 'POST',
            url: "/getdatamovie",
            success:function(data){
                $('#datamovie').html(data);
            }
        })
    }

    $(this).on('click', '.movie-insert',function(event){
        event.preventDefault();
        $.ajax({
            method: 'POST',
            url: '/insertmovie',
            data:{judul: $('#insertMovieModal input[name=inJudul]').val(), deskripsi:$('#insertMovieModal input[name=inDeskripsi]').val(), 
            cover:$('#insertMovieModal input[name=inCover]').val(), genre:$('#insertMovieModal input[name=inGenre]').val(), 
            link:$('#insertMovieModal input[name=inLink]').val()},
            success: function(data){
                if(data=="sukses"){
                    alert('berhasil tambah movie');
                    loadDataMovie();
                }
            }
        })
    });

    $(this).on('click','.movie-delete',function(event){
        event.preventDefault();
        var iddelete = $(this).attr('id');
        $.ajax({
            method: 'GET',
            url: '/deletemovie/'+iddelete,
            success: function(data){
                if(data=='sukses'){
                    alert('berhasil hapus data');
                    loadDataMovie();
                }
            }
        });
    }); 

    $(this).on('click','.movie-show',function(event){
        event.preventDefault();
        var idshow = $(this).attr('id');

        $.ajax({
            method: 'POST',
            url: '/loaddatamovie/'+idshow,
            dataType: 'JSON',
            cache: false,
            success: function(data){
                $('#lihatModalMovie .judul').html('Judul : '+data.judul);
                $('#lihatModalMovie .genre').html('Genre : '+data.genre);
                $('#lihatModalMovie .deskripsi').html(data.deskripsi);
                $('#lihatModalMovie #link').attr('href',data.link);
                $('#lihatModalMovie #cover').attr('src',data.cover);
            }
        });
    });    

    $(this).on('click','.movie-showedit',function(event){
        event.preventDefault();
        var idshow = $(this).attr('id');

        $.ajax({
            method: 'POST',
            url: '/loaddatamovie/'+idshow,
            dataType: 'JSON',
            cache: false,
            success: function(data){
                $('#editMovieModal #judulmovie').val(data.judul);
                $('#editMovieModal #genremovie').val(data.genre);
                $('#editMovieModal #deskripsimovie').val(data.deskripsi);
                $('#editMovieModal #linkmovie').val(data.link);
                $('#editMovieModal #covermovie').val(data.cover);
            }
        });

        $('.movie-edit').click(function(event){
            event.preventDefault();
            $.ajax({
                method: 'POST',
                url: '/editmovie',
                data:{id:idshow, judul: $('#editMovieModal input[name=edJudul]').val(), 
                deskripsi:$('#editMovieModal input[name=edDeskripsi]').val(), 
                cover:$('#editMovieModal input[name=edCover]').val(), genre:$('#editMovieModal input[name=edGenre]').val(), 
                link:$('#editMovieModal input[name=edLink]').val()},
                success: function(data){
                    if(data=="sukses"){
                        alert('berhasil edit Movie');
                        loadDataMovie();
                    }
                }
            })
        });
    }); 

    $(this).on('keyup','#searchmovie', function(){
        var query = $(this).val();
        fetchmovie(query);
    });

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
    
});