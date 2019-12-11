function showpassword() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
} 


$(document).ready(function(){
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
  
  $('#btnupdate').click(function(){
    event.preventDefault();
    

    $.ajax({
      type: 'POST',
      url: 'updateuser',
      data: {name: $('input[name=upNama]').val(), password:$('input[name=upPassword]').val(), email:$('input[name=upEmail]').val()},
      success: function(data){
        $('#datauser').html(data.success.id_user);
        $('#datanama').html(data.success.nama);
        $('#dataemail').html(data.success.email);
        $('#datapass').html(data.success.password);
      }
    });
  });
});
