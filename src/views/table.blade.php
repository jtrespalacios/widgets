<table {{ \Indatus\Widgets\Helper::expandOptions($options) }}>
@if($data)
    <thead>
    <tr>
        @foreach($data[0] as $key => $val)
            <td>{{ucfirst($key)}}</td>
        @endforeach
    </tr>
    </thead>
    <tbody>
    @foreach($data as $datum)
        <tr>
        @foreach($datum as $key => $val)
            <td>{{$val}}</td>
        @endforeach
        </tr>
    @endforeach
    </tbody>
@endif
</table>