@extends('layouts.main')
@section('title', 'Form Edit Masterdata')
@section('artikel')
   <div class="card"></div>
       <div class="card-header"></div>
       <div class="card-body">

       {{-- FORM EDIT MASTERDATA DISINI --}}
       <form action="/update/{{ $md -> id }}" method="post" enctype="multipart/form-data">
       @csrf
       @method("PUT")
           <div class="form-group">
               <label>Nama Penjual</label>
               <input type="text" name="namapenjual" class="form-control" value="{{ $md -> namapenjual }}" required>
           </div>

           <div class="form-group">
            <label>Umur Penjual</label>
            <select name="umurpenjual" class="form-control">
                <option value="0">-------PILIHAN UMUR---------</option>
                @for ($i = 18; $i <= 100; $i++)
                    <option value="{{ $i }}" {{ $i == $md->umurpenjual ? 'selected' : '' }}>{{ $i }}</option>
                @endfor
            </select>
        </div>


           <div class="form-group">
               <label>Alamat Penjual</label>
               <input type="text" name="alamatpenjual" class="form-control" value="{{ $md -> alamatpenjual }}" readonly required>
           </div>

           <div class="form-group">
               <label>Foto Penjual</label>
               <input type="file" name="fotopenjual" class="form-control-file" accept="image/*">
           </div>

           <div class="form-group">
            <img src="{{ asset('storage/' . $md->fotopenjual) }}" alt="{{ $md->fotopenjual }}" height="80" width="80">
           </div>

           <div class="form-group">
               <button type="submit" class="btn btn-primary">SIMPAN</button>
           </div>
       </form>
   </div>
@endsection
