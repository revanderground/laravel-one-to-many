@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-8 mx-auto">

            <div class="card my-card">
                <div class="card-body">

                    <div class="card-title text-center">
                        <h4 class="py-2">
                            Category:
                        </h4>
                        <h2 class="border-2 rounded-3" style="background-color: {{ $category->color }}">
                            {{ $category->name }}
                        </h2>
                    </div>

                    <div class="card-footer">
                        <ul>
                          @forelse ( $category->posts as $post)
                            <li>
                                <a href="{{ route('admin.posts.show', $post->id) }}">
                                    {{ $post->title }}
                                </a>
                            </li>
                          @empty
                              <li>This category has no posts</li>
                          @endforelse

                        </ul>
                    </div>



                </div>
            </div>


        </div>

    </div>

</div>

@endsection
