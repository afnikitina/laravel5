@extends('layouts.app')

@section('content')
    <div class="centered">
        <p>
            Pulvinar mattis nunc sed blandit libero volutpat. Fermentum iaculis eu non diam phasellus vestibulum lorem sed risus. Sapien nec sagittis aliquam malesuada bibendum arcu vitae. Tristique sollicitudin nibh sit amet. Arcu non sodales neque sodales ut etiam. Dolor purus non enim praesent. Convallis tellus id interdum velit. Accumsan sit amet nulla facilisi morbi tempus iaculis urna id. Nunc scelerisque viverra mauris in. Pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus nisl. Sed augue lacus viverra vitae congue eu consequat. Eget nullam non nisi est sit amet. Leo in vitae turpis massa sed elementum tempus. Urna cursus eget nunc scelerisque viverra mauris in aliquam sem. Pharetra et ultrices neque ornare aenean euismod. Aliquet eget sit amet tellus cras adipiscing enim eu turpis. Magna eget est lorem ipsum dolor sit amet consectetur. Volutpat ac tincidunt vitae semper quis lectus nulla at. Faucibus et molestie ac feugiat. Tincidunt lobortis feugiat vivamus at augue eget arcu dictum varius. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Neque egestas congue quisque egestas. Leo vel orci porta non pulvinar neque laoreet suspendisse. At quis risus sed vulputate odio ut. Felis eget nunc lobortis mattis aliquam faucibus. Magna fringilla urna porttitor rhoncus dolor purus. Ut etiam sit amet nisl purus. Lorem ipsum dolor sit amet. Vel elit scelerisque mauris pellentesque pulvinar pellentesque. Tincidunt ornare massa eget egestas purus viverra accumsan. Pulvinar pellentesque habitant morbi tristique. Lobortis feugiat vivamus at augue eget arcu dictum varius. Donec ultrices tincidunt arcu non sodales neque sodales.
        </p>
        <ul>
            @for($i = 0; $i < 5; $i++)
                <li>
                    Iteration {{ $i+1 }}
                </li>
            @endfor
        </ul>
        <ul>
            <li><a href={{ route('greet') }}>Greet</a></li>
            <li><a href={{ route('hug') }}>Hug</a></li>
            <li><a href={{ route('kiss') }}>Kiss</a></li>
        </ul>
    </div>
@endsection