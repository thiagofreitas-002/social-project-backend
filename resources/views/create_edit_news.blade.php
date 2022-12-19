@extends('layout.main')
@section('title', 'Criar notícia - EEEP AFS')

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
        inputHidden.value = tinymce.activeEditor.getContent();
        console.log( document.querySelector("input[name='description']").value)
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
            <h1>Criar notícia</h1>
            <form class="mt-5">
                <div class="mb-3">
                    <label for="title" class="form-label">Título</label>
                    <input type="text" class="form-control" id="title" placeholder="Título">
                </div>
                <div class="mb-3">
                    <label class="form-label">Descrição</label>
                    <textarea id="description"></textarea>
                    <input type="hidden" name="description">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Imagem</label>
                    <input type="file" class="form-control" id="image" placeholder="Imagens" multiple>
                </div>
                <!-- Aqui, o nome do botão dependerá se a ação é de criar ou editar botão. Ou seja, "criar notícia"
                ou "salvar notícia" -->
                <button type="button" class="btn" onclick="putDescriptionOnHiddenInput()">Criar notícia</button>
            </form>
        </div>

    </div>
</body>

@endsection