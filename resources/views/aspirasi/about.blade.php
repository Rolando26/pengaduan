@extends('templates/header')

@section('content')

<main class="px-3" style="color:black;">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tentang Kami</div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h2>Visi Kosambi</h2>
                            
                                   <li> Isi  Kelurahan Salembaran Jaya merupakan gambaran tentang masa depan realistis dan ingin diwujudkan oleh seluruh aparatur Kelurahan yang merupakan cerminan mengenai keadaan internal dan kehandalan inti seluruh organisasi Kelurahan yang dirumuskan bersama.</li>
                                   <br>
                                   <br>

                                <h2>Misi Kosambi</h2>
                                <ul>
                                    <li>  Misi Kelurahan Kosambi merupakan pernyataan mengenai hal-hal  yang harus dicapai Pemerintah Kelurahan Salembaran Jaya dimasa datang, mencerminkan tentang segala sesuatu untuk mencapai Visi dari Kelurahan Salembaran Jaya,</li>
                                </ul>
                                <br>
                                <h2>Tujuan Kosambi</h2>
                                <ul>
                                   <li> Dalam menciptakan Visi, misi sertai Nilai, Kelurahan Kosambi sesuai dengan tugas pokoknya menyelenggarakan pelayanan kepada masyarkat, mengelola fasilitas umum mengembangkan ekonomi dan usaha kecil</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header">Galeri</div>
                <div class="card-body">
                

                    <hr class="featurette-divider">
                    <div class="row featurette">
                        <div class="col-md-7">
                          <h2 class="featurette-heading">Cinta Lingkungan</h2>
                          <p class="lead">Para warga bekerja sama untuk membersihkan daerah pepohonan agar bersih dan terlihat lebih indah. </p>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('assets')}}/images/kerja.jpg " alt="Gambar" style="width:100%;">
                     </div>

                     
                    <hr class="featurette-divider">
                    <div class="row featurette">
                        <div class="col-md-7">
                          <h2 class="featurette-heading">Kerja Bakti</h2>
                          <p class="lead">Pagi hari para warga mengikuti kerja bakti dilingkungan bapak bapak membersihkan lingkungan sekitar dan  ibu-ibu menyiapkan makanan dan minuman. Kampung.</p>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('assets')}}/images/kerja_bakti.jpg " alt="Gambar" style="width:100%;margin-left:5px;">
                     </div>

                </div>
            </div>
        </div>
    </div>
</main>

@endsection