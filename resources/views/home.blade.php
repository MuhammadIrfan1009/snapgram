@extends('layouts.app')
@section('content')
<h2 style="text-align: center;">Snapgram</h2>
<table>
    <tr>
        <th>Pengguna</th>
        <th>Judul</th>
        <th>Foto</th>
        <th>Aksi</th>
    </tr>
    @foreach($photos as $photo)
    <tr>
        <td>{{$photo->user->username}}</td>
        <td>{{$photo->judulFoto}}</td>
        <td>
            <img src="{{ asset('storage/' . $photo->lokasiFile) }}" alt="{{ $photo->judulFoto }}" style="width: 200px; aspect-ratio:1/1; object-fit:cover;">
        </td>
        <td>
            <form action="{{ route('photos.like', $photo->fotoID) }}" method="POST" style="display: inline">
                @csrf
                <button type="submit" style="background: none; border: none; cursor: pointer;">
                @if($photo->isLikedByAuthUser())
                    <i style="color: red; font-size: 24px;">&#x2665;unlike</i> <!-- Liked: Filled heart -->
                @else
                    <i style="color: black; font-size: 24px;">&#x2661;like</i> <!-- Not liked: Outline heart -->
                @endif
                </button>
            </form>
            <a href="{{ route('photos.comments', $photo->fotoID)}}" style="margin-left: 10px; text-decoration: none; color: black; font-size: 18px;"> &#128172;comment
            </a>


        </td>
    </tr>
    @endforeach
</table>
@endsection
