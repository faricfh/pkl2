var url = "api/frontend";

// latest
$.ajax({
    url: url,
    datatype: "json",
    success: function(berhasil) {
        $.each(berhasil.data.latest, function(key, value) {
            console.log(berhasil);
            $(".latest").append(
                `
            <div class="single-articles-area style-2 d-flex flex-wrap mb-30 wow fadeInUp" data-wow-delay="300ms">
                <div class="article-thumbnail">
                    <img src="/assets/img/artikel/${value.foto}" alt="">
                </div>
                <div class="article-content">
                    <a href="singlepost/${value.slug}" class="post-title">${value.judul}</a>
                    <div class="post-meta">
                        <a href="#" class="post-date">${value.created_at}</a>
                        <a href="#" class="post-comments"></a>
                    </div>

                </div>
            </div>
            `
            );
        });
    }
});

// kategori
$.ajax({
    url: url,
    datatype: "json",
    success: function(berhasil) {
        $.each(berhasil.data.kategori, function(key, value) {
            console.log(berhasil);
            $(".kategori").append(
                `
            <div class="single-contact-info d-flex align-items-center">
            <a href="post/${value.slug}">
                <div class="title">
                    <p>${value.nama_kategori}</p>
                </div>
            </a>
            </div>
            `
            );
        });
    }
});

//list random
$.ajax({
    url: url,
    datatype: "json",
    success: function(berhasil) {
        $.each(berhasil.data.list_random, function(key, value) {
            console.log(berhasil);
            $(".list_random").append(
                `
            <a class="nav-link" id="video1" data-toggle="pill" href="singlepost/${value.slug}" role="tab" aria-controls="video-2" aria-selected="false">
                <div class="single-video-widget d-flex wow fadeInUp" data-wow-delay="200ms">
                    <div class="video-thumbnail">
                        <img src="/assets/img/artikel/${value.foto}" alt="">
                    </div>
                    <div class="video-text">
                        <p class="video-title mb-0">${value.judul}</p>
                        <span>${value.kategori}</span>
                    </div>
                </div>
            </a>
            `
            );
        });
    }
});

// MULAI KATEGORI DAN ARTIKEL

$.ajax({
    url: url,
    datatype: "json",
    success: function(berhasil) {
        $.each(berhasil.data.populer, function(key, value) {
            console.log(berhasil);
            $(".populer").append(
                `
            <div class="col-12 col-md-4">
                <div>
                    <img src="/assets/img/artikel/${value.foto}" height="300px" width="300px">
                    <a href="singlepost/${value.slug}" class="btn egames-btn mt-30">${value.judul}</a>

                </div>
            </div>
            `
            );
        });
    }
});
