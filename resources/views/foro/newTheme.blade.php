@extends('../layouts.foro')

@section('content')
    <h1>Nuevo Hilo</h1>
    <form action="/foro/temas" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Título del Hilo</label>
            <input class="form-control" type="text" name="title" required >
        </div>
        <div class="form-group">
                <label for="area">Selecciona Area</label>
                <select class="form-control" id="area" name="area_id">
                  {{-- <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option> --}}
                  @foreach ($areas as $area)
                    <option value="{{$area->id}}">{{$area->name}}</option>
                  @endforeach

                </select>
        </div>
        <div class="form-group">
                <label for="postText">Texto</label>
                <textarea class="form-control" id="postText" name="content" rows="3" required></textarea>
        </div>
        <div class="form-group">
                <label for="category">Vinculado a Categorías</label>
                <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">1</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">2</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                        <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                      </div>
        </div>
        <div class="form-group">
            <label class="control-label">Nuevo Archivo</label>
            <div class="">
                <input type="file" class="form-control" name="file" >
            </div>
        </div>
        <div class="form-group">
          <label class="control-label">Nueva Imagen</label>
          <div class="">
              <input type="file" class="form-control" name="image" >
          </div>
        </div>
        <button type="submit" class="btn btn-primary">PUBLICAR</button>
    </form>
    

@endsection
