@extends('layouts.app')

@section('content')

<h1> créer un nouveau poste</h1>

<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
@csrf
    <input type="text" name="title" class="border-gray-500 border-2">
    <textarea name="content"  cols="30" rows="10" class="border-gray-500 border-2"></textarea>
    <fieldset>
        <legend>Choose your monster's features:</legend>

        <div>
          <input type="checkbox" id="scales" name="scales"
                 checked>
          <label for="scales">Scales</label>
        </div>

        <div>
          <input type="checkbox" id="horns" name="horns">
          <label for="horns">Horns</label>
        </div>
    </fieldset>
    <label for="avatar">Choose a profile picture:</label>

<input type="file"
       id="avatar" name="avatar"
       accept="image/png, image/jpeg">

    <button type="submit" class="bg-green-500">creer</button>

</form>
@endsection
