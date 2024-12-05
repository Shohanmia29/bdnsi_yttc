@props(['institute'])

<div class="school-commite-card text-white"  >
    <div class="school-commite-card-img">

        <img src="{{$institute->director_image??''}}" alt=" Image" />
    </div>
    <div class="school-commite-card-info">
        <h4 class="s-commite-member-name "><a class="text-white" href="{{route('institute.details',$institute->id)}}">{{$institute->name??''}}</a></h4>
        <p class="s-commite-member-designation text-white">({{$institute->owner_name??''}})</p>


    </div>
</div>




