@extends('app')

@section('content')
    <table border="1" width="60%" id="example">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Telepon</th>
            </tr>
        </thead> 
        
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $post->nama }}</td>
                    <td>{{ $post->alamat }}</td>
                    <td>{{ $post->no_telp }}</td>                
                </tr>
            @endforeach
        </tbody>        
    </table>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endsection