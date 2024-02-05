@foreach ($pasiens as $pasien)

<html>
    <h1>daftar pasien</h1>
    <h3>
        Nama : {{ $pasien->nama }}<br>
        ID Pasien : {{ $pasien->passien_id }}<br>
        Jenis kelamin : {{$pasien->jenis_kelamin}} <br>
        Tanggal lahir : {{ $pasien->tgl_lahir}} <br>
        Alamat : {{ $pasien->alamat}} <br>
        No. Telpon : {{$pasien->no_telepon}} <br>
    </h3>
</html>
@endforeach

{{-- silahkan tambahkan dan lengkapi column sisanya dari database . --}}
