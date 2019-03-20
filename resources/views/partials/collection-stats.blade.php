@php($link=get_home_url().'/open-textbook-stats/')
<section class="bkgd-blue-navy d-flex flex-row flex-wrap full-width mt-2">
    <div class="col-12 py-3 text-white text-left">
        <h4 class="text-center">Open Education at BCcampus</h4>
        At BCcampus, we’re using open technologies to facilitate, evaluate, and create open educational resources to share across the province and around the world; saving millions of student-dollars through hundreds of open textbooks adopted in thousands of classrooms:
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