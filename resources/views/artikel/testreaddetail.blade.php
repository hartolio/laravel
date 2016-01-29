<html>
<link href="{{ asset('css/kube.min.css') }}" rel="stylesheet" type="text/css" >
	<head>
		<title>Test Tampil Data Dengan Laravel</title>
	</head>
	<body>
		@section('isi')
		<h1>Artikel</h1>
	<article>
		<table>
			<tr><td><h2>{{$artikel->judul}}</h2></td></tr>
			<tr><td><img src ="{{ asset($artikel->file_path) }}"></td></tr>
			<tr><td>{{$artikel->isi}}</td></tr>
		</table>
	</article>
	</body>
</html>