(function($) {
    var grabedurl = window.location.pathname;
    var url = "/api" + grabedurl;
    var no = 1;
    //get 1 article by slug
    $.ajax({
        url: url,
        dataType: "json",
        method: "GET",
        success: function(getdata) {
            $("#singlepost").append(
                `
                <div class="post-details-content mb-100">
                    <div class="blog-thumbnail mb-50">
                        <img src="/assets/img/artikel/${getdata.data.artikel.foto}" alt="">
                    </div>
                    <div class="blog-content">
                        <h4 class="post-title">${getdata.data.artikel.judul}</h4>
                        <div class="post-meta mb-30">
                            <a href="#" class="post-date">${getdata.data.artikel.created_at}</a>
                            <a href="#" class="post-author">By ${getdata.data.artikel.user.name}</a>
                        </div>

                        <p>${getdata.data.artikel.konten}</p>
                    </div>
                </div>
                `
            );
            console.log(getdata);
        }
    });
    console.log(url);
    $.ajax({
        url: url,
        method: "GET",
        datatype: "json",
        success: function(berhasil) {
            $.each(berhasil.data.latest2, function(key, value) {
                console.log(berhasil);
                $(".postlatest").append(
                    `
                <div class="single-post-area d-flex">
                    <div class="blog-thumbnail">
                        <img src="/assets/img/artikel/${value.foto}" alt="">
                    </div>
                    <div class="blog-content">
                        <a href="/singlepost/${value.slug}" class="post-title">${value.judul}</a>
                        <span>${value.kategori}</span>
                    </div>
                </div>
                `
                );
            });
        }
    });

    $.ajax({
        url: url,
        method: "GET",
        datatype: "json",
        success: function(berhasil) {
            $.each(berhasil.data.random2, function(key, value) {
                console.log(berhasil);
                $(".random").append(
                    `
                <div class="single-video-widget d-flex">
                    <div class="video-thumbnail">
                        <img src="/assets/img/artikel/${value.foto}" alt="">
                    </div>
                    <div class="video-text">
                        <a href="/singlepost/${value.slug}" class="video-title">${value.judul}</a>
                        <span><h8s>${value.kategori}</h8s> - By ${value.author} - ${value.created_at}</span>
                    </div>
                </div>
                `
                );
            });
        }
    });
})(jQuery);
