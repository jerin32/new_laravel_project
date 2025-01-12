@foreach($users as $user)
<p>{{ $user }}</p>
@endforeach 

<ul>
    @if (count($users) > 2)
       @foreach ($users as $user)
          <li> 
            {{$user}}
          </li>
        @endforeach
    @else
       <p>No users found.</p>  
    @endif       
</ul>