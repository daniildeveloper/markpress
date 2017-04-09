@extends("themes.default.layouts.theme")

@section("title")
{{$element->first_title}}
@endsection

@section("content")
{!! $element->content !!}

@endsection
