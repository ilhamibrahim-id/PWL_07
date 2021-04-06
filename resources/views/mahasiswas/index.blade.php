@extends('mahasiswas.layout')
@section('content')
<div class="row">
	<div class="col-lg-12margin-tb">
		<div class="pull-leftmt-2">
			<h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
		</div>
</div>
</div>
<h5 style="text-align:right"><a class="btn btn-success"href="{{route('mahasiswa.create')}}">Input Mahasiswa</a></h5>
<br>
@if($message=Session::get('success'))
<div class="alert alert-success">
<p>{{$message}}
</p>
</div>
@endif
<form method="post" action="{{url('cari')}}" id="myForm">
    @csrf
        <div class="form-group">
        <label for="Nim">Cari</label>
        <input type="text"name="nim"class="form-control"id="Nim"aria-describedby="Nim"  placeholder="Cari bedasarkan nim">
        </div>
        <button type="submit" class="btn btn-success mt-3">
    cari
    </button>
    </form>
<table class="table table-bordered">

<tr>
	<th>Nim</th>
	<th>Nama</th>
	<th>Kelas</th>
	<th>Jurusan</th>
	<th>No_Handphone</th>
    <th>Email</th>
    <th>Tanggal_Lahir</th>
	<th width="280px">Action</th>
</tr>
@foreach($posts as $index => $mahasiswa)
<tr>
	<td>{{$mahasiswa->nim}}</td>
	<td>{{$mahasiswa->nama}}</td>
	<td>{{$mahasiswa->kelas->nama_kelas}}</td>
	<td>{{$mahasiswa->jurusan}}</td>
	<td>{{$mahasiswa->no_handphone}}</td>
    <td>{{$mahasiswa->email}}</td>
	<td>{{$mahasiswa->tanggal_lahir}}</td>
	<td>
		<form action="{{route('mahasiswa.destroy',['mahasiswa'=>$mahasiswa->nim])}}"method="POST">
		<a class="btn btn-info"href="{{route('mahasiswa.show',['mahasiswa'=>$mahasiswa->nim])}}">Show</a>
		<a class="btn btn-primary"href="{{route('mahasiswa.edit',['mahasiswa'=>$mahasiswa->nim])}}">Edit</a>
		@csrf
		@method('DELETE')
		<button type="submit"class="btn btn-danger">Delete</button>
        <a class="btn btn-warning" href="{{ route('mahasiswa.nilai', $mahasiswa->nim) }}">Nilai</a>
	</form>
</td>
</tr>
@endforeach

</table>
{{$posts->links()}}
@endsection
