<div id="blacki"></div>
<div class="cofnew">
    <form action="{{route('post.store')}}" method="POST" class="carta-contenedora" enctype="multipart/form-data">
        {{ $errors }}
        <div class="header-carta">
            <span class="bi bi-arrow-left chao" ></span>
            <span>Lets see your beat!</span>
        </div>
        @csrf

        <div class="encabezado">
            <textarea type="text" name="body" placeholder="Body of post" class="inputen"></textarea>
        </div>
        <div class="encabezado">
            <input type="text" name="title" placeholder="Name of the beat" class="inputen">
        </div>
        <div class="encabezador">
            <input type="file" name="song" class="inputen">
            <input type="number" name="cost" placeholder="Price in $" class="inputen">
        </div>
        <div class="encabezador">
            <input type="text" name="bpm" class="inputen" placeholder="BPM">
            <input type="text" name="scale" placeholder="Scale" class="inputen">
        </div>
        <div class="encabezado">
            <input type="text" name="tags" placeholder="Tags" class="inputen">
        </div>
        <div class="encabezado">
            <select name="licenses" class="inputen">
                @php
                    $licenses = App\Models\License::where('status', '=', 1)->where('post', '=', null)->get();
                @endphp
                @foreach ($licenses as $license)
                    <option value="{{$license->id}}">{{$license->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="encabezado">
            <select name="paid-methods[]" class="inputen">
                @php
                    $methods = App\Models\PaidMethod::where('status', '=', 1)->get();
                @endphp
                @foreach ($methods as $method)
                    <option value="{{$method->id}}">{{$method->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="fotodelpost">
            <input type="file" name="photo" id="imageInput" accept="image/*" style="display: none;">
            <label for="imageInput" class="label-upload">
                <i class="bi bi-camera"></i><span>Upload photo</span>
            </label>
            <div class="image-preview" id="imagePreview">
                <span>Nothing photo selected</span>
            </div>
        </div>
        <div>
            <button type="submit" class="publi">
                <span>Publish</span>
                <div class="top"></div>
                <div class="lefti"></div>
                <div class="bottom"></div>
                <div class="righti"></div>
            </button>
        </div>
    </form>
</div>