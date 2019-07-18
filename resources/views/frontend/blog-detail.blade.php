@extends('layouts.frontend')
@section('content')
	<!-- Breadcrumb -->
	<div class="container">
		<div class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">
				<a href="{{ url('/') }}" class="breadcrumb-item f1-s-3 cl9">
					Home
				</a>

				<a href="{{ url('/blog-grid') }}" class="breadcrumb-item f1-s-3 cl9">
					Blog
				</a>

				<span class="breadcrumb-item f1-s-3 cl9">
					 {{ $artikel->judul }}
				</span>
			</div>
		</div>
	</div>

	<!-- Content -->
	<section class="bg0 p-b-140 p-t-10">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-30">
					<div class="p-r-10 p-r-0-sr991 single">
						<!-- Blog Detail -->
						<div class="p-b-70">
							<a href="#" class="f1-s-10 cl2 hov-cl10 trans-03 text-uppercase">
								{{ $artikel->kategori->nama_kategori }}
							</a>

							<h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
								{{ $artikel->judul }}
							</h3>

							<div class="flex-wr-s-s p-b-40">
								<span class="f1-s-3 cl8 m-r-15">
									<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
										By {{ $artikel->user->name }}
									</a>

									<span class="m-rl-3">-</span>

									<span>
										{{ $artikel->created_at }}
									</span>
								</span>
							</div>

							<div class="wrap-pic-max-w p-b-30">
								<img src="/assets/img/artikel/{{ $artikel->foto }}" alt="IMG">
							</div>

							<p class="f1-s-11 cl6 p-b-25">
								{!!  $artikel->konten !!}
							</p>

							<!-- Tag -->
							<div class="flex-s-s p-t-12 p-b-15">
								<span class="f1-s-12 cl5 m-r-8">
									Tags:
								</span>

								<div class="flex-wr-s-s size-w-0 tag_detail">
								@foreach($artikel->tag as $data)
								<a href="#" class="f1-s-12 cl8 hov-link1 m-r-15">
										{{ $data->nama_tag }}
								</a>
								@endforeach
								</div>
							</div>
						</div>

						<!-- Leave a comment -->
						<div>
							<h4 class="f1-l-4 cl3 p-b-12">
								Leave a Comment
							</h4>

							<p class="f1-s-13 cl8 p-b-40">
								Your email address will not be published. Required fields are marked *
							</p>

							<form>
								<textarea class="bo-1-rad-3 bocl13 size-a-15 f1-s-13 cl5 plh6 p-rl-18 p-tb-14 m-b-20" name="msg" placeholder="Comment..."></textarea>

								<input class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="name" placeholder="Name*">

								<input class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="email" placeholder="Email*">

								<input class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="website" placeholder="Website">

								<button class="size-a-17 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-10">
									Post Comment
								</button>
							</form>
						</div>
					</div>
				</div>

				<!-- Sidebar -->
				<div class="col-md-10 col-lg-4 p-b-30">
					<div class="p-l-10 p-rl-0-sr991 p-t-70">
						<!-- Category -->
						<div class="p-b-60">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Category
								</h3>
							</div>

							<ul class="p-t-35">
                                @foreach ($kategori as $data)
								<li class="how-bor3 p-rl-4">
									<a href="{{ url('kategori/'.$data->slug) }}" class="dis-block f1-s-10 text-uppercase cl2 hov-cl10 trans-03 p-tb-13">
										{{ $data->nama_kategori }}
									</a>
								</li>
                                @endforeach
							</ul>
						</div>

						<!-- Popular Posts -->
						<div class="p-b-30">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Popular Post
								</h3>
							</div>

							<ul class="p-t-35">
								@foreach ($popular as $data)
                            <li class="flex-wr-sb-s p-b-22">
                                    <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                                        >
                                    </div>

                                    <a href="{{ url('blog-detail/'.$data->slug) }}" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                        {{ $data->judul }}
                                    </a>
                                </li>
                            @endforeach
							</ul>
						</div>

						<!-- Tag -->
						<div>
							<div class="how2 how2-cl4 flex-s-c m-b-30">
								<h3 class="f1-m-2 cl3 tab01-title">
									Tags
								</h3>
							</div>

							<div class="flex-wr-s-s m-rl--5">
								@foreach ($tags as $data)
                                <a href="{{ url('blog-grid/'.$data->slug) }}" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                    {{ $data->nama_tag }}
                                </a>
                            @endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
