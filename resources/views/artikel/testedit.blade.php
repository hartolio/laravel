<html>
<link href="{{ asset('css/kube.min.css') }}" rel="stylesheet" type="text/css" >
	<head>
		<title>Test Tampil Data Dengan Laravel</title>
	</head>
	<body class = 'mybody'>
		<link href="{{ asset('css/kube.min.css') }}" rel="stylesheet" type="text/css" >
		@section('isi')
		<h1>Edit Data {{$artikel->judul}}</h1>
	<hr>
		{!! Form::model($artikel,['method' => 'PATCH','route'=>['artikel.update',$artikel->id]]) !!}
        <table>
            <tr>
            	<td>{!! Form::label('judul', 'Judul: ') !!}</td>
            	<td>{!! Form::text('name_textbox_judul', $artikel->judul,['class' => 'form-control']) !!}</td>
        	</tr>
            <tr>
            	<td>{!! Form::label('isi', 'Isi: ') !!}</td>
            	<td>{!! Form::textarea('name_textbox_isi', $artikel->isi,['class' => 'form-control']) !!}</td>
            </tr>
        	<tr>
        		<td>{!! Form::submit('Simpan', array('class' => 'btn btn-default')) !!}</td>
        	</tr>
        </table>
    {!! Form::close() !!}
	</body>
</html>