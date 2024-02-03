@extends('landing.layout.main')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('landing/images/bg_2.jpg') }});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Diagnosa <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-0 bread">Diagnosa</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Diagnosa</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper">
                    <div class="row no-gutters">
                        <div class="contact-wrap w-100 p-md-5 p-4">
                            <h3 class="mb-4">Diagnosa</h3>
                            <form action="/diagnosa-user" method="POST" class="contactForm">
                                @csrf
                                @method('POST')
                                <div class="mb-3 m-3">
                                    <label for="nameBasic" class="form-label">Nama</label>
                                    <input type="text" name="nama" value="" id="nameBasic" class="form-control" placeholder="Enter Nama" required />
                                </div>

                                @foreach ($gejala as $key => $value )
                                <div class="mb-3 m-3">
                                    <label for="exampleFormControlSelect1" class="form-label">{{ $value->nama }}</label>
                                    <select class="form-select" name="diagnosa[]" id="exampleFormControlSelect1" aria-label="Default select example">
                                        <option value="" selected>Tidak tahu</option>
                                        <option value="{{ $value->id }}+-1">Pasti tidak</option>
                                        <option value="{{ $value->id }}+-0.8">Hampir pasti tidak</option>
                                        <option value="{{ $value->id }}+-0.6">Kemungkinan besar tidak</option>
                                        <option value="{{ $value->id }}+-0.4">Mungkin tidak</option>
                                        <option value="{{ $value->id }}+0.4">Mungkin</option>
                                        <option value="{{ $value->id }}+0.6">Sangat mungkin</option>
                                        <option value="{{ $value->id }}+0.8">Hampir pasti</option>
                                        <option value="{{ $value->id }}+1">Pasti</option>

                                    </select>
                                </div>
                                @endforeach

                                <div class="mb-3 m-3">
                                    <button type="submit" class="btn btn-primary">Diagnosa</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection

@section('script')
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
