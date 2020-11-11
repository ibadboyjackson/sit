<?php
    $articles = \App\Model\Post::orderBy('created_at', 'DESC')->limit(2)->get()
?>

<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2 logo"><span class="flaticon-bee"></span> SIT.</h2>
                    <p>SIT international es une usine qui va produire les emballages pour l'agro alimentaire a base du plastique recyclé.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                        <li class="ftco-animate"><a href="https://twitter.com/sit" target="_blank"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="https://facebook.com/sit" target="_blank"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="https://instagram.com/sit" target="_blank"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>

            </div>
            <div class="col-md-5">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">Blog récent</h2>
                    @foreach($articles as $article)
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url({{ asset("images/$article->image") }});"></a>
                            <div class="text">
                                <h3 class="heading"><a href="{{ route('blog.single', $article->slug) }}">{{ $article->title }}</a></h3>
                                <div class="meta">
                                    <div><a href="{{ route('blog.single', $article->slug) }}"><span class="icon-calendar"></span> {{  date('j M, Y',strtotime($article->created_at)) }}</a></div>
                                    <div><a href="{{ route('blog.single', $article->slug) }}"><span class="icon-person"></span> {{ $article->author }}</a></div>
                                    <div><a href="{{ route('blog.single', $article->slug) }}"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">Newsletter</h2>

                    <form action="{{ route('news.post') }}" class="subscribe-form" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="emails" class="form-control mb-2 text-center" placeholder="Adresse E-mail">
                            <input type="submit" value="S'Inscrire" class="form-control submit px-3">
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> SIT INTERNATIONAL, Tous droits réservés</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="{{ asset('sit/js/jquery.min.js') }}"></script>
<script src="{{ asset('sit/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('sit/js/popper.min.js') }}"></script>
<script src="{{ asset('sit/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('sit/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('sit/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('sit/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('sit/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('sit/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('sit/js/aos.js') }}"></script>
<script src="{{ asset('sit/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('sit/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('sit/js/jquery.timepicker.min.js') }}"></script>
<script src="{{ asset('sit/js/scrollax.min.js') }}"></script>
<script src="{{ asset('sit/js/main.js') }}"></script>
<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
        integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
        crossorigin=""></script>
<script>
    let map = L.map('map').setView([4.0449478, 9.6832638], 13);
    L.tileLayer('//{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © donn&eacute;es &copy; <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>"></a>',
        maxZoom: 18,
    }).addTo(map);
    let marker = L.marker([4.0449478, 9.6832638]).addTo(map);
    marker.bindPopup("<b>SIT International!</b>").openPopup();

</script>
</body>
</html>
