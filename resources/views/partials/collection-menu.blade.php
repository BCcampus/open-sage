@php
    $alpha = true;
    $summary = false;
    $subject_areas = \App\Controllers\Page::getSubjectStats($summary,$alpha)
@endphp
<!-- Display everywhere except mobile -->
<div class="d-none d-md-block accordion mt-2" id="catalogue-menu">
    <ul class="accordion-group list-unstyled">
        <div class="accordion-group">
            <li class="accordion-heading"><a class="accordion-toggle" href="?subject=">All Subjects</a></li>
        </div>
        @foreach($subject_areas as $sub1=>$sub2)
            <div class="accordion-group">
                @php($abr=substr($sub1,0,4))
                @php( $abr=str_replace(['/', ' '],'', $abr))
                <li class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#catalogue-menu" href="#collapse{{$abr}}">{{$sub1}}</a>
                </li>
                <div id="collapse{{$abr}}" class="accordion-body collapse">
                    <ul class="children">
                        @foreach($sub2 as $k=>$num)
                            <li><a href="?subject={{$k}}">{{$k}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
    </ul>
</div>