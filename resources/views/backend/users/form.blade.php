<div class="form-row">
    <div class="col-md-12 mb-3">
{{--        <label for="title">Title</label>--}}
        {{ Form::label('name', 'Name') }}

{{--        <input name="title" type="text" class="form-control" value="--}}
{{--            @if(old('title') == '')--}}
{{--                {{  isset($category) ? $category->title : null }}--}}
{{--            @else--}}
{{--             {{ old('title') }}--}}
{{--            @endif--}}
{{--            " placeholder="Title">--}}
        {{ Form::text('name', null, [
            'class' => $errors->has('name') ?  'form-control is-invalid': 'form-control',
            'placeholder' => 'Enter Color Name.....',
            'id' => 'name'
        ]) }}
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
{{--<div class="form-row">--}}
{{--    <div class="col-md-12 mb-3">--}}
{{--        <label for="title">Title</label>--}}
{{--        {{ Form::label('role id', 'Role Id') }}--}}

{{--        <input name="title" type="text" class="form-control" value="--}}
{{--            @if(old('title') == '')--}}
{{--                {{  isset($category) ? $category->title : null }}--}}
{{--            @else--}}
{{--             {{ old('title') }}--}}
{{--            @endif--}}
{{--            " placeholder="Title">--}}
{{--        {{ Form::text('role_id', null, [--}}
{{--            'class' => $errors->has('role_id') ?  'form-control is-invalid': 'form-control',--}}
{{--            'placeholder' => 'Enter Color Name.....',--}}
{{--            'id' => 'role_id'--}}
{{--        ]) }}--}}
{{--        @error('role_id')--}}
{{--            <div class="text-danger">{{ $message }}</div>--}}
{{--        @enderror--}}
{{--    </div>--}}
{{--</div>--}}
<div class="form-row">
    <div class="col-md-12 mb-3">
        {{--        <label for="title">Title</label>--}}
        {{ Form::label('role_id', 'Role') }}
        {{ Form::select('role_id', $rolesName, null, [
            'class' => $errors->has('role_id') ?  'form-control is-invalid': 'form-control',
            'placeholder' => 'Select One',
            'id' => 'role_id'
        ]) }}
        @error('category')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
</div>



{{--title, description, category_id, is_active--}}
