@extends('Layout/create_edit_temp')

@section('judul_tambah_data','Menambah Data Video')
@section('title','add data')

@section('method')
    <form method="POST" class="contact100-form validate-form" action="/admin/A_video">
    @csrf
@endsection

@section('data1')        
    <div class="wrap-input100 validate-input" data-validate="id is required">
	    <span class="label-input100">Id</span>
         <input class="input100" type="int" name="id" placeholder="Nomer id / kosongkan saja" autocomplete="off">
	    <span class="focus-input100"></span>
    </div>  
@endsection

@section('data2')
<div class="wrap-input100 validate-input" data-validate="judul video is required">
    <span class="label-input100">judul video</span>
     <input class="input100" type="string" name="judul_video" placeholder="merk/jenis produk" autocomplete="off" required>
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data3')
    <div class="wrap-input100 validate-input" data-validate = "Ringkasan video is required">
	<span class="label-input100">Ringkasan Video</span>
	<textarea class="input100" name="ringkasan_video" autocomplete="off" placeholder="Masukan Ringkasan video ..."></textarea>
	<span class="focus-input100"></span>
     </div>
@endsection

@section('data4')
    <div class="wrap-input100 validate-input" data-validate = "videonya is required">
	<span class="label-input100">Videonya</span>
	<textarea class="input100" name="videonya" autocomplete="off" placeholder="Masukan link embed videonya saja ..." required></textarea>
	<span class="focus-input100"></span>
     </div>
@endsection

@section('data5')        
<div class="wrap-input100 input100-select">
    <span class="label-input100">Kategori</span>
    <div>
        <select class="selection-2" name="kategori">
            <option></option>
            <option>Smartphone</option>
            <option>Laptop</option>
        </select>
    </div>
    <span class="focus-input100"></span>
</div>
@endsection

@section('button')
<button type="submit" class="contact100-form-btn">
    <span>
        Masukan data
        <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
    </span>
</button>
@endsection

@section('back')
<div><a href="{{url('/admin/A_video')}}"><i class="fa fa-backward"></i> Kembali</a></div>    
@endsection