<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,700&display=swap" rel="stylesheet">
    {{-- End Font --}}
    {{-- My css --}}
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    

    <title>Undangan Web</title>
  </head>
  <body>

    {{-- Navbar --}}
    <nav class="navbar navbar-fixed-top navbar-expand-lg  navbar-light ">
      <div class="container">
        <a class="navbar-brand" href="#home">Soshiv & Shivani</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-link active" href="#home">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="#couple">Couple</a>
            <a class="nav-link" href="#event">Event</a>
            <a class="nav-link" href="#gallery">Gallery</a>
            <a class="nav-link" href="#story">Story</a>
            <a class="nav-link" href="#guest">Guest</a>
          </div>
        </div>
      </div>
    </nav>
    {{-- End Navbar --}}

    {{-- Jumbotron --}}
    <div class="jumbotron jumbotron-fluid" id="home">
        <div class="container">
          <div class="row align-items-center">
            <div class="jumbotron-content">
              <p>We are getting married</p>
              <h1 class="display-4">Soshiv & Shivani</h1>
              <span>15 Maret 2021</span>
              
            </div>
          </div>
        </div>
      </div>
    {{-- End Jumbotron --}}


    {{-- Couple --}}
    <section class="couple " id="couple">
        <div class="container py-4">
                <div class="cl-md-12 text-center">
                <img src="{{asset('assets/img/bismillah.png')}}" class="bismilah"/><br>
                    <div class="lead my-4">
                        <i class="textku my-5">Assalamu`alaikum Warahmatullahi Wabarakatuh</i> <br>
                        <p class="textbiasa my-3">
                            Maha Suci Allah<br>yang telah menciptakan makhluk-Nya berpasang-pasangan.<br>Ya Allah semoga ridho-Mu tercurah mengiringi pernikahan putra-putri kami
                        </p>
                    </div>           
            </div>
            <div class="row couple text-center">
                <div class=" couple col my-3">
                    <img src="https://d2on1yz5ht1a6r.cloudfront.net/uploads/public/5fd/daa/c18/thumb_1182158_240_240_0_0_crop.jpg" alt="Adelia" class="d-block rounded-circle mx-auto mb-4 img-fluid bg-light">
                    <h4 class="">
                        <a class="textku" href="#" target="_blank">Adelia</a>
                    </h4>
                    <p class="textbiasa">Putri Pertama Bapak Sunanto &amp; Ibu Uswatun Khasanah<br />
                        Desa Tanahbaya Kec. Randudongkal - Pemalang
                    </p>
                </div>
                <div class="textku col-md-1 d-flex  align-items-center justify-content-center lead" style="font-weight: 600; font-size: 5rem;">&amp;</div>
                <div class="col my-3">
                    <img src="https://d2on1yz5ht1a6r.cloudfront.net/uploads/public/5fd/daa/c91/thumb_1182159_240_240_0_0_crop.jpg" alt="Adimas Pratama" class="d-block rounded-circle mx-auto mb-4 img-fluid bg-light">
                    <h4 class="">
                    <a class="textku" href="#" target="_blank">Adimas Pratama</a>
                    </h4>
                    <p class="textbiasa">Putra Pertama Bapak Abdul Ghofur &amp; Ibu Siti Romelah<br />
                        Desa Kebonagung Kec. Ngampel - Kendal</p>
                    <p>
                </div>    
            </div>
        </div>
    </section>
    {{-- End Couple --}}


    {{-- Event --}}
    <section class="event" id="event">
        <div class="container-fluid py-5">
            <div class="row text-center">
                <div class="col-md-12 my-3">
                    <span>Event</span> <br>
                </div>
                <div class="col-md-12">
                    <span>The Happy Day!</span>
                </div>
                <div class="col-md-12 my-3 mt-5">
                    <p>Bahagia rasanya apabila anda berkenaan hadir dan memberikan doa restu kepada kami. 
                      Kami mengundang anda untuk hadir dalama acara kami</p>
                   
                </div>
            </div>
            <div class="row py-3">
                <div class="col-sm-5 offset-sm-1">
                  <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                icon
                            </div>
                            <div class="col-sm-9">
                                <h5 class="card-title  text-bold">Akad Nikah</h5>
                                <p class="card-text">
                                    <table>
                                        <tr>
                                            <td><i class="fa fa-calendar"></i></td>
                                            <td>Kamis 1 Maret 2021 </td>
                                        </tr>
                                        <tr>
                                            <td> <i class="fa fa-clock-o"></i></td>
                                            <td>08.00 WIB</td>
                                        </tr>
                                        <tr>
                                            <td ><i class="fa fa-map-marker"></td>
                                            <td>Gedung Achmad Yani Jl. Jend. Gatot Soebroto, Jurangombo Utara,Magelang</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td> <button type="button" class="btn btn-info circle my-2" data-toggle="modal" data-target="#modalRegular">Buka Google Maps</button></td>
                                        </tr>
                                    </table>
                                        <div class="modal fade" id="modalRegular" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body mb-0 p-0">
                                                        <div id="map-container-google-16" class="z-depth-1-half map-container-9" style="height: 400px">
                                                        <iframe src="https://maps.google.com/maps?q=new%20delphi&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                                            frameborder="0" style="border:0" allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer justify-content-center">
                                                        <button type="button" class="btn btn-info btn-md">Save location </button>
                                                        <button type="button" class="btn btn-outline-info btn-md" data-dismiss="modal">Close <i class="fa fa-times ml-1"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </p>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-5 ">
                  <div class="card text-right">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-9 text-right">
                                <h5 class="card-title  text-bold">Resepsi Pernikahan</h5>
                                <p class="card-text">
                                    <table>
                                        <tr>
                                            <td>Kamis 1 Maret 2021 </td>
                                            <td><i class="fa fa-calendar"></i></td>
                                        </tr>
                                        <tr>
                                            <td>09.00 s/d selesai WIB</td>
                                            <td> <i class="fa fa-clock-o"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Gedung Achmad Yani Jl. Jend. Gatot Soebroto, Jurangombo Utara,Magelang</td>
                                            <td ><i class="fa fa-map-marker"></td>
                                        </tr>
                                        <tr>
                                            <td> <button type="button" class="btn btn-info circle my-2" data-toggle="modal" data-target="#modalRegular">Buka Google Maps</button></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                        <div class="modal fade" id="modalRegular" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body mb-0 p-0">
                                                        <div id="map-container-google-16" class="z-depth-1-half map-container-9" style="height: 400px">
                                                        <iframe src="https://maps.google.com/maps?q=new%20delphi&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                                            frameborder="0" style="border:0" allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer justify-content-center">
                                                        <button type="button" class="btn btn-info btn-md">Save location </button>
                                                        <button type="button" class="btn btn-outline-info btn-md" data-dismiss="modal">Close <i class="fa fa-times ml-1"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </p>
                            </div>
                            <div class="col-sm-3">
                                icon
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Event --}}

    {{-- Video --}}
    <section class="video">
      <div class="container py-5">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="textku">Video</h2>
            <div class="col-md-8 responsive-embed-youtube  align-center py-5">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/1FOeT0GWD5I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- End Video --}}


    {{-- Moment --}}
    <section  id="gallery" class="gallery">
        <div class="container gallery-container" >
          <div class="row g-0">
            <div class="col-md-6">
              <div class="gallery">
                <a href="{{asset('assets/img/3.png')}}" class="glightbox" data-gall="gallery">
                  <img src="{{asset('assets/img/3.png')}}" alt="" class="img-fluid">
                </a>
              </div>
            </div>
      
            <div class="col-md-6">
              <div class="gallery">
                <a href="{{asset('assets/img/4.png')}}" class="glightbox" data-gall="gallery">
                  <img src="{{asset('assets/img/4.png')}}" alt="" class="img-fluid">
                </a>
              </div>
            </div>
      
            <div class="col-md-6">
              <div class="gallery">
                <a href="{{asset('assets/img/5.jpeg')}}" class="glightbox" data-gall="gallery">
                  <img src="{{asset('assets/img/5.jpeg')}}" alt="" class="img-fluid">
                </a>
              </div>
            </div>
      
            <div class="col-md-6">
              <div class="gallery">
                <a href="{{asset('assets/img/6.jpeg')}}" class="glightbox" data-gall="gallery">
                  <img src="{{asset('assets/img/6.jpeg')}}" alt="" class="img-fluid">
                </a>
              </div>
            </div>
      
            <div class="col-md-6">
              <div class="gallery">
                <a href="{{asset('assets/img/6.jpeg')}}" class="glightbox" data-gall="gallery">
                  <img src="{{asset('assets/img/6.jpeg')}}" alt="" class="img-fluid">
                </a>
              </div>
            </div>
      
            <div class="col-md-6">
              <div class="gallery">
                <a href="{{asset('assets/img/6.jpeg')}}" class="glightbox" data-gall="gallery">
                  <img src="{{asset('assets/img/6.jpeg')}}" alt="" class="img-fluid">
                </a>
              </div>
            </div>
      
          </div>
        </div>
      </section>
    {{-- End Moment --}}

    {{-- Story --}}
    <section class="story" id="story">
        <div id="fh5co-couple-story">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						<span>We Love Each Other</span>
						<h2>Our Story</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-md-offset-0">
						<ul class="timeline animate-box">
							<li class="animate-box">
								<div class="timeline-badge" style="background-image:url(../tema2/images/couple-1.jpg);"></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h3 class="timeline-title">First We Meet</h3>
										<span class="date">December 25, 2015</span>
									</div>
									<div class="timeline-body">
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									</div>
								</div>
							</li>
							<li class="timeline-inverted animate-box">
								<div class="timeline-badge" style="background-image:url(../tema2/images/couple-2.jpg);"></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h3 class="timeline-title">First Date</h3>
										<span class="date">December 28, 2015</span>
									</div>
									<div class="timeline-body">
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									</div>
								</div>
							</li>
							<li class="animate-box">
								<div class="timeline-badge" style="background-image:url(../tema2/images/couple-3.jpg);"></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h3 class="timeline-title">In A Relationship</h3>
										<span class="date">January 1, 2016</span>
									</div>
									<div class="timeline-body">
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-gallery" class="fh5co-section-gray">
			<div class="container">
    </section>
    {{-- End Story --}}


    {{-- Ucapan --}}
    <section>
        <div class="container" id="guest">
            <div class="row">
                <div class="col-md-6">
                    <form action="" method="post">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" placeholder="Nama.." required>
                        
                        <label for="ucap">Ucapan</label>
                        <textarea id="ucap" name="ucap" placeholder="Ucapan Doa & Harapan.." style="height:100px" required></textarea>
                        
                        <input type="submit" name="submit" value="Kirim">
                        </form>
                </div>
                <div class="col-md-6">
                    jjjj
                </div>
            </div>
        </div>
    </section>
    {{-- end ucapan--}}




    {{-- Countdown Timer --}}
    <script>
    // Set the date we're counting down to
    var countDownDate = new Date("Mar 1, 2021 08:00:00").getTime();
    
    // Update the count down every 1 second
    var x = setInterval(function() {
    
      // Get today's date and time
      var now = new Date().getTime();
    
      // Find the distance between now and the count down date
      var distance = countDownDate - now;
    
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
      // Display the result in the element with id="waktu"
      document.getElementById("waktu").innerHTML = days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";
    
      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("waktu").innerHTML = "EXPIRED";
      }
    }, 1000);
    </script>
    {{-- End Countdown Timer --}}



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>