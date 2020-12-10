@php
    $base = Request::segment(1);
@endphp
<ul>
  <li @if($base == 'clientarea') class="active" @endif><a href="/clientarea">Client Area</a></li>
  <li @if($base == 'user-profile') class="active" @endif><a href="/user-profile">Profile</a></li>
  <li><a href="/clientarea/logout">Logout</a></li>  
</ul>