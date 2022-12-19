@extends('layout.main')
@section('title', 'Editar notícia - EEEP AFS')

@push('localcss')
    <link rel="stylesheet" href="{{ URL::asset('css/create_edit_news.css') }}">
@endpush

@push('scripts')
    <script src="https://cdn.tiny.cloud/1/grhe7tayuf3d10o6dynn4gq6jnbbxuy6qnzilcmgs3ebs9ng/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#description'
      });

      function putDescriptionOnHiddenInput() {
        let inputHidden = document.querySelector("input[name='description']")
        inputHidden.value = tinymce.activeEditor.getContent({format: 'text'});
      }

    </script>
@endpush

@section('body')

<body class="d-flex justify-content-center flex-column align-items-center">

    @if(session('msg'))
        <div class="alert alert-success" role="alert">
            {{session('msg')}}
        </div>
    @endif

    <div class="container d-flex justify-content-center flex-column align-items-center">

        <div class="content">
            <h1>Editar notícia</h1>
            <form class="mt-5" action="/admin/update/noticia/{{ $noticia->id }}" method="POST"  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Título</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Título" value="{{$noticia->title}}">
                    @error('title')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Descrição</label>
                    <textarea id="description">{{ $noticia->description }}</textarea>
                    <input type="hidden"  name="description">
                    @error('description')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Imagem</label>
                    <input type="file" class="form-control" id="image" name="image" placeholder="Imagens" value="{{$noticia->image}}">
                    @error('description')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn" onclick="putDescriptionOnHiddenInput()">Salvar notícia</button>
            </form>
        </div>

    </div>
</body>

@endsection