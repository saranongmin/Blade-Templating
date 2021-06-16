<div class="form-row">
    <div class="col-md-12 mb-3">
{{--        <label for="title">Title</label>--}}
        {{ Form::label('title', 'Title') }}

{{--        <input name="title" type="text" class="form-control" value="--}}
{{--            @if(old('title') == '')--}}
{{--                {{  isset($category) ? $category->title : null }}--}}
{{--            @else--}}
{{--             {{ old('title') }}--}}
{{--            @endif--}}
{{--            " placeholder="Title">--}}
        {{ Form::text('title', null, [
            'class' => $errors->has('title') ?  'form-control is-invalid': 'form-control',
            'placeholder' => 'Enter Blog Title Here.....',
            'id' => 'title'
        ]) }}
        @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-row">
    <div class="col-md-12 mb-3">
        {{ Form::label('image', 'Blog Image') }}<br>

        {{ Form::file('image', ['accept'=>'image/*'], [
            'class' => $errors->has('image') ?  'form-control is-invalid': 'form-control',
            'id' => 'image'
        ]) }}
        @error('image')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-row">
    <div class="col-md-12 mb-3">
        {{ Form::label('picture', 'Multiple Blog Image') }}<br>
        {!! Form::file('picture[]', ['multiple'=>true,'class'=>'form-control']) !!}
        @error('pictures')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-row">
    <div class="col-md-12 mb-3">

{{--        <select name="test" class="form-control">--}}
{{--            <option value="one">1</option>--}}
{{--            <option value="two">2</option>--}}
{{--        </select>--}}

{{--        {{ Form::select('test', ['one'=>1, 'two'=>2], null, [--}}
{{--            'class'=>'form-control',--}}
{{--            'placeholder'=>'Select One'--}}
{{--        ]) }}--}}

{{--        <label for="description">Description</label>--}}
        {{ Form::label('description', 'Description') }}
{{--        <textarea name="description" id="description" class="form-control">{{ isset($category) ? $category->description : null }}</textarea>--}}
        {{ Form::textarea('description', null, [
            'class' => $errors->has('description') ?  'form-control is-invalid': 'form-control',
            'id' => 'ckeditor',
            'rows' => '2',
        ]) }}
    </div>
    @error('description')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>


<div class="form-row">
    <div class="col-md-12 mb-3">
        {{ Form::label('tag', 'Tag : ') }}
        @foreach($tags as $key=>$tag)
            {!! Form::checkbox('tag[]', $key, in_array($key, $selectedTags)) !!}{{ $tag }}
        @endforeach
    </div>
</div>

{{--title, description, category_id, is_active--}}
@push('script')
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'ckeditor' );
    </script>
@endpush
