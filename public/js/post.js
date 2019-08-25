(function($) {
    var grabedurl = window.location.pathname;
    var url = "/api" + grabedurl;
    var no = 1;
    //get 1 article by slug
    $.ajax({
        url: url,
        method: "GET",
        datatype: "json",
        success: function(berhasil) {
            $.each(berhasil.data.artikel.data, function(key, value) {
                console.log(berhasil);
                $(".artikel").append(
                    `
                <div class="single-articles-area d-flex flex-wrap mb-30">
                    <div class="article-thumbnail">
                        <img src="/assets/img/artikel/${value.foto}" alt="">
                    </div>
                    <div class="article-content">
                        <a href="/singlepost/${value.slug}" class="post-title">${value.judul}</a>
                        <div class="post-meta">
                            <a href="#" class="post-date">${value.created_at}</a>
                        </div>
                        <p></p>
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
            $.each(berhasil.data.latest, function(key, value) {
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
            $.each(berhasil.data.random, function(key, value) {
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
