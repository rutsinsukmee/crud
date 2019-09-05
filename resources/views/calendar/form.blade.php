<div>
    <label>นัดหมาย</label>
    <input  name="appointment" type="text"
            value="{{ isset($calendar->appointment) ? $calendar->appointment : '' }}"
            />
</div>
<div>
    <label>สถานที่</label>
    <input   name="location" type="text"
             value="{{ isset($calendar->location) ? $calendar->location : '' }}"
             />
</div>
<div>
    <label>เวลานัด</label>
    <input  name="time" type="number"
            value="{{ isset($calendar->time) ? $calendar->time : '' }}"
            />
</div>