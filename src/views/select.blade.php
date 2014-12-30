<select>
    @foreach($options as $key => $val)
        <option value="{{$val}}"
            @if(isset($selected) && $selected == $val)
                selected
            @endif
        >{{$key}}</option>
    @endforeach
</select>