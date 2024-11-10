@props(['institute'])

<div class="school-commite-card">
    <div class="school-commite-card-img">

        <img src="{{$institute->director_image??''}}" alt=" Image" />
    </div>
    <div class="school-commite-card-info">
        <h4 class="s-commite-member-name"><a href="{{route('institute.details',$institute->id)}}">{{$institute->name??''}}</a></h4>
        <p class="s-commite-member-designation">(Commodi laborum Ame)</p>
        <ul class="s-commite-card-info-list">
            <li>সদস্য যোগদান: <span style="margin-left: 2px;">{{$institute->created_at->format('d-M-Y')}}</span></li>
        </ul>

    </div>
</div>




