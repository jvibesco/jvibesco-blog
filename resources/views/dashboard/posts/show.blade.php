@extends('dashboard.layouts.main')
@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="text-danger mb-3">{{ $post->title }}</h1>
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to All Post</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
              <button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')"><span data-feather="trash"></span> Delete</button>
              </form>

            <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="img-fluid mt-3" alt="{{ $post->category->name }}">

            <article class="my-3 fs-6">
                {!! $post->body !!}
            </article>

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