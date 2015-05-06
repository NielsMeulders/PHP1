$(document).ready(function(){

    $("a").on("click", function(e){

        var id = $(this).attr("data-id");
        $(".blog--loading").css("display", "block");

        $.ajax({
            method: "GET",
            url: "ajax/get_blog_post.php",
            data: { 'id' : id }
        })
            .done(function( resp ) {

                if(resp.status === "success")
                {
                    $(".blog--title").html(resp.post.title);
                    $(".blog--text").html(resp.post.blogtext);
                    $(".blog--loading").css("display", "none");
                }

            });

        e.preventDefault();
    });
});
