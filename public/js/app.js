$(document).ready(function() {
    
    $("#arrow_right").on("click", function(){
        $('#slide-news-0').css({'display' : 'none'}).fadeOut(1000);
        $('#slide-news-1').css({'display' : 'none'}).fadeOut(1000);
        $('#slide-news-2').css({'display' : 'none'}).fadeOut(1000);
        $('#slide-news-3').css({'display' : 'none'}).fadeOut(1000);

        $('#slide-news-4').css({'display' : 'block'}).fadeIn(1000);
        $('#slide-news-5').css({'display' : 'block'}).fadeIn(1000);
        $('#slide-news-6').css({'display' : 'block'}).fadeIn(1000);
        $('#slide-news-7').css({'display' : 'block'}).fadeIn(1000);
        $(this).hide();
        $('#arrow_left').show();
    });
    $("#arrow_left").on("click", function(){
        $('#slide-news-0').css({'display' : 'block'}).fadeIn(500);
        $('#slide-news-1').css({'display' : 'block'}).fadeIn(500);
        $('#slide-news-2').css({'display' : 'block'}).fadeIn(500);
        $('#slide-news-3').css({'display' : 'block'}).fadeIn(500);

        $('#slide-news-4').css({'display' : 'none'}).fadeIn(1000);
        $('#slide-news-5').css({'display' : 'none'}).fadeIn(1000);
        $('#slide-news-6').css({'display' : 'none'}).fadeIn(1000);
        $('#slide-news-7').css({'display' : 'none'}).fadeIn(1000);
        $(this).hide();
        $('#arrow_right').show();
    });

    const check = $('#slide-news-4').attr('tabindex');
    if (!check) {
        $("#arrow_right").hide();
        $("#arrow_left").hide();
    }
});


$(document).ready(function(){
  $('#msg_response').css({'visibility' : 'hidden'});
  $('#submit_inbox_contact').on('click', function(){
    const name = $('#name').val();
    const email = $('#email').val();
    const sdt = $('#sdt').val();
    const quantam = $('#quantam').val();
    const content = $('#content_inbox').val();
    if (!validateFormValue(name, email, sdt)) {
      $('#msg_response').css({'visibility' : 'visible'});
      $('#msg_response').addClass('alert-warning');
      $('#msg_response').text('Vui lòng nhập đầy đủ ít nhất Họ tên, Số điện thoại, Email');
      return;
    }
    const data = {name, email, sdt, quantam, content};
    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      type: "post",
      url: "/inbox/add",
      data: data,
      dataType: "json",
      success: function (response) {
        if (response.rcode === 200) {
          $('#msg_response').css({'visibility' : 'visible'});
          $('#msg_response').addClass('alert-success');
          $('#msg_response').removeClass('alert-warning');
          $('#msg_response').text(response.msg);
          resetValueForm();
        }
      }
    });
  });
});

function validateFormValue(name, email, sdt){
  if (!name || !email || !sdt) {
    return false;
  }
  return true;
}

function resetValueForm(){
  $('#name').val('');
  $('#email').val('');
  $('#sdt').val('');
  $('#quantam').val('');
  $('#content_inbox').val('');
}

