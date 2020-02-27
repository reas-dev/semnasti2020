@extends('layouts.homeLayout')

@section('title')
    Register Semnasti
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1>Hai, {{ $participant->name }}!</h1>
                <br>
                <h1 class="font-weight-lighter sub-font1">
                    @if (Session::has('done'))
                    Kamu sudah melengkapi persyaratan yang diperlukan. <br>Terimakasih. <br>
                    {!! QrCode::size(250)->generate($participant->upload_id); !!}
                    @elseif (Session::has('confirm'))
                    Persyaratan sudah lengkap.<br> Silahkan menunggu konfirmasi dari admin.
                    @else
                    Silahkan melengkapi persyaratan yang diperlukan.
                    @endif
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col mt-3">
                <form method="post" action="{{ url('opentalk/upload/' . $participant->upload_id)}}" enctype="multipart/form-data">
                    @csrf   
                    @if ($participant->paid_status == 0 && (!$participant->identity || !$participant->payment))
                        @if (!$participant->identity)
                            <div class="form-group row">
                                <label for="identity" class="col-sm-2 col-form-label">Kartu Identitas</label>
                                <div class="col-sm-10">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="identity" name="identity">
                                        <label class="custom-file-label" for="identity">Choose file (jpeg,png,jpg)</label>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (!$participant->payment)
                        <div class="form-group row">
                            <label for="payment" class="col-sm-2 col-form-label">Bukti Pembayaran</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="payment" name="payment">
                                    <label class="custom-file-label" for="payment">Choose file (jpeg,png,jpg)</label>
                                </div>
                            </div>
                        </div>
                        @endif
                        <button class="btn btn-primary" type="submit"><b>Submit</b></button>
                    @endif
                </form>
            </div>
        </div>
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
  $('#payment').on('change',function(){
      //get the file name
      var fileName = $(this).val().replace('C:\\fakepath\\', " ");
      //replace the "Choose a file" label
      $(this).next('.custom-file-label').html(fileName);
  })
</script>
@endsection