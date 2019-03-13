@php($link=get_home_url().'/open-textbook-stats/')
<section class="bkgd-blue-navy d-flex flex-row flex-wrap full-width mt-2">
    <div class="col-12 py-3 text-white text-center">
        <h4>Open Education at BCcampus</h4>
        <p>The high cost of educational resources and textbooks creates a serious obstacle to the access of
            post-secondary education</p>
    </div>
    <span class="col-md-3 text-center text-white"><a href="{{$link}}" class="stats-icons">
            <img src="@asset('images/statsicon-institution.svg')" alt="icon representing an institution"></a>
        <h3>{{$get_summary_stats['institutions']}}</h3>
        <p>Institutions</p>
    </span>
    <span class="col-md-3 text-center text-white"><a href="{{$link}}" class="stats-icons">
            <img src="@asset('images/statsicon-faculty.svg')" alt="icon representing faculty"></a>
        <h3>{{$get_summary_stats['faculty']}}</h3>
        <p>Faculty</p>
    </span>
    <span class="col-md-3 text-center text-white"><a href="{{$link}}" class="stats-icons">
            <img src="@asset('images/statsicon-students.svg')" alt="icon representing students"></a>
        <h3>{{$get_summary_stats['students']}}</h3>
        <p>Students</p>
    </span>
    <span class="col-md-3 text-center text-white"><a href="{{$link}}" class="stats-icons">
            <img src="@asset('images/statsicon-savings.svg')" alt="icon representing savings"></a>
        <h3>${{$get_summary_stats['savings-min']}} - ${{$get_summary_stats['savings-max']}}</h3>
        <p>Savings</p>
    </span>
</section>