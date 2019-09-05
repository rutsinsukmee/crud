<div class="form-group {{ $errors->has('appointment') ? 'has-error' : ''}}">
    <label for="appointment" class="control-label">{{ 'Appointment' }}</label>
    <input class="form-control" name="appointment" type="text" id="appointment" value="{{ isset($newcalendar->appointment) ? $newcalendar->appointment : ''}}" >
    {!! $errors->first('appointment', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('location') ? 'has-error' : ''}}">
    <label for="location" class="control-label">{{ 'Location' }}</label>
    <textarea class="form-control" rows="5" name="location" type="textarea" id="location" >{{ isset($newcalendar->location) ? $newcalendar->location : ''}}</textarea>
    {!! $errors->first('location', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('time') ? 'has-error' : ''}}">
    <label for="time" class="control-label">{{ 'Time' }}</label>
    <input class="form-control" name="time" type="number" id="time" value="{{ isset($newcalendar->time) ? $newcalendar->time : ''}}" >
    {!! $errors->first('time', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
