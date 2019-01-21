$(function(){

    $('.who').bind("change keyup input click", function() {
        if(this.value.length >= 2){
            $.ajax({
                type: 'post',
                url: "search.php",
                data: {'referal':this.value},
                response: 'text',
                success: function(data){
                    $(".search_result").html(data).fadeIn();
                }
            })
        }
    });

    $(".search_result").hover(function(){
        $(".who").blur();
    });

    $(".search_result").on("click", "li", function(){
        s_user = $(this).text();
        $(".who").val(s_user).attr('disabled', 'disabled');
        $(".search_result").fadeOut();
    })

})