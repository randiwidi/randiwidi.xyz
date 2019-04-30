@extends('admin.layouts.admin')
@section('content')

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Tambahkan Artikel</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Judul</label>
            <input type="text" class="form-control" id="judul">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Artikel</label>
            <textarea class="form-control" id="artikel"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="simpan">Tambah Artikel</button>
      </div>
    </div>
  </div>
</div>
    @foreach ($blogs as $blog)
        
     Judul : {{ $blog->judul }} <br>
    {{ $blog->content }}

    @endforeach
@endsection

@push("js-after")
<script>
   $("#simpan").click(function(){
    var ju = $("#judul").val();
    var kon = $("#konten").val();

    $.post("{{ route('blog.store') }}", {
            judul: ju,
            konten: kon
        })
        .done(function (data) {
            alert("Data Berhasil Disimpan: ");
        })
        .fail(function() {
            alert( "error" );
        });
});
    
</script>
@endpush