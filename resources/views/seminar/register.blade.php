@extends('layouts.homeLayout')

@section('title')
    Register Semnasti
@endsection

@section('content')
    <div class="container mt-5">
        <form method="post" action="{{ url('opentalk/register') }}" enctype="multipart/form-data">
            @csrf
            @method('post') 
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="instance" class="col-sm-2 col-form-label">Instansi</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="instance" name="instance" value="{{ old('instance') }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-sm-2 col-form-label">No Telp</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                </div>
            </div> 
            <div class="form-group row">
                <label for="identity" class="col-sm-2 col-form-label">Kartu Identitas</label>
                <div class="col-sm-10">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="identity" name="identity">
                        <label class="custom-file-label" for="identity">Choose file (jpeg,png,jpg)</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Kirim</button>
        </form>
    </div>
@endsection

@section('script')
<script>
  $('#identity').on('change',function(){
      //get the file name
      var fileName = $(this).val().replace('C:\\fakepath\\', " ");
      //replace the "Choose a file" label
      $(this).next('.custom-file-label').html(fileName);
  })
</script>
@endsection