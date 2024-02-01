@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ Form::label('name', 'Название статьи') }}
{{ Form::text('name') }}<br>
{{ Form::label('body', 'Текст статьи') }}
{{ Form::textarea('body') }}<br>
