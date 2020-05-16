$(document).ready(function () {
    $('.danger button').click(function () {
      TaskId =   $(this).attr('data-id');

        $('#sure_you').show();
        // $('#sure_you').slideDown();
});

    $('#sure_you button').click(function () {
        var value =$(this).val()
       if(value=="yes"){

$('#slider-'+TaskId).submit();


       }
       else{
           $('#sure_you').hide();
       }
    });


$('a.delete-photo').click(function () {
    var id= $(this).attr('data-photo-id');
    var input= '  <input type="hidden" name="photo_ids[]" value="'+id+'">';
    console.log(id);
    $('#photos-tobe-deleted').append(input);
    $(this).parents('.col-md-2').remove();

});

});
function sendAjax(method,formData,target){

    var token = $('input[name="_token"]').val();
    formData._token = token;

    var url = documentRoot+'/ajax/'+method;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    })
    $.ajax({
        type: 'POST',
        url: url,
        data: formData,
        success: function(data) {
            if(target && data){
                target.html(data);
            }
        }
    });
}

function markTask(single_id) {

    var formData={
    task_id :single_id
    }



    sendAjax('mark_tasks',formData,null)
 $('td.show[data-show-id='+single_id+'] i').toggleClass('fa-times-circle fa-check-circle')
    $('td.show[data-show-id='+single_id+'] i').toggleClass('text-danger text-success')
    $('td.show-slide[data-show-id='+single_id+'] span').toggleClass('text-danger text-success')
    $('td.show-slide[data-show-id='+single_id+'] i').toggleClass('fa-check fa-times')
}























































































