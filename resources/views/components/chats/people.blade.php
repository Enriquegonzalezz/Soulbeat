<div class="people ChatsPeople" ChatId="{{$id}}">
    @if($photo != null)
        <img src="{{ Storage::url($photo) }}" alt="" class="foto">
    @endif
    <span class="nameofcard">{{ $name }}@if($verify)<i class="bi bi-patch-check-fill mora"></i>@endif</span>
</div>