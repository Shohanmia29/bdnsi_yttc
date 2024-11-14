@props(['institute'])

<div class="school-commite-card">
    <div class="school-commite-card-img">

        <img src="{{$institute->director_image??''}}" alt=" Image" />
    </div>
    <div class="school-commite-card-info">
        <h4 class="s-commite-member-name"><a href="{{route('institute.details',$institute->id)}}">{{$institute->name??''}}</a></h4>
        <p class="s-commite-member-designation">(Commodi laborum Ame)</p>
        <ul class="s-commite-card-info-list">
            <li>সদস্য যোগদান: <span style="margin-left: 2px;">১৫ জুলাই, ১৯৭৮</span></li>
            <li>সদস্য মেয়াদকাল: <span style="margin-left: 2px;">০২ নভেম্বর, ২০২৩</span></li>
        </ul>
 {{--       <ul class="s-commite-card-social">
            <li>
                <a href="tel:01702233333"><i class="icofont-ui-call"></i></a>
            </li>

            <li>
                <a href="mailto:bekesury@mailinator.com"><i class="icofont-envelope"></i></a>
            </li>

            <li>
                <a href="#" target="_blank"><i class="icofont-facebook"></i></a>
            </li>

            <li>
                <a href="#" target="_blank"><i class="icofont-linkedin"></i></a>
            </li>
        </ul>--}}
    </div>
</div>




