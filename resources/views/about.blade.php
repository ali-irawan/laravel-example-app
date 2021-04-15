@extends("layouts/default-with-right-panel")

@section("title", "ABOUT")

@section("before-title")

@include("partials/navigation", [ "page" => "about" ])

@endsection

@section("content")

<p>Etiam a leo finibus, euismod nisi ac, malesuada quam. In finibus ullamcorper nulla in commodo. Integer aliquam faucibus ex. Praesent gravida orci quis leo iaculis, sed efficitur nisl iaculis. Duis feugiat elit interdum erat molestie, id efficitur nisi molestie. Aliquam tincidunt nulla sit amet semper pellentesque. Mauris hendrerit, massa et eleifend lobortis, nulla tortor feugiat dui, sit amet feugiat ante lectus et justo. Nullam porta leo vel efficitur venenatis. In nec mollis odio, non mattis lectus. Quisque dignissim dignissim justo, nec interdum diam consectetur quis.</p>

<p>In hac habitasse platea dictumst. Praesent volutpat laoreet justo, eu sodales velit consectetur quis. Morbi vel sagittis urna. Vivamus consequat hendrerit sodales. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quam urna, sagittis sit amet est quis, faucibus tincidunt mi. Nam vitae ex sit amet augue pellentesque rhoncus sit amet mollis urna. Etiam tempor sem est, quis pellentesque nibh tempus in. Nunc ligula odio, vehicula id consectetur pretium, faucibus nec turpis.</p>

@endsection

@section("right-panel")
  THIS IS RIGHT PANEL
@endsection