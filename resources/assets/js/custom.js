$(document).ready(function() {

    $('select[name="research"]').on('change', function(){
        
        var researchId = $(this).val();
        if(researchId) {
            $.ajax({
                url: '/states/get/'+researchId,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },

                success:function(data) {

                    $('select[name="task"]').empty();

                    $.each(data, function(key, value){

                        $('select[name="task"]').append('<option value="'+ key +'">' + value + '</option>');

                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="task"]').empty();
        }

    });

});
