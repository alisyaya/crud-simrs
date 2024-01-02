@foreach ($pasiens as $pasien)
    <h1>
        Nama : {{ $pasien->nama }},<br>
        ID Pasien : {{ $pasien->pasien_id }},<br>

    </h1>
@endforeach

{{-- silahkan tambahkan dan lengkapi column sisanya dari database . --}}
