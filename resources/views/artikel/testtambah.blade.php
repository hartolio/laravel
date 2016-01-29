<html>
<link href="{{ asset('css/kube.min.css') }}" rel="stylesheet" type="text/css" >
	<head>
		<title>Test Tampil Data Dengan Laravel</title>
	</head>
	<body>
		
		@section('isi')
		<h1>Insert New Article</h1>
	<hr>
    {!! Form::open(array('url' => 'artikel', 'files' => true)) !!}
		
        <table>
            <tr>
            	<td>{!! Form::label('judul', 'Article Title: ') !!}</td>
            	<td>{!! Form::text('name_textbox_judul', null, array('class' => 'form-control', 'placeholder' => 'Input Your Article Title')) !!}</td>
            </tr>
            <tr>
            	<td>{!! Form::label('isi', 'Article Contents: ') !!}</td>
            	<td>{!! Form::textarea('name_textbox_isi', null, array('class' => 'form-control', 'placeholder' => 'Input Ypur Article Contents')) !!}</td>
            </tr>
            </tr>
                <td>{!! Form::label('Article Image: ') !!}</td>
                <td>{!! Form::file('image', null) !!}</td>
            </tr>
        	<tr>
        		<td>{!! Form::submit('Simpan', array('class' => 'btn btn-default')) !!}</td>
        	</tr>
        </table>

    {!! Form::close() !!}
	</body>
</html>