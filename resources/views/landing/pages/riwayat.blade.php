@extends('landing.layout.main')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('landing/images/bg_2.jpg') }});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Riwayat <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-0 bread">Riwayat</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <h2 class="heading-section">Riwayat</h2>
            </div>
        </div>
    </div>
</section>
<section class="bg-light">
    <div id="test" class="container">
        <div class="row mb-5 pb-5">
            @include('landing.data.riwayat')
        </div>
    </div>
    <div class="ajax-load text-center mb-3">
        <button id="loadmore" class="btn btn-primary">More</button>
    </div>
</section>
@endsection

@section('script')

<script>
    var page = 1;
    var ENDPOINT = "/riwayat-user?";

    // jika tombol loadmore diklik
    $("#loadmore").click(function() {
        page++;
        loadMoreData(page);
    });

    function loadMoreData(page) {
        $.ajax({
                url: ENDPOINT + '&page=' + page // Perhatikan penggunaan "&" sebagai pemisah parameter.
                , type: "get"
                , beforeSend: function() {
                    $('#loadmore').show();
                }
            })
            .done(function(data) {
                if (data.html == "") {
                    $('.ajax-load').html("No more records found");
                    return;
                }
                $('#loadmore').show();
                $("#test").append('<div class="row mb-5 pb-5">' + data.html + '</div>');
            })
            .fail(function(jqXHR, ajaxOptions, thrownError) {});
    }

</script>



@if(Session::get('success'))
<script>
    Swal.fire({
        icon: 'success'
        , title: 'Good'
        , text: 'Profil berhasil diubah'
    , });

</script>
@endif
@endsection
```