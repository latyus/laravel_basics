@if(session()->has('message'))

<div
 class="modal fixed top-0  transform bg-laravel text-white px-48 ">
<p>
    {{session('message')}}
</p>
</div>

@endif
