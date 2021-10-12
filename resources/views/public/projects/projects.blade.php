@extends('public')

@section('title')
    Projects
@endsection

@section('body')
    <main>
        <section>
            <ul class="publicProjectlistWrapper">
                @foreach ($projects as $project)
                    <li class="publicProjectLi">
                        <div class="publicProjectWrapper">
                            <div class="img-wrapper">
                                <a class="link-invisible" href="projets{{ $project['id'] }}">
                                    <img class="img-project" src="{{ $project['thumbnail'] }}"
                                        alt="{{ $project['name'] }} thumbnail">
                                </a>
                            </div>
                            <a class="link-invisible" href="projets{{ $project['id'] }}">
                                <h2>{{ $project['name'] }}</h2>
                            </a>
                            <p>{{ $project['meta_description'] }}</p>
                        </div>
                    </li>

                @endforeach
            </ul>
        </section>
    </main>
@endsection
