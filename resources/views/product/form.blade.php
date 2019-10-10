<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($product->title) ? $product->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    <label for="content" class="control-label">{{ 'Content' }}</label>
    <textarea class="form-control" rows="5" name="content" type="textarea" id="content" >{{ isset($product->content) ? $product->content : ''}}</textarea>
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sell_price') ? 'has-error' : ''}}">
    <label for="sell_price" class="control-label">{{ 'Sell Price' }}</label>
    <input class="form-control" name="sell_price" type="number" id="sell_price" value="{{ isset($product->sell_price) ? $product->sell_price : ''}}" >
    {!! $errors->first('sell_price', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('purchase_price') ? 'has-error' : ''}}">
    <label for="purchase_price" class="control-label">{{ 'Purchase Price' }}</label>
    <input class="form-control" name="purchase_price" type="number" id="purchase_price" value="{{ isset($product->purchase_price) ? $product->purchase_price : ''}}" >
    {!! $errors->first('purchase_price', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('photo') ? 'has-error' : ''}}">
    <label for="photo" class="control-label">{{ 'Photo' }}</label>
    <input class="form-control" name="photo" type="file" id="photo" value="{{ isset($product->photo) ? $product->photo : ''}}" >
    {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
    <label for="category_id" class="control-label">{{ 'Category Id' }}</label>
    <input class="form-control" name="category_id" type="number" id="category_id" value="{{ isset($product->category_id) ? $product->category_id : ''}}" >
    {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
