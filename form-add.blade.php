@extends('layouts.main')
@section('title', 'Form Add Masterdata')
@section('artikel')
   <div class="card"></div>
       <div class="card-header"></div>
       <div class="card-body">

       {{-- FORM ADD MASTERDATA DISINI --}}
       <form action="/save" method="post" enctype="multipart/form-data">
       @csrf
           <div class="form-group">
               <label>Nama Penjual</label>
               <input type="text" name="namapenjual" class="form-control" required>
           </div>

           <div class="form-group">
               <label>Umur Penjual</label>
               <select name="umurpenjual" class="form-control">
                   <option value="0">-------PILIHAN UMUR---------</option>
                   @for ($i = 18; $i <= 100; $i++)
                       <option value="{{ $i }}">{{ $i }}</option>
                   @endfor
               </select>
           </div>

           <div class="form-group">
               <label>Alamat Penjual</label>
               <input type="text" name="alamatpenjual" class="form-control">
           </div>

           <div class="form-group">
               <label>Foto Penjual</label>
               <input type="file" name="fotopenjual" class="form-control-file" accept="image/*">
           </div>

           <div class="form-group">
               <button type="submit" class="btn btn-primary">SIMPAN</button>
           </div>
       </form>
   </div>
@endsection
