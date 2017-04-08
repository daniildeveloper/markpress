@extends("themes.default.layouts.theme")

@section("title")
{{$page->first_title}}
@endsection

@section("content")
{!! $page->content !!}

@endsection
