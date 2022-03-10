<p>Back to<a href="{{ route('dashboard') }}"> dashboard</a>.</p>
<h1>My profile</h1>

<p>Create your recipe<a href="{{ route('recipes.create') }}"> here</a>.</p>

<p>You've created <strong>{{$user->recipes->count()}}</strong> recipes</p>
<div>
    @foreach ($user->recipes as $recipe)
        <div style="border: 1px solid black; margin-bottom: 24px; padding: 16px;">
            <h2>{{ $recipe->title }}</h2>
            <a href="update/{{ $recipe->id }}">Update recipe</a>
            <form action="{{ route('recipes.delete', $recipe->id) }}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
</div>
