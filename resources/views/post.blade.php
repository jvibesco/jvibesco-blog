@extends('layouts.main')
@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="text-danger">{{ $post->title }}</h1>
            <p>By. <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a>  in <a class="text-decoration-none" href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>

            <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">

            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>

            <a href="/posts" class="mt-3 text-decoration-none btn btn-danger">Back to posts</a>
        </div>
    </div>
</div>
@endsection


{{-- Template Database --}}
{{-- Post::create([
    'category_id' => 2,
    'title' => 'Judul Ketiga',
    'slug' => 'judul-ketiga',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, ullam asperiores. Voluptates nobis corrupti, necessitatibus accusantium quos voluptate quidem.',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, ullam asperiores. Voluptates nobis corrupti, necessitatibus accusantium quos voluptate quidem. Reiciendis, iusto deserunt, obcaecati omnis sint quos minus fugiat nisi quae nihil natus blanditiis praesentium ab! Quam ab adipisci quasi officia suscipit sit fugit, dolor rem consequatur pariatur nisi perferendis ipsa corporis. </p> <p>Quod autem sint impedit eos, placeat eius ducimus, vero, itaque cumque sit nam recusandae modi veritatis fugit. Provident nobis, laborum aspernatur quia fugit omnis earum ducimus itaque nisi ipsum officiis sint officia hic? Doloremque perspiciatis consequatur, ratione sed quos quis fuga nesciunt tempore libero cumque? Nam voluptatum molestiae esse.</p>'
]) --}}