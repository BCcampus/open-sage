@php
    $alpha = true;
    $summary = false;
    $subject_areas = \App\Controllers\Page::getSubjectStats($summary,$alpha)
@endphp

<!-- Display the dropdown menu only on mobile -->
<nav class="d-block d-md-none navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">Browse Subjects</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
            style="background:#FFF">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            @foreach($subject_areas as $sub1=>$sub2)
                @php($abr=substr($sub1,0,4))
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{$sub1}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach($sub2 as $k=>$num)
                            <a class="dropdown-item" href="?subject={{$k}}">{{$k}}</a>
                        @endforeach
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</nav>