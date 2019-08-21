(function ($) {

    var grabedurl = window.location.pathname;
    var url = '/api' + grabedurl;
    var no = 1;
    //get 1 article by slug
    $.ajax({
        url: url,
        dataType: "json",
        method: "GET",
        success: function (getdata) {
            $("#singlepost").append(
                `
                <div class="post-details-content mb-100">
                    <div class="blog-thumbnail mb-50">
                        <img src="/assets/img/artikel/${getdata.data.foto}" alt="">
                    </div>
                    <div class="blog-content">
                        <h4 class="post-title">${getdata.data.judul}</h4>
                        <div class="post-meta mb-30">
                            <a href="#" class="post-date">${getdata.data.created_at}</a>
                            <a href="#" class="post-author">By ${getdata.data.user.name}</a>
                        </div>

                        <p>${getdata.data.konten}</p>
                    </div>
                </div>
                `
            );
            console.log(getdata);
        }
    });
    console.log(url)
})(jQuery);

