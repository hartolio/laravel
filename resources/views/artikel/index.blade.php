<html>
<link href="{{ asset('css/kube.min.css') }}" rel="stylesheet" type="text/css" >
	<head>
		<title>Test Tampil Data Dengan Laravel</title>
	</head>
	<body>
		@yield('isi')
		@section('isi')
		<h1>Articles</h1>
		<a href = "{{ action ('ArtikelController@testInsert')}}"><img src ="{{ asset('img/file_add.png') }}" width = '50' height = '70'></a>
		<br /><br />
		<table>
		<tr>
			<th>Judul</th>
			<th>Read More</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		@foreach($artikel as $articles)
			<tr>
				<td>{{$articles->judul}}</td>
				<td><a href = "artikel/{{$articles->id}}"><button>Read More</button></a></td>
				<td><a href = "artikel/{{$articles->id}}/edit"><button>Edit</button></a></td>
				<td><a href = "artikel/{{$articles->id}}/delete"><button>Delete</button></a></td>
			</tr>
		@endforeach
		</table>
	</body>
</html>