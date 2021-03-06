@include('errors')
<p>Back to <a href="{{ url()->previous() }}">Profile</a></p>
<h1>Update recipe</h1>

<form action="{{ route('recipes.patch', $recipes) }}" method="POST">
    @csrf
    <label for="title">Title</label>
    <input name="title" id="title" type="text" value="{{$recipes->title}}" />

    <label for="description">Description</label>
    <textarea name="description" id="description" cols="30" rows="10">{{$recipes->description}}</textarea>

    <label for="ingredients">Ingredients</label>
    <textarea name="ingredients" id="ingredients" cols="30" rows="10">{{$recipes->ingredients}}</textarea>

    <label for="recipe_steps">Recipe Steps</label>
    <textarea name="recipe_steps" id="recipe_steps" cols="30" rows="10">{{$recipes->recipe_steps}}</textarea>

        <button type="submit">Update Recipe</button>
    </form>
</form>
